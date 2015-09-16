<?php
$materia = $_POST['grupo'];
$curso = $_POST['grados']
/*
	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');
	$arrRecorrer;
*/

	$primerM = array('DANZAS TEATRO','DIBUJO');
	$segundoM = array('DANZAS','MUSICA');
	$tercerM = array('DANZAS','TEATRO','MUSICA');
	$Select = "<label>SELECCIONE LA MATERIA </label>";
	$Recorrer;
	if($materia == 'A' && $curso='Primero'){
		$Recorrer = $primerM;

	}else if ($materia == 'B'  && $curso='Primero' ){

		$Recorrer = $segundoM;

	}else if($materia=='C'  && $curso='Primero'){
		$Recorrer = $tercerM;
	}

	$miSelect .= "<select id='materias' name='materias' class='form-control'>";
	foreach ($Recorrer as $mismaterias) {
		$miSelect .= "<option value=".$mismaterias.">".$mismaterias."</option>";
		}

	 $Select .= "</select>";

	echo $Select;


?>