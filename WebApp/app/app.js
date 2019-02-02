angular.module('findYourWay', []).run(['$rootScope',function($rootScope){
	$rootScope.played=false;
	$rootScope.pseudo=null;
	$rootScope.route = 'http://atelier.local/depot_atelier2/API/';
	$rootScope.indices = [];

	$rootScope.paths=[];
	$rootScope.destination=[];
	$rootScope.score=null;
	

}]);
