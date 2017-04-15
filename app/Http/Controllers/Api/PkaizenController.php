<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Pkaizen;
use Response, Request, Validator, Redirect;

class PkaizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $Pkaizen= Pkaizen::all();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$Pkaizen,
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
        $store = new Pkaizen;
        $store->id_pkaizen = Request::get('id_pkaizen');
        $store->kegiatan = Request::get('kegiatan');
        $store->bukti_keg = Request::get('bukti_keg');
        $store->jenis = Request::get('jenis');
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data berhasil Disimpan',
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
            'message'=>'Maaf! Data gagal dimasukkan',
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
        $pkaizen=Pkaizen::find($id);
        return view('admin.p_kaizen.edit')->with(compact('pkaizen'));
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
        $update = Pkaizen::find($id);
        $update->bukti_keg = Request::get('bukti_keg');
        $update->kegiatan = Request::get('kegiatan');
        $update->jenis = Request::get('jenis');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data baru berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Pkaizen::all(),
                ]
            ]);
            return Response::json([
               'status'=>false,
                'message'=>'Data gagal Di update',
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
        $pkaizen = Pkaizen::find($id);
        $pkaizen->delete();
        return Response::json([
           'status'=>true,
            'message'=>'Data Kaizen berhasil dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Pkaizen::all(),
            ]
        ]);
    }
}
