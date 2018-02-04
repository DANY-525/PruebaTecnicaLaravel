@extends('layouts.user')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de usuarios</h3>
					
			

		</div>
	</div>	
	<div class="row">

		<div class="col-1g-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">


				<table class="table table-striped table-bordead table-condensed table-hover">

					<thead>
						
						<th>Name</th>
						<th>Avatar</th>
						

					</thead>	

					@foreach($usuario as $user)
						
						<tr>

							<td>{{ $user->UserName}}</td>
							<td>{{ $user->Avatar}}</td>
							<td>{{ $user->Rol}}</td>
										
						</tr>
					
					@endforeach
			</table>

			<div>

			{{$usuario->render()}}	
			
		</div>

	</div>	

@endsection