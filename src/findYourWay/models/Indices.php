<?php

namespace findYourWay\models;

class Indices extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'indices';
	protected $primarykey = 'Id';

	public function concernedDestination(){
		return $this->belongsTo('\findYourWay\models\Destinations', 'Id_Destinations');
	}
}