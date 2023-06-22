<?php


    include_once("../../Conexion.php");
    class Materia extends Conexion{

 public function __construct(){
            $this->db = parent::__construct();
        }

        public function agregarmate($nombremate){

            $statement = $this->db->prepare("INSERT INTO materias(Nombremate)VALUES(:nombremate)");


            $statement->bindParam(":nombremate",$nombremate);

            if ($statement->execute()) {
                echo "Materia registrada";
                header("location:../pages/index.php");
            } else {
                echo "Materia no registrada";
                header("location: ../pages/agregar.php");
            }
        }



        public function getmate(){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM materias");
            $statement->execute();
            while($result = $statement->fetch()){
                $row[] = $result;
            }

            return $row;

        }

        public function getidmate($id){
            $row = null;
            $statement = $this->db->prepare("SELECT * from materias where id_materia = :id");
            $statement->bindParam(":id",$id);
            $statement->execute();
            while($result = $statement->fetch()){
                $row = $result;
            }

            return $row;
        }


        public function actualizarmate($id,$nombremate){
            $statement = $this->db->prepare("UPDATE materias SET Nombremate=:nombremate where id_materia = :id");

            $statement->bindParam(":nombremate",$nombremate);
            $statement->bindParam(":id",$id);


            if ($statement->execute()) {
                
                header("location:../pages/index.php");
            } else {
              
                header("location: ../pages/editar.php");
            }
        }



        public function eliminarmate($id){
            $statement = $this->db->prepare("DELETE from materias where id_materia = :id");
               $statement->bindParam(":id",$id);
               if ($statement->execute()) {

                echo "materia eliminado";
                
                header("location:../pages/index.php");
            } else {

                echo "materia no eliminado";
              
                header("location: ../pages/eliminar.php");
            }
        }


    }
?>
