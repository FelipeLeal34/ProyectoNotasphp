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

	<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">

		<div class="container">

			<ul class="nav nav-underline justify-content-center">
				<li class="nav-item">
					<a href="../../Administrador/pages/index.php" class="nav-link ">Administrador</a>
				</li>
			

			
				<li class="nav-item">
					<a href="../../Docente/pages/index.php" class="nav-link active">Docente</a>
				</li>
			

			
				<li class="nav-item">
					<a href="../../Estudiante/pages/index.php" class="nav-link">Estudiante</a>
				</li>
			

			
				<li class="nav-item">
					<a href="../../Materia/pages/index.php" class="nav-link">Materias</a>
				</li>



				</ul>

				<ul class="nav nav-pills">

					<li class="nav-item">
						<a class="nav-link">log in</a>
					</li>

					<li class="nav-item">
						<a class="nav-link">Sign up</a>
					</li>

				</ul>
			

		</div>

	</nav>




	<div class="container">

		<h1 class="text-center">LISTADO DE DOCENTES</h1>
		<a class="btn btn-info" href="agregar.php">Agregar</a>

	<div class="col-auto-mt-5">



		<table class="table">


			<thead>

	<tr>

				<th scope="col">id_docente</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Documento</th>
				<th scope="col">correo</th>
				<th scope="col">materia</th>
				<th scope="col">Usuario</th>
				<th scope="col">Perfil</th>
				<th scope="col">Estado</th>
				<th scope="col">Actualizar</th>
				<th scope="col">ELIMINAR</th>


			</tr>
			</thead>

		

			<tbody>
				<?php 

				require_once('../../Conexion.php');
				require_once('../modelos/Docente.php');


				$doc = new Docente();
				$datos = $doc->getdoc();


				 	foreach ($datos as $datos ) { ?>
				 <tr>

				 
				 	<td><?php echo $datos['id_docente'] ?></td>
				 	<td><?php echo $datos['Nombredoc'] ?></td>
				 	<td><?php echo $datos['Apellidodoc'] ?></td>
				 	<td><?php echo $datos['Documentodoc'] ?></td>
				 	<td><?php echo $datos['Correodoc'] ?></td>
				 	<td><?php echo $datos['Materiadoc'] ?></td>
				 	<td><?php echo $datos['Usuariodoc'] ?></td>
				 	<td><?php echo $datos['Perfil'] ?></td>
				 	<td><?php echo $datos['Estadodoc'] ?></td>
				 	<td><a href="editar.php?id=<?php echo $datos['id_docente'] ?>"  class="btn btn-success">Actualizar</a></td>
				 	<td><a href="eliminar.php?id=<?php echo $datos['id_docente'] ?>" class="btn btn-danger">Eliminar</a></td>
				 	




			
				 </tr>
				 <?php } ?>
				 	
				 

				



			</tbody>


			

		</table>

	</div>

	</div>

</body>
</html>