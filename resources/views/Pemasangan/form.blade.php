	
	<div class="form-group" style="width:30%">
		{!! Form::label('Jenis_Pemasangan', 'Pilih Jenis Pemasangan', array('class' => 'control-label')) !!}
		  <select name="id_pemasang" class="form-control">
			@foreach ($pasang as $data)
			  <option value="{{ $data->id }}">Tipe : {{ $data->Tipe }}, Harga : Rp{{ $data->Harga}}</option>
			@endforeach
		  </select>
	</div>
		
<div class="form-group">
	<label id="Cabang">Pilih Cabang</label>
	<div style="padding:10px 80px">
		<div class="col-sm-10">
			{{ Form::label('cabang-1', 'Kalimantan Timur') }}
			{{ Form::radio('id_cabang', 1, false, array('id'=>'cabang-1')) }}
		</div>
		
		<div class="col-sm-10">
			{{ Form::label('cabang-2', 'Kalimantan Selatan') }}
			{{ Form::radio('id_cabang', 2, false, array('id'=>'cabang-2')) }}
		</div>
		
		<div class="col-sm-10">
			{{ Form::label('cabang-3', 'Kalimantan Barat') }}
			{{ Form::radio('id_cabang', 3, false, array('id'=>'cabang-3')) }}
		</div>
		
		<div class="col-sm-10">
			{{ Form::label('cabang-4', 'Kalimantan Utara') }}
			{{ Form::radio('id_cabang', 4, false, array('id'=>'cabang-4')) }}
		</div>

	</div>
</div>
