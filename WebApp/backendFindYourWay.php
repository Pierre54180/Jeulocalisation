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
		        <li><a class="blue-grey-text text-lighten-4" href="#">Connexion</a></li>
		        <li><a class="blue-grey-text text-lighten-4" href="#">S'inscrire</a></li>
		      </ul>
		    </div>
		</nav>

		

			<div id="formCo" class="card-panel grey darken-3">
				<form name='form' method='POST'>
					<div class="input-field col l2 offset-l5 m6 offset-m3 s8 offset-s2">
						<input type="text" name="pseudo" id="pseudo" class="blue-grey-text text-lighten-4" required>
						<label class="deep-orange-text text-darken-1">Entrez votre pseudo</label>
					</div>
					<div class="input-field col l2 offset-l5 m6 offset-m3 s8 offset-s2">
						<input type="password" name="mdp" id="pseudo" class="blue-grey-text text-lighten-4" required>
						<label class="deep-orange-text text-darken-1">Entrez votre mot de passe</label>
					</div>
					<div class="col s8 m6 l2 offset-l5 offset-m3 offset-s2 center-align">
						<input type="submit" name="connexion" class="waves-effect wave-light deep-orange darken-3 addParty btn" value="CONNEXION">
					</div>
				</form>
			</div>

		






	</body>
</html>


<?php

		if(isset($_POST["connexion"])){

			$pseudo=$_POST["pseudo"];
			$mdp=$_POST["mdp"];

			try{
				$db = new PDO("mysql:host=atelier.local;dbname=findyourway;charset=utf8","root","root");
				$res = $db->query("Select * from admins where Username='".$pseudo."' and Password='".$mdp."'");
				$row=$res->fetch(PDO::FETCH_OBJ);
			}catch(PDOException  $e ){
				echo "Error: ".$e;
			}
			
			if($row==false){
				echo"<script>alert('Pseudo ou Password incorrects !')</script>";
			}else{
				header('Location: backendFindYourWay2.php');
				exit();
			}
			
		}
	
?>