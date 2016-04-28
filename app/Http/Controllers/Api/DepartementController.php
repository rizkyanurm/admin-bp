<?php

namespace Bimaproteksi\Http\Controllers\Api;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Departement;
use Response;
use Request, Validator;

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
        'nama_departement' =>'required',
        'kode_dept_divisi'=>'required|unique:Departement|max:5',
        'nama_divisi'=>'required',

        ]);

        if ($validator->fails()){
            return Response::json([
                'status'=> false,
                'message' => null,
                'data' =>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

        $store = new Departement;
        $store->nama_departement = Request::get('nama_departement');
        $store->kode_dept_divisi = Request::get('kode_dept_divisi');
        $store->nama_divisi= Request::get('nama_divisi');
        if($store->save()) {
            return Response::json([
                'status'=>true,
                'message'=>null,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_departement'=>$store->id
                        ]
                    ]
                ]);
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $departemen=Departement::where('id_departement',$id)->get()->first();
        return Response::json([
                    'status'=>true,
                    'data'=>[
                        'request'=>Request::all(),
                        'response'=>$departemen
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
        $update=Departement::find($id);
        $update->kode_dept_divisi = Request::get('kode_dept_divisi');
        $update->nama_departement = Request::get('nama_departement');
        $update->nama_divisi = Request::get('nama_divisi');

        if($update->save()) {
          return Response::json([
            'status' => true,
            'message' =>'data has been updated',
            'data'=>[
              'request' => Request::all(),
              'response' =>Departement::all(),
              ]
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $departemen= Departement::find($id);
        $departemen->delete();
        return Response::json([
                'status'=>true,
                'message'=>'Departement has been deleted',
                'data'=>[
                        'request'=>Request::all(),
                        'response'=>Departement::all()

                ]
            ]);
    }
}
