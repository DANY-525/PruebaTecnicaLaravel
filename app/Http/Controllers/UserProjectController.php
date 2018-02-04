<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Project;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;

//hacemos uso del request
use AplicacionWeb\Http\Requests\ProjectFormRequest;

//para conexion de base de datos
use DB;

class UserProjectController extends Controller
{
    public function _construct(){


    }



    //funcion que indica el inicio de la pagina
    public function index(Request $request){

    	if($request){
    		//variable que indica la frase a buscar en en projecto	obtenemos los objetos
    		$query=trim($request->get('searchText'));
    		$proyecto=DB::table('project')->where('NameProject','LIKE','%'.$query.'%')
    		->paginate(7);

    		//retornamos una vista que debemos crearla en la capeta de vistas y enviamos el parametro del objeto obtenido	
	    	return view('usuario.proyecto.index',["proyecto"=>$proyecto,"searchText"=>$query]);

    	}



    }


   


   

}
