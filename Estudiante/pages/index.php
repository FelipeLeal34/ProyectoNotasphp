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
	 	<h1 class="text-center">LISTADO DE ESTUDIANTES</h1>
	 	<div class="col-auto-mt-5">
	 		<table class="table">
	 			<thead>
	 				<tr>
	 					<th scope="col">id_estudiante</th>
	 					<th scope="col">Nombre</th>
	 					<th scope="col">Apellido</th>
	 					<th scope="col">Documento</th>
	 					<th scope="col">Correo</th>
	 					<th scope="col">Materia</th>
	 					<th scope="col">Docente</th>
	 					<th scope="col">Promedio</th>
	 					<th scope="col">Fecha de registro</th>
	 				</tr>
	 			</thead>

	 			<tbody>
	 				<?php 

	 				require_once('../../Conexion.php');
	 				require_once('../modelos/estudiante.php');

	 					$estu =new Estudiante();
	 					$datos = $estu->getad();

	 					foreach($datos as $datos) { ?>

	 				 <tr>
	 				 	<td><?php echo $datos['id_estudiante'] ?></td>
				 	<td><?php echo $datos['Nombreestu'] ?></td>
				 	<td><?php echo $datos['Apellidoestu'] ?></td>
				 	<td><?php echo $datos['Documentoestu'] ?></td>
				 	<td><?php echo $datos['Correoesetu'] ?></td>
				 	<td><?php echo $datos['Materia'] ?></td>
				 	<td><?php echo $datos['Docente'] ?></td>
				 	<td><?php echo $datos['Promedio'] ?></td>
				 	<td><?php echo $datos['Fecha_registro'] ?></td>
				 	<td><a href="editar.php?id=<?php echo $datos['id_estudiante'] ?>"  class="btn btn-success">Actualizar</a></td>
				 	<td><a href="eliminar.php?id=<?php echo $datos['id_estudiante'] ?>" class="btn btn-danger">Eliminar</a></td>
				 	




			
				 </tr>
				 <?php } ?>
				 	
				 

				



			</tbody>


			

		</table>

	</div>

	</div>

</body>
</html>