@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de proyectos<a href="proyecto/create"><button class=btn btn-success>Nuevo</button></h3></a>
			@include('administrador.proyecto.search')	

		</div>
	</div>	
	<div class="row">

		<div class="col-1g-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">


				<table class="table table-striped table-bordead table-condensed table-hover">

					<thead>
						
						<th>Name</th>
						<th>Descripcion</th>
						<th>Avatar</th>
						<th>Alias</th>
						<th>Status</th>
						<th>IDP</th>
						<th>FDP</th>
						<th>LeaderUser</th>

					</thead>	

					@foreach($proyecto as $pro)
						
						<tr>
							<td>{{ $pro->NameProject}}</td>
							<td>{{ $pro->DescriptionProject}}</td>
							<td>{{ $pro->AvatarProject}}</td>
							<td>{{ $pro->AliasProject}}</td>
							<td>{{ $pro->StatusProject}}</td>
							<td>{{ $pro->InitialDateProject}}</td>
							<td>{{ $pro->FinalDateProject}}</td>
							<td>{{ $pro->LeaderUser}}</td>

							<td>
								
								<a href="{{URL::action('ProjectController@edit',$pro->IdProject)}}"> <button class="btn btn-info">Editar </button></a>
								<a href="" data-target="#modal-delete-{{$pro->IdProject}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
							</td>

						</tr>
					@include('administrador.proyecto.modal')	
					@endforeach
			</table>

			<div>

			{{$proyecto->render()}}	
			
		</div>

	</div>	

@endsection
