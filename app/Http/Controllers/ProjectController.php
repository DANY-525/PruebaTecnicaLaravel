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

class ProjectController extends Controller
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
	    	return view('administrador.proyecto.index',["proyecto"=>$proyecto,"searchText"=>$query]);

    	}



    }


    public function create(){


    	return view("administrador.proyecto.create");

    }

    //funcion que se encarga de almacenar los datos en la base de datos
 	//para eso debemos validar el request del proyecto
    public function store(ProjectFormRequest $request){

    	//Instanciamos la orm	
    	$proyecto=new Project;
    	$proyecto->NameProject=$request->get('NameProject');
    	$proyecto->DescriptionProject=$request->get('DescriptionProject');
    	$proyecto->AvatarProject=$request->get('AvatarProject');
    	$proyecto->AliasProject=$request->get('AliasProject');
    	$proyecto->StatusProject=$request->get('StatusProject');
    	$proyecto->InitialDateProject=$request->get('InitialDateProject');
    	$proyecto->FinalDateProject=$request->get('FinalDateProject');
    	$proyecto->LeaderUser=$request->get('LeaderUser');

    	//guardamos el objeto
    	$proyecto->save();

    	return Redirect::To('administrador/proyecto');

    	
    }

    public function show($NameProject){

    	return view("administrador.proyecto.show",["proyecto"=>Project::findOrFail($NameProject)]);


    }


    public function  edit($IdProject){
    	


        return view("administrador.proyecto.edit",["proyecto"=>Project::findOrFail($IdProject)]);
      


    }

    public function  update(ProjectFormRequest $request,$id){
    	
    	$proyecto=Project::findOrFail($id);
    	$proyecto->NameProject=$request->get('NameProject');
    	$proyecto->DescriptionProject=$request->get('DescriptionProject');
    	$proyecto->AvatarProject=$request->get('AvatarProject');
    	$proyecto->AliasProject=$request->get('AliasProject');
    	$proyecto->StatusProject=$request->get('StatusProject');
    	$proyecto->InitialDateProject=$request->get('InitialDateProject');
    	$proyecto->FinalDateProject=$request->get('FinalDateProject');
    	$proyecto->LeaderUser=$request->get('LeaderUser');

    	$proyecto->update();

    	
    		
    	return Redirect::to('administrador/proyecto');
    }


    public function destroy($id){

        $proyecto=Project::findOrFail($id);

        $proyecto->delete();

        return Redirect::to('administrador/proyecto');


    }



   

}
