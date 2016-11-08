<?php
if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-factorial.php" method="post">
			
			Escribe 1 numero : <br />
			<input type="text" size="3" maxlength="2"  name="n1" /><br />
			<br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		
		$resultado=1;
		
		for($i=1;$i<=$_POST['n1'];$i++){
			echo $resultado." * ".$i." = ";
			$resultado*=$i;
			echo $resultado."<br>";
		}
		
		echo "RESULTADO: ".$resultado;
	}
?>