<?php


if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-recorte.php" method="post">
			
			Escribe una palabra : <br />
			<input type="text" name="str" /><br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		
		$len=strlen($_POST['str']);

		for($i=$len;$i>0;$i--){
			for($j=0;$j<$i;$j++){
				echo $_POST['str'][$j];
			}
			echo '<br>';
		}
	}
?>