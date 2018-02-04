<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Comentarios;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Tareas;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;



//hacemos uso del request
use AplicacionWeb\Http\Requests\ComentariosFormRequest;

//para conexion de base de datos
use DB;

class UserComentariosController extends Controller
{
    public function _construct(){


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
        return Redirect::To('usuario/tareas');

        
    }


  


      public function show($IdTask){
         return view("usuario.tareas.comment",["tareas"=>Tareas::findOrFail($IdTask)]);
    
    }







    

   

}
