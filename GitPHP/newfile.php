<?php
// Codifica un programa PHP en el que incluyas ejemplos propios de los elementos que se van indicando. Incluye estos apartados antes de cada prueba en forma de comentario de lÃ­nea:

//1. Comentarios de los tres tipos
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
	$isdouble=false;
	if(is_double($num5)==true){
		echo "$num5 es de tipo double.";
	}
	echo "<br>";
	
//* Uso de is_numeric, is_boolean y is_double con estas variables

	echo "<h3>ACTIVIDAD 7</h3>";
	echo "<br>";
	
	echo "<br>";
//* Declaración de una variable de tipo string. Pruebas con la función *strlen*
//y con tres de las funciones indicadas en el enlace.
	echo "<h3>ACTIVIDAD 8</h3>";
	echo "<br>";
	
	echo "<br>";
//* Declaración de un array escalar y uno asociativo

	echo "<h3>ACTIVIDAD 9</h3>";
	echo "<br>";
	
	echo "<br>";
//* Ordenación y volcado de información con *var_dump* siguiendo 
//dos criterios de ordenación en cada uno de los arrays

	echo "<h3>ACTIVIDAD 10</h3>";
	echo "<br>";
	
	echo "<br>";
	
//* Una estructura de control de cada tipo (if-elsif-else, switch, while, do-while, for)

	echo "<h3>ACTIVIDAD 11</h3>";
	echo "<br>";
	
	echo "<br>";
	
//* Un recorrido por cada uno de los dos arrays utilizando foreach, generando por ejemplo una lista ordenada con sus elementos
//* Dos pruebas con la variable superglobal _SERVER
//* Dos pruebas de funciones: una devolverá algun tipo, la otra no
//* Una función que utilice una variable global
//* Un formulario que reciba datos y los muestre por pantalla 

	echo "<p>Examina el código fuente de esta página y compruébalo.</p>\n";
// el código PHP queda oculto al usuario final
	echo "<!-- sólo se verá lo que nosotros queramos-->\n";
	$variableSecreta = 12345;
?>