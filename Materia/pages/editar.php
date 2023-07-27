<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</head>
<body>
	<?php 
	require_once("../../Conexion.php");
	require_once("../modelos/materia.php");

	$id = $_GET['Id'];
	$Materia = new Materia();
	$row = $Materia->getidMate($id);

	if($row)
	{

	 ?>
	 <div class="container">
	 		<h1 class="text-center">EDITAR MATERIA</h1>
	<form action="../controladores/editarmaterias.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">

		<input type="hidden" value="<?php echo $id ?>" name="id">

		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre Materia</label>
			<input type="text" name="NombreMateria" id="nombre" class="form-control" value="<?php echo $row['Nombremate'] ?>">

		</div>
		<input type="submit" name="" value="Actualizar" class="btn btn-success">
	</form>

		


	<?php } ?>
</body>
</html>