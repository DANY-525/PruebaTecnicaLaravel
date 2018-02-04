			@extends('welcome')
			@section('login')


			{{form::Open(array('action'=>array('ProjectController@edit',$UserName->UserName,$password->Password),'method' =>'delete'))}}

			<p class="title">login</p>

			<div class="form-group">

			
				<label for="username"></label>
				<input type="text" name="UserName" class="" placeholder="Nombre ...">

			</div>

			<div class="titulo">
				
				<label for="Password"></label>
				<input type="text" name="Password" class="" placeholder="Password...">

			</div>






			<div class="form-group">
				
		

			<button type="submit" class="btn btn-primary">enviar</button>>
			</div>

			{{FORM::Close()}}

@endsection
