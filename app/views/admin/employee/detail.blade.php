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

                                <table class="table table-bordered">
                               @foreach($data as $key=>$val)
                                  <tr>
                                  <th>Nama</th>
                                  <td>{{ $val->nama }}</td>
                                  </tr>

                                  <tr>
                                  <th>Email</th>
                                  <td>{{ $val->email }}</td>
                                  </tr>

                                  <tr>
                                  <th>Tgl Lahir</th>
                                  <td>{{ $val->tgl_lahir }}</td>
                                  </tr>

                                  <tr>
                                  <th>Agama</th>
                                  <td>{{ $val->agama }}</td>
                                  </tr>

                                  <tr>
                                  <th>Jenis Kelamin</th>
                                  <td>{{ $val->jenis_kelamin }}</td>
                                </tr>

                                <tr>
                                <th>Umur</th>
                                <td>{{ $val->umur }}</td>
                                </tr>

                                <tr>
                                  <th>Alamat</th>
                                  <td>{{ $val->alamat }}</td>
                                </tr>

                                <tr>
                                  <th>No Telpon</th>
                                  <td>{{ $val->no_telp }}</td>
                                </tr>
                                @endforeach
                              
                                </table>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Back</button>
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>                            
                            </div>
</div>

@stop
@endsection