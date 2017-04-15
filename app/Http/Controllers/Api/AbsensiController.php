<?php

namespace Bimaproteksi\Http\Controllers\Api;
// use Illuminate\Http\Request;
use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Absensi;
use Response;
use Request;
use Validator,redirect;
use Bimaproteksi\Models\Employe;



class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $absensi=Absensi::all();
        return Response::json([
                'status'=>true,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$absensi,
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
        // $employe=Employe::all('id_employee', 'nama');
        // return Response::json([
        //     'status'=>true,
        //     'data'=>[
        //         'request' =>Request::all(),
        //         'response' =>$employe
        //     ]

        //     ]);
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
          
           $validator = Validator::make(Request::all(), [
           
             'id_employe' => 'required',
         
        ]);

        if ($validator->fails()) {
            return Response::json([
                'status'=>false,
                'message' =>null,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

       

        if (Employe::where('id_employe', '=', Request::get('id_employe'))->exists()) {

        $store = new Absensi;
        $store->id_employe=Request::get('id_employe');
        $store->status = Request::get('status');
        $store->tgl_absensi= Request::get('tgl_absensi');
        $store->total_jam = Request::get('total_jam');
        $store->jml_terlambat = Request::get('jml_terlambat');
        $store->jammasuk_shift1 = Request::get('jammasuk_shift1');
        $store->jamkeluar_shift1 = Request::get('jamkeluar_shift1');
        $store->jammasuk_shift2 = Request::get('jammasuk_shift2');
        $store->jamkeluar_shift2 = Request::get('jamkeluar_shift2');
        $store->jamasuk_lembur = Request::get('jamasuk_lembur');
         $store->jamkeluar_lembur = Request::get('jamkeluar_lembur');
        if ($store->save()) {
            return Response::json([
                'status'=>true,
                'message' =>'Data Absensi berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                    'id_absensi'=>$store->id
                    ]
                ]
            ]);
        }

        }
        return Response::json([
                'status'=>false,
                'message' =>'Maaf! Data Absensi gagal dimasukkan : id tidak terdaftar',
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
         $absensi=Absensi::find($id);
         return view('admin.absensi.edit')->with(compact('absensi'));

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
         $validator = Validator::make(Request::all(), [
           
             'id_employe' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'status'=>false,
                'message' =>null,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

       
 if (Employe::where('id_employe', '=', Request::get('id_employe'))->exists()) {
        $update = Absensi::find($id);
        $update->id_employe=Request::get('id_employe');
        $update->status = Request::get('status');
        $update->tgl_absensi= Request::get('tgl_absensi');
        $update->total_jam = Request::get('total_jam');
        $update->jml_terlambat = Request::get('jml_terlambat');
        $update->jammasuk_shift1 = Request::get('jammasuk_shift1');
        $update->jamkeluar_shift1 = Request::get('jamkeluar_shift1');
        $update->jammasuk_shift2 = Request::get('jammasuk_shift2');
        $update->jamkeluar_shift2 = Request::get('jamkeluar_shift2');
        $update->jamasuk_lembur = Request::get('jamasuk_lembur');
        $update->jamkeluar_lembur = Request::get('jamkeluar_lembur');
        if ($update->save()) {
            return Response::json([
                'status'=>true,
                'message' => 'Data Absensi berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Absensi::all(),
                ]
            ]);
        }
    }
          return Response::json([
                'status'=>false,
                'message' =>'Data Absensi  gagal di update: id tidak terdaftar',
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
        $absensi=Absensi::find($id);
        $absensi->delete();
        return Response::json([
                'status'=>true,
                'message' =>'Data Absensi berhasil dihapus',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Absensi::all(),
                ]
            ]);

    }
    
}
