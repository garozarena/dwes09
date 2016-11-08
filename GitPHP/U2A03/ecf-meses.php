<?php


if(!isset($_POST['enviar'])){
	?>
		<form action="ecf-meses.php" method="post">
			
			Escribe un mes : <br />
			<input type="text" name="str" /><br />
			<input type="radio" name="bisiesto" value="bisiesto"> Bisiesto<br>
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
		<?php
	
	}else{
		
		switch(strtolower($_POST['str'])){
			case 1:
			case "enero":
			case 3:
			case "marzo":
			case 5:
			case "mayo":
			case 7:
			case "julio":
			case 8:
			case "agosto":
			case 10:
			case "octubre":
			case 12:
			case "diciembre":
				$dias=31;
				break;
			case 2:
			case "febrero":
				if(!isset($_POST['bisiesto'])){$dias=28;
				}else{$dias=29;}
				break;
			case 4:
			case "abril":
			case 6:
			case "junio":
			case 9:
			case "septiembre":
			case 11:
			case "noviembre":
				$dias=30;
				break;
			default:
				$dias="ERROR";
				break;
		}
		
		echo "Tiene ".$dias." dias.";
		
	}
?>
