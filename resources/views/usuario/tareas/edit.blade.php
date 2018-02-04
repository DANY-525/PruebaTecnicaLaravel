@extends('layouts.user')
@section('contenido')
	

	<div class="row">

		<div class="div.col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Asignar tarea{{$tareas->ParenTask}}</h3>

			<div class="alert alert-danger">
				
				<ul>

				@if(count($errors)>0)	

					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach

				</ul>
				@endif

			</div>

			{!!Form::model($tareas,['method' => 'PATCH','route'=>['usuario.tareas.update',$tareas->Idtask]])!!}

			{{Form::Token()}}


			<div class="form-group">
				
				<label for="tarea padre"></label>
				<input type="text" name="ParentTask" class="form-control" value="{{$tareas->ParentTask}}" placeholder="tarea padre...">

			</div>

			<div class="form-group">
				
				<label for="padre	descripcion tarea"></label>
				<input type="DescripcionTask" name="Tags" value="{{$tareas->DescripcionTask}}" class="form-control" placeholder="DescripcionTask...">

			</div>



			<div class="form-group">
				
				<label for="id de la tarea tarea"></label>
				<input type="text" name="FK_Idtask" value="{{$tareas->FK_Idtask}}" class="form-control" placeholder="identificador tarea...">






			</div>

		

			
			<div class="form-group">
				
				<label for="alias"></label>
				<input type="text" name="AliasTask" value="{{$tareas->AliasTask}}" class="form-control" placeholder="nombre alias...">

			</div>

				
			<div class="form-group">
				
				<label for="estado de tarea"></label>
				<input type="text" name="StatusTask" value="{{$tareas->StatusTask}}"  class="form-control" placeholder="estado...">

			</div>


			<div class="form-group">
				
				<label for="IDT"></label>
				<input type="text" name="InitialDateTask" value="{{$tareas->InitialDateTask}}" class="form-control" placeholder="	InitialDateTask...">

			</div>

			

			<div class="form-group">
				
				<label for="FDT"></label>
				<input type="text" name="FinalDateTask" value="{{$tareas->FinalDateTask}}" class="form-control" placeholder="	FinalDateTask...">

			</div>


			<div class="form-group">
				
				<label for="usuario"></label>
				<input type="text" name="FK_IdUsuario"  value="{{$tareas->FK_IdUsuario}}"" class="form-control" placeholder="	usuario asignado Id...">

			</div>


			<div class="form-group">
				
				<label for="Nombre de Usuario"></label>
				<input type="text" name="FK_UserName" value="{{$tareas->FK_UserName}}" class="form-control" placeholder="	usuario asignado...">

			</div>


			<div class="form-group">
				
				<label for="id del proyecto"></label>
				<input type="text" name="FK_IdProject" value="{{$tareas->FK_IdProject}}"" class="form-control" placeholder="	identificador del proyecto...">

			</div>

			<div class="form-group">
				
				<label for="nombre del proyecto"></label>
				<input type="text" name="FK_NameProject" value="{{$tareas->FK_NameProject}}""class="form-control" placeholder="	nombre del proyecto...">

			</div>




			



			<div class="form-group">
				
			<button class="btn btn-primary" type="submit">Guardar</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::Close()!!}


		</div>
		
		
	</div>
@endsection
	