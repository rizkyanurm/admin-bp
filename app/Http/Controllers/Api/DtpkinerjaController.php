<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Employe;
use Bimaproteksi\Models\Pkinerja;
use Bimaproteksi\Models\dt_pkinerja;
use Response, Validator, DB, Request;

class DtpkinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
//        $dt_kinerja = dt_pkinerja::all();
        
       $dt_kinerja = DB::table('dt_pkinerja')->join('P_kinerja','dt_pkinerja.id_pkinerja','=', 'p_kinerja.id_pkinerja')->select('dt_pkinerja.*','p_kinerja.nama_pkinerja')->get();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dt_kinerja,
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
        if(Employe::where('id_employe','=',Request::get('id_employe'))->exists()){
            $store = new dt_pkinerja;
            $store->id_employe= Request::get('id_employe');
            $store->id_pkinerja= Request::get('id_pkinerja');
           
            $store->nilai_kinerja = Request::get('nilai_kinerja');
            $store->bobot_poin= Request::get('bobot_poin');
            
            if($store->save()){
                return Response::json([
                    'status'=>true,
                    'message'=>'Data Berhasil Disimpan',
                    'data'=>[
                        'request'=>Request::all(),
                        'response'=>[
                            'id_dt_pkinerja'=>$store->id
                        ]
                    ]
                ]);
            }
            
            return Response::json([
                'status'=>false,
                'message'=>'Maaf Data gagal Dimasukkan: Terjadi gangguan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>'false'
                ]
            ]);
        }
        
        return Response::json([
            'status'=>false,
            'message'=>'Maaf Data gagal Dimasukkkan : Id Employee tidak terdaftar',
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
        $dtpkinerja = dt_pkinerja::find($id);
        $dtpkinerja->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data Telah Berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>dt_pkinerja::all(),
            ]
        ]);
    }
}
