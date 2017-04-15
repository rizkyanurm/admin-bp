<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// api base
Route::group(['prefix' => 'api'/*,'middleware'=>'simpleauth'*/], function()
{
    Route::resource('employe','Api\EmployeController');
    Route::resource('departement','Api\DepartementController');
    Route::resource('divisi','Api\DivisiController');
    Route::resource('amanah','Api\AmanahController');
    Route::resource('karir', 'Api\KarirController');
    Route::resource('jabatan','Api\JabatanController');
    Route::resource('absensi','Api\AbsensiController');
    Route::resource('jamkerja','Api\JamkerjaController');
    Route::resource('dtjkerja', 'Api\DtjkerjaController');
    Route::resource('kpi','Api\KpiController');
    Route::resource('dtkpi','Api\DtkpiController');
    Route::resource('pkaizen','Api\PkaizenController');
    Route::resource('ppimpin','Api\PpimpinController');
    Route::resource('dtpkaizen','Api\DtkaizenController');
    Route::Resource('dtppimpin','Api\DtpimpinController');
    Route::resource('budaya','Api\BudayaController');
    Route::resource('pkinerja','Api\PkinerjaController');
    Route::resource('dtpkinerja','Api\DtpkinerjaController');
    Route::resource('dtemploye','Api\DtemployeController');
    
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login',['as'=>'login','uses'=> 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register',['as'=>'register','uses'=>  'Auth\AuthController@postRegister']);


Route::controllers([
   
    'password'=>'Auth\PasswordController',
    'auth' => 'Auth\AuthController',
]);

//model
// Route::model('employee','Employe');

// html base
Route::get('/', function () {return view('layouts/template');});
Route::get('version', function () {return view('version');});
//Route::get('login', function () {return view('auth/login');});

Route::resource('departement','Departement');
Route::resource('divisi', 'Divisi');
Route::resource('karir', 'Karir');
Route::resource('jamkerja','Jamkerja');

///////////////////////// Employee//////////////////////////////
Route::get('/homeemployee',['as'=>'HomeEmployee', function(){
    return view('employee/home_emp');
}]);

Route::get('/selfEvaluation', function() {
	return view('employee/selfEvaluation');
});

Route::get('/kadivEvaluation', function(){
	return view('employee/kadivEval');
});

Route::get('/maEvaluation', function(){
	return view('employee/managerEval');
});

Route::get('/ceoEvaluation', function(){
	return view ('employee/ceoEval');
});

////////////////////////Admin//////////////////////////////////////
 // Route::get('/employee', array('uses'=>'EmployeController@create','after'=>'json.protect',function(){
 	// $test=array(
 		// "foo"=>"bar");

 	// return response::json($test);

 // }));

// function(){return view::make('admin/employee')->with('response', json_decode($response->status,true));

//Route::resource('employee', 'EmployeController');

//Route::get('/employee', function(){
//	return view('admin/employee')
//});




//{url home admin}

 Route::get('/homeadmin',['as'=>'admin', 'uses'=>'Dashboard@index', 'middleware'=>'auth']);


//{url admin/employee}
Route::get('/employee',['middleware'=>'auth','as'=>'employee', 'uses'=> 'Employe@index']);

Route::get('/addemployee', ['as'=>'addemployee','uses'=>'Employe@create', 'middleware'=>'auth']);

Route::post('/addemployee', ['as'=>'employee_store','uses'=>'Employe@store', 'middleware'=>'auth']);

Route::get('/editemployee/{id}',['as'=>'editemployee', 'uses'=>'Api\EmployeController@edit', 'middleware'=>'auth']);

Route::post('/editemployee/{id}',['as'=>'updateemployee','uses'=>'Employe@update','middleware'=>'auth']);

Route::delete('/delete_employe/{id}',['as'=>'delete_employee','uses'=>'Employe@destroy', 'middleware'=>'auth']);

Route::get('/detail/{id}',['as'=>'show_employee','uses'=>'Api\EmployeController@show', 'middleware'=>'auth']);



//{url admin dt employe}

Route::get('/dt/employe',['as'=>'dt_employe','uses'=>'Dt_employe@index', 'middleware'=>'auth']);

Route::get('/add/dt/employe',['as'=>'add_dtemploye', 'uses'=>'Dt_employe@create', 'middleware'=>'auth']);

Route::post('/add/dt/employe',['as'=>'store_dtemploye', 'uses'=>'Dt_employe@store', 'middleware'=>'auth']);

Route::delete('/delete/dt/employe/{id}',['as'=>'delete_dtemploye','uses'=>'Dt_employe@destroy', 'middleware'=>'auth']);

//{url admin/departemen}

Route::get('/departemen', ['as'=>'departemen', 'uses'=>'Departement@index', 'middleware'=>'auth']);

Route::get('/adddepartemen',['as'=>'adddepartemen', 'uses'=>'Departement@create', 'middleware'=>'auth']);

Route::post('/addepartemen',['as'=>'departemen_store','uses'=>'Departement@store', 'middleware'=>'auth']);

Route::get('/edit/{id}',['as'=>'editdepartemen','uses'=>'Api\DepartementController@edit', 'middleware'=>'auth']);

Route::post('/edit/{id}',['as'=>'updatedepartemen','uses'=>'Departement@update', 'middleware'=>'auth']);

Route::get('/detail/departemen/{id}',['as'=>'detail_departemen','uses'=>'Departement@show', 'middleware'=>'auth']);

Route::delete('/delete/departemen/{id}',['as'=>'delete_departemen','uses'=>'Departement@destroy', 'middleware'=>'auth']);

//{url admin/divisi}

Route::get('/divisi', ['as'=>'divisi', 'uses'=> 'Divisi@index', 'middleware' =>'auth']);

Route::get('/adddivisi',['as'=>'adddivisi', 'uses' =>'Divisi@create', 'middleware'=>'auth']);

Route::post('/adddivisi',['as'=>'divisi_store', 'uses'=>'Divisi@store', 'middleware'=>'auth']);

Route::get('/editdivisi/{id}', ['as'=>'editdivisi','uses' =>'Api\DivisiController@edit', 'middleware'=>'auth']);

Route::post('/updatedivisi/{id}',['as'=>'updatedivisi', 'uses'=>'Divisi@update', 'middleware'=>'auth']);

Route::delete('/delete/divisi/{id}',['as'=>'delete_divisi', 'uses'=>'Divisi@destroy', 'middleware'=>'auth']);

//{url admin/karir}

 Route::get('/karir', ['as'=>'karir','uses'=>'Karir@index', 'middleware'=>'auth']);

 Route::get('/addkarir',['as'=>'addkarir', 'uses'=>'Karir@create', 'middleware'=>'auth']);

 Route::post('/addkarir',['as'=>'store_karir','uses'=>'Karir@store', 'middleware'=>'auth']);

 Route::get('/editkarir/{id}',['as'=>'editkarir', 'uses'=>'Api\KarirController@edit', 'middleware'=>'auth']);

 Route::post('/editkarir/{id}',['as'=>'updatekarir', 'uses'=>'Karir@update', 'middleware'=>'auth']);

 Route::delete('/delete/karir/{id}',['as'=>'delete_karir', 'uses'=> 'Karir@destroy', 'middleware'=>'auth']);



//url{url admin/dt_jkerja}
Route::get('/dt_jamkerja',['as'=>'dt_jkerja', 'uses'=>'Dtjkerja@index', 'middleware'=>'auth']);

Route::get('/add/dtjkerja', ['as'=>'add_dtjkerja', 'uses'=>'Dtjkerja@create', 'middleware'=>'auth']);

Route::post('/add/dtjkerja',['as'=>'store_dtjkerja','uses'=>'Dtjkerja@store', 'middleware'=>'auth']);

Route::get('/edit/dtjkerja/{id}',['as'=>'edit_dtjkerja', 'uses'=>'Api\DtjkerjaController@edit', 'middleware'=>'auth']);

Route::post('/edit/dtjkerja/{id}',['as'=>'update_dtjkerja', 'uses'=>'Dtjkerja@update', 'middleware'=>'auth']);

Route::delete('/delete/jkerja/{id}',['as'=>'delete_dtjkerja', 'uses'=> 'Dtjkerja@destroy', 'middleware'=>'auth']);



 //{url admin/jabatan}

 Route::get('/jab',['as'=>'jabatan','uses' => 'Jabatan@index', 'middleware'=>'auth']);

 Route::get('/addjabatan', ['as'=>'addjabatan','uses'=>'Jabatan@create', 'middleware'=>'auth']);

 Route::post('/addjabatan', ['as'=>'jabatan_store', 'uses'=>'Jabatan@store', 'middleware'=>'auth']);

 Route::get('/editjabatan/{id}',['as'=>'editjabatan', 'uses'=>'Api\JabatanController@edit', 'middleware'=>'auth']);

 Route::post('editjabatan/{id}',['as'=>'updatejabatan', 'uses'=>'Jabatan@update', 'middleware'=>'auth']);

 Route::delete('/deletejabatan/{id}',['as'=>'delete_jabatan','uses'=>'Jabatan@destroy', 'middleware'=>'auth']);


//{url:poin kepemimpinan}

 Route::get('/poinpimpin',['as'=>'ppimpin', 'uses'=>'Ppimpin@index', 'middleware'=>'auth']);

 Route::get('/add/ppimpin',['as'=>'add_ppimpin','uses'=>'Ppimpin@create', 'middleware'=>'auth']);

Route::post('/add/ppimpin',['as'=>'store_ppimpin', 'uses'=>'Ppimpin@store', 'middleware'=>'auth']);

 Route::get('/edit/ppimpin/{id}',['as'=>'edit_ppimpin','uses'=>'Api\PpimpinController@edit', 'middleware'=>'auth']);

 Route::post('/edit/ppimpin/{id}',['as'=>'update_ppimpin','uses'=>'Ppimpin@update', 'middleware'=>'auth']);

Route::delete('/delete/ppimpin/{id}',['as'=>'delete_ppimpin','uses'=>'Ppimpin@destroy', 'middleware'=>'auth']);



 ///////////////////{url:poin kinerja}///////////////////////

Route::get('/pkinerja/index',['as'=>'pkinerja_','uses'=>'Pkinerja@tampil', 'middleware'=>'auth']);

Route::get('/pkinerja',['as'=>'pkinerja','uses'=>'Pkinerja@index', 'middleware'=>'auth']);

Route::get('/add/pkinerja',['as'=>'add_pkinerja', 'uses'=>'Pkinerja@create', 'middleware'=>'auth']);

Route::post('/add/pkinerja',['as'=>'store_pkinerja', 'uses'=>'Pkinerja@store','middleware'=>'auth']);

Route::get('/edit/pkinerja/{id}',['as'=>'edit_pkinerja', 'uses'=>'Api\PkinerjaController@edit', 'middleware'=>'auth']);

Route::post('/edit/pkinerja/{id}',['as'=>'update_pkinerja', 'uses'=>'Pkinerja@update', 'middleware'=>'auth']);

Route::delete('/delete/pkinerja/{id}',['as'=>'delete_pkinerja','uses'=>'Pkinerja@destroy', 'middleware'=>'auth']);



 //dt_poinkinerja

Route::get('/dt/pkinerja',['as'=>'dt_pkinerja','uses'=>'Dt_pkinerja@index', 'middleware'=>'auth']);

Route::get('/add/dt/pkinerja',['as'=>'add_dtpkinerja', 'uses'=>'Dt_pkinerja@create', 'middleware'=>'auth']);

Route::post('/add/dt/pkinerja',['as'=>'store_dtpkinerja', 'uses'=>'Dt_pkinerja@store', 'middleware'=>'auth']);

Route::delete('/delete/dt/pkinerja/{id}',['as'=>'delete_dtpkinerja','uses'=>'Dt_pkinerja@destroy', 'middleware'=>'auth']);

 // Bobot poin

 Route::get('/bobotpoin',['as'=>'bobotpoin', function(){
    return view('admin/p_kinerja/bobot');
 }]);

 //Budaya

Route::get('/budaya',['as'=>'budaya','uses'=>'Budaya@index', 'middleware'=>'auth']);

Route::get('/add/budaya',['as'=>'add_budaya', 'uses'=>'Budaya@create', 'middleware'=>'auth']);

Route::post('/add/budaya',['as'=>'store_budaya', 'uses'=>'Budaya@store', 'middleware'=>'auth']);

Route::get('/edit/budaya/{id}',['as'=>'edit_budaya', 'uses'=>'Api\BudayaController@edit', 'middleware'=>'auth']);

Route::post('/edit/budaya/{id}',['as'=>'update_budaya', 'uses'=>'Budaya@update', 'middleware'=>'auth']);

Route::delete('/delete/budaya/{id}',['as'=>'delete_budaya','uses'=>'Budaya@destroy','middleware'=>'auth']);


//aspek
Route::get('/aspek',['as'=>'aspek', function(){
    return view('admin/p_kinerja/aspek/aspek');
}]);

Route::get('/addaspek',['as'=>'addaspek', function(){
    return view('admin/p_kinerja/aspek/create');
}]);

Route::get('/editaspek',['as'=>'editaspek', function(){
    return view('admin/p_kinerja/aspek/edit');
}]);



///////////////////////////{url:/kaizen}///////////////////////

Route::get('/kaizen', ['as'=>'kaizen', 'uses'=>'Pkaizen@index', 'middleware'=>'auth']);

Route::get('/add/kaizen',['as'=>'addkaizen', 'uses'=>'Pkaizen@create', 'middleware'=>'auth']);

Route::post('/add/kaizen',['as'=>'store_pkaizen','uses'=>'Pkaizen@store', 'middleware'=>'auth']);

Route::get('/edit/kaizen/{id}',['as'=>'edit_pkaizen', 'uses'=>'Api\PkaizenController@edit', 'middleware'=>'auth']);

Route::post('/edit/kaizen/{id}',['as'=>'update_pkaizen','uses'=>'Pkaizen@update','middleware'=>'auth']);

Route::delete('/delete/kaizen/{id}',['as'=>'delete_pkaizen','uses'=>'Pkaizen@destroy','middleware'=>'auth']);

//Route::get('/dtpkaizen',['as'=>'dtpkaizen']);



//////////////////////DT-KAIZEN///////////////////////////
route::get('/dt/kaizen',['as'=>'dt_kaizen', 'uses'=>'Dtkaizen@index', 'middleware'=>'auth']);

route::get('/add/dt/kaizen',['as'=>'add_dtkaizen', 'uses'=>'Dtkaizen@create', 'middleware'=>'auth']);

route::post('/add/dt/kaizen',['as'=>'store_dtkaizen','uses'=>'Dtkaizen@store', 'middleware'=>'auth']);

route::get('/edit/dt/kaizen/{id}',['as'=>'edit_dtkaizen','uses'=>'Api\DtkaizenController@edit', 'middleware'=>'auth']);

route::post('/edit/dt/kaizen/{id}',['as'=>'update_dtkaizen', 'uses'=>'Dtkaizen@update', 'middleware'=>'auth']);

route::delete('/delete/dt/kaizen/{id}',['as'=>'delete_dtkaizen','uses'=>'Dtkaizen@destroy', 'middleware'=>'auth']);



//////////////////////DT-Pimpin///////////////////////////
route::get('/dt/pimpin',['as'=>'dt_pimpin', 'uses'=>'Dtpimpin@index', 'middleware'=>'auth']);

route::get('/add/dt/pimpin',['as'=>'add_dtpimpin', 'uses'=>'Dtpimpin@create', 'middleware'=>'auth']);

route::post('/add/dt/pimpin',['as'=>'store_dtpimpin','uses'=>'Dtpimpin@store', 'middleware'=>'auth']);

route::get('/edit/dt/pimpin/{id}',['as'=>'edit_dtpimpin','uses'=>'Api\DtpimpinController@edit', 'middleware'=>'auth']);

route::post('/edit/dt/pimpin/{id}',['as'=>'update_dtpimpin', 'uses'=>'Dtpimpin@update', 'middleware'=>'auth']);

route::delete('/delete/dt/pimpin/{id}',['as'=>'delete_dtpimpin','uses'=>'Dtpimpin@destroy', 'middleware'=>'auth']);

////////////////////KPI//////////////////////////////////
Route::get('/kpi',['as'=>'kpi', 'uses'=>'Kpi@index', 'middleware'=>'auth']);

Route::get('/add/kpi',['as'=>'addkpi', 'uses'=>'Kpi@create', 'middleware'=>'auth']);

Route::post('/add/kpi',['as'=>'store_kpi','uses'=>'Kpi@store', 'middleware'=>'auth']);

Route::get('/edit/kpi/{id}',['as'=>'editkpi', 'uses'=>'Api\KpiController@edit', 'middleware'=>'auth']);

Route::post('/edit/kpi/{id}',['as'=>'update_kpi','uses'=>'Kpi@update', 'middleware'=>'auth']);

Route::delete('/delete/{id}',['as'=>'delete_kpi', 'uses' =>'Kpi@destroy', 'middleware'=>'auth']);



/////////////////DtKpi///////////////////////////////////
Route::get('/dtkpi',['as'=>'dtkpi', 'uses'=>'Dt_kpi@index', 'middleware'=>'auth']);

Route::get('/add/dtkpi',['as'=>'add_dtkpi', 'uses'=>'Dt_kpi@create', 'middleware'=>'auth']);

Route::post('/add/dtkpi',['as'=>'store_dtkpi','uses'=>'Dt_kpi@store', 'middleware'=>'auth']);

Route::get('/edit/dtkpi/{id}',['as'=>'edit_dtkpi', 'uses'=>'Api\DtkpiController@edit', 'middleware'=>'auth']);

Route::post('/edit/dtkpi/{id}',['as'=>'update_dtkpi','uses'=>'Dt_kpi@update', 'middleware'=>'auth']);

Route::delete('/delete/{id}',['as'=>'delete_dtkpi', 'uses' =>'Dt_kpi@destroy', 'middleware'=>'auth']);

//////////////////Jam Kerja//////////////////////////////

Route::get('/jamkerja', ['as'=>'jamkerja', 'uses'=>'Jamkerja@index', 'middleware'=>'auth']);

Route::get('/add/jamkerja',['as'=>'addjamkerja','uses'=>'Jamkerja@create', 'middleware'=>'auth']);

Route::post('/add/jamkerja',['as'=>'jamkerja_store', 'uses'=>'Jamkerja@store', 'middleware'=>'auth']);

Route::get('/edit/jamkerja/{id}',['as'=>'editjamkerja', 'uses'=>'Api\JamkerjaController@edit', 'middleware'=>'auth']);

Route::post('/edit/jamkerja/{id}',['as'=>'update_jamkerja', 'uses'=>'Jamkerja@update', 'middleware'=>'auth']);

Route::delete('/delete/jamkerja/{id}', ['as'=>'delete_jamkerja', 'uses'=>'Jamkerja@destroy', 'middleware'=>'auth']);


//////////////////absensi////////////////////
Route::get('/absensi',['as'=>'absensi','uses'=>'Absensi@index', 'middleware'=>'auth']);

Route::get('/editabsensi/{id}',['as'=>'editabsensi', 'uses'=>'Api\AbsensiController@edit', 'middleware'=>'auth']);

Route::post('editabsensi/{id}',['as'=>'updateabsensi', 'uses'=>'Absensi@update', 'middleware'=>'auth']);

Route::get('/addabsensi',['as'=>'addabsensi','uses'=>'Absensi@create', 'middleware'=>'auth']);

Route::post('/addabsensi',['as'=>'absensi_store','uses'=>'Absensi@store', 'middleware'=>'auth']);

Route::delete('/deleteabsensi/{id}',['as'=>'delete_absensi', 'uses'=>'Absensi@destroy', 'middleware'=>'auth']);


//////////////// amanah/////////////////////////////
Route::get('/amanah',['as'=>'amanah','uses'=>'Amanah@index', 'middleware'=>'auth']);

Route::get('/editamanah/{id}',['as'=>'editamanah', 'uses'=>'Api\AmanahController@edit', 'middleware'=>'auth']);

Route::post('editamanah/{id}',['as'=>'updateamanah', 'uses'=>'Amanah@update', 'middleware'=>'auth']);

Route::get('/addamanah',['as'=>'addamanah','uses'=>'Amanah@create', 'middleware'=>'auth']);

Route::post('/addamanah',['as'=>'amanah_store','uses'=>'Amanah@store', 'middleware'=>'auth']);

Route::delete('/deleteamanah/{id}',['as'=>'delete_amanah', 'uses'=>'Amanah@destroy', 'middleware'=>'auth']);

//Gaji

Route::get('/gaji',['as'=>'gaji', function(){
        return view('admin/gaji/gaji');
}]);

Route::get('/detailgaji',['as'=>'detail_gaji', function(){
        return view('admin/gaji/detail');
}]);



Route::get('version', function () {
    return view('version');
});



// Route::filter('json.protect',function($route,$request,$response = null)
// {
    // if($response instanceof \Illuminate\Http\JsonResponse) {
        // $json = ")]}',\n" . $response->getContent();
        // return $response->setContent($json);
    // }
// });
