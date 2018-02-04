@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de usuarios<a href="usuario/create"><button class=btn btn-success>Nuevo</button></h3></a>
				@include('administrador.usuario.search')	
			

		</div>
	</div>	
	<div class="row">

		<div class="col-1g-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">


				<table class="table table-striped table-bordead table-condensed table-hover">

					<thead>
						
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Avatar</th>
						<th>rol</th>

					</thead>	

					@foreach($usuario as $user)
						
						<tr>

							<td>{{ $user->UserName}}</td>
							<td>{{ $user->Email}}</td>
							<td>{{ $user->Password}}</td>
							<td>{{ $user->Avatar}}</td>
							<td>{{ $user->Rol}}</td>


							<td>
								
								<a href="{{URL::action('UsuarioController@edit',$user->IdUsuario)}}"> <button class="btn btn-info">Editar </button></a>


								<a href="" data-target="#modal-delete-{{$user->IdUsuario}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
								
							</td>
							
							
						</tr>
					@include('administrador.usuario.modal')
					@endforeach
			</table>

			<div>

			{{$usuario->render()}}	
			
		</div>

	</div>	

@endsection