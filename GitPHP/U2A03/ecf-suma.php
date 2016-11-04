<?php
/*Pedir un número X y calcular la suma de los X primeros números naturales (1 + 2 + 3 + …)*/

if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-suma.php" method="post">
			
			Escribe un número : <br />
			<input type="text" size="3" maxlength="2"  name="n1" /><br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		$resultado = 0;
		for($i = 1; $i<=$_POST["n1"]; $i++){
			echo $resultado." + ".$i;
			$resultado+=$i;
			echo " = ".$resultado;
			echo "<br>";
		}
		echo "RESULTADO: ".$resultado;
	}
?>