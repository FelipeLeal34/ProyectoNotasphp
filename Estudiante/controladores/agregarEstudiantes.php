<?php 

require_once("../../Conexion.php");
require_once("../modelos/Estudiante.php");

if ($_POST) {

	$admin = new Materia();
	echo $nombre = $_POST['NombreMateria'];
	

	$admin->agregarMate($nombre);
	
}


	
 ?>