<?php 

require_once 'vendor/autoload.php';

use \sandwich\models\AppInit as AppInit;
use \sandwich\models\Ingredient;
use \sandwich\models\Categorie;

AppInit::bootEloquent('conf/conf.ini');