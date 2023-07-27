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

	<?php require_once("../../Usuario/modelos/Usuario.php"); 


?>

	<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">

		<div class="container">

			<ul class="nav nav-underline justify-content-center">
				<li class="nav-item">
					<a href="../../Estudiante/pages/index.php" class="nav-link active">Estudiantes</a>
				</li>
			

			
				<li class="nav-item">
					<a href="../../Materia/pages/index.php" class="nav-link ">Materias</a>
				</li>
			

			
	


				</ul>

				<ul class="nav nav-pills">

					<li class="nav-item "><a class="nav-link disabled"href=""><?php echo $_SESSION['nombre'] ?></a></li>

				

					<li class="nav-item">

						<a href="../../Usuario/controladores/salir.php" class="nav-link">Log out</a>
					</li>

				
				</ul>
			

		</div>

	</nav>




	

</body>
</html>