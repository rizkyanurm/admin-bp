<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Redirect, Request, Route, View, Input;


class Pkaizen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/pkaizen','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
//        return $data;
        return View::make('admin.p_kaizen.kaizen', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return View::make('admin.p_kaizen.create');
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
          'kegiatan'=>Input::get('kegiatan'),
          'bukti_keg'=>Input::get('bukti_keg'),
          'jenis'=>Input::get('jenis'),
        ];
        
        $request = Request::create('api/pkaizen','POST', $input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages = $respose->message;
        
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('kaizen')->with(compact('data'))->withFlashMessage($messages);
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
            'kegiatan'=>Input::get('kegiatan'),
            'bukti_keg'=>Input::get('bukti_keg'),
            'jenis'=>Input::get('jenis'),
        ];
        $request = Request::create('api/pkaizen/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data= $respose->data->response;
        $messages= $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('kaizen')->with(compact('data'))->withFlashMessage($messages);
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
          $request = Request::create('api/pkaizen/'.$id,'delete');
    $respose = json_decode(Route::dispatch($request)->getContent());
    $data = $respose->data->response;
    $messages=$respose->message;
    return redirect::route('kaizen')->with(compact('data'))->withFlashMessage($messages);
    }
}
