<?php 

class Conexion{

	public $db;
	private $drive = "mysql";
	private $host = "localhost";
	private $dbname = "notas2023";
	private $usuario = "root";
	private $contra = "";


	public function __construct(){
		try {
			$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}", $this->usuario,$this->contra);



			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


			return $db;


			echo "Conexion realizada";

		} catch (PDOException $e) {
			echo "Conexion no exitosa: " . $e->getMessage();
		}
	}

}

 ?>