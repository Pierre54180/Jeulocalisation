<?php

namespace findYourWay\models;

class Generer extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'generer';
	protected $primarykey= 'Id';
	
	public $timestamps=false;

	public function IdParty(){
		return $this->BelongTo('\findYourWay\models\Party', 'Id');
	}

	public function IdPaths(){
		return $this->BelongTo('\findYourWay\models\Paths', 'Id');
	}
}