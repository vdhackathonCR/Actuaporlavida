<?php // ACM (main) created by ACore -1359236684

include "acore/acore.php";
$app = new acore;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Violencia Domestica</title>
	<?php  A::script('jquery')?>
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
	<div class="grid_12">
		<div class="grid_6">
			<h2>Tienes problemas!!</h2>
		    <ul class="bluebox">
		      <li>No eres el mismo.</li>
		      <li>Sientes que te faltan el respeto.</li>
		      <li>Te sientes triste.</li>
		      <li>Sientes que no vales nada.</li>
		      <li>Te sientes desmotivado.</li>
		      <li>Te sientes solo.</li>
		    </ul>
			<p>Si reconoce alguno de estos síntomas o sencillamente ocupas orientación, te recomendamos ingresar a nuestro portal.</p>
	      	<a href="app.php#/formulario" class="btnvd">Obtener ayuda</a>
		</div>
		<div class="grid_6">
			<p class="centrado"><img src="imgs/call.png" alt="" /></p>
			<a href="app.php" class="btnvd btnbig">Denuncia Solidaria</a>
			<p>Conoce algún caso de violencia, ya sea psicológica o física dentro de su familia o comunidad. <strong>Denúncialo.</strong></p>
		</div>
	</div>
	<div id="footer">
		<p>Auspiciado por INAMU | PANIAMOR | Fuerza pública de Costa Rica ~ <a href="app.php#/login">Administrador</a> | <a href="app.php#/devs">Developers</a></p>
	</div>
	<div>
	  <p class="centrado"><img src="imgs/logos.png" alt="" /></p>
</body>
</html>
