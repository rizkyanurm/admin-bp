<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;
use Request;
use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Dt_kpi;
use Bimaproteksi\Models\kpi;
use Response;
use Validator, DB, View;

class DtkpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $dtkpi =DB::table('Dt_kpi')->join('kpi','Dt_kpi.id_kpi','=', 'Kpi.id_kpi')->select('Dt_kpi.*', 'Kpi.kode_kpi')->get();
        
//        $dtkpi=Dt_kpi::all();
        
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dtkpi
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
        $store= new Dt_kpi;
        $store->id_kpi=Request::get('kpi');
        $store->tgl_mulai= Request::get('tgl_mulai');
        $store->tgl_selesai = Request::get('tgl_selesai');
        $store->status = Request::get('status');
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Selamat! Data berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_dtkpi'=>$store->id
                    ]
                ]
            ]);
        }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf! Data gagal Dimasukkan',
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
        $dtkpi = Dt_kpi::find($id);
        $kpi = Kpi::all();
               return View('admin.dt_kpi.edit')->with(compact('dtkpi'))->with(compact('kpi'));
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
        $update = Dt_kpi::find($id);
        $update->id_kpi=Request::get('id_kpi');
        $update->tgl_mulai= Request::get('tgl_mulai');
        $update->tgl_selesai = Request::get('tgl_selesai');
        $update->status = Request::get('status');
        if($update->save()){
            return Response::json([
               'status'=>true,
                'message'=>'Data Baru Berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Dtkpi::all(),
                ]
            ]);
        }
            return Response::json([
               'status'=>false,
                'message'=>'Maaf Data Gagal Dimasukkan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>'false'
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
        $dtkpi= Dt_kpi::find($id);
        $dtkpi->delete();
        return Response::json([
           'status'=>true,
            'message'=>'Data Kpi berhasil dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Dt_kpi::all(),
            ]
        ]);
    }
}
