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



</body>
</html>
