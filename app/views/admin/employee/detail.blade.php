@extends('admin.admin')

@section('breadcrumbs')

{!! Breadcrumbs::render('detailemployee') !!}

@endsection

@section('content')


<div class="col-md-12">

<div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">Detail Karyawan</h3>
                                </div>
                                <div class="panel-body">
                           			<p>Nama </p>
                           			<p>Email</p>
                           			<p>Tgl Lahir</p>
                           			<p>Agama</p>
                           			<p>Jenis Kelamin</p>
                           			<p>Umur</p>
                           			<p>Alamat</p>
                           			<p>No Telepon</p>
                           			<p>Departemen</p>
                           			<p>Jenjang Karir</p>
                           			<p>Jabatan</p> 
                           			<p>Status Karyawan</p>
                           			<p>Mulai Kerja</p>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Back</button>
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>                            
                            </div>
</div>


@endsection