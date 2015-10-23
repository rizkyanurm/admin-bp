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
});

//model
// Route::model('employee','Employe');

// html base
Route::get('/', function () {return view('layouts/template');});
Route::get('version', function () {return view('version');});
Route::get('login', function () {return view('auth/login');});
Route::resource('employe','Employe');
Route::resource('departement','Departement');

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

 Route::get('/homeadmin',['as'=>'admin', function(){
        return view('admin/admin');
 }]);


//{url admin/employee}
Route::get('/employee', ['as'=>'employee', 'uses'=> 'Employe@index']);

Route::get('/addemployee', ['as'=>'addemployee','uses'=>'Employe@create']);

Route::post('/addemployee', ['as'=>'employee_store','uses'=>'Employe@store']);

Route::get('/editemployee/{id}',['as'=>'editemployee', 'uses'=>'Api\EmployeController@edit']);

Route::post('/editemployee/{id}',['as'=>'updateemployee','uses'=>'Employe@update']);

Route::delete('/delete_employe/{id}',['as'=>'delete_employee','uses'=>'Employe@destroy']);

Route::get('/detail_employee/{id}',['as'=>'show_employee','uses'=>'Employe@show']);



//{url admin/departemen}

Route::get('/departemen', ['as'=>'departemen', 'uses'=>'Departement@index']);

Route::get('/adddepartemen',['as'=>'adddepartemen', 'uses'=>'Departement@create']);

Route::post('/addepartemen',['as'=>'departemen_store','uses'=>'Departement@store']);

Route::get('/edit/{id}',['as'=>'editdepartemen','uses'=>'Api\DepartementController@edit']);

Route::post('/edit/{id}',['as'=>'updatedepartemen','uses'=>'Departement@update']);

Route::delete('/delete/{id}',['as'=>'delete_departemen','uses'=>'Departement@destroy']);

//{url admin/divisi}

Route::get('/divisi', ['as'=>'divisi', 'uses'=> 'Divisi@index']);

Route::get('/adddivisi',['as'=>'adddivisi', 'uses' =>'Divisi@create']);

Route::post('/adddivisi',['as'=>'divisi_store', 'uses'=>'Divisi@store']);

Route::get('/editdivisi/{id}', ['as'=>'editdivisi','uses' =>'Api\DivisiController@edit']);

Route::post('/updatedivisi/{id}',['as'=>'updatedivisi', 'uses'=>'Divisi@update']);

Route::delete('/delete/{id}',['as'=>'delete_divisi', 'uses'=>'Divisi@destroy']);

//{url admin/karir}

 Route::get('/karir', ['as'=>'karir','uses'=>'Karir@index']);

 Route::get('/addkarir',['as'=>'addkarir', 'uses'=>'Karir@create']);

 Route::post('/addkarir',['as'=>'store_karir','uses'=>'Karir@store']);

 Route::get('/editkarir/{id}',['as'=>'editkarir', 'uses'=>'Api\KarirController@edit']);

 Route::post('/editkarir/{id}',['as'=>'updatekarir', 'uses'=>'Karir@update']);

 Route::delete('/delete/{id}',['as'=>'delete_karir', 'uses'=> 'Karir@destroy']);


 //{url admin/jabatan}

 Route::get('/jab',['as'=>'jabatan','uses' => 'Jabatan@index']);

 Route::get('/addjabatan', ['as'=>'addjabatan','uses'=>'Jabatan@create']);

 Route::post('/addjabatan', ['as'=>'jabatan_store', 'uses'=>'Jabatan@store']);

 Route::get('/editjabatan/{id}',['as'=>'editjabatan', 'uses'=>'Api\JabatanController@edit']);

 Route::post('editjabatan/{id}',['as'=>'updatejabatan', 'uses'=>'Jabatan@update']);

 Route::delete('/deletejabatan/{id}',['as'=>'delete_jabatan','uses'=>'Jabatan@destroy']);


