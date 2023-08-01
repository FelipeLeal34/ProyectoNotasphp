<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	<div class="container">
	<?php 

	require_once("../../Conexion.php");
	require_once("../modelos/Estudiante.php");

	$id = $_GET['id'];

	$Estudiante= new Estudiante();

	 ?>		

		<form action="../controladores/eliminarEstudiantes.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">
		<h2>ELIMINAR ESTUDIANTE</h2>
		<div class="mb-3">
		<label class="form-label">id estudiante: </label>
		<input class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
		</div>

		<button class="btn btn-danger">eliminar</button>

	</form>

	</div>

</head>
<body>

</body>
</html>