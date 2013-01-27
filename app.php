<?php // ACM (main) created by ACore -1359236684

include "acore/acore.php";
$app = new acore;
?>
<!doctype html>
<html lang="en" ng-app="vdhack">
<head>
	<meta charset="UTF-8">
	<title>Violencia Domestica</title>
	<?php  A::script('jquery,angular','js/')?>
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="header">
		<div class="grid_12">
			<h1><a href="index.php">Restale a la violencia</a></h1>
		</div>
	</div>
	<div class="imgvd">

	</div>
	<div class="barra">
		<div class="centro"><img src="imgs/centro.png" alt="" /></div>
		<div class="morado"></div>
	</div>
	<div class="grid_12">
		<div ng-view></div>
	</div>
	<div id="footer">
		<p>Auspiciado por INAMU | PANIAMOR | Fuerza pública de Costa Rica.</p>
	</div>
	<div>
	  <p class="centrado"><img src="imgs/logos.png" alt="" /></p>
</body>
</html>
