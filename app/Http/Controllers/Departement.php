<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Response, Request, Route, View, Input;

class Departement extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
    // $auth = "{'username':'oemah','password':'admin'}";
    $request = Request::create('api/departement','GET');
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    return View::make('admin.departemen.departemen',compact('data'));
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
  public function create()
  {
    return View::make('admin.departemen.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  Request  $request
  * @return Response
  */
  public function store(Request $request)
  {
    $input=[
      'kode_dept_divisi'=>Input::get('kode_dept_divisi'),
      'nama_departement'=>Input::get('nama_departement'),
      'nama_divisi'=>Input::get('nama_divisi'),
    ];

    $request = Request::create('api/departement','POST',$input);
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $statuss = $respose->status;
    // $messages=$respose->messages;

    // return $data;
      return View::make('admin.departemen.create')->with(compact('data'));


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
    $input=[
      'kode_dept_divisi'=>Input::get('kode_dept_divisi'),
      'nama_departement'=>Input::get('nama_departement'),
      'nama_divisi'=>Input::get('nama_divisi'),
    ];

    $request = Request::create('api/departement/'.$id, 'PUT', $input);
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages = $respose->message;
    return redirect::route('departemen')->with(compact('data'))->withFlashMessage($messages);

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function destroy(Request $request,$id)
  {
    $request = Request::create('api/departement/'.$id, 'delete');
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages =$respose->message;
    return redirect::route('departemen')->with(compact('data'))->withFlashMessage($messages);;
  }
}
