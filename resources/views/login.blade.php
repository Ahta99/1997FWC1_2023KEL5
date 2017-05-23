<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','PLN')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/css/business-casual.css')}}">
	
	<style type="text/css">
			body {
					padding-top: 200px;
					padding-bottom: 200px;
			}
			.starter-template {
					padding: 40px 15px;
					text-align: center;
			}
			.form-horizontal{
					padding: 50px 10px;
			}
			footer{
					padding-top: 15px;
					text-align: right;
			}
			
	</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
					</div>
				</div>
		</nav>
		
	<div class="col-md-4 col-md-offset-4" style="background-color:white; border-radius:10px;">
	
{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
				<div class="form-group">
					<label class="col-sm-4 controll-label">Username</label>
				<div class="col-sm-8">
{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
				</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-4 controll-label">Password</label>
				<div class="col-sm-8">
{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"Password"]) !!}
				</div>
				</div>
	<div style="width:100%;text-align:right;">
		<button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
{!! Form::close() !!}
	</div>
	

</div>
	<nav class="navbar-default navbar-fixed-bottom">
		<footer class="container">
		
		</footer>
	</nav>
	
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(function(){
			$('[data-toggle="tooltip"]').tooltip()});
		</script>
</body>
</html>