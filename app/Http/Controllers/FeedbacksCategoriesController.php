<?php

namespace App\Http\Controllers;

use App\Models\FeedbacksCategory;
use Illuminate\Http\Request;

class FeedbacksCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $request = FeedbacksCategory::all();
        return response()->json(
            [
                'status' => true,
                'message' => "Bildiri Listesi Getiriliyor.",
                'response' => ($request),

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
                'name' => 'required|string|max:255|',
                'description' => 'required|string|max:255',
                'color' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
            ]);



            $data = [
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'color' => $validatedData['color'],
                'icon' => $validatedData['icon'],
            ];

            // Kullanıcıyı oluşturun
            $category = FeedbacksCategory::create($data);


            return response()->json(
                [
                    'status' => true,
                    'message' => "Başarılıyla kategori kayıdı yaptınız.",
                    'response' => [
                        'category' => $category,
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
