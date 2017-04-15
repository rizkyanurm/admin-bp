<?php

namespace Bimaproteksi\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Budaya;
use Response, Request, Validator, Redirect;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $budaya =Budaya::all();
        return Response::json([
            'status'=>true,
            'data'=>[
                'request'=>Request::all(),
                'response'=>$budaya
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
        $store = new Budaya;
        $store->bobot_budaya = Request::get('bobot_budaya');
        $store->nama_budaya = Request::get('nama_budaya');
        $store->keterangan_budaya = Request::get('keterangan_budaya');
        if($store->save()){
            return Response::json([
                'status'=>true,
                'message'=>"Data Budaya berhasil Disimpan",
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_budaya'=>$store->id
                    ]
                ]
            ]);
        }
           return Response::json([
                'status'=>false,
                'message'=>"Data Budaya Gagal Disimpan",
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_budaya'=>'false'
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
        $budaya = Budaya::find($id);
        return View('admin.p_kinerja.budaya.edit')->with(compact('budaya'));
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
        $update = Budaya::find($id);
        $update->bobot_budaya = Request::get('bobot_budaya');
        $update->nama_budaya = Request::get('nama_budaya');
        $update->keterangan_budaya = Request::get('keterangan_budaya');
        if($update->save()){
            return Response::json([
                'status'=>true,
                'message'=>'Data Budaya berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Budaya::all(),
                ]
            ]);
        }
         return Response::json([
                'status'=>false,
                'message' =>'Data Budaya gagal diSimpan',
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
        $budaya = Budaya::find($id);
        $budaya->delete();
        return Response::json([
            'status'=>true,
            'message'=>'Data Budaya Berhasil Dihapus',
            'data'=>[
                'request'=>Request::all(),
                'response'=>Budaya::all(),
            ]
        ]);
    }
}
