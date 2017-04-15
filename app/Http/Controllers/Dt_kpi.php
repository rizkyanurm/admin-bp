<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Request;
use Redirect, Response, Route, View, Input;
use Bimaproteksi\Models\Kpi;

class Dt_kpi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/dtkpi','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
//        return $data;
        return View::make('admin.dt_kpi.dt_kpi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $kpi=Kpi::all();
        return View::make('admin.dt_kpi.create')->with(compact('kpi'));
        
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
            'kpi'=>Input::get('kpi'),
            'tgl_mulai'=>Input::get('tgl_mulai'),
            'tgl_selesai'=>Input::get('tgl_selesai'),
            'status'=>Input::get('status'),
        ];
        $request = Request::create('api/dtkpi','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss =$respose->status;
        $messages = $respose->message;
        
        if($statuss===false){
            return redirect()->back()->withInput();
        }elseif($statuss===true){
            return redirect::route('dtkpi')->with(compact('data'))->withFlashMessage($messages);
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
            'id_kpi'=>Input::get('id_kpi'),
            'tgl_mulai'=> Input::get('tgl_mulai'),
            'tgl_selesai'=> Input::get('tgl_selesai'),
            'status' => Input::get('status'),
        ];
        $request = Request::create('api/kpi/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        
        $data =$respose->data->response;
        $mesagess = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('dtkpi')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/dtkpi/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return Redirect::route('dtkpi')->with(compact('data'))->withFlashMessage('messages');
    }
}
