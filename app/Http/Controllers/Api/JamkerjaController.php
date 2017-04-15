<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Jamkerja;
use Response;
use Request, Validator,DB;

class JamkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $jamkerja = Jamkerja::all();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=> Request::all(),
                'response'=> $jamkerja
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
        $store = new Jamkerja;
        $store->jam_kerja_normal = Request::get('jam_kerja_normal');
        $store->hari_kerja_normal = Request::get('hari_kerja_normal');
        $store->nama_jkerja = Request::get('nama_jkerja');
        $store->jam_kerja_aktual = Request::get('hari_kerja_aktual');
        $store->jam_kerja_aktual = Request::get('jam_kerja_aktual');
        
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data Jam Kerja Berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_jam_kerja'=>$store->id
                    ]
                ]
            ]);
        }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf! Data Jam Kerja gagal disimpan',
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
        $jamkerja= Jamkerja::find($id);
        return view('admin.jkerja.edit')->with(compact('jamkerja'));
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
        $update= Jamkerja::find($id);
        $update->jam_kerja_normal = Request::get('jam_kerja_normal');
        $update->nama_jkerja = Request::get('nama_jkerja');
        $update->hari_kerja_normal = Request::get('hari_kerja_normal');
        $update->jam_kerja_aktual = Request::get('jam_kerja_aktual');
        $update->hari_kerja_aktual = Request::get('hari_kerja_aktual');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data Jam Kerja berhasil disimpan',
                'data'=>[
                        'request'=>Request::all(),
                        'response'=>Jamkerja::all(),
                ]
            ]);
        }
        return Response::json([
           'status'=>false,
            'message'=>'Data Jam Kerja Gagal Disimpan',
            'data'=>[
                'request'=>Request::all(),
                'response'=>null,
            ]
        ]);
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
        $jamkerja = Jamkerja::find($id);
        $jamkerja->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data Jam Kerja Berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Jamkerja::all(),
            ]
        ]);
    }
}
