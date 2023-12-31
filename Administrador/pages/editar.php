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
	require_once("../modelos/Administrador.php");


	$id = $_GET["id"];
	$admin = new Administrador();
	$row = $admin->getidad($id);

	if ($row) {

		?>
		
		<div class="container">
		<h1 class="text-center">Edicion de usuarios</h1>
	<form action="../controladores/editarusuarios.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">

		<input type="hidden" name="id" value="<?php echo $id ?> ">

		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control"
			value="<?php echo $row['Nombreusu'] ?>">
		</div>

		<div class="mb-3">
			<label for="apellido" class="form-label">Apellido</label>
			<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $row['Apellidousu'] ?>" >
		</div>

		<div class="mb-3">
			<label for="usuario" class="form-label">Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $row['Usuario'] ?>">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">Contraseña</label>
			<input type="password" name="password" id="password" class="form-control" value="<?php echo $row['Passwordusu'] ?>">
		</div>

		<div class="mb-3">
			<label for="perfil" class="form-label">Perfil</label>
			<select name="perfil" id="perfil"  class="form-select">


				<option value="<?php echo $row['Perfil'] ?>" selected><?php echo $row['Perfil'] ?></option>
				
				<option value="docente">Docente</option>
				<option value="aprendiz">Aprendiz</option>
			</select>
		</div>

		<div class="mb-3">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" class="form-select">
				<option value="<?php echo $row['Estado'] ?>" selected><?php echo $row['Estado'] ?></option>

			
				<option value="inactivo">inactivo</option>
			</select>
		</div>

		<input type="submit" name="enviar" value="enviar" class="btn btn-success">

	</form>
	</div>

	

	 <?php } ?>
</body>
</html>