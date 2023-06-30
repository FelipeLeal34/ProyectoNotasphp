<?php 


	require_once("../../Conexion.php");
	require_once("../modelos/Materia.php");
	$materia = new Materia();


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$id = $_POST["id"];
		$result = $materia->eliminarMate($id);

		if ($result) {
			print"<script>alert('MATERIA ELIMINADA');
			window.location='../pages/index.php';</script>
			";
		} else{
			print"<script>alert('MATERIA NO ELIMINADA');
			window.location='../pages/eliminar.php';</script>;
			";
		}

	}
	
 ?>