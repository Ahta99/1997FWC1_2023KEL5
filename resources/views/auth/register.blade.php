@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
						   <label class="col-md-4 control-label">Nama</label>

							<div class="col-md-6">
							   <input type="text" class="form-control" name="nama" value="{{ old('Nama') }}">

							   @if ($errors->has('nama'))
								  <span class="help-block">
									 <strong>{{ $errors->first('nama') }}</strong>
								  </span>
							   @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
						   <label class="col-md-4 control-label">Alamat</label>

							<div class="col-md-6">
							   <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">

							   @if ($errors->has('alamat'))
								  <span class="help-block">
									 <strong>{{ $errors->first('alamat') }}</strong>
								  </span>
							   @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('No_KTP') ? ' has-error' : '' }}">
						   <label class="col-md-4 control-label">NO_Identitas</label>

							<div class="col-md-6">
							   <input type="text" class="form-control" name="No_KTP" value="{{ old('No_KTP') }}">

							   @if ($errors->has('No_KTP'))
								  <span class="help-block">
									 <strong>{{ $errors->first('No_KTP') }}</strong>
								  </span>
							   @endif
							</div>
						</div>
                        
						<div class="form-group{{ $errors->has('Nomor_Telepon') ? ' has-error' : '' }}">
						   <label class="col-md-4 control-label">Nomor Telepon</label>

							<div class="col-md-6">
							   <input type="text" class="form-control" name="No_Tlp" value="{{ old('Nomor_Telepon') }}">

							   @if ($errors->has('Nomor_Telepon'))
								  <span class="help-block">
									 <strong>{{ $errors->first('Nomor_Telepon') }}</strong>
								  </span>
							   @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
						   <label class="col-md-4 control-label">Username</label>

							<div class="col-md-6">
							   <input type="text" class="form-control" name="username" value="{{ old('username') }}">

							   @if ($errors->has('username'))
								  <span class="help-block">
									 <strong>{{ $errors->first('username') }}</strong>
								  </span>
							   @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
