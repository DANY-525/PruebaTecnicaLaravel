<?php

namespace AplicacionWeb;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//empezamos el mapeo de los objetos en la base de datos con eloquent ORM
    protected $table ='project';
    protected $primaryKey='IdProject';
    protected $primarykey2="NameProject";
	public $timestamps=false;


	protected $fillable =[
		'NameProject',
		'DescriptionProject',
		'AvatarProject',
		'AliasProject',
		'StatusProject',
		'InitialDateProject',
		'FinalDateProject',
		'LeaderUser'

	];

	protected $guarded =[


	]; 





}
