<?php

namespace AplicacionWeb\Http\Controllers;

use Illuminate\Http\Request;

use AplicacionWeb\Http\Requests;

//hacemos referencia a nuestro modelo
use AplicacionWeb\Usuario;
//hacemos refercia a esta clase para hacer redirecionamiento
use Illuminate\Support\Facades\Redirect;



//para conexion de base de datos
use DB;

class LoginController extends Controller
{
    public function _construct(){


    }



    //funcion que indica el inicio de la pagina
    public function index(Request $request){

  

            //retornamos una vista que debemos crearla en la capeta de vistas y enviamos el parametro del objeto obtenido   
            return view('login.index');

     


    }


    public function create(){


        

    }


    
            
   





   

}
