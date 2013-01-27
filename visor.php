<?php // ACM (main) created by ACore -1359236684

include "acore/acore.php";
$app = new acore;
?>
<!doctype html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<title>Violencia Domestica</title>
	<?php  A::script('jquery, angular')?>
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl8AfrC5GZIzrnewccLbUoJMIIUmkzba8&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(9.930639,-84.096136),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>
</head>
<body onload="initialize()">
	<div id="header">
		<div class="grid_12">
			<h1><a href="index.php">Restale a la violencia</a></h1>
		</div>
	</div>
	<div id="map_canvas"></div>
	<div class="barra">
		<div class="centro"><img src="imgs/centro.png" alt="" /></div>
    <div class="morado"></div>
	</div>
	<div class="grid_12" ng-controller="denunciac">
			<h3>Sistema de denuncias</h3>
			<p class="notable mchico">Bienvenido, Brian | <a href="index.php">Desconectarse</a></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <label for="">Buscador</label><input type="text" name="" value="" id=""/>

		    <ul class="bluebox">
		    	<li ng-repeat="denuncia in denuncias">{{ denuncia }}<a href="">Dar seguimiento</a></li>
		    </ul>
		</div>
	</div>
	<div id="footer">
		<p>Auspiciado por INAMU | PANIAMOR | ETC</p>
	</div>
	<script type="text/javascript" charset="utf-8">
		function denunciac($scope){
			$scope.denuncias = ["Denuncia - Tibás","Denuncia - San José Centro","Denuncia - Heredia Belén"];
		}
	</script>
</body>
</html>
