<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Employe;
use Bimaproteksi\Models\Amanah;
use Bimaproteksi\Models\Divisi;
use Bimaproteksi\Models\Jabatan;
use Bimaproteksi\Models\Karir;
use Bimaproteksi\Models\Dt_employe;
use Response, Validator, DB, Request;

class DtemployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $dt_employe = Dt_employe::all();
         return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dt_employe,
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
          if(Employe::where('id_employe','=', Request::get('id_employe'))->exists()){
            
            $store = new Dt_employe;
            $store->id_employe =Request::get('id_employe');
            $store->id_amanah = Request::get('id_amanah');
            $store->id_divisi = Request::get('id_divisi');
            $store->id_karir = Request::get('id_karir');
            
                
                if($store->save()){
                    return Response::json([
                        'status'=>true,
                        'message'=>'Data log karyawan Berhasil Disimpan',
                        'data'=>[
                            'request'=>Request::all(),
                            'response'=>[
                                'id_dt_employe'=>$store->id
                            ]
                        ]
                    ]);
                }
            
            return Response::json([
                'status'=>false,
                'message'=>'Maaf Data log karyawan gagal Dimasukkan: Terjadi gangguan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>'false'
                ]
            ]);
         
            
        }
         return Response::json([
            'status'=>false,
            'message'=>'Maaf Data log karyawan gagal Dimasukkkan : Id Employee tidak terdaftar',
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
        $dtpkinerja = Dt_employe::find($id);
        $dtpkinerja->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data log karyawan Telah Berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Dt_employe::all(),
            ]
        ]);
    }
}
