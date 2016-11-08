<?php
/*Ir pidiendo por formulario una serie de números enteros (de uno en uno) e irlos sumando. Se
deja de pedir números al usuario cuando la cantidad supera el valor 50. Escribir entonces la
suma de todos los números introducidos. Pista: para poder mantener el valor acumulado
(antes de estudiar técnicas más avanzadas) utilizar un campo de formulario de tipo oculto
(“hidden”).*/
if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-acumulador.php" method="post">
			Escribe un número : <br />
			<input type="text" size="3" maxlength="2"  name="n1" /><br />
			<input type='hidden' name='oculto' value="0"/>
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
			$resultado=$_POST['oculto']+$_POST['n1'];
			if($resultado<50){
			?>
				<form action="ecf-acumulador.php" method="post">
					Escribe un número : <br />
					<input type="text" size="3" maxlength="2"  name="n1" /><br />
					<input type='hidden' name='oculto' value="<?php echo $resultado;?>"/>
					<input type="submit" name="enviar" value="Enviar"/>
				</form>
			<?php
		}else{echo $resultado;}
	}
		
?>