<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Ppimpin;
use Response, Request, Validator, Redirect;

class PpimpinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $ppimpin  = Ppimpin::all();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$ppimpin,
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
        $store = new Ppimpin;
        $store->id_ppimpin = Request::get('id_ppimpin');
        $store->nama_ppimpin = Request::get('nama_ppimpin');
        if($store->save()){
            return Response::json([
               'status'=>true,
                'message'=>'Data Berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_pkaizen'=>$store->id
                    ]
                ]
            ]);
        }
        return Response::json([
           'status'=>false,
            'message'=>'Maaf1 Data gagal Dimasukkan',
            'data'=>[
                'request'=>Request::all(),
                'response'=>'false'
            ]
        ]);
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
        $ppimpin=Ppimpin::find($id);
        return view('admin.p_pimpin.edit')->with(compact('ppimpin'));
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
        $update = Ppimpin::find($id);
    
        $update->nama_ppimpin = Request::get('nama_ppimpin');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data baru berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Ppimpin::all(),
                ]
            ]);
            return Response::json([
                'status'=>false,
                'message'=>'Data gagal di Update',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>null,
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
        $ppimpin = Ppimpin::find($id);
        $ppimpin->delete();
        return Response::json([
           'status'=>true,
            'message'=>'Data pimpin berhasil dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Ppimpin::all(),
            ]
        ]);
    }
}
