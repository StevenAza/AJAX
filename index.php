<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Ajax</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<form action="procesarAjax.php" class="form-control">
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
            <option value="Segundo">Segundo</option>
		</select>

		<div id="grupo" name="grupo"><label>SELECCIONE EL GRUPO</label>
		
		</div>

	<div id="materia" name="materia"><LABEL>SELECCIONE LAS MATERIAS:</LABEL>
	

	</div>
			
	</form>

	<script>
		//Funcion de JQuery
		$( "#selectGrado").change(function() {
			var grado = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",

				data: { grado: grado}
			})
			.done(function( msg ) {
				$("#grupo").html(msg);
			});
		});

		
	</script>
<script>
		//Funcion de JQuery
		$( "#grupo").change(function() {
			var grado = $('#selectGrado').val();
			var curso = $("#grupo").val();
			$.ajax({
				method: "POST",
				url: "validarproceso.php",
				data: { grado: grado, curso: curso}
			})
			.done(function( msg ) {
				$("materia").html(msg);
			});
		});

		
	</script>


</body>