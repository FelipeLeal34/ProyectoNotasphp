<?php 


	require_once("../../Conexion.php");
	require_once("../modelos/Estudiante.php");
	$estudiante = new Estudiante();


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$id = $_POST["id"];
		$result = $estudiante->deletead($id);

		if ($result) {
			print"<script>alert('ESTUDIANTE ELIMINADO');
			window.location='../pages/index.php';</script>
			";
		} else{
			print"<script>alert('ESTUDIANTE NO ELIMINADO');
			window.location='../pages/eliminar.php';</script>;
			";
		}

	}
	
 ?>