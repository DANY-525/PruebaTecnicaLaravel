@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>listado de tareas<a href="tareas/create"><button class=btn btn-success>Nuevo</button></h3></a>
			
			

		</div>
	</div>	
	<div class="row">

		<div class="col-1g-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">


				<table class="table table-striped table-bordead table-condensed table-hover">

					<thead>
						
						<th>tarea padre</th>
						<th>descripcion tarea</th>
						<th>alias tarea</th>
						<th>estado de la tarea</th>
						<th>IDT</th>
						<th>FDT</th>
						<th>usuario asignado</th>
						<th>nombre de usuario</th>
						<th>identificador del proyecto</th>
						<th>nombre del proyecto</th>

						

					</thead>	

					@foreach($tareas as $task)
						
						<tr>
							<td>{{ $task->ParentTask}}</td>
							<td>{{ $task->DescripcionTask}}</td>
							<td>{{ $task->AliasTask}}</td>
							<td>{{ $task->StatusTask}}</td>
							<td>{{ $task->InitialDateTask}}</td>
							<td>{{ $task->FinalDateTask}}</td>
							<td>{{ $task->FK_IdUsuario}}</td>
							<td>{{ $task->FK_UserName}}</td>
							<td>{{ $task->FK_IdProject}}</td>
							<td>{{ $task->FK_NameProject}}</td>

							<td>
								<a href="{{URL::action('TareasController@edit',$task->Idtask)}}"> <button class="btn btn-info">Editar </button></a>
								<a href="" data-target="#modal-delete-{{$task->Idtask}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
							</td>


							

						</tr>

					@include('administrador.tareas.modal')	
				
					@endforeach
			</table>

			<div>

			{{$tareas->render()}}	
			
		</div>

	</div>	

@endsection
