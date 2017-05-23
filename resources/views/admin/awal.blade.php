@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
						<div class="panel-body">
							<table border="0">
								<tr>
									<td><center><a href="/admin/tambah"><img src="../component/img/tambah.png" height="20%" width="70%"/></a></center></td>
									<td width="50%"><center><a href="/admin/edit"><img src="../component/img/perbarui.png" height="80%" width="80%"/></a></center></td>
									<td><a href="/upload">a</a></td>
								</tr>
							</table>
						</div>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
