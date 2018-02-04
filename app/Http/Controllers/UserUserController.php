<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;

//hacemos uso del request
use AplicacionWeb\Http\Requests\UsuarioFormRequest;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Usuario;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;



//para conexion de base de datos
use DB;

class UserUserController extends Controller
{
    public function _construct(){


    }



    //funcion que indica el inicio de la pagina
    public function index(Request $request){

    	if($request){
    		//variable que indica la frase a buscar en en projecto	obtenemos los objetos
    		$query=trim($request->get('searchText'));
    		$usuario=DB::table('usuario')->where('UserName','LIKE','%'.$query.'%')
    		->paginate(7);

    		//retornamos una vista que debemos crearla en la capeta de vistas y enviamos el parametro del objeto obtenido	
	    	return view('usuario.usuario.index',["usuario"=>$usuario,"searchText"=>$query]);

    	}



    }


  

   




   

}
