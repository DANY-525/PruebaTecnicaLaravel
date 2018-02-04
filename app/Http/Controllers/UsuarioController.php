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

class UsuarioController extends Controller
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
	    	return view('administrador.usuario.index',["usuario"=>$usuario,"searchText"=>$query]);

    	}



    }


    public function create(){


        return view("administrador.usuario.create");

    }



    //funcion que se encarga de almacenar los datos en la base de datos
    //para eso debemos validar el request del proyecto
    public function store(UsuarioFormRequest $request){

        //Instanciamos la orm   
        $usuario=new Usuario;
        $usuario->UserName=$request->get('UserName');
        $usuario->Email=$request->get('Email');
        $usuario->Password=$request->get('Password');
        $usuario->Avatar=$request->get('Avatar');
        $usuario->Rol=$request->get('Rol');
       

        //guardamos el objeto
        $usuario->save();

        return Redirect::To('administrador/usuario');

        
    }


     public function  edit($IdUsuario){
        


        return view("administrador.usuario.edit",["usuario"=>Usuario::findOrFail($IdUsuario)]);
      


    }



    public function  update(UsuarioFormRequest $request,$id){
        
        $usuario=Usuario::findOrFail($id);
        $usuario->UserName=$request->get('UserName');
        $usuario->Email=$request->get('Email');
        $usuario->Password=$request->get('Password');
        $usuario->Avatar=$request->get('Avatar');
        $usuario->Rol=$request->get('Rol');
       

        $usuario->update();

        
            
        return Redirect::to('administrador/usuario');
    }


       public function destroy($id){

        $usuario=Usuario::findOrFail($id);

        $usuario->delete();

        return Redirect::to('administrador/usuario');


    }





   

}
