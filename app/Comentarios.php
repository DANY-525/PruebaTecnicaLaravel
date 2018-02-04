<?php

namespace AplicacionWeb;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
	//empezamos el mapeo de los objetos en la base de datos con eloquent ORM
    protected $table ='comments';
    protected $primaryKey='IdComments';
    
	public $timestamps=false;


	protected $fillable =[
		'TitleComments',
		'Tags',
		'FK_Idtask',
		'FK_IdUsuario',
		'FK_UserName'
	

	];

	protected $guarded =[


	]; 





}