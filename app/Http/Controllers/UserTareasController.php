<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;



//hacemos uso del request
use AplicacionWeb\Http\Requests\TareasFormRequest;

//hacemos uso del request
use AplicacionWeb\Http\Requests\FormRequest;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Tareas;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Comentarios;

//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;



//para conexion de base de datos
use DB;

class UserTareasController extends Controller
{
    public function _construct(){


    }



    //funcion que indica el inicio de la pagina
    public function index(Request $request){

    	if($request){
    		//variable que indica la frase a buscar en en projecto	obtenemos los objetos
    		$query=trim($request->get('searchText'));
    		$tareas=DB::table('task')->where('ParentTask','LIKE','%'.$query.'%')
    		->paginate(7);

    		//retornamos una vista que debemos crearla en la capeta de vistas y enviamos el parametro del objeto obtenido	
	    	return view('usuario.tareas.index',["tareas"=>$tareas,"searchText"=>$query]);

    	}



    }

    
    public function create(){


        return view("usuario.tareas.create");

    }




    //funcion que se encarga de almacenar los datos en la base de datos
    //para eso debemos validar el request del proyecto
    public function store(TareasFormRequest $request){

        //Instanciamos la orm   
        $tareas=new Tareas;
        $tareas->ParentTask=$request->get('ParentTask');
        $tareas->DescripcionTask=$request->get('DescripcionTask');
        $tareas->InitialDateTask=$request->get('InitialDateTask');
        $tareas->FinalDateTask=$request->get('FinalDateTask');
        $tareas->FK_IdUsuario=$request->get('FK_IdUsuario');
        $tareas->FK_UserName=$request->get('FK_UserName');
        $tareas->FK_IdProject=$request->get('FK_IdProject');
        $tareas->FK_NameProject=$request->get('FK_NameProject');
        $tareas->AliasTask=$request->get('AliasTask');
        $tareas->StatusTask=$request->get('StatusTask');
       

        //guardamos el objeto
        $tareas->save();

        return Redirect::To('usuario/tareas');

        
    }


     public function edit($IdTask){




        return view("usuario.tareas.edit",["tareas"=>Tareas::findOrFail($IdTask)]);
      

    }


     public function  update(TareasFormRequest $request,$IdTask){
        
        $tareas=Tareas::findOrFail($IdTask);
        $tareas->ParentTask=$request->get('ParentTask');
        $tareas->DescripcionTask=$request->get('DescripcionTask');
        $tareas->InitialDateTask=$request->get('InitialDateTask');
        $tareas->FinalDateTask=$request->get('FinalDateTask');
        $tareas->FK_IdUsuario=$request->get('FK_IdUsuario');
        $tareas->FK_UserName=$request->get('FK_UserName');
        $tareas->FK_IdProject=$request->get('FK_IdProject');
        $tareas->FK_NameProject=$request->get('FK_NameProject');

        $tareas->update();

        
            
        return Redirect::to('usuario/tareas');
    }



      public function destroy($IdTask){

        $tareas=Tareas::findOrFail($IdTask);

        $tareas->delete();

        return Redirect::to('usuario/tareas');


    }


    public function profile(){



        return view("usuario.tareas.comment",["tareas"=>Tareas::findOrFail($IdTask)]);




    }



    public function show($IdTask){
         return view("usuario.tareas.comment",["tareas"=>Tareas::findOrFail($IdTask)]);
    
    }








   



   

}
