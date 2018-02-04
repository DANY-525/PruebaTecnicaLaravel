<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Comentarios;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;

//hacemos uso del request
use AplicacionWeb\Http\Requests\ComentariosFormRequest;

//para conexion de base de datos
use DB;

class UserListComentariosController extends Controller
{
    public function _construct(){


    }



    //funcion que indica el inicio de la pagina
    public function index(Request $request){

    	if($request){
    		//variable que indica la frase a buscar en en projecto	obtenemos los objetos
    		$query=trim($request->get('searchText'));
    		$comentarios=DB::table('comments')->where('TitleComment','LIKE','%'.$query.'%')
    		->paginate(7);

    		//retornamos una vista que debemos crearla en la capeta de vistas y enviamos el parametro del objeto obtenido	
	    	return view('usuario.usercomentarios.index',["comentarios"=>$comentarios,"searchText"=>$query]);

    	}



    }



    public function create(){


            return view("usuario.usercomentarios.create");

    }


    //para eso debemos validar el request del proyecto
    public function store(ComentariosFormRequest $request){

        //Instanciamos la orm   
        $comentarios=new Comentarios;
        $comentarios->TitleComment=$request->get('TitleComment');
        $comentarios->Tags=$request->get('Tags');
        $comentarios->FK_Idtask=$request->get('FK_Idtask');
        $comentarios->FK_IdUsuario=$request->get('FK_IdUsuario');
        $comentarios->FK_UserName=$request->get('FK_UserName');
     
        //guardamos el objeto
        $comentarios->save();


        //retorna la direccion de los comentarios
        return Redirect::To('usuario/usercomentarios');

        
    }


     public function edit($IdComments){


        return view("usuario.usercomentarios.edit",["comentarios"=>Comentarios::findOrFail($IdComments)]);
      

    }


    public function  update(ComentariosFormRequest $request,$IdComments){
        
        $comentarios=Comentarios::findOrFail($IdComments);
        $comentarios->TitleComment=$request->get('TitleComment');
        $comentarios->Tags=$request->get('Tags');
        $comentarios->FK_Idtask=$request->get('FK_Idtask');
        $comentarios->FK_IdUsuario=$request->get('FK_IdUsuario');
        $comentarios->FK_UserName=$request->get('FK_UserName');
        $comentarios->update();

        
            
        return Redirect::to('usuario/usercomentarios');
    }




    public function destroy($id){

        $comentarios=Comentarios::findOrFail($id);

        $comentarios->delete();

        return Redirect::to('usuario/usercomentarios');


    }









    

   

}
