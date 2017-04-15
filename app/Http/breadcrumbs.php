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

	//Home > Departemen > tambah
	Breadcrumbs::register('adddepartemen', function($breadcrumbs){
		$breadcrumbs->parent('departemen');
		$breadcrumbs->push('Tambah Departemen', route('adddepartemen'));
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
		$breadcrumbs->push('Karyawan', route('employee'));
	});

	//Home > Employee > tambah
	Breadcrumbs::register('addemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Tambah Karyawan', route('addemployee'));
	});

	//Home > Employee > Edit
	Breadcrumbs::register('editemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Edit Karyawan', route('editemployee'));
	});

	//Home > dt Employee 
	Breadcrumbs::register('dt_employe', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Log Karyawan', route('dt_employe'));
	});

//Home > dt Employee 
	Breadcrumbs::register('add_dt_employe', function($breadcrumbs){
		$breadcrumbs->parent('dt_employe');
		$breadcrumbs->push('Tambah Log Karyawan', route('add_dtemploye'));
	});



	//Home > Employee > Detail
	Breadcrumbs::register('detailemployee', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Detail Karyawan', route('show_employee'));
	});



///////////////////////////////////////////////////////////////////////



	//Home> Departemen > divisi 
	Breadcrumbs::register('divisi', function($breadcrumbs){
		$breadcrumbs->parent('departemen');
		$breadcrumbs->push('Divisi', route('divisi'));
	});

	//Home > Departemen > Divisi> tambah Divisi
	Breadcrumbs::register('add divisi', function($breadcrumbs){
		$breadcrumbs->parent('divisi');
		$breadcrumbs->push('Tambah Divisi', route('adddivisi'));
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

	//Home > Karir > tambah
	Breadcrumbs::register('addkarir', function($breadcrumbs){
		$breadcrumbs->parent('karir');
		$breadcrumbs->push('Tambah Karir', route('addkarir'));
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

	//Home > Jabatan > tambah
	Breadcrumbs::register('addjabatan', function($breadcrumbs){
		$breadcrumbs->parent('jabatan');
		$breadcrumbs->push('Tambah Jabatan', route('addjabatan'));
	});

	//Home > Jabatan >Edit
	Breadcrumbs::register('editjabatan', function($breadcrumbs){
		$breadcrumbs->parent('jabatan');
		$breadcrumbs->push('Edit jabatan', route('editjabatan'));
	});

//////////////////////////////////////////////////////////////////////
	Breadcrumbs::register('poinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Poin Kepemimpinan', route('ppimpin'));

	});
	Breadcrumbs::register('addpoinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Tambah Poin Pimpin', route('add_ppimpin'));
	});
	Breadcrumbs::register('editpoinpimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Edit Poin Pimpin', route('edit_ppimpin'));

	});
	Breadcrumbs::register('detailpoinpimpin',function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Detail Poin', route('detailpoin'));
	});
	Breadcrumbs::register('addpertanyaanp', function($breadcrumbs){
		$breadcrumbs->parent('detailpoinpimpin');
		$breadcrumbs->push('Tambah Pertanyaan', route('addpertanyaanp'));
	});
	Breadcrumbs::register('dtppimpin', function($breadcrumbs){
		$breadcrumbs->parent('poinpimpin');
		$breadcrumbs->push('Data Poin Pimpin', route('dt_pimpin'));
	});

	Breadcrumbs::register('add_dtpimpin', function($breadcrumbs){
		$breadcrumbs->parent('dtppimpin');
		$breadcrumbs->push('Tambah Data Pimpin', route('add_dtpimpin'));
	});
	
//////////////////////////////////////////////////////////////////////

Breadcrumbs::register('poinkinerja', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Poin Kinerja', route('pkinerja'));
	});

	Breadcrumbs::register('budaya', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Budaya Perusahaan', route('budaya'));
	});

	Breadcrumbs::register('addbudaya', function($breadcrumbs){
		$breadcrumbs->parent('budaya');
		$breadcrumbs->push('Tambah Budaya', route('add_budaya'));
	});
	Breadcrumbs::register('edit_budaya', function($breadcrumbs){
		$breadcrumbs->parent('budaya');
		$breadcrumbs->push('Edit Budaya', route('edit_budaya'));
	});

