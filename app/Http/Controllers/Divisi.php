<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;
use Bimaproteksi\Models\Departement;

class Divisi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $request =  Request::create('api/divisi','GET');
        $respose  = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.divisi.divisi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      $departement=Departement::all();
        return View::make('admin.divisi.create')->with(compact('departement'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input  =[
          'nama_divisi'=> Input::get('nama_divisi'),
          'kode_divisi'=>Input::get('kode_divisi'),
          'departement'=>Input::get('departement'),
        ];


        $request = Request::create('api/divisi','POST',$input);
      // return $input;
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $departement= Departement::all();
        return View::make('admin.divisi.create')->with('statuss')->with(compact('data'))->with(compact('departement'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $request = Request::create('api/divisi/'.$id, 'GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $request = Request::create('api/divisi/'.$id,'GET');
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
        $input  =[
          'nama_divisi'=> Input::get('nama_divisi'),
          'kode_divisi'=>Input::get('kode_divisi'),
          'id_departement'=>Input::get('id_departement')
        ];
        $request = Request::create('api/divisi/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return redirect::route('divisi')->with(compact('data'))->withFlashMessage($messages);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $request = Request::create('api/divisi/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return redirect::route('divisi')->with(compact('data'))->withFlashMessage($messages);
    }
}
