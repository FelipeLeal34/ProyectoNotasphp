<?php 
if($_POST["username"]=="Juan David" && $_POST['password']=="123456")
{
	session_start();

	$_SESSION["usuario"]= $_POST["username"];
	$_SESSION["validar"]=true;
	$_SESSION["start"]=time();
	$_SESSION["expire"] = $_SESSION["start"] + (1*60);
	header("Location: ../../Administrador/pages/index.php");
}else
{
	print "<script>alert(' verificar los datos de ingreso');

	window.location='../../index.php';</script>";
}

 ?>