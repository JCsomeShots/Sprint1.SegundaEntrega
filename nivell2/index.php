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
			background-color: lightsalmon;
		}
	</style>
</head>
<body>
	<h1>PHP Bàsics</h1>	
	<h2>NIVELL 2</h2>

<SECTION class="ej01 ex">
<?php
echo "<h3>EXERCICI 1</h3>
<p>Calcular la suma</p>";
echo "<p>Escriure un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma.</p>";

function suma($num1 , $num2){
	if ($num1 === $num2) {
		return (($num1*2)*2) . " y son valores iguales";
	} else {
		return ($num1 + $num2);
	}
}

echo "la suma de los valores es: ". suma(1,2) . "<br/>";
echo "la suma de los valores es: ". suma(3,2) . "<br/>";
echo "la suma de los valores es: ". suma(2,2) . "<br/>";
echo "la suma de los valores es: ". suma(3,9) . "<br/>";
echo "la suma de los valores es: ". suma(25,25) . "<br/>";


?>
</SECTION>

</body>
</html>