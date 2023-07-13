<?php 

	if ($_POST["username"]=="Felipe Leal" && $_POST['password'] == "123") {
		
		//crear sesión

		session_start();


		//variables de sesión

		$_SESSION['usuario'] = $_POST['username'];

		$_SESSION['validar'] = true;

		$_SESSION['start'] = time();

		$_SESSION['expire'] = $_SESSION['start'] + (5*60);

		header("Location: ../../Administrador/pages/index.php");


	} else{
		echo "<script>alert('Verifique los datos ingresados');
		window.location = '../../index.php';
		</script>";
		
	}
 ?>