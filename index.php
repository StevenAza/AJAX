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

		<div id="resultado"></div>
	<div id="dos">
					

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
				$("#resultado").html(msg);
			});
		});

		
	</script>
<script>
		//Funcion de JQuery
		$( "#grupo").change(function() {
			var grupo = $("#grupo").val();
			$.ajax({
				method: "POST",
				url: "validarproceso.php",
				data: { grupo: grupo}
			})
			.done(function( msg ) {
				$("dos").html(msg);
			});
		});

		
	</script>


</body>