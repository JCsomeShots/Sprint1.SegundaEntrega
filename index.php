<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Bàsics</title>
	<style>
		h1 , h2 {
			text-align: center;
		}
		.ex {
			padding: 20px;
			background-color: lightcyan;
		}
		.ej03 h4 {
			background-color: bisque;
			text-align: center;
		}

	</style>
</head>
<body>
	<h1>PHP Bàsics</h1>	
	<h2>NIVELL 1</h2>

<SECTION class="ej01 ex">
<?php
echo "<h3>EXERCICI 1</h3>
<p>Definiendo variables</p><br/>";

$entero = 20;
if(is_int($entero)){
	echo $entero . " = es una variable tipo número entero 'integer' <br/>";
}


$flotante = 2.1;
if (is_float($flotante)) {
	echo $flotante . " = es una variable tipo flotante 'float' <br/>";
}

$doble = 3.1416;
if (is_double($doble)) {
	echo $doble . "  = es una variable tipo que contiene valores decimales 'double' <br/>";
}

$nombre = "Juan Carlo Castillo";
if (is_string($nombre)) {
	echo $nombre . " = es una variable tipo cadena 'string' <br/>";
}

$boleano = true;
if (is_bool($boleano)) {
	echo $boleano . " = es una variable tipo boleano 'boolean' <br/>";
}
?>
</SECTION>
</body>
</html>