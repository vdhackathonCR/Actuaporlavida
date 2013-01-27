/**
* ACM (main) created by ACore -1359236684
*/

/* main | angularjs module */

angular.module("vdhack", ["google-maps"]).
  	config(function($routeProvider) {
	  	$routeProvider.
	    when("/denuncia", {templateUrl: "denuncia.php",   controller: homec}).
	    when("/formulario", {templateUrl: "formulario.php",   controller: formc}).
	    when("/api", {templateUrl: "api.php",   controller: homec}).
	    when("/login", {templateUrl: "login.php",   controller: homec}).
	    when("/respuesta", {templateUrl: "respuesta.php",   controller: homec}).
	    when("/devs", {templateUrl: "developer.php",   controller: homec}).
	    otherwise({redirectTo: "/denuncia"});
	})

/* Controllers */

function homec($scope){
	$scope.keygenerar = function(){
		$scope.keygen = 'a57f62ff2a99ef13275c71c8ba3bbcb7d36806fb';
	}
	/*$scope.ATTRIBUTE = $routeParams.OPTION;
	$scope.METHOD = function(){
		 $location.path("/OPTION_URL");
	}
	$http.post("FILE_MODEL.PHP",{PARAMS: "VALUE"}).
	success(function(data) {
		$scope.ATTRIBUTE = data;
	}).
	error(function() {
		console.log("error");
	})*/
}



function formc($scope){
	$scope.puntos = 0;
	$scope.aumentar = function(){
		$scope.puntos++;
	}
	$scope.disminuir = function(){
		$scope.puntos--;
		if($scope.puntos < 0){
			$scope.puntos = 0;
		}
	}
}