<?php

namespace Bimaproteksi\Http\Controllers;

use Illuminate\Http\Request;
use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Response, Route, View, Input, Redirect;

class Jabatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/jabatan','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.jabatan.jabatan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view::make('admin.jabatan.create');
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
          'jabatan'=> Input::get('jabatan'),
          'tunjangan' => Input::get('tunjangan'),
          'jum_staff' =>Input::get('jum_staff'),
        ];

          $request = Request::create('api/jabatan', 'POST', $input);
          $respose = json_decode(Route::dispatch($request)->getContent());
          $data = $respose->data->response;
          $statuss =$respose->status;
          // return $data;
          return View::make('admin.jabatan.create')->with('statuss')->with(compact('data'));
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
          'jabatan'=>Input::get('jabatan'),
          'tunjangan'=>Input::get('tunjangan'),
          'jum_staff'=>Input::get('jum_staff'),
        ];

        $request = Request::create('api/jabatan/'.$id, 'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages=$respose->message;
        return redirect::route('jabatan')->with(compact('data'))->withFlashMessage($messages);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //

        $request = Request::create('api/jabatan/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages=$respose->message;
        return redirect::route('jabatan')->with(compact('data'))->withFlashMessage($messages);
    }
}
