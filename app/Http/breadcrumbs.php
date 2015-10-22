<?php 

//EMPLOYEE
// Home-Employee
	Breadcrumbs::register('home_emp', function($breadcrumbs){
		$breadcrumbs->push('Home', route('HomeEmployee'));
	});

    
// ADMIN
	// Home-admin
	Breadcrumbs::register('admin', function($breadcrumbs){
		$breadcrumbs->push('Home', route('admin'));
	});

//////////////////////////////////////////////////////////////////
	//Home > Departemen
	Breadcrumbs::register('departemen', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Departemen', route('departemen'));
	});

	//Home > Departemen > Add
	Breadcrumbs::register('adddepartemen', function($breadcrumbs){
		$breadcrumbs->parent('departemen');
		$breadcrumbs->push('Add Departemen', route('adddepartemen'));
	});

	//Home > Departemen > Edit
	Breadcrumbs::register('editdepartemen', function($breadcrumbs){
		$breadcrumbs->parent('departemen');
		$breadcrumbs->push('Edit Departemen', route('editdepartemen'));
	});



	//////////////////////////////////////////////////////////////////////


	//Home > Employee 
	Breadcrumbs::register('employee', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Employee', route('employee'));
	});

	//Home > Employee > Add
	Breadcrumbs::register('addemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Add Employee', route('addemployee'));
	});

	//Home > Employee > Edit
	Breadcrumbs::register('editemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Edit Employee', route('editemployee'));
	});

	//Home > Employee > Detail
	Breadcrumbs::register('detailemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Detail Employee', route('show_employee'));
	});



///////////////////////////////////////////////////////////////////////



	//Home> Departemen > divisi 
	Breadcrumbs::register('divisi', function($breadcrumbs){
		$breadcrumbs->parent('departemen');
		$breadcrumbs->push('Divisi', route('divisi'));
	});

	//Home > Departemen > Divisi> Add Divisi
	Breadcrumbs::register('add divisi', function($breadcrumbs){
		$breadcrumbs->parent('divisi');
		$breadcrumbs->push('Add Divisi', route('adddivisi'));
	});	
	//Home > Departemen > Divisi> Edit Divisi
	Breadcrumbs::register('edit divisi', function($breadcrumbs){
		$breadcrumbs->parent('divisi');
		$breadcrumbs->push('Edit Divisi', route('editdivisi'));
	});	


	

	//////////////////////////////////////////////////////////////////


	//Home > Karir
	Breadcrumbs::register('karir', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Karir', route('karir'));
	});

	//Home > Karir > Add
	Breadcrumbs::register('addkarir', function($breadcrumbs){
		$breadcrumbs->parent('karir');
		$breadcrumbs->push('Add Karir', route('addkarir'));
	});

	//Home > Karir > Edit
	Breadcrumbs::register('editkarir', function($breadcrumbs){
		$breadcrumbs->parent('karir');
		$breadcrumbs->push('Edit Karir', route('editkarir'));
	});



//////////////////////////////////////////////////////////////////////////



	//Home > Jabatan 
	Breadcrumbs::register('jabatan', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Jabatan', route('jabatan'));
	});

	//Home > Jabatan > Add
	Breadcrumbs::register('addjabatan', function($breadcrumbs){
		$breadcrumbs->parent('jabatan');
		$breadcrumbs->push('Add Jabatan', route('addjabatan'));
	});

	//Home > Jabatan >Edit
	Breadcrumbs::register('editjabatan', function($breadcrumbs){
		$breadcrumbs->parent('jabatan');
		$breadcrumbs->push('Edit jabatan', route('editjabatan'));
	});

//////////////////////////////////////////////////////////////////////
	Breadcrumbs::register('poinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Poin Kepemimpinan', route('kepemimpinan'));

	});
	Breadcrumbs::register('addpoinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Add Poin Pimpin', route('addpoinpimpin'));
	});
	Breadcrumbs::register('editpoinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Edit Poin Pimpin', route('editpoinpimpin'));

	});
	Breadcrumbs::register('detailpoinpimpin',function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Detail Poin', route('detailpoin'));
	});
	Breadcrumbs::register('addpertanyaanp', function($breadcrumbs){
		$breadcrumbs->parent('detailpoinpimpin');
		$breadcrumbs->push('Add Pertanyaan', route('addpertanyaanp'));
	});
	Breadcrumbs::register('dtppimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Data Poin Pimpin', route('dtpoinpimpin'));
	});
	
