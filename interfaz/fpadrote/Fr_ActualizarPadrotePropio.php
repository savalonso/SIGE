<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		 include("../controladora/CtrListaPadrotes.php");
		 		$id = $_GET["id"];
			    $ctrPadrote = new CtrListaPadrotes;
				$lista = $ctrPadrote->obtenerPadrote($id);

				foreach ($lista as $padrote) {

					$id = $padrote->getId();
					$nRegistro = $padrote->getNumeroRegistro();
					$nombreP = $padrote->getNombrePadrote();
					$cComercial = $padrote->getCasaComercial();
					$raza = $padrote->getRazaPadrote();
					$nCanasta = $padrote->getNumeroCanasta();
					$fechaC = $padrote->getFechaCompra();
					$cPajillas = $padrote->getCantidadPajillas();
					$pPajilla = $padrote->getPrecioPajillaSalto();
					$pAnimal = $padrote->getPrecioAnimal();
					$identificador = $padrote->getIdentificador();
				}
		?>
		<form id="actualizarPadrote"  method="Post" role="form">
			
			<h1> Actualizar Padrote Propio</h1>
			<label for="registroPadrote">Numero de Registro</label><br>
			<input type="text" id="nRegistro" name="nRegistro" placeholder="Dato: <?php echo $nRegistro; ?>" value="<?php echo $nRegistro; ?>"><br><br>
			<label for="nombrePadrote">Nombre Padrote</label><br>
			<input type="text" id="nPadrote" name="nPadrote" placeholder="Dato: <?php echo $nombreP; ?>" value="<?php echo $nombreP; ?>"><br><br>
			<label for="razaPadrote">Raza Padrote</label><br>
			<input type="text" id="raza" name="raza" placeholder="Dato: <?php echo $raza; ?>" value="<?php echo $raza; ?>"><br><br>
			<label for="fechaCompra">Fecha Compra</label><br>
			<input type="date" id="fCompra" name="fCompra" placeholder="Dato: <?php echo $fechaC; ?>" value="<?php echo $fechaC; ?>"><br><br>
			<label for="PrecioAnimal">Precio Animal</label><br>
			<input type="number" id="pAnimal" name="pAnimal" placeholder="Dato: <?php echo $pAnimal; ?>" value="<?php echo $pAnimal; ?>"><br><br>

			<input type="button" value="Actualizar" onclick="actualizarPadrote('<?php echo $identificador?>','<?php echo $id ?>')">
			
			
		
			
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsPadrote.js"></script>