angular.module('findYourWay').controller('PartyController',
	['$scope','$http', '$rootScope',

	function($scope, $http, $rootScope){

		
		console.log(sessionStorage.token);
		console.log(sessionStorage.pseudo);

		if(sessionStorage.pseudo==undefined){

			$scope.addParty=function(){

			if(!$scope.player.pseudo==''){

				$http.post($rootScope.route+'play/', { Pseudo: $scope.player.pseudo })
				.then(function(response){


					//alert('HELLO '+ $scope.player.pseudo +' !!!!');
					$rootScope.played=true;

				
					sessionStorage.setItem("pseudo", $scope.player.pseudo);
					sessionStorage.setItem("token", response.data.Token);
				

			
					$http.get('http://atelier.local/depot_atelier2/API/'+sessionStorage.token+'/paths')

					.then(function(response){


							response.data.forEach(function(data){
								
								//$rootScope.paths.push(data);
							});
						


						},function(error){
						

						});

				

						$http.get('http://atelier.local/depot_atelier2/API/destinations/'+response.data.Token)
						.then(function(response){
								console.log(response.data);


						},function(error){
						

						});


					},function(error){

					});
				

				}else{


				alert(' Pseudo incorect ! ');

				}
			}

		}else{
			

			$rootScope.played=true;
		
		}

	}]);

