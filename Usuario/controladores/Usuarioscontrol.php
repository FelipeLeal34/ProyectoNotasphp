<?php
require_once('../../Conexion.php');
require_once('../modelos/Usuarios.php');

if ($_SERVER['REQUEST_METHOD'] ==='POST')
 {
 	$usuario = $_POST['username'];
 	$contrasena = $_POST['password'];

 	$use = new Usuario();
 	$use->login($usuario,$contrasena);

 	if($use->isinicioid()){
 		if($use->isadmin()){
 			header('Location::../../Administrador/pages/index.php');
 		}elseif($use->isdocen())
 		{
 			header('Location:../../Materias/pages/index.php');
 		}
 		exit();

 	}else{
 		print "<script>alert('Nombre de usuario o contraseña no validos ');window.location='../../index.php';</script>";
 	
 }
}

?>