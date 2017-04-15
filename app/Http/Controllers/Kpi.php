<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Request;
use Redirect, Response, Route, View, Input;
use Bimaproteksi\Models\Divisi;

class Kpi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/kpi', 'GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.kpi.kpi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $divisi=Divisi::all();
        return View::make('admin.kpi.create')->with(compact('divisi'));
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
        $input = [
            'divisi'=>Input::get('divisi'),
            'kode_kpi'=>Input::get('kode_kpi'),
            'tugas'=>Input::get('tugas'),
        ];
        
        $request = Request::create('api/kpi','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages = $respose->message;
        
        
        if($statuss===false){
            return redirect()->back()->withInput();
        }elseif($statuss===true){
            return redirect::route('kpi')->with(compact('data'))->withFlashMessage($messages);
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
            'id_divisi'=>Input::get('id_divisi'),
            'kode_kpi'=>Input::get('kode_kpi'),
            'tugas'=>Input::get('tugas'),
        ];
        
        $request = Request::create('api/kpi/'.$id,'PUT',$input);
        $respose=json_decode(Route::dispatch($request)->getContent());
        
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }
        elseif($statuss===true){
            return redirect::route('kpi')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/kpi/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return Redirect::route('kpi')->with(compact('data'))->withFlashMessage($messages);
    }
}
