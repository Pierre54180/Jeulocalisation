<?php

namespace findYourWay\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \RandomLib\Factory;
use \findYourWay\models\AppInit as AppInit;
use \findYourWay\models\Party as Party;
use \findYourWay\models\Paths as Paths;
use \findYourWay\models\Destinations as Destinations;


class PartyController extends AbstractController{

	public function createParty(Request $req, Response $resp, $args){
		try {	
			$data = $req->getParsedBody();

			


			if(empty($data)) {
				return $this->json_error($resp, 400, 'Bad Request : missing data (Pseudo)');
			}


			$party = new Party; 

			$tokenFactory = new Factory;
			$generator = $tokenFactory->getMediumStrengthGenerator();
			$randomString = $generator->generateString(32, 'abcdefghijklmnopqrstuvwyz123456789');
			$party->token = $randomString;


			$party->Pseudo = filter_var($data['Pseudo']);

			$party->save();

			$status = 200;

			$content = json_encode(["Token"=>$party->token]);			

			$this->json_success($resp, $status, $content);
		}
		catch(\Exception $e)
		{

			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('party')]);

			$this->json_error($resp, $status, $content);

		}
	}

	public function putScore(Request $req, Response $resp, $args){
		try{
			$data = $req->getParsedBody();

			if(empty($data)) {
				return $this->json_error($resp, 400, 'Bad Request : missing data (Score)');
			}

			$score1 = Party::where('token', '=', $args["token"])->firstorFail();

			$scoreFinal = $score1->Score + $data["score"] ;

			$up = Party::where('token', '=', $args["token"])->update(['score'=>$scoreFinal]);

			$score2 = Party::where('token', '=', $args["token"])->firstorFail();	

			$status = 200;

			$content = json_encode(["Score"=>$scoreFinal]);			


			$this->json_success($resp, $status, $content);
		}
		catch(\Exception $e)
		{
			$status = 404;

			$content = json_encode(["error"=> "ressource not found : ".$this->c['router']->pathfor('putscore', ['token'=>$args['token']])]);

			$this->json_error($resp, $status, $content);
		}
	}
}



