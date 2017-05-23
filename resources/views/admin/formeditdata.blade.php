@extends('layouts.app')

@section('content')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('data_pemasangan') }}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui Data Pemasangan</strong>
	</div>
	
	{!! Form::model($data_pemasangan,['url'=>'admin/edit/data/'.$data_pemasangan->id,'class'=>'form-horizontal']) !!}
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ID_User">ID USER</label>
			<div class="col-sm-3">
			{!! Form::number('id_user',null,['class'=>'form-control','id'=>'ID_User','placeholder'=>"ID USER",'readonly'=>'true']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ID_Pemasangan">ID JENIS PEMASANGAN</label>
			<div class="col-sm-3">
			{!! Form::text('id_pemasangan',null,['class'=>'form-control','id'=>'ID_Pemasangan','placeholder'=>"ID PEMASANGAN",'readonly'=>'true']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ID_Cabang">ID CABANG</label>
			<div class="col-sm-3">
			{!! Form::text('id_cabang',null,['class'=>'form-control','id'=>'ID_Cabang','placeholder'=>"ID CABANG",'readonly'=>'true']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ID_Status">ID STATUS</label>
			<div class="col-sm-3">
			{!! Form::text('id_status',null,['class'=>'form-control','id'=>'ID_Status','placeholder'=>"ID STATUS"]) !!}
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ID_Admin">ID ADMIN</label>
			<div class="col-sm-3">
			{!! Form::text('id_admin',null,['class'=>'form-control','id'=>'ID_Admin','placeholder'=>"ID ADMIN"]) !!}
		</div>
	</div>
	
	<div style="width:100%;text-align:right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	
	{!! Form::close() !!}
</div>
@endsection