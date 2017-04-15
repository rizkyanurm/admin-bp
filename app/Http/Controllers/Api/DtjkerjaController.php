<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Dtjkerja;
use Bimaproteksi\Models\jamkerja;
use Bimaproteksi\Models\Employe;
use Response;
use Validator, DB, Request;

class DtjkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $dt_jkerja = DB::table('Dt_jamkerja')->join('Jamkerja','Dt_jamkerja.id_jam_kerja','=', 'jamkerja.id_jam_kerja')->select('Dt_jamkerja.*','jamkerja.nama_jkerja')->get();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$dt_jkerja,
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
        $store = new Dtjkerja;
        $store->id_employe= Request::get('id_employe');
        $store->tgl_jamker=Request::get('tgl_jamker');
        $store->id_jam_kerja=Request::get('id_jam_kerja');
        $store->jml_jam_realita = Request::get('jml_jam_realita');
        $store->total_jam_realita = Request::get('total_jam_realita');
        $store->total_terlambat = Request::get('total_terlambat');
        $store->total_kurang_jam = Request::get('total_kurang_jam');
        $store->jumlah_cuti= Request::get('jumlah_cuti');
        $store->jumlah_izin = Request::get('jumlah_izin');
        $store->jumlah_lbr_kewarganegaraan = Request::get('jumlah_lbr_kewarganegaraan');
        $store->jumlah_sakit = Request::get('jumlah_sakit');
        $store->total_lembur = Request::get('total_lembur');
        
        if($store->save()){
            return response::json([
                'status'=>true,
                'message'=>'Data Log Jam Kerja Berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_dt_jamkerja'=>$store->id
                    ]
                ]
            ]);
        }
    }
        
        return Response::json([
           'status'=>false,
            'message'=>'Maaf Data Log Jam Kerja gagal dimasukkan : Id Employee tidak terdaftar',
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
        $dtjkerja = Dtjkerja::find($id);
        $jamkerja = Jamkerja::all();
        return View('admin.dt_jkerja.edit')->with(compact('dtjkerja'))->with(compact('jamkerja'));
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
  
        $update = Dtjkerja::find($id);
        $update->tgl_jamker=Request::get('tgl_jamker');
        $update->id_employe=Request::get('id_employe');
        $update->id_jam_kerja=Request::get('id_jam_kerja');
        $update->jml_jam_realita = Request::get('jml_jam_realita');
        $update->total_jam_realita = Request::get('total_jam_realita');
        $update->total_terlambat = Request::get('total_terlambat');
        $update->total_kurang_jam = Request::get('total_kurang_jam');
        $update->jumlah_cuti= Request::get('jumlah_cuti');
        $update->jumlah_izin = Request::get('jumlah_izin');
        $update->jumlah_lbr_kewarganegaraan = Request::get('jumlah_lbr_kewarganegaraan');
        $update->jumlah_sakit = Request::get('jumlah_sakit');
        $update->total_lembur = Request::get('total_lembur');
        if($update->save()){
             return Response::json([
                    'status'=>true,
                    'message'=>'Data Log Jam Kerja berhasil disimpan',
                    'data' => [
                        'request'=> Request::all(),
                        'response' => Dtjkerja::all(),
                      ]
                ]);
        }
        
         return Response::json([
           'status'=>false,
            'message'=>'Maaf Data gagal Dimasukkkan:id yang dimasukkan tidak ada',
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
        $dtjkerja = Dtjkerja::find($id);
        $dtjkerja->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data Log Jam Kerja Berhasil dihapus',
             'data'=>[
                    'request'=>Request::all(),
                    'response'=>Dtjkerja::all(),
                ]
        ]);
    }
}
