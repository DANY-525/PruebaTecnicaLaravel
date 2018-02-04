@extends('layouts.user')
@section('contenido')
	

	<div class="row">

		<div class="div.col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Nueva Tarea</h3>

			<div class="alert alert-danger">
				
				<ul>

				@if(count($errors)>0)	

					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach

				</ul>
				@endif

			</div>


			{!!Form::Open(array('url'=>'usuario/tareas','method'=>'POST','autocomplete' =>'off'))!!}

			{{Form::Token()}}

			<div class="form-group">
				
				<label for="tarea padre"></label>
				<input type="text" name="ParentTask" class="form-control" placeholder="tarea padre...">

			</div>

			<div class="form-group">
				
				<label for="padre	descripcion tarea"></label>
				<input type="text" name="DescripcionTask" class="form-control" placeholder="DescripcionTask...">

			</div>



			<div class="form-group">
				
				<label for="id de la tarea tarea"></label>
				<input type="text" name="FK_Idtask" class="form-control" placeholder="Ticket">

			</div>

		

			
			<div class="form-group">
				
				<label for="alias"></label>
				<input type="text" name="AliasTask" class="form-control" placeholder="nombre alias...">

			</div>

				
			<div class="form-group">

				<label for="estado de tarea"></label>
				<select name="StatusTask" class="form-control">
				  <option value="noiniciada">no iniciada</option> 
				  <option value="progreso">progreso</option>
				  <option value="terminado">terminado</option> 
				</select>
				
			
			</div>


		

			<div class="form-group">
				
				<label for="IDT"></label>
				<input type="date" name="InitialDateTask" class="form-control" placeholder="InitialDateTask...">

			</div>


			<div class="form-group">
				
				<label for="FDT"></label>
				<input type="date" name="FinalDateTask" class="form-control" placeholder="	FinalDateTask...">

			</div>


			<div class="form-group">
				
				<label for="usuario"></label>
				<input type="text" name="FK_IdUsuario" class="form-control" placeholder="	usuario asignado Id...">

			</div>


			<div class="form-group">
				
				<label for="Nombre de Usuario"></label>
				<input type="text" name="FK_UserName" class="form-control" placeholder="	usuario asignado...">

			</div>


			<div class="form-group">
				
				<label for="id del proyecto"></label>
				<input type="text" name="FK_IdProject" class="form-control" placeholder="	identificador del proyecto...">

			</div>

			<div class="form-group">
				
				<label for="nombre del proyecto"></label>
				<input type="text" name="FK_NameProject" class="form-control" placeholder="	nombre del proyecto...">

			</div>


			<div class="form-group">
				
			<button class="btn btn-primary" type="submit">Guardar</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::Close()!!}


		</div>
		
		
	</div>
@endsection
	