<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permisssions = Permission::all();
        return response()->json(
            [
                'status' => true,
                'message' => "Yetkilendirme Listesi Getiriliyor.",
                'response' => ($permisssions),

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



        $permission = Permission::find($id); // ID'ye göre Address bul

        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255|',
            'category' => 'required|string|max:255',
            'canshowadminpanel' => 'required|string|max:255',
            'canedituser' => 'required|string|max:255',
            'candeleteuser' => 'required|string|max:255',

            'canuploaduseravatar' => 'required|string|max:255',
            'canresponserequest' => 'required|string|max:255',
            'canresponserequestlist' => 'required|string|max:255',
            'canaddfeedbackcategory' => 'required|string|max:255',
            'candeletefeedbackcategory' => 'required|string|max:255',

            'canreportrequest' => 'required|string|max:255',
            'caneditmyprofile' => 'required|string|max:255',
            'candeletemyprofile' => 'required|string|max:255',
            'canuploaduseravatarmyprofile' => 'required|string|max:255',


        ]);

        // Update fields
        $permission->name = $validated['name'] ?? $permission->name;
        $permission->category = $validated['category'] ?? $permission->category;
        $permission->canshowadminpanel = $validated['canshowadminpanel'] ?? $permission->canshowadminpanel;
        $permission->canedituser = $validated['canedituser'] ?? $permission->canedituser;
        $permission->candeleteuser = $validated['candeleteuser'] ?? $permission->candeleteuser;


        $permission->canuploaduseravatar = $validated['canuploaduseravatar'] ?? $permission->canuploaduseravatar;
        $permission->canresponserequest = $validated['canresponserequest'] ?? $permission->canresponserequest;
        $permission->canresponserequestlist = $validated['canresponserequestlist'] ?? $permission->canresponserequestlist;
        $permission->canaddfeedbackcategory = $validated['canaddfeedbackcategory'] ?? $permission->canaddfeedbackcategory;
        $permission->candeletefeedbackcategory = $validated['candeletefeedbackcategory'] ?? $permission->candeletefeedbackcategory;
        $permission->canreportrequest = $validated['canreportrequest'] ?? $permission->canreportrequest;
        $permission->caneditmyprofile = $validated['caneditmyprofile'] ?? $permission->caneditmyprofile;
        $permission->candeletemyprofile = $validated['candeletemyprofile'] ?? $permission->candeletemyprofile;
        $permission->canuploaduseravatarmyprofile = $validated['canuploaduseravatarmyprofile'] ?? $permission->canuploaduseravatarmyprofile;


        $permission->save(); // Değişiklikleri veritabanına kaydet

        return response()->json(
            [
                'status' => true,
                'message' => "Adres düzenlemesini başarılıyla düzenleme yaptınız.",
                'response' => [
                    'permission' => $permission,
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
