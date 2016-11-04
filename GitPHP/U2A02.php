<?php
// Codifica un programa PHP en el que incluyas ejemplos propios de los elementos que se van indicando. Incluye estos apartados antes de cada prueba en forma de comentario de lÃ­nea:

//1. Comentarios de los tres tipos

	//comentario de linea
	/*comentario
	 multilinea*/
	#comentario tipo consola

//* Sentencias echo con los dos tipos de comillas
	
	echo "<h3>ACTIVIDAD 1</h3>";
	echo "<br>";
	$primeraFrase = "Hola Mundo";
	echo '$primeraFrase = ';
	echo "$primeraFrase";
	echo "<br>";

//* Uso de al menos tres operadores de comparación y dos operadores lógicos
	
	echo "<h3>ACTIVIDAD 2</h3>";
	echo "<br>";
	$num1=3;
	$num2=5;
	$num3=$num1 + $num2 - 1;
	
	if($num1>$num2){
		echo "$num1 es mayor que $num2";
	}else if($num1<$num2){
		echo "$num1 es menor que $num2";
	}else if($num1==$num2){
		echo "$num1 y $num2 son iguales";
	}
	echo "<br>";
	if($num1>0 && $num2>0){
		echo "$num1 y $num2 son mayores que 0";
	}
	if($num2>10 || $num1>10){
		echo "Alguno de los dos numeros es mayor que 10";
	}
	echo "<br>";
	
//* Uso de un operador de asignación

	echo "<h3>ACTIVIDAD 3</h3>";
	echo "<br>";
	
	$palabra1 = "Hola ";
	$palabra2 = "Mundo";
	$palabra1.=$palabra2;
	
	echo "$palabra1";
	
	echo "<br>";
//* Declaración y uso de una variable por referencia

	echo "<h3>ACTIVIDAD 4</h3>";
	echo "<br>";
	
	$num4=0;
	
	for($i=0;$i<=5;$i++){
		$num4++;
		echo "$num4 + 1 = ";
	}
	$num4++;
	echo"$num4";
	
	echo "<br>";
//* Declaración y uso de dos constantes, una que obligue a respetar las mayúsculas
//en su uso y otra que no lo haga

	echo "<h3>ACTIVIDAD 5</h3>";
	echo "<br>";
	
	define("FRASE", "Hola Mundo" );
	define("FRASE2", "Mundo Hola", true);
	
	echo "opcion FRASE:";
	echo "<br>";
	echo FRASE;
	echo "<br>";
	echo "opcion Frase:";
	echo "<br>";
	echo Frase;
	echo "<br>";
	echo "opcion FRASE2:";
	echo "<br>";
	echo FRASE2;
	echo "<br>";
	echo "opcion Frase2:";
	echo "<br>";
	echo Frase2;
	
	echo "<br>";
//* Declaración y uso de un variable booleana y otra de tipo double

	echo "<h3>ACTIVIDAD 6</h3>";
	echo "<br>";
	$num5=5.55;
	$positivo=false;
	
	if($num5>0){
		$positivo = true;
	}
	if($positivo==true){
		echo "$num5 es positivo";
	}
	
	echo "<br>";
	
//* Uso de is_numeric, is_boolean y is_double con estas variables

	echo "<h3>ACTIVIDAD 7</h3>";
	echo "<br>";
	if(is_numeric($num5)==true){echo "$num5 es un numero";}
	echo "<br>";
	if(is_double($num5)==true){echo "$num5 es de tipo double.";}
	echo "<br>";
	if(is_bool($positivo)==true){echo 'la variable $positivo es de tipo booleano';}
	
	echo "<br>";
//* Declaración de una variable de tipo string. Pruebas con la función *strlen*
//y con tres de las funciones indicadas en el enlace.
	echo "<h3>ACTIVIDAD 8</h3>";
	echo "<br>";
	
	$cadena = "hola mundo";
	$longCadena = strlen($cadena);
	echo "$cadena tiene $longCadena caracteres";
	echo "<br>";
	echo "funcion ucwords: ";
	echo ucwords($cadena);
	echo "<br>";
	echo "funcion substring: ";
	echo substr($cadena, 2, 5);
	
	echo "<br>";
//* Declaración de un array escalar y uno asociativo

	echo "<h3>ACTIVIDAD 9</h3>";
	echo "<br>";
	
	$MarcasVehiculosEscalar = array('seat', 'orbea', 'yamaha', 'mercedes');
	
	echo 'Generado el array $MarcasVehiculosEscalar';
	echo "<br>";
	
	$MarcasVehiculosAsociativo = array(
			'coche1' => 'audi',
			'bici' => 'orbea',
			'moto' => 'yamaha',
			'coche2' => 'mercedes'
	);
	
	echo 'Generado el array $MarcasVehiculosAsociativo';
	echo "<br>";
	
	echo "<br>";
	
//* Ordenación y volcado de información con *var_dump* siguiendo 
//dos criterios de ordenación en cada uno de los arrays

	echo "<h3>ACTIVIDAD 10</h3>";
	echo "<br>";
	
	echo "Orden alfabético por valores: ";
	asort($MarcasVehiculosEscalar);
	var_dump($MarcasVehiculosEscalar);
	echo "<br>";
			
	echo "Orden alfabético por claves: ";
	
	ksort($MarcasVehiculosAsociativo);
	var_dump($MarcasVehiculosAsociativo);
			
	echo "<br>";
	
