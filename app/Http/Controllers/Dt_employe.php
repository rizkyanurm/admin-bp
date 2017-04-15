<?php

namespace Bimaproteksi\Http\Controllers;

//use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response, Route, View, Input;
use Bimaproteksi\Models\Amanah;
use Bimaproteksi\Models\Divisi;
use Bimaproteksi\Models\Jabatan;
use Bimaproteksi\Models\Karir;
use Bimaproteksi\Models\Employe;

class Dt_employe extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request = Request::create('api/dtemploye','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.employee.data.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $amanah = Amanah::all();
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        $karir = Karir::all();
        $employe = Employe::all();
        return View::make('admin.employee.data.create')->with(compact('amanah'))->with(compact('divisi'))->with(compact('jabatan'))->with(compact('karir'))->with(compact('employe'));
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
            'id_employe'=>Input::get('id_employe'),
            'id_amanah'=>Input::get('id_amanah'),
            'id_divisi'=>Input::get('id_divisi'),
            'id_jabatan'=>Input::get('id_jabatan'),
            'id_karir'=>Input::get('id_karir'),
        ];
        
          $request = Request::create('api/dtemploye', 'POST', $input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $statuss = $respose->status;
        $messages = $respose->message;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss==true){
            return redirect::route('dt_employe')->with(compact('data'))->withFlashMessage($messages);
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
        
        $request = Request::create('api/dtemploye/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return redirect::route('dt_employe')->with(compact('data'))->withFlashMessage($messages);
    }
}
