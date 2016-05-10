<?php

namespace Bimaproteksi\Http\Controllers\Api;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Bimaproteksi\Models\Employe;
use Response;
use Request;
use Validator,redirect;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $employe = Employe::all();
        return Response::json([
                'status'=>true,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$employe
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
        $validator = Validator::make(Request::all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:employe,email',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'umur'=>'numeric',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'status'=>false,
                'message' => null,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

        $store = new Employe;
        $store->nama = Request::get('nama');
        $store->email = Request::get('email');
        $store->tgl_lahir = Request::get('tgl_lahir');
        $store->jenis_kelamin = Request::get('jenis_kelamin');
        $store->agama = Request::get('agama');
        $store->alamat = Request::get('alamat');
        $store->no_telp = Request::get('no_telp');
        $store->umur = Request::get('umur');
        if ($store->save()) {
            return Response::json([
                'status'=>true,
                'message' => 'Data Berhasil Disimpan',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>[
                        'id_employe'=>$store->id
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
         // $employe=Employe::find($id);
         // return Response::json([
         //        'status'=>true,
         //        'data'=>[
         //            'request'=>Request::all(),
         //            'response'=>$employe
         //        ]
         //    ]);
        $data=Employe::find($id)->get();
        return view('admin.employee.detail')->with(compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

         $employe=Employe::find($id);
         return view('admin.employee.edit')->with(compact('employe'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {


            $validator = Validator::make(Request::all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:employe,email',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'umur'=>'numeric',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'status'=>false,
                'message' => null,
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>$validator->errors()->all()
                ]
            ]);
        }

        $update = Employe::find($id);
        $update->nama = Request::get('nama');
        $update->email = Request::get('email');
        $update->tgl_lahir = Request::get('tgl_lahir');
        $update->jenis_kelamin = Request::get('jenis_kelamin');
        $update->agama = Request::get('agama');
        $update->alamat = Request::get('alamat');
        $update->no_telp = Request::get('no_telp');
        $update->umur = Request::get('umur');
        if ($update->save()) {
            return Response::json([
                'status'=>true,
                'message' => 'Data Karyawan Berhasil di Update!',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Employe::all(),
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
        $employe=Employe::find($id);
        $employe->delete();
        return Response::json([
                'status'=>true,
                'message' =>'Data Karyawan Berhasil dihapus!',
                'data'=>[
                    'request'=>Request::all(),
                    'response'=>Employe::all(),
                ]
            ]);

    }
}
