<?php

namespace Bimaproteksi\Http\Controllers\Api;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Karir;
use Response,Request, Validator, redirect;


class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $karir =Karir::all();
        return Response::json([
              'status'=>true,
              'data'=>[
                  'request'=>Request::all(),
                  'response'=>$karir,
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
          'golongan' =>'required',
          'pangkat' => 'required',
          'poin_kaizen' =>'required',
          'poin_kredit' =>'required',
          ]);
        if ($validator->fails()) {
          return Response::json([
            'status'=>false,
            'message' =>null,
            'data'=>[
              'request' =>Request::all(),
              'response' =>$validator->errors()->all()
              ]
            ]);
        }

        $store = new Karir;
        $store->golongan = Request::get('golongan');
        $store->pangkat = Request::get('pangkat');
        $store->poin_kaizen = Request::get('poin_kaizen');
        $store->poin_kredit = Request::get('poin_kredit');
        if ($store->save()){
          return Response::json([
            'status'=>true,
            'message' =>null,
            'data' =>[
                'request'=>Request::all(),
                'response' =>[
                    'id_karir' => $store->id

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
        $karir=Karir::find($id);
        return view('admin.karir.edit')->with(compact('karir'));
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
        $update = Karir::find($id);
        $update->golongan = Request::get('golongan');
        $update->pangkat = Request::get('pangkat');
        $update->poin_kaizen = Request::get('poin_kaizen');
        $update->poin_kredit = Request::get('poin_kredit');
        if ($update->save()){
            return Response::json([
                'status' => true,
                'message' =>'data has been updated',
                'data'=>[
                      'request' =>Request::all(),
                      'response'=>Karir::all(),

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
        $karir = Karir::find($id);
        $karir->delete();
        return Response::json([
            'status'=>true,
            'message' => 'Karir has been deleted',
            'data'=>[
              'request'=>Request::all(),
              'response'=>Karir::all(),
              ]
          ]);
    }
}
