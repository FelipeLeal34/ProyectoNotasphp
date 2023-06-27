<?php
include_once('../../Conexion.php');
    class Materia extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();

        }
    

        public function agregarMate($Materia)
        {
           

            $statement = $this->db->prepare("INSERT INTO materias(Nombremate)values(:Materia)");

            $statement->bindParam(':Materia',$Materia);
            
            if($statement->execute())
            {
                echo"materia registrada";
                header('Location: ../index.php');
            }else
                echo "materia no registrada";
                header('Location: ../Pages/agregar.php');
        }
              public function getMate(){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM materias");
            $statement->execute();
            while($result = $statement->fetch()){
                $row[] = $result;
            }

            return $row;

        }
    }
?>
