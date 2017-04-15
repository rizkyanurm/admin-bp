<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;


use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Kpi;
use Response, Request, Validator, Redirect,DB;
use Bimaproteksi\Models\Divisi;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
         $kpi=DB::table('Kpi')
                ->join('Divisi','Kpi.id_divisi','=','Divisi.id_divisi')
                ->select('Kpi.*', 'Divisi.nama_divisi')->get();
//        $kpi = Kpi::all();
        return Response::json([
          'status'=>true,
          'data'=>[
              'request'=>Request::all(),
              'response'=>$kpi
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
        $store = new Kpi;
        $store->id_divisi = Request::get('divisi');
        $store->kode_kpi = Request::get('kode_kpi');
        $store->tugas = Request::get('tugas');
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Selamat Data anda berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_kpi'=>$store->id
                    ]
                ]
            ]);
        }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf! Data Gagal Dimasukkan',
            'data'=>[
                'request'=>Request::All(),
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
        $divisi = Divisi::all();
        $kpi = Kpi::find($id);
        return View('admin.kpi.edit')->with(compact('kpi'))->with(compact('divisi'));
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
        $update = Kpi::find($id);
        $update->id_divisi= Request::get('id_divisi');
        $update->kode_kpi= Request::get('kode_kpi');
        $update->tugas= Request::get('tugas');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Selamat Data anda berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Kpi::all(),
                    
                ]
            ]);
        }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf! Data Gagal Dimasukkan',
            'data'=>[
                'request'=>Request::All(),
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
        $kpi = Kpi::find($id);
        $kpi->delete();
        return Response::json([
           'status'=>true,
            'message'=>'Data Divisi Berhasil Dihapus',
            'data'=>[
                'request'=>Request::All(),
                'response'=>Kpi::all(),
            ]
        ]);
    }
}
