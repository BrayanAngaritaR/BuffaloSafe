@extends('admin.app')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-md-3 col-lg-3 no-padding">
			<div class="panel  panel-widget border-right">
				<div class="row no-padding"><i class="fas fa-eye"></i>
					<div class="large">120</div>
					<div class="dashboard-small">Visitantes</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 col-lg-3 no-padding ">
			<div class="panel panel-widget border-right">
				<div class="row no-padding"><i class="fas fa-file-upload"></i></em>
					<div class="large">96</div>
					<div class="dashboard-small">Archivos</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 col-lg-3 no-padding">
			<div class="panel  panel-widget border-right">
				<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
					<div class="large">13</div>
					<div class="dashboard-small">Usuarios</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 col-lg-3 no-padding">
			<div class="panel  panel-widget ">
				<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
					<div class="large">25.2k</div>
					<div class="dashboard-small">Páginas vistas</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
@stop
				