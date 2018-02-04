<?php

namespace AplicacionWeb;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	//empezamos el mapeo de los objetos en la base de datos con eloquent ORM
    protected $table ='usuario';
    protected $primaryKey='IdUsuario';
    protected $primarykey2="NameProject";
	public $timestamps=false;


	protected $fillable =[
		'Email',
		'Password',
		'Avatar',
		'UserName',
		'Rol'
	

	];

	protected $guarded =[


	]; 





}