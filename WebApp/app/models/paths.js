angular.module('findYourWay').service('Paths', ['$http',
	function($http){
		var Paths= function(data){
			this.Id = data.Id;
			this.Indication = data.Indication;
			this.Longitude = data.Longitude;
			this.Latitude = data.Latitude;
			this.Nom = data.Nom;
			this.done = data.done;
		}
		return Party;
}]);