@extends('layouts.user')
@section('contenido')
	

	<div class="row">

		<div class="div.col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Nuevo Comentario</h3>

			<div class="alert alert-danger">
				
				<ul>

				@if(count($errors)>0)	

					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach

				</ul>
				@endif

			</div>


			{!!Form::Open(array('url'=>'administrador/comentarios','method'=>'POST','autocomplete' =>'off'))!!}

			{{Form::Token()}}

			<div class="form-group">
				
				<label for="Titulo"></label>
				<input type="text" name="TitleComment" class="form-control" placeholder="Titulo...">

			</div>

			<div class="form-group">
				
				<label for="Etiquetas"></label>
				<input type="text" name="Tags" class="form-control" placeholder="Etiquetas...">

			</div>



			<div class="form-group">
				
				<label for="id de la tarea tarea"></label>
				<input type="text" name="FK_Idtask" class="form-control" placeholder="Ticket...">

			</div>

		

			
			<div class="form-group">
				
				<label for="tarea relacionada"></label>
				<input type="text" name="FK_ParentTask" class="form-control" placeholder="nombre de la tarea relacionada...">

			</div>

				
			<div class="form-group">
				
				<label for="id del usuario"></label>
				<input type="text" name="FK_IdUsuario" class="form-control" placeholder="identificador del user...">

			</div>


			<div class="form-group">
				
				<label for="usuario relacionado"></label>
				<input type="text" name="FK_UserName" class="form-control" placeholder="usuario comentado...">

			</div>





			<div class="form-group">
				
			<button class="btn btn-primary" type="submit">Guardar</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::Close()!!}


		</div>
		
		
	</div>
@endsection
	