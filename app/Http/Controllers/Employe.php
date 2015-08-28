<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response, Route, View, Input;

class Employe extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $auth = "{'username':'oemah','password':'admin'}";
        $request = Request::create('api/employe','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.employee.employee',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store()
    {
        $input=[
            'nama' => Input::get('nama'),
            'email' => Input::get('email'),
            'tgl_lahir' => Input::get('tgl_lahir'),
            'jenis_kelamin' => Input::get('jenis_kelamin'),
            'agama' => Input::get('agama'),
            'alamat' => Input::get('alamat'),
            'umur'=>Input::get('umur'),
            'no_telp' => Input::get('no_telp'),

        ];
        $request = Request::create('api/employe','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        // return View::make('admin.employee.employee',compact('data'));
        return $data;

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
    }
}
