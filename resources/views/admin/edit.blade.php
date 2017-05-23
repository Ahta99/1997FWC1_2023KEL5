@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					<a href="/admin">Menu</a>
				</div>
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
								<th>No.</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>No_HP</th>
							</tr>
						</thead>
						<tbody>
							<?php $x=1;?>
							@foreach($sadmin as $data)
								<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $data->Nama or 'nama kosong'}}</td>
									<td>{{ $data->Alamat or 'alamat kosong'}}</td>
									<td>{{ $data->No_HP or 'alamat kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
									<a href="{{url('admin/edit/'.$data->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top"
									title="Ubah"><i class="fa fa-pencil"></i></a>
									<a href="{{url('admin/hapus/'.$data->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top"
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



