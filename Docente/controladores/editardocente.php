<?php 

require_once("../../Conexion.php");
require_once("../modelos/Docente.php");


if ($_POST) {
	
	$doc = new Docente();
	$docente = new Docente();

	$id = $_POST["id"];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$documento = $_POST['documento'];
	$correo = $_POST['correo'];
	$materia = $_POST['materia'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);
	$perfil = $_POST['perfil'];
	$estado = $_POST['estado'];


	$doc->actualizardoc($id,$nombre,$apellido,$documento,$correo,$materia,$usuario,$password,$perfil,$estado);



}





 ?>