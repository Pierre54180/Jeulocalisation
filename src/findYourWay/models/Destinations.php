<?php

namespace findYourWay\models;

class Destinations extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'destinations';
	protected $primarykey = 'Id';

	public function destinationInParty(){
		return $this->hasMany('\findYourWay\models\Party', 'Id_Destinations');
	}

	public function haveIndices(){
		return $this->hasMany('\findYourWay\models\Indices', 'Id_Destinations');
	}
}