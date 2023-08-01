<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar docentes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary bg-gradient">

	<?php 


		require_once("../../Conexion.php");
				require_once("../../Consultas.php");
				


				$consulta = new Consultas();

				$materias = $consulta->getMaterias();

				 ?>

	
	<div class="container">
		<h1 class="text-center">REGISTRO DE DOCENTES</h1>
	<form action="../controladores/agregardocentes.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border">

		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control">
		</div>

		<div class="mb-3">
			<label for="apellido" class="form-label">Apellido</label>
			<input type="text" name="apellido" id="apellido" class="form-control">
		</div>

		<div class="mb-3">
			<label for="documento" class="form-label">Documento</label>
			<input type="number" name="documento" id="documento" class="form-control">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">correo</label>
			<input type="correo" name="correo" id="correo" class="form-control">
		</div>

		<div class="mb-3">
			<label for="materia" class="form-label">materia</label>
			<select class="form-select" name="materia">
				<?php

				foreach($materias as $materia){ ?>
					<option value="<?php echo $materia['id_materia'] ?> "> <?php echo $materia['Nombremate'] ?></option>


					<?php } ?>
			</select>
			
		</div>

		<div class="mb-3">
			<label for="usuario" class="form-label">Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">Contraseña</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>

		<div class="mb-3">
			<label for="perfil" class="form-label">Perfil</label>
			<select class="form-select" id="perfil" name="perfil">
				<option value="docente">Docente</option>
			</select>
			
		</div>

		<div class="mb-3">
			<label for="estado" class="form-label">Estado</label>
			<select class="form-select" id="estado" name="estado">
				<option value="activo">Activo</option>
				<option value="inactivo">Inactivo</option>
			</select>
			
		</div>








	
	

		<input type="submit" name="enviar" value="enviar" class="btn btn-success">

	</form>
	</div>

</body>
</html>