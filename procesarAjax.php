<?php 
	$miGrado = $_POST['grado'];
/*
	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');
	$arrRecorrer;
*/

	$primero = array('A','B','C');
	$segundo = array('A','C');
	$miSelect = "<label>SELECCIONE </label>";
	if($miGrado == 'Primero'){
		$arrRecorrer = $primero;

	}else if ($miGrado == 'Segundo'){

		$arrRecorrer = $segundo;

	}
	$miSelect .= "<select id='grupo' name='grupo' class='form-control'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
		}

	 $miSelect .= "</select>";

	echo $miSelect;







	

?>