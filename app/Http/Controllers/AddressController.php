<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $address = Address::with('user')->get();
        return response()->json(
            [
                'status' => true,
                'message' => "Adres Listesi Getiriliyor.",
                'response' => ($address),

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
        //

        try {
            $validatedData = $request->validate([
                'user_id' => 'required|int|max:11|',
                'description' => 'required|string|max:255|',
                'insidedoor' => 'required|string|max:11|',
                'outdoor' => 'required|string|max:11|',
                'street' => 'required|string|max:100|',
                'neighbourhood' => 'required|string|max:100|',
                'city' => 'required|string|max:255',
                'province' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'postal_code' => 'required|string|max:255',

            ]);
            //Eski aadres statuslerini sıfırla
            Address::where('user', $validatedData['user_id'])->update(['status' => false]);
            // Başlangıçta boş bir veri dizisi oluştur
            $data = [
                'user' => $validatedData['user_id'],
                'description' => $validatedData['description'],
                'insidedoor' => $validatedData['insidedoor'],
                'outdoor' => $validatedData['outdoor'],
                'street' => $validatedData['street'],
                'neighbourhood' => $validatedData['neighbourhood'],
                'city' => $validatedData['city'],
                'province' => $validatedData['province'],
                'country' => $validatedData['country'],
                'postal_code' => $validatedData['postal_code'],
            ];

            // Kullanıcıyı oluşturun
            $address = Address::create($data);


            return response()->json(
                [
                    'status' => true,
                    'message' => "Başarılıyla Adres kayıt yaptınız.",
                    'response' => [
                        'request' => $address,
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
        $address = Address::findOrFail($id);
        return response()->json(
            [
                'status' => true,
                'message' => "Adres getiriliyor.",
                'response' => [
                    'user' => $address,
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
        //

        $address = Address::find($id); // ID'ye göre kullanıcıyı bul

        // Validate incoming data
        $validated = $request->validate([
            'street' => 'required|string|max:11|',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);

        // Update fields
        $address->street = $validated['street'] ?? $address->street;
        $address->city = $validated['city'] ?? $address->city;
        $address->state = $validated['state'] ?? $address->state;
        $address->country = $validated['country'] ?? $address->country;
        $address->postal_code = $validated['postal_code'] ?? $address->postal_code;

        $address->save(); // Değişiklikleri veritabanına kaydet

        return response()->json(
            [
                'status' => true,
                'message' => "Adres düzenlemesini başarılıyla düzenleme yaptınız.",
                'response' => [
                    'user' => $address,
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
    public function destroy($id)
    {
        //
    }
}
