<?php

namespace findYourWay\models;

class Party extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'party';
	protected $primarykey = 'Id';

	public $timestamps = false; 


	public function haveDestination(){
		return $this->belongsTo('\findYourWay\models\Destinations', 'Id_Destinations');
	}

	public function havePaths(){
		return $this->belongsToMany('\findYourWay\models\Paths', 'generer', 'Id_Party', 'Id_Paths');
	}

}