//////////////////////////////////////////////////////////////////////

Breadcrumbs::register('poinkinerja', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Poin Kinerja', route('poinkinerja'));
	});

	Breadcrumbs::register('budaya', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Budaya Perusahaan', route('budaya'));
	});

	Breadcrumbs::register('addbudaya', function($breadcrumbs){
		$breadcrumbs->parent('budaya');
		$breadcrumbs->push('Add Budaya', route('addbudaya'));
	});
	Breadcrumbs::register('editbudaya', function($breadcrumbs){
		$breadcrumbs->parent('budaya');
		$breadcrumbs->push('Edit Budaya', route('editbudaya'));
	});

Breadcrumbs::register('aspek', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Aspek Budaya', route('aspek'));
	});
	Breadcrumbs::register('addaspek', function($breadcrumbs){
		$breadcrumbs->parent('aspek');
		$breadcrumbs->push('Add Aspek', route('addaspek'));
	});
	Breadcrumbs::register('editaspek', function($breadcrumbs){
		$breadcrumbs->parent('aspek');
		$breadcrumbs->push('Edit Aspek', route('editaspek'));
	});

Breadcrumbs::register('poin', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Poin', route('poin'));
	});
	Breadcrumbs::register('addpoin', function($breadcrumbs){
		$breadcrumbs->parent('poin');
		$breadcrumbs->push('Add Poin', route('addpoin'));
	});
	Breadcrumbs::register('editpoin', function($breadcrumbs){
		$breadcrumbs->parent('poin');
		$breadcrumbs->push('Edit poin', route('editpoin'));
	});

Breadcrumbs::register('bobot', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Bobot', route('bobotpoin'));
});

Breadcrumbs::register('dtpkinerja', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Data Poin Kinerja', route('dtpkinerja'));
});
/////////////////////////////////////////////////////////
Breadcrumbs::register('kaizen', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('kaizen', route('kaizen'));
});

	Breadcrumbs::register('addkaizen', function($breadcrumbs){
		$breadcrumbs->parent('kaizen');
		$breadcrumbs->push('Add Kaizen', route('addkaizen'));
	});

	Breadcrumbs::register('editkaizen', function($breadcrumbs){
		$breadcrumbs->parent('kaizen');
		$breadcrumbs->push('Edit kaizen', route('editkaizen'));
	});

	Breadcrumbs::register('dtpkaizen', function($breadcrumbs){
		$breadcrumbs->parent('kaizen');
		$breadcrumbs->push('Data Poin Kaizen', route('dtpkaizen'));
	});
Breadcrumbs::register('kpi', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('KPI', route('kpi_project'));
});
	breadcrumbs::register('addkpi', function($breadcrumbs){
		$breadcrumbs->parent('kpi');
		$breadcrumbs->push('add KPI', route('addkpi'));
	});
	breadcrumbs::register('editkpi', function($breadcrumbs){
		$breadcrumbs->parent('kpi');
		$breadcrumbs->push('editkpi', route('editkpi'));
	});

//////////////////////////////////////////////////////////
Breadcrumbs::register('jamkerja', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Jam Kerja', route('jamkerja'));
	});

Breadcrumbs::register('absensi', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Absensi', route('absensi'));
	});
	
	breadcrumbs::register('addabsensi', function($breadcrumbs){
		$breadcrumbs->parent('absensi');
		$breadcrumbs->push('Add Absensi', route('addabsensi'));
	});
	breadcrumbs::register('editabsensi',function($breadcrumbs){
		$breadcrumbs->parent('absensi');
		$breadcrumbs->push('Edit Absensi', route('editabsensi'));
	});
//////////////////////////////////////////////////////////
breadcrumbs::register('amanah', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Amanah', route('amanah'));
	});
	breadcrumbs::register('addamanah', function($breadcrumbs){
		$breadcrumbs->parent('amanah');
		$breadcrumbs->push('Add Amanah', route('addamanah'));
	});
	breadcrumbs::register('editamanah', function($breadcrumbs){
		$breadcrumbs->parent('amanah');
		$breadcrumbs->push('Edit Amanah', route('editamanah'));
	});
breadcrumbs::register('gaji', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('gaji', route('gaji'));
});

?>