<?php

namespace AplicacionWeb;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
	//empezamos el mapeo de los objetos en la base de datos con eloquent ORM
    protected $table ='task';
    protected $primaryKey='Idtask';
    protected $primarykey2="ParentTask";
	public $timestamps=false;


	protected $fillable =[
		'DescripcionTask',
		'AliasTask',
		'StatusTask',
		'InitialDateTask',
		'FinalDateTask',
		'FK_IdUsuario',
		'FK_UserName',
		'FK_IdProject',
		'FK_NameProject'

	];

	protected $guarded =[


	]; 





}
