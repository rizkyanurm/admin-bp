<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;


class Karir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/karir', 'GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.karir.karir',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.karir.create');
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
        'golongan' => Input::get('golongan'),
        'pangkat' => Input::get('pangkat'),
        'poin_kaizen' => Input::get('poin_kaizen'),
        'poin_kredit' => Input::get('poin_kredit'),
      ];
      $request = Request::create('api/karir', 'POST', $input);
      $respose = json_decode(Route::dispatch($request)->getContent());
      $data = $respose->data->response;
      $statuss = $respose->status;
      $messages= $respose->message;
//      return View::make('admin.karir.create')->with('statuss')->with(compact('data'));
        
            if($statuss===false){
      return redirect()->back()->withInput()->withFlashMessage($messages);
              


    }elseif($statuss===true){
          return redirect::route('karir')->with(compact('data'))->withFlashMessage($messages);
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
          'golongan' => Input::get('golongan'),
          'pangkat' => Input::get('pangkat'),
          'poin_kaizen' => Input::get('poin_kaizen'),
          'poin_kredit' => Input::get('poin_kredit'),
        ];

        $request = Request::create('api/karir/'.$id, 'PUT', $input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss =$respose->status;
        
            if($statuss===false){
      return redirect()->back()->withInput()->withFlashMessage($messages);


    }elseif($statuss===true){
          return redirect::route('karir')->with(compact('data'))->withFlashMessage($messages);
      }

        
//        // return $messages;
//        return Redirect::route('karir')->with(compact('data'))->withFlashMessage($messages);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $request = Request::create('api/karir/'.$id, 'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return Redirect::route('karir')->with(compact('data'))->withFlashMessage($messages);
    }
}
