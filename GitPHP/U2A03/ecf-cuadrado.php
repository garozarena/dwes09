<?php


if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-cuadrado.php" method="post">
			
			Escribe un número : <br />
			<input type="text" name="n1" /><br />
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		echo "<table cellpadding='3' border='1'>";
			for($i=1;$i<=$_POST['n1'];$i++){
				if($i%2==0){
					echo "<tr bgcolor='lightblue'>";
				}else{echo "<tr>";}
				for($j=1;$j<=$_POST['n1'];$j++){
					echo "<td align='center'>".($i*$j);
					echo"</td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	}
?>