<?php
/*Pedir dos números A y B y calcular la potencia A elevado a B utilizando iteraciones (no una
función matemática predefinida).*/

if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-potencia.php" method="post">
			
			Escribe 2 numeros: <br />
			<input type="text" size="3" maxlength="2"  name="n1" /><br />
			<br /><input type="text" size="3" maxlength="2" name="n2" /><br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		
		$num = $_POST["n1"];
		$numFijo = $_POST["n1"];
		
		for($i=1; $i<$_POST["n2"]; $i++){
			echo $num." * ".$numFijo;
			$num*=$numFijo;
			echo " = ".$num;
			echo "<br>";
		}
		
		echo "RESULTADO= ".$num;
		
	}


?>