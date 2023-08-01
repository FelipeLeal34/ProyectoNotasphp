<?php 

	require_once("Conexion.php");

	class Consultas extends Conexion{

		 public function __construct(){
            $this->db = parent::__construct();
        }

	

	public function getMaterias(){
		$row = null;
		$statement = $this->db->prepare("SELECT * from materias");
		$statement->execute();
		while ($res = $statement->fetch()) {
			$row[] = $res;
		}

		return $row;
	}

	public function getDocentes(){
		$row = null;
		$statement = $this->db->prepare("SELECT * from docente");
		$statement->execute();
		while ($res = $statement->fetch()) {
			$row[] = $res;
		}

		return $row;
		
	}
}

 ?>