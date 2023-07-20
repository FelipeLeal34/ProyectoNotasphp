<?php 

	require_once("../../Conexion.php");
	require_once("../modelos/Usuario.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$usuario = $_POST["username"];
		$password = $_POST["password"];
	}


	$user = new Usuario();
	$user->login($usuario,$password);


	if ($user->isinicioid()) {
		if ($user->isadmin()) {
			header("Location: ../../Administrador/pages/index.php");
		} else if($user->isdocente()){
			header("Location: ../../Materias/pages/index.php");
		}
		exit();
	} else{
		print "<script>alert('Nombre de usuario o contraseña no validos');
		window.location = '../../index.php'</script>";
	}



 ?>