@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
					@if(Auth::user()->level=="ADMIN")
						<div class="panel-body">
							Halaman Admin
						</div>
					@else
						<div class="panel-body">
							Halaman User
						</div>
					@endif
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
