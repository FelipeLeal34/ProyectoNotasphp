<?php 

require_once("../../Conexion.php");
require_once("../modelos/Materia.php");

if ($_POST) {

	$admin = new Materia();
	$nombre = $_POST['NombreMateria'];
	

	$admin->agregarMate($nombre);
	
}


	
 ?>