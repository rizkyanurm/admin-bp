<?php

namespace Bimaproteksi\Http\Controllers\Api;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Departement;
use Bimaproteksi\Models\Divisi;
use Response;
use Request, Validator, DB;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $departemen = Departement::all();
        return Response::json([
                'status'=>true,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$departemen
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
     * @return Response
     */
    public function store(Request $request)
    {
        $validator= validator::make(Request::all(),[
        'nama_departement' =>'required|unique:departement',
//        'kode_dept_divisi'=>'required|unique:Departement|max:5',
//        'nama_divisi'=>'required',

        ]);

        if ($validator->fails()){
            return Response::json([
                'status'=> false,
                'message' =>'Maaf Data departemen gagal Dimasukkan :Data departemen sudah terdaftar',
                'data' =>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

        $store = new Departement;
        $store->nama_departement = Request::get('nama_departement');
//        $store->kode_dept_divisi = Request::get('kode_dept_divisi');
//        $store->nama_divisi= Request::get('nama_divisi');
        if($store->save()) {
            return Response::json([
                'status'=>true,
                'message'=>'Selamat! Data departemen berhasil disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_departement'=>$store->id
                        ]
                    ]
                ]);
            }
         return Response::json([
            'status'=>false,
            'message' =>'Maaf! Data departemen Gagal dimasukkan',
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
        
          
        $divisi=  $divisi=DB::table('Divisi')
                ->join('Departement','Divisi.id_departement','=','Departement.id_departement')->get();
        
        return Response::json([
             'status'=> true,
                'message' =>'Data departemen berhasil ditampilkan',
                'data' =>[
                    'request'=>Request::all(),
                    'response'=>$divisi
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
        $departement=Departement::find($id);
        return View('admin.departemen.edit')->with(compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator= validator::make(Request::all(),[
        'nama_departement' =>'required|unique:departement',

        ]);
        
           if ($validator->fails()){
            return Response::json([
                'status'=> false,
                'message' =>'Maaf Data gagal Dimasukkan :Data departemen sudah terdaftar',
                'data' =>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

        $update=Departement::find($id);
        $update->nama_departement = Request::get('nama_departement');
        //        $update->nama_divisi = Request::get('nama_divisi');
        //        $update->kode_dept_divisi = Request::get('kode_dept_divisi');

        if($update->save()) {
          return Response::json([
            'status' => true,
            'message' =>'Data departemen berhasil disimpan',
            'data'=>[
              'request' => Request::all(),
              'response' =>Departement::all(),
              ]
            ]);
        }
         return Response::json([
            'status'=>false,
            'message' =>'Maaf! Data departemen Gagal dimasukkan',
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
        $departemen=Departement::find($id);
       try{
            $departemen->delete();
            return Response::json([
            'status'=>true,
            'message' => 'Data Departement berhasil dihapus',
            'data'=>[
              'request'=>Request::all(),
              'response'=>Departement::all(),
              ]
          ]);
        } catch(\Exception $e){
            return Response::json([
                'status'=>true,
                'message' =>'Data Departement gagal dihapus : Terdapat Konstrain pada tabel Departemen dan Divisi',
                'data' =>[
                    'request'=>Request::all(),
                    'response'=>Departement::all(),
                ]
            ]);
       }
     
    }
}
