<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;

class Jamkerja extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request=Request::create('api/jamkerja','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.jkerja.jkerja', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return View::make('admin.jkerja.create');
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
            'jam_kerja_normal'=>Input::get('jam_kerja_normal'),
            'hari_kerja_normal'=>Input::get('hari_kerja_normal'),
            'jam_kerja_aktual'=>Input::get('jam_kerja_aktual'),
            'hari_kerja_aktual'=>Input::get('hari_kerja_aktual'),
            'nama_jkerja'=>Input::get('nama_jkerja'),
        ];
        $request = Request::create('api/jamkerja','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages = $respose->message;
        
        
        if($statuss === false){
            return redirect::route('addjamkerja')->withInput()->withFlashMessage($messages);
        }
        elseif($statuss === true){
            return redirect::route('jamkerja')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/jamkerja/'.$id,'GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        
        return View::make('admin.jkerja.detail')->with(compact('data'));
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
        $request = Request::create('api/jamkerja/'.$id,'GET');
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
            'jam_kerja_normal'=>Input::get('jam_kerja_normal'),
            'hari_kerja_normal'=>Input::get('hari_kerja_normal'),
            'jam_kerja_aktual'=>Input::get('jam_kerja_aktual'),
            'hari_kerja_aktual'=>Input::get('hari_kerja_aktual'),
            'nama_jkerja'=>Input::get('nama_jkerja'),
            
        ];
        $request = Request::create('api/jamkerja/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }
        elseif($statuss===true){
            return redirect::route('jamkerja')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/jamkerja/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data =$respose->data->response;
        $messages=$respose->message;
        return redirect::route('jamkerja')->with(compact('data'))->withFlashMessage($messages);
    }
}
