<?php
$curso = $_POST['curso'];
$grado = $_POST['grado']
/*
	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');
	$arrRecorrer;
*/

	$A = array('DANZAS','TEATRO','DIBUJO');
	$B = array('DANZAS','MUSICA');
	$C = array('DANZAS','TEATRO','MUSICA');



	if($grado == "Primero" && $curso =="A"){
	

	$Select = "<select name='materia' id='materia'>";
	foreach ($A as $mismaterias) {
		$Select .= "<option value=".$mismaterias.">".$mismaterias."</option>";
		}

	 //$Select .= "</select>";
		$Select .="</select>";
	echo $Select;
	}
	//$miSelect .= "<select id='materias' name='materias' class='form-control'>";
	elseif($grado =="Primero" && $curso=="B"){
		$Select = "<select id='materia' name='materia'>";
		foreach ($B as $mismaterias) {
			# code...
		}
		$Select .="</select>";
	echo $Select;
	}

elseif($grado =="Primero" && $curso=="C"){
		$Select = "<select id='materia' name='materia'>";
		foreach ($B as $mismaterias) {
			# code...
		}
		$Select .="</select>";
	echo $Select;
	}
	echo "";
	else{
		echo 'pailas';
	}

?>