<?php 


	require_once("../../Conexion.php");
require_once("../modelos/administrador.php");

if ($_POST) {

	$admin = new Administrador();
	$nombre = $_POST['nombre'];
	$id = $_POST["id"];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$perfil = $_POST['perfil'];
	$estado = $_POST['estado'];


	$admin->actualizarad($id,$nombre,$apellido,$usuario,$password,$perfil,$estado);

}
	

 ?>