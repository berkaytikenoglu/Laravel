<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('permission')->with('gender')->get();


        return response()->json(
            [
                'status' => true,
                'message' => "Üye Listesi Getiriliyor.",
                'response' => ($users),

            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'tc_identity' => 'required|string|max:11|unique:users',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'phonenumber' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'big_avatar' => 'string|nullable',
                'normal_avatar' => 'string|nullable',
                'min_avatar' => 'string|nullable',
            ]);



            // Başlangıçta boş bir veri dizisi oluştur
            $data = [
                'tc_identity' => $validatedData['tc_identity'],
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'phonenumber' => $validatedData['phonenumber'],
                'name' => $validatedData['firstname'] . " " . $validatedData['lastname'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ];

            // Dinamik olarak avatar değerlerini ekle
            if (!empty($validatedData['big_avatar'])) {
                $data['big_avatar'] = $validatedData['big_avatar'];
            }

            if (!empty($validatedData['normal_avatar'])) {
                $data['normal_avatar'] = $validatedData['normal_avatar'];
            }

            if (!empty($validatedData['min_avatar'])) {
                $data['min_avatar'] = $validatedData['min_avatar'];
            }

            // Kullanıcıyı oluşturun
            $user = User::create($data);
            $token = $user->createToken('auth_token')->plainTextToken;

            // İlişkileri yükleyin
            $userWithPermissions = User::with('permission')->with('gender')->find($user->id);

            return response()->json(
                [
                    'status' => true,
                    'message' => "Başarılıyla kayıt yaptınız.",

                    'response' => [
                        'access_token' => $token,
                        'token_type' => 'Bearer',
                        'user' => $userWithPermissions,
                    ],
                ],
            );
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(

                [
                    'status' => false,
                    'message' => $e->errors(),
                    'response' => [],

                ],

            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $user = User::findOrFail($id);
        return response()->json(
            [
                'status' => true,
                'message' => "Kullanıcı bilgileri getirilyor.",
                'response' => [
                    'user' => $user,
                ],

            ],
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $permission = Permission::find($request->user()->permission);

        if ($request->user()->id != $id && $permission->canedituser == false) {

            return response()->json(
                [
                    'status' => false,
                    'message' => "Kendinizden başkasının profilini düzenleymezsiniz!",
                    'response' => [
                        'user' => $request->user(),
                    ],

                ],
            );
        }

        $user = User::find($id); // ID'ye göre kullanıcıyı bul

        // Validate incoming data
        $validated = $request->validate([
            'firstname' => 'string|max:255',
            'lastname' => 'string|max:255',
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        // Update fields
        $user->firstname = $validated['firstname'] ?? $user->firstname;
        $user->lastname = $validated['lastname'] ?? $user->lastname;
        $user->name = $validated['name'] ?? $user->name;
        $user->email = $validated['email'] ?? $user->email;
        if (!empty($request->input('password'))) {
            $user->password = Hash::make($request->input('password')); // Şifreyi güncelle
        }
        $user->save(); // Değişiklikleri veritabanına kaydet

        return response()->json(
            [
                'status' => true,
                'message' => "Başarılıyla düzenleme yaptınız.",
                'response' => [
                    'user' => $user,
                ],

            ],
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $permission = Permission::find($request->user()->permission);

        if ($request->user()->id != $id && $permission->candeleteuser == false) {

            return response()->json(
                [
                    'status' => false,
                    'message' => "Kendinizden başkasının profilini düzenleymezsiniz!",
                    'response' => [
                        'user' => $request->user(),
                    ],

                ],
            );
        }

        $user = User::find($id);
        $user->delete();
        return response()->json([
            'status' => true,
            'message' => "Proile silindi!",
            'response' => [],
        ], 200);
    }
}