Breadcrumbs::register('aspek', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Aspek Budaya', route('aspek'));
	});
	Breadcrumbs::register('addaspek', function($breadcrumbs){
		$breadcrumbs->parent('aspek');
		$breadcrumbs->push('Tambah Aspek', route('addaspek'));
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
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('tambah Poin', route('add_pkinerja'));
	});
	Breadcrumbs::register('editpoin', function($breadcrumbs){
		$breadcrumbs->parent('poinkinerja');
		$breadcrumbs->push('Edit poin', route('edit_pkinerja'));
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
		$breadcrumbs->push('Tambah Kaizen', route('addkaizen'));
	});

	Breadcrumbs::register('editkaizen', function($breadcrumbs){
		$breadcrumbs->parent('kaizen');
		$breadcrumbs->push('Edit kaizen', route('edit_pkaizen'));
	});


	Breadcrumbs::register('dtpkaizen', function($breadcrumbs){
		$breadcrumbs->parent('kaizen');
		$breadcrumbs->push('Data Poin Kaizen', route('dt_kaizen'));
	});

  Breadcrumbs::register('add_dtkaizen', function($breadcrumbs){
      $breadcrumbs->parent('dtpkaizen');
      $breadcrumbs->push('Data Kaizen', route('add_dtkaizen'));
  });

//////////////////////////KPI////////////////////////////////////
    Breadcrumbs::register('kpi', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('KPI', route('kpi'));
    });
	breadcrumbs::register('addkpi', function($breadcrumbs){
		$breadcrumbs->parent('kpi');
		$breadcrumbs->push('Tambah KPI', route('addkpi'));
	});
	breadcrumbs::register('editkpi', function($breadcrumbs){
		$breadcrumbs->parent('kpi');
		$breadcrumbs->push('editkpi', route('editkpi'));
	});

//////////////////////////dtKPI////////////////////////////////

    Breadcrumbs::register('dtkpi', function($breadcrumbs){
		$breadcrumbs->parent('kpi');
		$breadcrumbs->push('dtkpi', route('dtkpi'));
    });
	breadcrumbs::register('add_dtkpi', function($breadcrumbs){
		$breadcrumbs->parent('dtkpi');
		$breadcrumbs->push('Tambah Data KPI', route('add_dtkpi'));
	});
	breadcrumbs::register('edit_dtkpi', function($breadcrumbs){
		$breadcrumbs->parent('dtkpi');
		$breadcrumbs->push('edit_dtkpi', route('edit_dtkpi'));
	});

///////////////////////JamKerja//////////////////////////////

Breadcrumbs::register('jamkerja', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Jam Kerja', route('jamkerja'));
	});


Breadcrumbs::register('addjamkerja', function($breadcrumbs){
        $breadcrumbs->parent('jamkerja');
        $breadcrumbs->push('Tambah Jam Kerja', route('addjamkerja'));
});


Breadcrumbs::register('editjamkerja',function($breadcrumbs){
        $breadcrumbs->parent('jamkerja');
        $breadcrumbs->push('Edit Jam Kerja', route('editjamkerja'));
});
//////////////////////////DT_JAMKERJA///////////////////////////////


Breadcrumbs::register('dt_jamkerja', function($breadcrumbs){
		$breadcrumbs->parent('employee');
		$breadcrumbs->push('Data Jam Kerja', route('dt_jkerja'));
	});


Breadcrumbs::register('add_dtjamkerja', function($breadcrumbs){
        $breadcrumbs->parent('dt_jamkerja');
        $breadcrumbs->push('Tambah Data Jam Kerja', route('add_dtjkerja'));
});


Breadcrumbs::register('edit_dtjkerja',function($breadcrumbs){
        $breadcrumbs->parent('dt_jamkerja');
        $breadcrumbs->push('Edit Jam Kerja', route('edit_dtjkerja'));
});
/////////////////////////////////////////////////////////


Breadcrumbs::register('absensi', function($breadcrumbs){
		$breadcrumbs->parent('admin');
		$breadcrumbs->push('Absensi', route('absensi'));
	});
	
	breadcrumbs::register('addabsensi', function($breadcrumbs){
		$breadcrumbs->parent('absensi');
		$breadcrumbs->push('Tambah Absensi', route('addabsensi'));
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
		$breadcrumbs->push('Tambah Amanah', route('addamanah'));
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