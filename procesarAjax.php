<?php 
	$miGrado = $_POST['grado'];
/*
	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');
	$arrRecorrer;
*/
$miSelect = "<label>SELECCIONE UNA OPCION</label>";
	$primero = array('A','B','C');
	$segundo = array('A','C');

	if($miGrado == 'Primero'){
		$arrRecorrer = $primero;

	}else if ($miGrado == 'Segundo'){

		$arrRecorrer = $segundo;

	}
	$miSelect .= "<select id='grupo' name='grupo' class='form-control'>";
	foreach ($arrRecorrer as $grado) {
		$miSelect .= "<option value=".$grado.">".$grado."</option>";
		}

	$miSelect .= "</select>";

	echo $miSelect;







	

?>