angular.module('findYourWay').service('Party', ['$http',
	function($http){
		var Party= function(data){
			this.pseudo = data.pseudo;
			this.token = data.token;
			this.score = data.score;
		}
		return Party;
}]);