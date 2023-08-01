<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

	<?php 


	require_once("../../Conexion.php");
	require_once("../modelos/Docente.php");


	$id = $_GET['id'];
	$doc = new Docente();
	$row = $doc->getiddoc($id);

	if($row)
	{
	 ?>
	

	<div class="container">
		<h1 class="text-center">EDITAR DOCENTE</h1>
	<form action="../controladores/editardocente.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">

		<input type="hidden" value="<?php echo $id ?>" name="id">

		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $row['Nombredoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="apellido" class="form-label">Apellido</label>
			<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $row['Apellidodoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="documento" class="form-label">Documento</label>
			<input type="number" name="documento" id="documento" class="form-control" value="<?php echo $row['Documentodoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">correo</label>
			<input type="correo" name="correo" id="correo" class="form-control" value="<?php echo $row['Correodoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="materia" class="form-label">materia</label>
			<select class="form-select" name="materia">
				<option value="<?php echo $row['Materiadoc'] ?>" selected><?php echo $row['Materiadoc'] ?></option>
			</select>
			
		</div>

		<div class="mb-3">
			<label for="usuario" class="form-label">Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $row['Usuariodoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">Contraseña</label>
			<input type="password" name="password" id="password" class="form-control" value="<?php echo $row['Passworddoc'] ?>">
		</div>

		<div class="mb-3">
			<label for="perfil" class="form-label">Perfil</label>
			<select class="form-select" id="perfil" name="perfil">
				<option value="docente" selected><?php echo $row['Perfil']?></option>
			</select>
			
		</div>

		<div class="mb-3">
			<label for="estado" class="form-label">Estado</label>
			<select class="form-select" id="estado" name="estado">
				<option value="<?php echo $row['Estadodoc']?>"><?php echo $row['Estadodoc']?></option>
				<option value="inactivo">Inactivo</option>
			</select>
			
		</div>








	
	

		<input type="submit" name="enviar" value="enviar" class="btn btn-success">

	</form>
	</div>

<?php } ?>


</body>
</html>