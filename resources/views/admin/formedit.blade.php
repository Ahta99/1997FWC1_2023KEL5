@extends('layouts.app')

@section('content')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('admin') }}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui Data Admin</strong>
	</div>
	
	{!! Form::model($admin,['url'=>'admin/edit/'.$admin->id,'class'=>'form-horizontal']) !!}
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="nama">Nama</label>
			<div class="col-sm-3">
			{!! Form::text('Nama',null,['class'=>'form-control','id'=>'Nama','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="nim">Alamat</label>
			<div class="col-sm-3">
			{!! Form::text('Alamat',null,['class'=>'form-control','id'=>'Alamat','placeholder'=>"Alamat"]) !!}
			</div>
	</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" id="No_HP">NO_HP</label>
			<div class="col-sm-3">
			{!! Form::number('No_HP',null,['class'=>'form-control','id'=>'No_HP','placeholder'=>"Nomor HP"]) !!}
			</div>
		</div>
	
	<div style="width:100%;text-align:right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	
	{!! Form::close() !!}
</div>
@endsection