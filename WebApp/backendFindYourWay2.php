<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset='utf-8'>
		<title>FindYouWay Backend</title>
	</head>

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="lib/jquery-3.1.1.min.js"></script>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/bin/materialize.min.js"></script>

	<body ng-app='findYourWay' class="grey darken-4 ">

		
		<nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo blue-grey-text text-lighten-4"><i class="material-icons left">room</i>Configuration du jeu FindYourWay</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">

		        <li><a class="blue-grey-text text-lighten-4" href="/depot_atelier2/WebApp/backendFindYourWay2.php">Ajouter une nouvelle destination</a></li>
		        <li><a class="blue-grey-text text-lighten-4" href="/depot_atelier2/WebApp/backendFindYourWay3.php">Ajouter un nouveau point de chemin</a></li>
		        <li><a class="blue-grey-text text-lighten-4" href="/depot_atelier2/WebApp/backendFindYourWay.php">Déconnexion</a></li>

		      </ul>
		     
		    </div>
		</nav>
 
		<div id="form"  class="col s12" class="row">
		<div class="col s10 m8 l6 center-align title blue-grey-text text-lighten-4"><h5><i class="material-icons right">room</i>Ajouter une nouvelle destination<i class="material-icons left">room</i></h5></div>
  		  <form  method="POST">
	     	<div class="row">
	       		<div class="input-field col s12">
	         		<input id="pseudo" name="nom" type="text" class="blue-grey-text text-lighten-4" required>
	        		<label class="deep-orange-text text-darken-1">Nom de la destination</label>
	       		</div>
	       	</div>
	       	<div class="row">
	        	<div class="input-field col s12">

	         		<input id="pseudo" name="desc" type="text" class="blue-grey-text text-lighten-4" required>

	         		 <label class="deep-orange-text text-darken-1"> Description de la destination</label>
	       		</div> 
	     	</div>
	     	<div class="row">
	       		<div class="input-field col s6">
	         		<input id="pseudo" name="longitude" type="text" class="blue-grey-text text-lighten-4" required>
	        		<label class="deep-orange-text text-darken-1">Longitude de la destination</label>
	       		</div>
	        	<div class="input-field col s6">
	         		 <input id="pseudo" name="latitude" type="text" class="blue-grey-text text-lighten-4" required>
	         		 <label class="deep-orange-text text-darken-1">Latitude de la destination</label>
	       		</div>
	     	</div>
	     	<div class="row">
		     	<div class="col s8 m6 l2 offset-l5 offset-m3 offset-s2 center-align">
						<input type="submit" name="ajouterDest" class="waves-effect wave-light deep-orange darken-3 addParty btn" value="AJOUTER">
				</div>
			</div>
	</body>
</html>

<?php

		if(isset($_POST["ajouterDest"])){

			$nom=$_POST["nom"];
			$desc=$_POST["desc"];
			$longitude=$_POST["longitude"];
			$latitude=$_POST["latitude"];



			
			try{
				$db = new PDO("mysql:host=atelier.local;dbname=findyourway;charset=utf8","root","root");

				$res = $db->query("INSERT INTO destinations VALUES (' ', '".$longitude."' , '".$latitude."','".$nom."','".$desc."',' ')");
			}catch(PDOException  $e ){
				echo "Error: ".$e;
			}

			
			if($res==false){
				echo"<script>alert('add rejeted !')</script>";
			}else{
				echo"<script>alert('Ajout OK')</script>";

			}
			
		}
	
?>