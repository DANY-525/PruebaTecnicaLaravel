@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de comentarios<a href="comentarios/create"><button class=btn btn-success>Nuevo</button></h3></a>
			@include('administrador.comentarios.search')
			

		</div>
	</div>	
	<div class="row">

		<div class="col-1g-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">


				<table class="table table-striped table-bordead table-condensed table-hover">

					<thead>
						
						<th>titulo</th>
						<th>descripcion</th>
						<th>pertenece a tarea</th>
						<th>Comentado por</th>
						

					</thead>	

					@foreach($comentarios as $com)
						
						<tr>
							<td>{{ $com->TitleComment}}</td>
							<td>{{ $com->Tags}}</td>
							<td>{{ $com->FK_ParentTask}}</td>
							<td>{{ $com->FK_UserName}}</td>

							<td>
								
								<a href="{{URL::action('ComentariosController@edit',$com->	IdComments)}}"> <button class="btn btn-info">Editar </button></a>

								<a href="" data-target="#modal-delete-{{$com->IdComments}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
						
							</td>

						</tr>
					@include('administrador.comentarios.modal')		
					@endforeach
			</table>

			<div>

			{{$comentarios->render()}}	
			
		</div>

	</div>	

@endsection
