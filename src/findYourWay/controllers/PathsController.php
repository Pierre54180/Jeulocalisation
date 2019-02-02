<?php

namespace findYourWay\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \models\AppInit as AppInit;

use \findYourWay\models\Party as Party;
use \findYourWay\models\Paths as Paths;
use \findYourWay\models\Generer as Generer;


class PathsController extends AbstractController{

	public function getPaths(Request $req, Response $resp, $args){
		try{
			$party = Party::where('Token', '=', $args["token"])->firstorFail();				

			$chemins = Paths::orderByRaw('RAND()')->take(5)->get();				
				
			$i=1;
			foreach ($chemins as $chemin){
				$g= new Generer;
				$g->Id_Party=$party->Id;
				$g->Id_Paths=$chemin->Id;
				$g->Number= $i;
				$g->save();
				$i++;
			}

			$status = 200;

			$content = json_encode($chemins->toArray());			

			$this->json_success($resp, $status, $content);				
		}
		catch(\Exception $e)
		{ 
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('chemin',['token'=>$args['token']])]);
			
			$this->json_error($resp, $status, $content);
		}
	}

	public function getPathsParty(Request $req, Response $resp, $args){
		try{
			$party = Party::where('Token', '=', $args["token"])->firstorFail();				

			$chemins = Generer::join('paths', 'generer.Id_Paths', '=', 'paths.Id')->select('generer.Number', 'paths.Indication', 'paths.Longitude', 'paths.Latitude', 'paths.Nom')->where('Id_Party', '=', $party->Id)->orderBy('generer.Number')->get();				
			

			$status = 200;

			$content = json_encode($chemins->toArray());			
			
			$this->json_success($resp, $status, $content);				
		}
		catch(\Exception $e)
		{ 
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('chemin',['token'=>$args['token']])]);
			
			$this->json_error($resp, $status, $content);
		}
	}

}