<?php
/*Pedir al usuario dos números A y B entre el 1 y el 10. Escribir en pantalla tantos asteriscos
como diferencia haya entre los números (resolviéndolo con while, mientras uno sea menor
que otro se escribe asterisco) y repetir con almohadillas (resolviéndolo con for utilizando la
diferencia entre a y b como número de repeticiones).*/

if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-diferencia.php" method="post">
			
			Escribe 2 numeros del 1 al 10 : <br />
			<input type="text" size="3" maxlength="2"  name="n1" /><br />
			<br /><input type="text" size="3" maxlength="2" name="n2" /><br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		
		if($_POST["n1"]>$_POST["n2"]){$mayor = $_POST["n1"]; $menor = $_POST["n2"];}
		else{$mayor = $_POST["n2"]; $menor = $_POST["n1"];}
		
		$may = $mayor;
		$men = $menor;
		//para poder usar en el for las variables $mayor y $menor
		
		echo "WHILE: ";
		while($may!=$men){
			echo "*";
			$men++;
		}
		echo "<br>";
		
		echo "FOR: ";
		for($i = $menor;$i<$mayor; $i++){echo "#";}
		echo "<br>";
		
	}

?>