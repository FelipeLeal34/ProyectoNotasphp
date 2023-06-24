<?php
include_once('../../Conexion.php');
    class Materia extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();

        }
    class Materia{


        public function agregarad($Materia)
        {
            $statement = $this->db->prepare("INSERT INTO materias(Nombremate)values(:Nombremate");

            $statement->bindParam(":Nombremate",$Matera);
            
            if($statement->execute())
            {
                echo"materia registrada";
                header('Location: ../index.php');
            }else
                echo "materia no registrada";
                header('Location: ../Pages/agregar.php');
        }

    }
?>
