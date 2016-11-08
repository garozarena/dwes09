<?php
if (! isset ( $_POST ['enviar'] )) {
	?>
<form action="U2A04.php" method="post">

	<h3>Calculador de tiempo de trayectos ferroviarios</h3>

	Distancia: <input type="text" size="3" maxlength="4" name="n1" /><br />
	<br />Velocidad media: <input type="text" size="3" maxlength="3" name="n2" />km/h
	<br /> <input type="submit" name="enviar" value="Enviar" />
</form>
<?php
} else {
	class tren {
		private $distancia;
		private $velocidad;
		function setDistancia($dist) {
			$this->distancia = $dist;
		}
		function setVelocidad($vel) {
			$this->velocidad = $vel;
		}
		function getVelocidad(){
			return $this->velocidad;
		}
		function getDistancia(){
			return $this->distancia;
		}
		function calcularTiempo(){
			return $this->distancia/$this->velocidad*60;
		}
	}
	
	$tren1 = new tren();
	$tren1->setDistancia($_POST['n1']);
	$tren1->setVelocidad($_POST['n2']);
	echo "Tardaras un total de ".$tren1->calcularTiempo(). " minutos.";
}

?>