//* Una estructura de control de cada tipo (if-elsif-else, switch, while, do-while, for)

	echo "<h3>ACTIVIDAD 11</h3>";
	echo "<br>";
	
	$num6=7;
	
	echo "ESTRUCTURA IF ELSEIF ELSE:";
	echo "<br>";
	if($num6<0){echo "El numero es negativo";}
	elseif($num6%2==0){echo "El numero es par";}
	else{echo "El numero es impar";}
	echo "<br>";
	echo "<br>";
	
	echo "ESTRUCTURA SWITCH:";
	echo "<br>";
	
	switch ($num6) {
		case 1 :
			echo "El numero es 1";
			break;
		case 2 :
			echo "El numero es 2";
			break;
		case 3 :
			echo "El numero es 3";
			break;
		case 4 :
			echo "El numero es 4";
			break;
		case 5 :
			echo "El numero es 5";
			break;
		case 6 :
			echo "El numero es 6";
			break;
		case 7 :
			echo "El numero es 7";
			break;
		case 8 :
			echo "El numero es 8";
			break;
		case 9 :
			echo "El numero es 9";
			break;
		case 0 :
			echo "El numero es 0";
			break;
		default :
			echo "El numero esta fuera de rango";
			break;
	}
	echo "<br>";
	echo "<br>";
	
	echo "ESTRUCTURA WHILE";
	echo "<br>";
	
	$i=0;
	while($i<$num6){
		echo "este es el ciclo $i de un while";
		echo "<br>";
		$i++;
	}
	
	echo "<br>";
	
	echo "ESTRUCTURA DO-WHILE:";
	echo "<br>";
	$k=0;
	do{
		echo "este es el ciclo $k de un do-while";
		$k++;
		echo "<br>";
	}while($k<$num6);
	
	echo "<br>";
	
	echo "ESTRUCTURA FOR: ";
	echo "<br>";
	
	for($j=0;$j<$num6;$j++){
		echo "este es el ciclo $j de un for";
		echo "<br>";
	}
	
	
	echo "<br>";
	
//* Un recorrido por cada uno de los dos arrays utilizando foreach, 
//generando por ejemplo una lista ordenada con sus elementos
	echo "<h3>ACTIVIDAD 12</h3>";
	echo "<br>";
	
	asort($MarcasVehiculosEscalar);
	foreach($MarcasVehiculosEscalar as $marca){
		echo "Marca: $marca";
		echo "<br>";
	}
	echo "<br>";
	
	ksort($MarcasVehiculosAsociativo);
	foreach($MarcasVehiculosAsociativo as $marca2){
		echo "Marca: $marca2";
		echo "<br>";
	}
	
	echo "<br>";
	
//* Dos pruebas con la variable superglobal _SERVER
	echo "<h3>ACTIVIDAD 13</h3>";
	echo "<br>";
	
	echo "DOCUMENT_ROOT: ";
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "<br>";
	echo "SERVER_NAME: ";
	echo $_SERVER['SERVER_NAME'];
	
	echo "<br>";
//* Dos pruebas de funciones: una devolverá algun tipo, la otra no
	echo "<h3>ACTIVIDAD 14</h3>";
	echo "<br>";
	
	function printFuncion(){
		return "esto es una función";
	}
	
	/*function printTipo($num7): int{
		return $num7;
	}
	
	*/echo 'Primera función, no devuelve tipo: '.printFuncion();/*
	echo '<br>Segunda función, devuelve si es tipo int: ';
	echo printTipo(7)." es tipo int";*/
	
	
	echo "<br>";
//* Una función que utilice una variable global
	echo "<h3>ACTIVIDAD 15</h3>";
	echo "<br>";
	
	
	
	function funcionGlobal(){
		global $varGlobal;
		return $varGlobal*2;
	}
	$varGlobal = 5;
	echo 'esta funcion devuelve el doble de $varGlobal(5): '.funcionGlobal();
	
	echo "<br>";
//* Un formulario que reciba datos y los muestre por pantalla
	echo "<h3>ACTIVIDAD 16</h3>";
	echo "<br>";

	if(!isset($_POST['enviar'])){
		?>
		
		<form action="U2A02.php" method="post">
			Nombre y Apellidos: <br /><input type="text" name="nombre" /><br />
			Edad: <br /><input type="text" size="3" maxlength="2" name="edad" /><br />
			Sexo: <br />					<select name="sexo">
	  				<option value="otro" selected="selected">Otro</option>
	  				<option value="hombre">Hombre</option>
					<option value="mujer">Mujer</option>
				</select>
			<br>
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		echo "Bienvenid@, estos son tus datos: <br>";
		echo "<br>";
		echo "nombre : ".$_POST["nombre"];
		echo "<br>";
		echo "edad : ".$_POST["edad"];
		echo "<br>";
		echo "sexo : ".$_POST["sexo"];
		echo "<br>";
	}
		
	echo "<br>";

	echo "<p>Examina el código fuente de esta página y compruébalo.</p>\n";
// el código PHP queda oculto al usuario final
	echo "<!-- sólo se verá lo que nosotros queramos-->\n";
	$variableSecreta = 12345;
?>