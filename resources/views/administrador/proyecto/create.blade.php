@extends('layouts.admin')
@section('contenido')
	

	<div class="row">

		<div class="div.col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Nuevo Proyecto</h3>

			<div class="alert alert-danger">
				
				<ul>

				@if(count($errors)>0)	

					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach

				</ul>
				@endif

			</div>


			{!!Form::Open(array('url'=>'administrador/proyecto','method'=>'POST','autocomplete' =>'off'))!!}

			{{Form::Token()}}

			<div class="form-group">
				
				<label for="nombre"></label>
				<input type="text" name="NameProject" class="form-control" placeholder="nombre...">

			</div>

			<div class="form-group">
				
				<label for="descripcion"></label>
				<input type="text" name="DescriptionProject" class="form-control" placeholder="descripcion...">

			</div>



			<div class="form-group">
				
				<label for="avatar"></label>
				<input type="text" name="AvatarProject" class="form-control" placeholder="avatar...">

			</div>

		

			
			<div class="form-group">
				
				<label for="alias"></label>
				<input type="text" name="AliasProject" class="form-control" placeholder="alias...">

			</div>

				
			<div class="form-group">
				
				<label for="estado"></label>
				<input type="text" name="StatusProject" class="form-control" placeholder="estado...">

			</div>


			<div class="form-group">
				
				<label for="fecha de inicio"></label>
				<input type="text" name="InitialDateProject" class="form-control" placeholder="fecha inicial...">

			</div>


			<div class="form-group">
				
				<label for="fecha final"></label>
				<input type="text" name="	FinalDateProject" class="form-control" placeholder="Fecha Final...">

			</div>



			<div class="form-group">
				
				<label for="lider de proyecto"></label>
				<input type="text" name="LeaderUser" class="form-control" placeholder="Lider de proyecto...">

			</div>	



			<div class="form-group">
				
			<button class="btn btn-primary" type="submit">Guardar</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::Close()!!}


		</div>
		
		
	</div>
@endsection
	