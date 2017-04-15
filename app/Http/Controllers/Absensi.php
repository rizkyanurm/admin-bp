<?php
namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;

class Absensi extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()
{
    //
    $request = Request::create('api/absensi','GET');
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    return View::make('admin.absensi.absensi',compact('data'));
    // return $data;
}

/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()
{
    //
    // $request = Request::create('api/absensi','GET');
    // $respose = json_decode(Route::dispatch($request)->getContent());
    // $data = $respose->data->response;
    // return View::make('admin.absensi.create',compact('data'));

       return View::make('admin.absensi.create');
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
    $input=[

      'id_employe' => Input::get('id_employe'),
      'status' =>Input::get('status'),
      'tgl_absensi'=>Input::get('tgl_absensi'),
      'total_jam' =>Input::get('total_jam'),
      'jml_terlambat' =>Input::get('jml_terlambat'),
      'jammasuk_shift1'=>Input::get('jammasuk_shift1'),
      'jamkeluar_shift1'=>Input::get('jamkeluar_shift1'),
      'jammasuk_shift2'=>Input::get('jammasuk_shift2'),
      'jamkeluar_shift2'=>Input::get('jamkeluar_shift2'),
      'jamasuk_lembur'=>Input::get('jamasuk_lembur'),
      'jamkeluar_lembur'=>Input::get('jamasuk_lembur'),
    ];

    $request = Request::create('api/absensi/','POST',$input);
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages=$respose->message;
    $statuss= $respose->status;

    // return $data;

    // return View::make('admin.absensi.create')->with(compact('data'))->with(compact('statuss'));
     if($statuss===false){
      return redirect()->back()->withInput()->withFlashMessage($messages);


    }elseif($statuss===true){
          return redirect::route('absensi')->with(compact('data'))->withFlashMessage($messages);
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

      'id_employe' => Input::get('id_employe'),
      'status' =>Input::get('status'),
      'tgl_absensi'=>Input::get('tgl_absensi'),
      'total_jam' =>Input::get('total_jam'),
      'jml_terlambat' =>Input::get('jml_terlambat'),
      'jammasuk_shift1'=>Input::get('jammasuk_shift1'),
      'jamkeluar_shift1'=>Input::get('jamkeluar_shift1'),
      'jammasuk_shift2'=>Input::get('jammasuk_shift2'),
      'jamkeluar_shift2'=>Input::get('jamkeluar_shift2'),
      'jamasuk_lembur'=>Input::get('jamasuk_lembur'),
      'jamkeluar_lembur'=>Input::get('jamasuk_lembur'),
    ];

    $request = Request::create('api/absensi/'.$id,'PUT',$input);
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages=$respose->message;
    $statuss=$respose->status;

    if($statuss===false){
      return redirect()->back()->withInput()->withFlashMessage($messages);


    }elseif($statuss===true){
          return redirect::route('absensi')->with(compact('data'))->withFlashMessage($messages);
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
    //
    $request = Request::create('api/absensi/'.$id,'delete');
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages=$respose->message;
    return redirect::route('absensi')->with(compact('data'))->withFlashMessage($messages);
}
}
