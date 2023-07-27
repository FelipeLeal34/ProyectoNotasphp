<?php 

require_once("../../Conexion.php");
require_once("../modelos/Estudiante.php");

if ($_POST) {

	 $estudiante = new Estudiante();
	 $Nombreestu = $_POST['nombre'];
	 $Apellidoestu = $_POST['apellido'];
	 $Documentoestu = $_POST['documento'];
	 $Correoestu = $_POST['correo'];
	 $Materia = $_POST['materia'];
	 $Docente = $_POST['docente'];
	 $Promedio = $_POST['promedio'];
	 $Fecha_registro = $_POST['fecha'];


	 echo $Fecha_registro;

	$estudiante ->agregarestu($Nombreestu,$Apellidoestu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio, $Fecha_registro);
	
}


	
 ?>