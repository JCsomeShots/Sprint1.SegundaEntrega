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

<section class="ej01 ex">
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
</section>


<section class="ej02 ex">
<?php 

echo "<h3>EXERCICI 2</h3>
<p>Primer i últim</p>";
echo "<p>Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i imprimeix la nova cadena.</p>";

function trocar($cadena){
	if ((strlen($cadena))===0) {
		echo '"no ha introducido ninguna palabra"';
	}

	if ((strlen($cadena))!==1) {
		$valor1 = substr($cadena,-1);
		$valor2 = substr($cadena,0,1);

		$cadena = str_split($cadena);
		$cadena = array_slice($cadena, 0 , -1);
		array_shift($cadena);
		array_unshift($cadena, $valor1);
		array_push($cadena, $valor2);

		$cadena = implode("",$cadena);
		echo $cadena . "<br/>";
	} else {
		echo $cadena . "<br/>";
	}
	
}

trocar('juan');
trocar('wxyz');
trocar('a');
trocar('');
trocar('ab');
trocar('ama');
trocar('rayar');


?>
</section>


</body>
</html>