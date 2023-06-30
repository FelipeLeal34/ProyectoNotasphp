<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="container">

	<?php 

	require_once("../../Conexion.php");
	require_once("../modelos/Docente.php");


	$id = $_GET['id'];


	$admin = new Administrador();

	

	 ?>

	<form action="../controladores/eliminardocentes.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">
		<h2>ELIMINAR DOCENTE</h2>
		<div class="mb-3">
		<label class="form-label">id docente: </label>
		<input class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
		</div>

		<button class="btn btn-danger">eliminar</button>

	</form>

	</div>
</body>
</html>