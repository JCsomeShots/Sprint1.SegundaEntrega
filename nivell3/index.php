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
			background-color: lightgreen;
		}
	</style>
</head>
<body>
	<h1>PHP Bàsics</h1>	
	<h2>NIVELL 3</h2>

<section class="ej01 ex">
<?php
echo "<h3>EXERCICI 1</h3>
<p>Cadena Array</p>";
echo "<p>Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).</p>";

function cadena($str){

	if((!(empty($str)))== false){ 
		echo "$str esta vacio <br/>";
	} else if((!(is_string($str)))== true){
		echo "$str debe contener información alfanumérica <br/>";
	} else {
		var_dump($str);
		echo "<br/>";

		$str2 = str_replace(" ", "", $str);
		var_dump($str2);
		echo "<br/>";
		
		$str2 = str_split($str2);
		var_dump($str2);
		echo "<br/>";
	}
	echo "<br/>";
}
cadena (123);
cadena(true);
cadena(false);
cadena("hola mund o");
cadena ("");
cadena("  hola mund o  ");

?>
</section>

<section class="ej02 ex">
<?php 

echo "<h3>EXERCICI 2</h3>
<p>nombre de vegades</p>";
echo "<p>Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.</p>";

function contar ($str , $llave){

	if((!(empty($str)))== false){ 
		echo "El primer valor esta vacio <br/>";
	} else if((!(is_string($str)))== true){
		echo "El primer valor $str , debe contener información alfanumérica <br/>";
	} else if((!(empty($llave)))== false){ 
		echo "El segundo valor esta vacio <br/>";
	} else if((!(is_string($llave)))== true){
		echo "el segundo valor $llave , debe ser un string <br/>";
	} else {
		$str = str_split($str);
		$count = array_count_values($str);
		echo "El número de veces que aparece $llave es: ".$count[$llave] . "<br/>";
	}
}
contar('hola mundo',2);
contar(true,'o');
contar('hola mundo','');
contar('','o');
contar('hola mundo','o');
contar('hola oooo','o');
contar('hola mundo aquí testeando','a');

?>
</section>



</body>
</html>
