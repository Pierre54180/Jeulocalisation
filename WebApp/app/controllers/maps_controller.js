angular.module('findYourWay').controller('MapsController', 
	['$scope', '$http', '$rootScope', 

	function($scope, $http, $rootScope){
	
		$http.get($rootScope.route+sessionStorage.token+'/getPaths')
		.then(function(response){			
			response.data.forEach(function(data){
				$rootScope.paths.push(data);
			})


		 		$rootScope.indications = [];
				$rootScope.indications.push($rootScope.paths[i].Indication);		
			$http.get($rootScope.route+sessionStorage.token+'/getDestination')
			.then(function(response){
				$scope.indice = response.data.Destination_finale;	

					
			
			},function(error){

						
			});

			console.log($rootScope.indices);

				
		


		},function(error){
						
		});

		var first = null;
		var second = null;

		var mymap = L.map('Maps').setView([50.34, 11.52], 6);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
			minZoom: 1,
			maxZoom: 10,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);

		var greenIcon = L.icon({
   			iconUrl: 'app/controllers/d.png',
 			iconAnchor:   [23, 47]
		});

		var i = 0;
		var points = 0;

		var redIcon = L.icon({
		    iconUrl: 'app/controllers/T.png',
		 iconAnchor:   [4, 62]
		});



		
		var i = 0;
		var points = 0;
		var indication = 1;
		 

 		 $rootScope.destinations = []; 

		function onMapClick(e) {


			
			second = first;
			first = e.latlng;
			if (i < 5){
				L.marker([e.latlng["lat"], e.latlng["lng"]]).addTo(mymap).bindPopup("Tu as cliqué sur la map à l'endroit " + e.latlng["lat"].toFixed(2).toString() +" "+ e.latlng["lng"].toFixed(2).toString()).openPopup();


				var la = $rootScope.paths[i].Latitude;
				var lgn = $rootScope.paths[i].Longitude;
				var nom = $rootScope.paths[i].Nom;
				var clickla = e.latlng["lat"];
				var clicklng = e.latlng["lng"];
				
				console.log($rootScope.destination);
				L.marker([la,lgn],{icon: greenIcon}).addTo(mymap).bindPopup("La réponse est "+nom+"!").openPopup();

				console.log(first);

				if(second !== null)
				{
					addLine(first, second);
				}
	
				var distance = mymap.distance(e.latlng,[la,lgn]);
				$points = 0;
			
				if (distance < 30000){
					window.alert("Parfait ! 10 points !");
					$points = 10;
					$rootScope.destinations.push($scope.indice.Indices[i].Description);
				}
				else if (distance < 60000)
				{
					window.alert(" Bien joué 8 points !");
					$points = 8;
						$rootScope.destinations.push($scope.indice.Indices[i].Description);
				}
				else if (distance < 120000)
				{
					window.alert("Bien ! 6 points !");
					$points = 6;
						$rootScope.destinations.push($scope.indice.Indices[i].Description);
				}
				else if (distance < 250000)
				{
					window.alert("Pas trop mal ! 3 points !");
					$points = 3;
				}
				else if (distance < 600000)
				{
					window.alert("Un peu loin ! 1 points !");
					$points = 1;
				}
				else 
				{
					window.alert("Trop loin!");				
				}
					if (indication < 5)
					{
					var o = $rootScope.paths[indication].Indication;
					$rootScope.indications.push(o);
				}
	function addLine(first,second){
			var mylines = [[first.lat, first.lng], [second.lat, second.lng]];
		
			L.polyline(mylines, {

			}).addTo(mymap);
		};
				$http.put($rootScope.route+sessionStorage.token+'/score', { score: $points })
				.then(function(response){
				
					$scope.score = response.data.Score;
					$rootScope.score = response.data.Score;
			
					console.log(response.data.Score);


				},function(error){
						

			});

			if(i==4 )
			{
				window.alert ("Vous avez fini l'étape des chemins! Vous devez trouver la Destination grâce à vos indices! Bonne chance ! ");
			}
			indication++;
		}

		else if (i==5){
			var Dla = $scope.indice.Latitude;
			var Dlng = $scope.indice.Longitude;
			L.marker([e.latlng["lat"], e.latlng["lng"]]).addTo(mymap).bindPopup("Tu as cliqué sur la map à l'endroit " + e.latlng["lat"].toFixed(2).toString() +" "+ e.latlng["lng"].toFixed(2).toString()).openPopup();
			L.marker([Dla,Dlng],{icon: redIcon}).addTo(mymap).bindPopup("La Destination final est "+$scope.indice.Nom+"!").openPopup();
			addLine(first, second);


			var distance = mymap.distance(e.latlng,[Dla,Dlng]);
				$points = 0;

				if (distance < 30000){
					window.alert("Bravo ! 60 points !");
					$points = 50;
				}
				else if (distance < 60000)
				{
					window.alert(" Bien joué ! 40 points !");
					$points = 40;
				}
				else if (distance < 120000)
				{
					window.alert("Bien ! 30 points !");
					$points = 30;
				}
				else if (distance < 250000)
				{
					window.alert("Pas exactement ! 20 points !");
					$points = 20;
				}
				else if (distance < 600000)
				{
					window.alert(" Un peu loin .. 10 points !");
					$points = 10;
				}
				else 
				{
					window.alert("Trop loin!");				
				}

				$http.put($rootScope.route+sessionStorage.token+'/score', { score: $points })
				.then(function(response){

				
					$scope.score = response.data.Score;
					$rootScope.score = response.data.Score;
			
					console.log(response.data.Score);
					console.log(i);
					


				},function(error){
						

			});
		}
		i++;


		function addLine(first,second){

			var mylines = [[first.lat, first.lng], [second.lat, second.lng]];
		
			L.polyline(mylines, {

			}).addTo(mymap);
		};
		

	
	};

	mymap.on('click', onMapClick);

}]);
