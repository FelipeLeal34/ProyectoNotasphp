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

	 ?>
	 <div class="container">
	 	<h1 class="text-center">LISTADO DE USUARIOS</h1>
	 	<div class="col-auto-mt-5">
	 		<table class="table">
	 			<thead>
	 				<tr>
	 					<th scope="col">id_materia</th>
	 					<th scope="col">Nombre Materia</th>
	 				</tr>
	 			</thead>

	 			<tbody>
	 				<?php 

	 				require_once('../../Conexion.php');
	 				require_once('../modelos/materia.php');

	 					$usu =new Materia();
	 					$datos = $usu->getMate();

	 					foreach($datos as $datos) { ?>

	 				 <tr>
	 				 	<td><?php echo $datos['id_materia'] ?></td>
				 	<td><?php echo $datos['Nombremate'] ?></td>
				 	<td><a href="#"  class="btn btn-success">Actualizar</a></td>
				 	<td><a href="#" class="btn btn-danger">Eliminar</a></td>
	 				 </tr>
	 				<?php  } ?>
	 			</tbody>
	 		</table>
	 	</div>
</body>
</html>