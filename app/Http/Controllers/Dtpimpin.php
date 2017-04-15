<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;
use Bimaproteksi\Models\Ppimpin;
use Illuminate\Http\Request;

class Dtpimpin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/dtppimpin', 'GET');
         $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.p_pimpin.dt_poinpimpin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $ppimpin = Ppimpin::all();
        return View::make('admin.p_pimpin.create_p', compact('ppimpin'));
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
            'id_amploye_p'=>Input::get('id_employe_p'),
            'id_employe_d'=>Input::get('id_employe_d'),
            'poin_pimpin'=>Input::get('poin_pimpin'),
           
            'nilai_ppimpin'=>Input::get('nilai_ppimpin'),
            'feedback'=>Input::get('feedback'),
            
        ];
        $request = Request::create('api/dtppimpin','POST', $input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages =$respose->message;
        
        if($statuss==false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss==true){
            return redirect::route('dt_pimpin')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/dtppimpin/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages =$respose->message;
        return redirect::route('dt_pimpin')->with(compact('data'))->withFlashMessage($messages);
    }
}
