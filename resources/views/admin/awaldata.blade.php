@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
						<div class="panel-body">
							<table border="0">
								<tr>
									<td><center><a href="/admin/tambah"><img src="../component/img/tambah.png" height="20%" width="70%"/></a></center></td>
									<td width="50%"><center><a href="/admin/edit"><img src="../component/img/perbarui.png" height="80%" width="80%"/></a></center></td>
								</tr>
							</table>
						</div>
                <div class="panel-body">
                    <table class="table">
						<thead>
							<tr>
								<th><center>No.</center></th>
								<th><center>ID USER</center></th>
								<th><center>ID JENIS PEMASANGAN</center></th>
								<th><center>ID CABANG</center></th>
								<th><center>ID STATUS</center></th>
								<th><center>ID ADMIN</center></th>
							</tr>
						</thead>
						<tbody>
							<?php $x=1;?>
							@foreach($pemasang as $data)
								<tr>
									<td><center>{{ $x++ }}</center></td></center>
									<td><center>{{ $data->id_user or 'user kosong'}}</center></td>
									<td><center>{{ $data->id_pemasangan or 'jenis kosong'}}</center></td>
									<td><center>{{ $data->id_cabang or 'cabang kosong'}}</center></td>
									<td><center>{{ $data->id_status or 'status kosong'}}</center></td>
									<td><center>{{ $data->id_admin or 'admin kosong'}}</center></td>
									<td>
										<div class="btn-group" role="group">
									<a href="{{url('admin/edit/data/'.$data->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top"
									title="Ubah"><i class="fa fa-pencil"></i></a>
									<a href="{{url('admin/hapus/data'.$data->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top"
									title="Hapus"><i class="fa fa-remove"></i></a>
										</div>
									</td>
								</tr>
								@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
