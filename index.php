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


<section class="ej02 ex">
<?php 

echo "<h3>EXERCICI 2</h3>
<p>Strings</p><br/>";

$saludo = "Hello, World!";
echo "$saludo <br/>";
$saludo = strtoupper($saludo);
echo "$saludo <br/>";
$saludo = strtolower($saludo);
echo "$saludo <br/>";
$contar = strlen($saludo);
echo "$contar <br/>";
$saludo = strrev($saludo);
echo "$saludo <br/>";
$saludo = strrev($saludo);
echo "$saludo <br/>";
$saludo = "Bon dia Mon!";
$contingut = "Aquest és el curs de PHP";
echo "$saludo $contingut <br/>";

?>
</section>


<section class="ej03 ex">
<?php 
echo "<h3>EXERCICI 3</h3>
<p>Constant</p><br/>";

define("ALUMNO", "Juan Carlo Castillo");
echo "<h4><strong>".ALUMNO."</strong></h4>";

?>
</section>


<section class="ej04 ex">
<?php 
echo "<h3>EXERCICI 4</h3>
<p>Operaciones Matemáticas Básicas</p><br/>";

$x = 6;
$y = 4;
$n = 2.5;
$m = 3.4;

echo "La variable 'X' tiene el valor de ".$x."<br/>";
echo "La variable 'Y' tiene el valor de ".$y."<br/>";
echo "<br/>";
echo "la suma de 'X' e 'Y' es: ".($x + $y). "<br/>";
echo "la resta de 'X' e 'Y' es: ".($x - $y). "<br/>";
echo "la multiplicación de 'X' e 'Y' es: ".($x * $y). "<br/>";
echo "la división de 'X' e 'Y' es: ".($x / $y). "<br/>";
echo "el módulo de 'X' e 'Y' es: ".($x % $y). "<br/>";
echo "<br/>";


echo "La variable 'N' tiene el valor de ".$n."<br/>";
echo "La variable 'M' tiene el valor de ".$m."<br/>";
echo "<br/>";
echo "la suma de 'N' e 'M' es: ".($n + $m). "<br/>";
echo "la resta de 'N' e 'M' es: ".($n - $m). "<br/>";
echo "la multiplicación de 'N' e 'M' es: ".($n * $m). "<br/>";
echo "la división de 'N' e 'M' es: ".($n / $m). "<br/>";
echo "el módulo de 'N' e 'M' es: ".($n % $m). "<br/>";
echo "<br/>";

echo " el doble de la variable 'X' es: ".($x*2). "<br/>";
echo " el doble de la variable 'Y' es: ".($y*2). "<br/>";
echo " el doble de la variable 'N' es: ".($n*2). "<br/>";
echo " el doble de la variable 'M' es: ".($m*2). "<br/>";
echo "<br/>";
echo "La suma de todas las variables es: ".($x + $y + $n + $m)."<br/>";
echo "<br/>";
echo "La multiplicación de todas las variables es: ".($x * $y * $n * $m)."<br/>";
?>
</section>



</body>
</html>