<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbacksRequest;
use App\Models\Address;

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
        $request = FeedbacksRequest::with('user')->with('status')->with('feedbacks_category')->get();
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

        $user = $request->user();
        try {
            $validatedData = $request->validate([
                'category_id' => 'required|int|max:11|',
                'subject' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'address_description' => 'required|string|max:255',
                'address_insidedoor' => 'required|string|max:255',
                'address_outdoor' => 'required|string|max:255',
                'address_street' => 'required|string|max:255',
                'address_neighbourhood' => 'required|string|max:255',
                'address_city' => 'required|string|max:255',
                'address_province' => 'required|string|max:255',
                'address_country' => 'required|string|max:255',
                'address_postal_code' => 'required|string|max:255',
            ]);



            // Başlangıçta boş bir veri dizisi oluştur
            $data = [
                'feedbacks_category' => $validatedData['category_id'],
                'user' => $user->id,
                'subject' => $validatedData['subject'],
                'description' => $validatedData['description'],
                'address_description' => $validatedData['address_description'],
                'address_insidedoor' => $validatedData['address_insidedoor'],
                'address_outdoor' => $validatedData['address_outdoor'],
                'address_street' => $validatedData['address_street'],
                'address_neighbourhood' => $validatedData['address_neighbourhood'],
                'address_city' => $validatedData['address_city'],
                'address_province' => $validatedData['address_province'],
                'address_country' => $validatedData['address_country'],
                'address_postal_code' => $validatedData['address_postal_code'],
                'address_date' => date('Y-m-d H:i:s'),
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
