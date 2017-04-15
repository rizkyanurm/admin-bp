<?php

namespace Bimaproteksi\Http\Controllers;

use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Redirect, Response, Route, View, Input;
use Bimaproteksi\Models\Jamkerja;

class Dtjkerja extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $request= Request::create('api/dtjkerja','GET');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        return View::make('admin.dt_jkerja.dt_jkerja',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $jamkerja =Jamkerja::all();
        return View::make('admin.dt_jkerja.create')->with(compact('jamkerja'));
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
            'tgl_jamker'=>Input::get('tgl_jamker'),
            'id_employe'=>Input::get('id_employe'),
            'id_jam_kerja'=>Input::get('id_jam_kerja'),
            'jml_jam_realita'=>Input::get('jml_jam_realita'),
            'total_jam_realita'=>Input::get('total_jam_realita'),
            'total_terlambat'=>Input::get('total_terlambat'),
            'total_kurang_jam'=>Input::get('total_kurang_jam'),
            'jumlah_cuti'=>Input::get('jumlah_cuti'),
            'jumlah_izin'=>Input::get('jumlah_izin'),
            'jumlah_lbr_kewarganegaraan' =>Input::get('jumlah_lbr_kewarganegaraan'),
            'jumlah_sakit'=>Input::get('jumlah_sakit'),
            'total_lembur'=>Input::get('total_lembur'),
            
            
        ];
        $request = Request::create('api/dtjkerja/','POST',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
        }elseif($statuss===true){
            return redirect::route('dt_jkerja')->with(compact('data'))->withFlashMessage($messages);
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
            'tgl_jamker'=>Input::get('tgl_jamker'),
            'id_employe'=>Input::get('id_employe'),
            'id_jam_kerja'=>Input::get('id_jam_kerja'),
            'jml_jam_realita'=>Input::get('jml_jam_realita'),
            'total_jam_realita'=>Input::get('total_jam_realita'),
            'total_terlambat'=>Input::get('total_terlambat'),
            'total_kurang_jam'=>Input::get('total_kurang_jam'),
            'jumlah_cuti'=>Input::get('jumlah_cuti'),
            'jumlah_izin'=>Input::get('jumlah_izin'),
            'jumlah_lbr_kewarganegaraan' =>Input::get('jumlah_lbr_kewarganegaraan'),
            'jumlah_sakit'=>Input::get('jumlah_sakit'),
            'total_lembur'=>Input::get('total_lembur'),  
            
        ];
       
        
        
        $request = Request::create('api/dtjkerja/'.$id,'PUT',$input);
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        $statuss = $respose->status;
       
        
        if($statuss===false){
            return redirect()->back()->withInput()->withFlashMessage($messages);
            
        }elseif($statuss===true){
            return redirect::route('dt_jkerja')->with(compact('data'))->withFlashMessage($messages);
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
        $request = Request::create('api/dtjkerja/'.$id,'delete');
        $respose = json_decode(Route::dispatch($request)->getContent());
        $data = $respose->data->response;
        $messages = $respose->message;
        return redirect::route('dt_jkerja')->with(compact('data'))->withFlashMessage($messages);
    }
}
