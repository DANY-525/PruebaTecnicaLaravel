@extends('layouts.user')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de proyectos</h3>
				

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

						

						</tr>
				
					@endforeach
			</table>

			<div>

			{{$proyecto->render()}}	
			
		</div>

	</div>	

@endsection
