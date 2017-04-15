<?php

namespace Bimaproteksi\Http\Controllers;

use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;

class Ppimpin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/ppimpin','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.p_pimpin.pimpin')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return View::make('admin.p_pimpin.create');
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
          'id_ppimpin'=>Input::get('id_ppimpin'),
          'nama_ppimpin'=>Input::get('nama_ppimpin'),
        ];
        
        $request = Request::create('api/ppimpin','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages = $respose->message;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('ppimpin')->with(compact('data'))->withFlashMessage($messages);
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
        $input = [
         
            'nama_ppimpin'=>Input::get('nama_ppimpin'),
        ];
        $rquest = Request::create('api/ppimpin/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss==true){
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
        $request = Request::create('api/ppimpin/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return Redirect::route('ppimpin')->with(compact('data'))->withFlashMessage($messages);
    }
}
