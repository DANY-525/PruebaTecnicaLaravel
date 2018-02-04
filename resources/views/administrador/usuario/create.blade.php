@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="div.col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Nuevo Usuario</h3>

			<div class="alert alert-danger">
				
				<ul>

				@if(count($errors)>0)	

					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach

				</ul>
				@endif

			</div>


			{!!Form::Open(array('url'=>'administrador/usuario','method'=>'POST','autocomplete' =>'off'))!!}

			{{Form::Token()}}

			<div class="form-group">
				
				<label for="name"></label>
				<input type="text" name="UserName" class="form-control" placeholder="nombre...">

			</div>

			<div class="form-group">
				
				<label for="Email"></label>
				<input type="text" name="Email" class="form-control" placeholder="Email...">

			</div>



			<div class="form-group">
				
				<label for="Password"></label>
				<input type="text" name="Password" class="form-control" placeholder="Password...">

			</div>

		

			
			<div class="form-group">
				
				<label for="Avatar"></label>
				<input type="text" name="Avatar" class="form-control" placeholder="Avatar...">

			</div>

				
			<div class="form-group">
				
				<label for="rol"></label>
				<input type="text" name="rol" class="form-control" placeholder="rol...">

			</div>
	

			<div class="form-group">
				
			<button class="btn btn-primary" type="submit">Guardar</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::Close()!!}


		</div>
		
		
	</div>
@endsection
	