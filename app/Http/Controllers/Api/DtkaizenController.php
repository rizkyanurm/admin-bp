<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\dt_pkaizen;
use Bimaproteksi\Models\Pkaizen;
use Bimaproteksi\Models\Employe;
use Response, Validator, Request, DB;

class DtkaizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$
        $dt_pkaizen = DB::table('dt_pkaizen')->join('poin_kaizen','dt_pkaizen.id_pkaizen','=','poin_kaizen.id_pkaizen')->select('dt_pkaizen.*','poin_kaizen.kegiatan')->get();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dt_pkaizen,
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
            $store = new dt_pkaizen;
            $store->id_employe = Request::get('id_employe');
            $store->id_pkaizen = Request::get('id_pkaizen');
            $store->nilai_kaizen = Request::get('nilai_kaizen');
            $store->status = Request::get('status');
            
            if($store->save()){
                return response::json([
                    'status'=>true,
                    'message'=>'Data Berhasil Disimpan',
                    'data'=>[
                        'request'=>Request::all(),
                        'response'=>[
                            'id_dt_pkaizen'=>$store->id
                        ]
                    ]
                ]);
            }
        }
        
        return Response::json([
           'status'=>false,
            'message'=>'Maaf Data Gagal Dimasukkan : IdEmploye tidak terdaftar',
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
        $dtpkaizen = dt_pkaizen::find($id);
        $dtpkaizen->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data Kaizen Berhasil DIhapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>dt_pkaizen::all(),
            ]
        ]);
    }
}
