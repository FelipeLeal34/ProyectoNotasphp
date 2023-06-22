<?php 

require_once("../../Conexion.php");
require_once("../modelos/administrador.php");

if ($_POST) {

	$admin = new Administrador();
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);
	$perfil = $_POST['perfil'];
	$estado = $_POST['estado'];


	$admin->agregarad($nombre,$apellido,$usuario,$password,$perfil,$estado);

}


	
 ?>