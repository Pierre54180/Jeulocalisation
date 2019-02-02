<?php 

namespace findYourWay\models;

class Paths extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'paths';
	protected $primarykey = 'Id';

	public function pathsInParty(){
		return $this->belongsToMany('\findYourWay\models\Party', 'generer', 'Id_Paths', 'Id_Party');
	}





}