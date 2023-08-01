<?php 

	require_once("../../Conexion.php");
	require_once("../modelos/Docente.php");
	$doc = new Docente();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$id = $_POST["id"];
		$result = $doc->eliminardoc($id);

		if ($result) {
			print"<script>alert('USUARIO ELIMINADO');
			window.location='../pages/index.php';</script>
			";
		} else{
			print"<script>alert('USUARIO NO ELIMINADO');
			window.location='../pages/eliminar.php';</script>;
			";
		}

	}


 ?>