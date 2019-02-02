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
		        <li><a class="blue-grey-text text-lighten-4" href="/depot_atelier2/WebApp/backendFindYourWay3.php">Ajouter une nouveau point de chemin</a></li>
		        <li><a class="blue-grey-text text-lighten-4" href="/depot_atelier2/WebApp/backendFindYourWay.php">Déconnexion</a></li>

		      </ul>
		     
		    </div>
		</nav>
 
		<div id="form"  class="col s12" class="row">
		<div class="col s10 m8 l6 center-align title blue-grey-text text-lighten-4"><h5><i class="material-icons right">room</i>Ajouter un nouveau point de chemin<i class="material-icons left">room</i></h5></div>
  		  <form  method="POST">
	     	<div class="row">
	       		<div class="input-field col s12">

	         		<input id="pseudo" type="text" name="nom" class="blue-grey-text text-lighten-4" required>
	        		<label class="deep-orange-text text-darken-1">Nom du point</label>
	       		</div>
	       	</div>
	       	<div class="row">
	        	<div class="input-field col s12">

	         		<input id="pseudo" name="indication" type="text" class="blue-grey-text text-lighten-4" required>
	         		 <label class="deep-orange-text text-darken-1"> Indication du point</label>
	       		</div> 
	     	</div>
	     	<div class="row">
	        	<div class="input-field col s6">
	         		<input id="pseudo" name="longitude" type="text" class="blue-grey-text text-lighten-4" required>
	        		<label class="deep-orange-text text-darken-1">Longitude du point</label>
	       		</div>
	        	<div class="input-field col s6">
	         		 <input id="pseudo" name="latitude" type="text" class="blue-grey-text text-lighten-4" required>
	         		 <label class="deep-orange-text text-darken-1">Latitude du point</label>
	       		</div>
	     	</div>
	     	<div class="row">
		     	<div class="col s8 m6 l2 offset-l5 offset-m3 offset-s2 center-align">

						<input type="submit" name="ajouterPoint" class="waves-effect wave-light deep-orange darken-3 addParty btn" value="AJOUTER">

				</div>
			</div>
	</body>
</html>


<?php

		if(isset($_POST["ajouterPoint"])){

			$nom=$_POST["nom"];
			$indication=$_POST["indication"];
			$longitude=$_POST["longitude"];
			$latitude=$_POST["latitude"];


			
			try{
				$db = new PDO("mysql:host=atelier.local;dbname=findyourway;charset=utf8","root","root");
				
				$res = $db->query("INSERT INTO paths VALUES (' ', '".$longitude."' , '".$latitude."','".$nom."','".$indication."')");
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

