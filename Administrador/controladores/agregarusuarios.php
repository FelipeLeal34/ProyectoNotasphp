<?php 

require_once("../../Conexion.php");
require_once("../modelos/Administrador.php");

if ($_POST) {

	$admin = new Administrador();
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = ($_POST['password']);
	$perfil = $_POST['perfil'];
	$estado = $_POST['estado'];


	$result = $admin->agregarad($nombre,$apellido,$usuario,$password,$perfil,$estado);

	if ($result) {
			echo "<script>alert('USUARIO AGREGADO');
			window.location='../pages/index.php'</script>
			";
		} else{
			echo "<script>alert('USUARIO NO AGREGADO');
			window.location='../pages/agregar.php'</script>;
			";
		}


}


	
 ?>