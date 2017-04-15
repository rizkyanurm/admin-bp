<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;
use Bimaproteksi\Models\Budaya;

class Pkinerja extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/pkinerja','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.p_kinerja.poin.poin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $budaya = Budaya::all();
      return View::make('admin.p_kinerja.poin.create')->with(compact('budaya'));
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
        $input =[
            'budaya'=>Input::get('budaya'),
            'aspek_poin'=>Input::get('aspek_poin'),
            'nama_pkinerja'=>Input::get('nama_pkinerja'),
            'bobot_metrik'=>Input::get('bobot_metrik'),
        ];
        $request = Request::create('api/pkinerja','POST');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('pkinerja')->with(compact('data'))->withFlashMessage($messages);
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
        $input =[
            'budaya'=>Input::get('budaya'),
            'aspek_poin'=>Input::get('aspek_poin'),
            'nama_pkinerja'=>Input::get('nama_pkinerja'),
            'bobot_metrik'=>Input::get('bobot_metrik'),
        ];
        
        $request = Request::create('api/pkinerja/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('pkinerja')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/pkinerja/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return redirect::route('pkinerja')->with(compact('data'))->withFlashMessage($messages);
    }
    
    public function tampil(){
        return View::make('admin.p_kinerja.poin_kinerja');
    }
}
