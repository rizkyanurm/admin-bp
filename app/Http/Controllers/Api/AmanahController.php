<?php

namespace Bimaproteksi\Http\Controllers\Api;
// use Illuminate\Http\Request;
use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Amanah;
use Response;
use Request;
use Validator, redirect;




class AmanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $amanah = Amanah::all();
        return Response::json([
          'status'=> true,
          'data'=>[
            'request'=> Request::all(),
            'response'=>$amanah
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
          'nama_amanah' =>'required|unique:amanah',
          'tunjangan' => 'required',
          ]);

            if($validator->fails()){
              return Response::json([
                  'status' => false,
                  'message' => 'Maaf nama Amanah telah tersedia',
                  'data' =>[
                        'request' => Request::all(),
                        'response' => $validator->errors()->all()
                    ]
                ]);

            }
            $store = new Amanah;
            $store->nama_amanah = Request::get('nama_amanah');
            $store->tunjangan = Request::get('tunjangan');
            if ($store->save()){
              return Response::json([
                  'status' =>true,
                  'message' =>"Data Amanah Berhasil Disimpan",
                  'data'=>[
                        'request' => Request::all(),
                        'response' =>[
                          'id_amanah' =>$store->id
                          ]
                    ]
                ]);
            }
             return Response::json([
                'status'=>false,
                'message' =>'Maaf! Data amanah gagal dimasukkan',
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
        $amanah= Amanah::find($id);
        return view('admin.amanah.edit')->with(compact('amanah'));
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
        $validator = Validator::make(Request::all(),[
          'nama_amanah' =>'required|unique:amanah',
          'tunjangan' => 'required',
          ]);

            if($validator->fails()){
              return Response::json([
                  'status' => false,
                  'message' => 'Maaf nama Amanah telah tersedia',
                  'data' =>[
                        'request' => Request::all(),
                        'response' => $validator->errors()->all()
                    ]
                ]);

            }
        $update = Amanah::find($id);
        $update->nama_amanah = Request::get('nama_amanah');
        $update->tunjangan = Request::get('tunjangan');
        if($update->save()){
          return Response::json([
              'status'=>true,
              'message'=>'Data Amanah Berhasil disimpan',
              'data'=>[
                'request'=>Request::all(),
                'response'=>Amanah::all(),
                ]
            ]);
        }
          return Response::json([
                'status'=>false,
                'message' =>'Data Amanah gagal diSimpan',
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
        $amanah=Amanah::find($id);
        $amanah->delete();
        return Response::json([
          'status'=>true,
          'message'=>'Data Amanah berhasil dihapus',
          'data'=>[
              'request'=>Request::all(),
              'response' =>Amanah::all(),
            ]
          ]);
    }
}
