<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Pkinerja;
use Bimaproteksi\Models\Budaya;
use Response, Request, Validator, Redirect,DB;

class PkinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        
        $pkinerja = DB::table('p_kinerja')->join('budaya','p_kinerja.id_budaya','=','budaya.id_budaya')->select('p_kinerja.*','budaya.nama_budaya')->get();
//        $pkinerja = Pkinerja::all();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$pkinerja,
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
       $store= new Pkinerja;
        $store->id_pkinerja = Request::get('id_pkinerja');
        $store->id_budaya = Request::get('budaya');
        $store->aspek_poin = Request::get('aspek_poin');
        $store->nama_pkinerja = Request::get('nama_pkinerja');
        $store->bobot_metrik = Request::get('bobot_metrik');
        
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data poin kinerja Berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_pkaizen'=>$store->id
                    ]
                ]
            ]);
        }
        return Response::json([
            'status'=>false,
            'message'=>'Maaf Data poin kinerja gagal dimasukkan!',
            'data'=>[
                'request'=>Request::all(),
                'response'=>'false',
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
        $budaya = Budaya::all();
        $pkinerja=Pkinerja::find($id);
        return view('admin.p_kinerja.poin.edit')->with(compact('pkinerja'))->with(compact('budaya'));
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
       $update=  Pkinerja::find($id);
       $update->id_pkinerja = Request::get('id_pkinerja');
       $update->id_budaya = Request::get('budaya');
       $update->aspek_poin = Request::get('aspek_poin');
      $update->nama_pkinerja = Request::get('nama_pkinerja');
       $update->bobot_metrik = Request::get('bobot_metrik');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data poin kinerja berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Pkinerja::all(),
                ]
            ]);
        }
        return Response::json([
           'status'=>false,
            'message'=>'Data poin kinerja Gagal disimpan',
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
        $pkinerja = Pkinerja::find($id);
        $pkinerja->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data poin kinerja Berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Pkinerja::all(),
            ]
        ]);
    }
}
