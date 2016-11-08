<?php

	$contador=0;
	$resultado=0;
	
	echo "<h3>MULTIPLOS DE 3 Y 5 HASTA 1000</h3><br>";
	
	while($resultado<1000){
		$resultado=$contador*3;
		if($resultado%5==0){
			echo $resultado." ";
		}
		$contador++;
	}
	$contador2=0;
	$contador3=0;
	
	echo "<br>";
	echo "<h3>20 PRIMEROS MULTIPLOS DE 3 Y 5</h3><br>";
	
	while($contador2<=20){
		$resultado=$contador3*3;
		if($resultado%5==0){
			echo $resultado." ";
			$contador2++;
		}
		$contador3++;
	}
	
?>