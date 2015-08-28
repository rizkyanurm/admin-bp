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

Route::get('/editemployee',['as'=>'editemployee', function(){
 	return view('admin/employee/edit');
 }]);
Route::get('/delete_employe',['as'=>'delete_employee','uses'=>'Employe@delete']);

Route::get('/detail_employee',['as'=>'detail_employee', function(){
    return view('admin/employee/detail');
}]);



//{url admin/departemen}

Route::get('/departemen', ['as'=>'departemen', 'uses'=>'Departement@index']);


 Route::get('/adddepartemen',['as'=>'adddepartemen', function(){
    return view('admin/departemen/create');
}]);

Route::get('/editdepartemen',['as'=>'editdepartemen', function(){
    return view('admin/departemen/edit');
 }]);


//{url admin/divisi}

Route::get('/divisi', ['as'=>'divisi', function(){
    return view('admin/divisi/divisi');
}]);
 Route::get('/adddivisi',['as'=>'adddivisi', function(){
    return view('admin/divisi/create');
}]);

 Route::get('/editdivisi', ['as'=>'editdivisi',function(){
    return view('admin/divisi/edit');
}]);

//{url admin/karir}

 Route::get('/karir', ['as'=>'karir', function(){
    return view('admin/karir/karir');
 }]);

 Route::get('/addkarir',['as'=>'addkarir', function(){
    return view('admin/karir/create');
 }]);

 Route::get('/editkarir',['as'=>'editkarir', function(){
    return view('admin/karir/edit');
 }]);

 Route::get('/delete',['as'=>'deletekarir', function(){
   return view('admin/karir/edit');
 }]);


 //{url admin/jabatan}

 Route::get('/jab',['as'=>'jabatan', function(){
    return view('admin/jabatan/jabatan');
 }]);

 Route::get('/addjabatan', ['as'=>'addjabatan', function(){
    return view('admin/jabatan/create');
 }]);

 Route::get('/editjabatan',['as'=>'editjabatan', function(){
    return view('admin/jabatan/edit');
 }]);

 Route::get('/deletejabatan',['as'=>'delete_jabatan', function(){
   return view('admin/karir/edit');
 }]);


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