//{url:poin kepemimpinan}

 Route::get('/kepemimpinan',['as'=>'kepemimpinan', function(){
    return view('admin/p_kepemimpinan/kepemimpinan');
 }]);

 Route::get('/addkepemimpinan',['as'=>'addpoinpimpin', function(){
    return view('admin/p_kepemimpinan/create');
 }]);

 Route::get('/editkepemimpinan',['as'=>'editpoinpimpin', function(){
    return view('admin/p_kepemimpinan/edit');
 }]);

 Route::get('/detailpoinpimpin',['as'=>'detailpoin',function(){
    return view('admin/p_kepemimpinan/detail');
 }]);

 Route::get('/addpertanyaanp',['as'=>'addpertanyaanp', function(){
    return view('admin/p_kepemimpinan/create_p');
 }]);

Route::get('/dtppimpin',['as'=>'dtpoinpimpin', function(){
    return view('admin/p_kepemimpinan/dt_poinpimpin');
}]);

 ///////////////////{url:poin kinerja}///////////////////////

 Route::get('/poinkinerja',['as'=>'poinkinerja', function(){
    return view('admin/p_kinerja/poin_kinerja');
}]);

 //dt_poinkinerja

 Route::get('/dtpkinerja',['as'=>'dtpkinerja', function(){
    return view('admin/p_kinerja/dt_poinkinerja');
 }]);

 // Bobot poin

 Route::get('/bobotpoin',['as'=>'bobotpoin', function(){
    return view('admin/p_kinerja/bobot');
 }]);

 //Budaya

Route::get('/budaya',['as'=>'budaya',function(){
    return view('admin/p_kinerja/budaya/budaya');
}]);

Route::get('/addbudaya',['as'=>'addbudaya', function(){
    return view('admin/p_kinerja/budaya/create');
}]);

Route::get('/editbudaya',['as'=>'editbudaya', function(){
    return view('admin/p_kinerja/budaya/edit');
}]);

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

//Poin
Route::get('/poin',['as'=>'poin', function(){
    return view('admin/p_kinerja/poin/poin');
}]);

Route::get('/addpoin', ['as'=>'addpoin', function(){
    return view('admin/p_kinerja/poin/create');
}]);

Route::get('/editpoin',['as'=>'editpoin', function(){
    return view('admin/p_kinerja/poin/edit');
}]);

///////////////////////////{url:/kaizen}///////////////////////

Route::get('/kaizen', ['as'=>'kaizen', function(){
    return view('admin/p_kaizen/kaizen');
}]);

Route::get('/addkaizen',['as'=>'addkaizen', function(){
    return view('admin.p_kaizen/create');
}]);

Route::get('/editkaizen',['as'=>'editkaizen', function(){
    return view('admin/p_kaizen/edit');
}]);

Route::get('/dtpkaizen',['as'=>'dtpkaizen', function(){
    return view('admin/p_kaizen/dtpkaizen');
}]);

//////////////////////////////////////////////////////
Route::get('/kpi',['as'=>'kpi_project', function(){
    return view('admin/kpi_project/kpi_project');
}]);

Route::get('/addkpi',['as'=>'addkpi', function(){
    return view('admin/kpi_project/create');
}]);

Route::get('/editkpi',['as'=>'editkpi', function(){
    return view('admin/kpi_project/edit');
}]);

////////////////////////////////////////

Route::get('/jamkerja', ['as'=>'jamkerja', function(){
        return view('admin/jkerja/jkerja');
}]);

//////////////////absensi////////////////////
Route::get('/absensi',['as'=>'absensi', function(){
        return view('admin/absensi/absensi');
}]);

Route::get('/editabsensi',['as'=>'editabsensi', function(){
        return view('admin/absensi/edit');
}]);

Route::get('/addabsensi',['as'=>'addabsensi', function(){
        return view('admin/absensi/create');
}]);

// amanah
Route::get('/amanah',['as'=>'amanah','uses'=>'Amanah@index']);

Route::get('/editamanah/{id}',['as'=>'editamanah', 'uses'=>'Api\AmanahController@edit']);

Route::post('editamanah/{id}',['as'=>'updateamanah', 'uses'=>'Amanah@update']);

Route::get('/addamanah',['as'=>'addamanah','uses'=>'Amanah@create']);

Route::post('/addamanah',['as'=>'amanah_store','uses'=>'Amanah@store']);

Route::delete('/deleteamanah/{id}',['as'=>'delete_amanah', 'uses'=>'Amanah@destroy']);

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
