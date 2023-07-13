<?php 

session_start();


//Si la variable "validar" es falsa no dejará entrar al index

if (!$_SESSION['validar']) {
	
	print "<script>alert('Esta pagina es solo para usuarios registrados');
	window.location = '../../index.php';
	</script>";
}

$now = time();

if ($now > $_SESSION['expire']) {
	session_destroy();

	print "<script>alert('La sesión ha expirado. Ingrese nuevamente');
	window.location = '../../index.php';
	</script>";
}

 ?>