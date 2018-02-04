<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//creamos ruta de administrador para el proyecto
Route::resource('administrador/proyecto','ProjectController');

//creamos la ruta de administrador para el usuario
Route::resource('administrador/usuario','UsuarioController');


//creamos la ruta de administrador para el usuario
Route::resource('administrador/comentarios','ComentariosController');

//creamos la ruta de administrador para las tareas
Route::resource('administrador/tareas','TareasController');


Route::resource('usuario/usuario','UserUSerController');


//creamos ruta de administrador para el proyecto
Route::resource('usuario/proyecto','UserProjectController');

//creamos la ruta de usuario para las tareas
Route::resource('usuario/tareas','UserTareasController');

//creamos la ruta de usuario para las tareas
Route::resource('usuario/comentarios','UserComentariosController');


//Comentarios de usuario lista
Route::resource('usuario/usercomentarios','UserListComentariosController');





//creamos ruta de administrador para el proyecto
Route::resource('login','loginController');




Route::auth();

Route::get('/home', 'HomeController@index');
