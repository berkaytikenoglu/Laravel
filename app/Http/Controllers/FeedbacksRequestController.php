<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbacksRequest;

class FeedbacksRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $request = FeedbacksRequest::all();
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
        try {
            $validatedData = $request->validate([
                'category_id' => 'required|string|max:11|',
                'user_id' => 'required|string|max:11|',
                'subject' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);



            // Başlangıçta boş bir veri dizisi oluştur
            $data = [
                'category_id' => $validatedData['category_id'],
                'user_id' => $validatedData['user_id'],
                'description' => $validatedData['description'],
                'subject' => $validatedData['subject'],
                'date' => date('Y-m-d H:i:s'),
            ];

            // Kullanıcıyı oluşturun
            $request = FeedbacksRequest::create($data);


            return response()->json(
                [
                    'status' => true,
                    'message' => "Başarılıyla request kayıt yaptınız.",
                    'response' => [
                        'request' => $request,
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
