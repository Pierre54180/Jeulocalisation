<?php
require '../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \findYourWay\models\AppInit as AppInit;

use \findYourWay\controllers\PartyController as Party;
use \findYourWay\controllers\PathsController as Paths;
use \findYourWay\controllers\DestinationsController as Destinations;
use \findYourWay\controllers\IndicesController as Indices;
use \findYourWay\controllers\AdminsController as Admins;


AppInit::bootEloquent('../conf/conf.ini');

$conf=['settings'=>['displayErrorDetails'=>true]];

$app = new \Slim\App(new \Slim\Container($conf));

function checkToken ( Request $rq, Response $rs, callable $next ) {
	// récupérer le token de la partie dans la route 
	//$id = $rq->getAttribute('route')->getArgument( 'id');

	$token = $rq->getAttribute('route')->getArgument('token');

	// vérifier que le token correspond à la commande
	try {
		\findYourWay\models\Party::where('Token', '=',$token)->firstOrFail();
		return $next($rq, $rs);
	}
	catch (\Exception $e)
	{
		$status = 403;

		$content = json_encode(['error'=>'no token or invalid token']);

		$ab = new \findYourWay\controllers\AbstractController;
		return $ab->json_error($rs, $status, $content);
	};
	
}

$app->post('/play[/]',
	function (Request $req, Response $resp, $args) {
		return (new Party($this))
			->createParty($req, $resp, $args);
	}
)->setName('party');


$app->get('/destinations/{token}[/]',
	function (Request $req, Response $resp, $args) {
		return (new Destinations($this))
			->addDestination($req, $resp, $args);
	}
)->setName('addDestination')->add('checkToken');

$app->get('/{token}/getDestination',
	function (Request $req, Response $resp, $args) {
		return (new Destinations($this))
			->getDestination($req, $resp, $args);
	}
)->setName('addDestination')->add('checkToken');


$app->get('/{token}/paths[/]',
	function (Request $req, Response $resp, $args) {
		return (new Paths($this))
			->getPaths($req, $resp, $args);
	}
)->setName('chemin')->add('checkToken');

$app->get('/{token}/getPaths[/]',
	function (Request $req, Response $resp, $args) {
		return (new Paths($this))
			->getPathsParty($req, $resp, $args);
	}
)->setName('chemin')->add('checkToken');


$app->get('/destinations/{token}/info[/]',
	function (Request $req, Response $resp, $args) {
		return (new Destinations($this))
			->getInfoDestination($req, $resp, $args);
	}
)->setName('infodestination')->add('checkToken');


$app->put('/{token}/score[/]',
	function (Request $req, Response $resp, $args) {
		return (new Party($this))
			->putScore($req, $resp, $args);
	}
)->setName('putscore')->add('checkToken');

$app->run();
