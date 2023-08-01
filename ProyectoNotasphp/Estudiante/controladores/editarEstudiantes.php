<?php 

require_once("../../Conexion.php");
require_once("../modelos/Estudiante.php");

if ($_POST) {

	 $estudiante = new Estudiante();
	 $id =$_POST['id'];
	 $Nombreestu = $_POST['nombre'];
	 $Apellidoestu = $_POST['apellido'];
	 $Documentoestu = $_POST['documento'];
	 $Correoestu = $_POST['correo'];
	 $Materia = $_POST['materia'];
	 $Docente = $_POST['docente'];
	 $Promedio = $_POST['Promedio'];
	 $Fecha_registro = $_POST['fecha'];


	 

	$estudiante ->updateestudiante($id,$Nombreestu,$Apellidoestu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio, $Fecha_registro);
	
}


	
 ?>