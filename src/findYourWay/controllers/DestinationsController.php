<?php

namespace findYourWay\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


use \findYourWay\models\AppInit as AppInit;
use \findYourWay\models\Party as Party;
use \findYourWay\models\Destinations as Destinations;
use \findYourWay\models\Indices as Indices;


class DestinationsController extends AbstractController{

	public function getInfoDestination(Request $req, Response $resp, $args){
		try{

			$id = Party::where('token', '=', $args["token"])->firstorFail();
			
			$info = Destinations::where('Id', '=', $id['Id'])->firstorFail();
			
			$status = 200;

			$content = json_encode(["Destinations_Finale"=>["Nom"=>$info["Nom"],"Description"=>$info["Description"],"Image"=>$info["Image"]]]);			

			$this->json_success($resp, $status, $content);
		}
		catch(\Exception $e)
		{
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('infodestination', ['token'=>$args['token']])]);

			$this->json_error($resp, $status, $content);
		}
	}

	public function addDestination(Request $req, Response $resp, $args) {
		try{

			$dest = Destinations::orderByRaw('RAND()')->take(1)->firstorFail();

			$indices = Indices::where('Id_Destinations', '=', $dest['Id'])->get();

			$id = Party::where('token', '=', $args["token"])->update(['Id_Destinations'=>$dest['Id']]);

			$status = 200;

			$content = json_encode(["Destination_finale"=>[
													"Id"=>$dest["Id"],
													"Nom"=>$dest["Nom"],
													"Indices"=>$indices->toArray()
													]]);

			$this->json_success($resp, $status, $content);
		}
		catch(\Exception $e)
		{
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('addDestination', ['token'=>$args['token']])]);

			$this->json_error($resp, $status, $content);
		}
	}


	public function getDestination(Request $req, Response $resp, $args) {
		try{

			

			$dest = Party::join('destinations', 'party.Id_Destinations', '=', 'destinations.Id')->select('party.Id_Destinations', 'destinations.Nom', 'destinations.Longitude', 'destinations.Latitude', 'destinations.Description','destinations.Image')->where('Token', '=', $args["token"])->firstorFail();

			$indices = Indices::where('Id_Destinations', '=', $dest->Id_Destinations)->get();
			

			$status = 200;

			$content = json_encode(["Destination_finale"=>[
													"Longitude"=>$dest->Longitude,
													"Latitude"=>$dest->Latitude,
													"Id"=>$dest->Id_Destinations,
													"Nom"=>$dest->Nom,
													"Indices"=>$indices->toArray()
													]]);

			$this->json_success($resp, $status, $content);
		}
		catch(\Exception $e)
		{
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('addDestination', ['token'=>$args['token']])]);

			$this->json_error($resp, $status, $content);
		}
	}
}