<?php

namespace Bimaproteksi\Http\Controllers\Api;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Jabatan;
use Response, Validator, Redirect, Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $jabatan= Jabatan::all();
        return Response::json([
            'status' =>true,
            'data'=>[
                  'request' =>Request::all(),
                  'response' =>$jabatan
              ]
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(Request::all(),[
          'jabatan' => 'required',
          'tunjangan' => 'required|integer',
          'jum_staff' => 'required|integer',
          ]);
        if ($validator->fails()){
          return Response::json([
              'status' =>false,
              'message' => null,
              'data' =>[
                  'request'=> Request::all(),
                  'response' => $validator->errors()->all()
                ]
            ]);
        }
        $store = new Jabatan;
        $store->jabatan = Request::get('jabatan');
        $store->tunjangan = Request::get('tunjangan');
        $store->jum_staff = Request::get('jum_staff');
        if($store->save()) {
            return Response::json([
              'status'=>true,
              'message'=>null,
              'data' =>[
                  'request'=>Request::all(),
                  'response'=>[
                      'id_jabatan'=>$store->id
                        ]
                    ]
              ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $jabatan=Jabatan::find($id);
        return view('admin.jabatan.edit')->with(compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = Jabatan::find($id);
        $update->jabatan = Request::get('jabatan');
        $update->tunjangan = Request::get('tunjangan');
        $update->jum_staff = Request::get('jum_staff');

        if($update->save()){
          return Response::json([
              'status' =>true,
              'message' =>'data has been updated',
              'data' =>[
                'request'=>Request::all(),
                'response'=>Jabatan::all(),
                ]

            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $jabatan= Jabatan::find($id);
        $jabatan->delete();
        return Response::json([
            'status' =>true,
            'message' =>'Jabatan has been deleted',
            'data'=>[
                  'request'=>Request::all(),
                  'response'=>Jabatan::all(),
              ]
          ]);
    }
}
