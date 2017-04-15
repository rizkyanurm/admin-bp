<?php

namespace Bimaproteksi\Http\Controllers;

// use Illuminate\Http\Request;

use Bimaproteksi\Http\Requests;
use Bimaproteksi\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Response, Route, View, Input;
use Bimaproteksi\Models\Absensi;
use Bimaproteksi\Models\Dt_kpi;
use Bimaproteksi\Models\Dtjkerja;
use Bimaproteksi\Models\Dt_pkaizen;
use Bimaproteksi\Models\Dt_employe;


class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $dtjkerja = Dtjkerja::orderBy('created_at','ASC')->paginate(5);
        $dtkpi = Dt_kpi::orderBy('created_at','ASC')->paginate(5);
        $dtkaizen = Dt_pkaizen::orderBy('created_at','ASC')->paginate(5);
        $absensi = Absensi::orderBy('created_at','ASC')->paginate(5);
        $dtemploye = Dt_employe::orderBy('created_at','ASC')->paginate(5);
        return View::make('admin.admin_content')->with(compact('dtjkerja'))->with(compact('dtkpi'))->with(compact('dtkaizen'))->with(compact('absensi'))->with(compact('dtemploye'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
    }
}
