<?php

namespace Bimaproteksi\Http\Controllers\Api;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Divisi;
use Bimaproteksi\Models\Departement;
use Response;
use Request, Validator, DB;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $divisi=DB::table('Divisi')
                ->join('Departement','Divisi.id_departement','=','Departement.id_departement')
                ->select('Divisi.*', 'Departement.nama_departement')->get();

        return Response::json([
          'status'=>true,
          'data'=>[
              'request'=>Request::all(),
              'response'=>$divisi
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
        $validator = Validator::make(Request::all(),[

            'nama_divisi'=> 'required|unique:divisi,nama_divisi',
            'kode_divisi'=>'required',
            'departement'=> 'required',

          ]);

          if ($validator->fails()){
              return Response::json([
                'status' =>  false,
                'message' => 'Maaf Data gagal dimasukkan: Data Divisi telah terdaftar',
                'data' =>[
                      'request'=> Request::all(),
                      'response'=>$validator-> errors()->all(),
                  ]
                ]);

          }

          $store = new Divisi;
          $store->nama_divisi = Request::get('nama_divisi');
          $store->kode_divisi = Request::get('kode_divisi');
          $store->id_departement = Request::get('departement');
          if($store->save()){
              return Response::json([
                  'status'=>true,
                  'message'=>'Selamat! Data Divisi Divisi berhasil Disimpan',
                  'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                          'id_divisi'=>$store->id
                      ]
                    ]
                ]);
          }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf ! Data Divisi gagal dimasukkan',
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
        $divisi =  Divisi::find($id);
        return Response::json([
              'status' => true,
              'data'  =>[
                  'request'=>Request::all(),
                  'response' => $divisi
                ]
          ]);
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
        $divisi = Divisi::find($id);
        $departement = Departement::all();
        return view('admin.divisi.edit')->with(compact('divisi'))->with(compact('departement'));
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
               
        $update = Divisi::find($id);
        $update->nama_divisi = Request::get('nama_divisi');
        $update->kode_divisi = Request::get('kode_divisi');
        $update->id_departement = Request::get('departement');
        if($update->save()){
            
//             if(Divisi::where('kode_divisi','=', Request::get('kode_divisi'))->exists()){
//            
//                    return Response::json([
//                    'status'=>false,
//                    'message'=>'Maaf Data gagal Dimasukkkan : Kode Yang dicantumkan sudah ada',
//                    'data'=>[
//                            'request'=>Request::all(),
//                            'response'=>'false'
//                    ] 
//                ]);
//             }
             
            return Response::json([
                    'status'=>true,
                    'message'=>'Data Divisi baru berhasil disimpan',
                    'data' => [
                        'request'=> Request::all(),
                        'response' => Divisi::all(),
                      ]
                ]);
        }
        
        return Response::json([
           'status'=>false,
            'message'=>'Maaf Data Divisi gagal Dimasukkkan',
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
        $divisi = Divisi::find($id);
        $divisi->delete();
        return Response::json([
              'status'=>true,
              'message'=>'Data Divisi Berhasil Dihasil Dihapus',
              'data'=>[
                'request' => Request::all(),
                'response' => Divisi::all(),
                ]
          ]);
    }
}
