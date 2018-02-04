<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;



//hacemos uso del request
use AplicacionWeb\Http\Requests\TareasFormRequest;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Tareas;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;



//para conexion de base de datos
use DB;

class TareasController extends Controller
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
	    	return view('administrador.tareas.index',["tareas"=>$tareas,"searchText"=>$query]);

    	}



    }

    
    public function create(){


        return view("administrador.tareas.create");

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
       

        //guardamos el objeto
        $tareas->save();

        return Redirect::To('administrador/tareas');

        
    }


     public function edit($IdTask){


        return view("administrador.tareas.edit",["tareas"=>Tareas::findOrFail($IdTask)]);
      

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

        
            
        return Redirect::to('administrador/tareas');
    }



      public function destroy($IdTask){

        $tareas=Tareas::findOrFail($IdTask);

        $tareas->delete();

        return Redirect::to('administrador/tareas');


    }








   



   

}
