<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\dt_ppimpin;
use Bimaproteksi\Models\Ppimpin;
use Bimaproteksi\Models\Employe;
use Response, Validator, Request, DB;

class DtpimpinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $dt_ppimpin = DB::table('dt_ppimpin')->join('poin_pimpin','dt_ppimpin.id_ppimpin','=','poin_pimpin.id_ppimpin')->select('dt_ppimpin.*','poin_pimpin.nama_ppimpin')->get();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dt_ppimpin,
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
        if(Employe::where('id_employe','=',Request::get('id_employe_p'))->exists()){
            
            if(Employe::where('id_employe','=',Request::get('id_employe_d'))->exists()){
                $store= new dt_ppimpin;
                $store->id_employe_p = Request::get('id_employe_p');
                $store->id_employe_d = Request::get('id_employe_d');
                $store->id_ppimpin = Request::get('poin_pimpin');
            
                $store->nilai_ppimpin= Request::get('nilai_ppimpin');
                $store->feedback = Request::get('feedback');
                if($store->save()){
                    return response::json([
                        'status'=>true,
                        'message'=>'Data Berhasil Disimpan',
                        'data'=>[
                            'request'=>Request::all(),
                            'response'=>[
                                'id_dt_ppimpin'=>$store->id
                            ]
                        ]
                    ]);
                }
            }
              return response::json([
                        'status'=>false,
                        'message'=>'Maaf Data Gagal Dimasukkan : IdEmploye penilai tidak terdaftar',
                        'data'=>[
                            'request'=>Request::all(),
                            'response'=>[
                                'id_dt_ppimpin'=>'false'
                            ]
                        ]
                    ]);
        }
                                
              return response::json([
                        'status'=>false,
                        'message'=>'Maaf Data Gagal Dimasukkan : IdEmploye dinilai tidak terdaftar',
                        'data'=>[
                            'request'=>Request::all(),
                            'response'=>[
                                'id_dt_ppimpin'=>'false'
                         ]
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
        $dtppimpin = dt_ppimpin::find($id);
        $dtppimpin->delete();
        return Response::json([
           'status'=>true,
            'message'=>'Data Pimpin berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>dt_ppimpin::all(),
            ]
        ]);
    }
}
