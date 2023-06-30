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
         public function getidMate($id){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM materias where id_materia=:id" );
            $statement->bindParam(":id",$id);
            $statement->execute();

          while($result = $statement->fetch())
          {
            $row = $result;
          }


            return $row;
            }

         public function actualizarMate($Id, $Materia){
            $statement = $this->db->prepare("UPDATE materias SET Nombremate=:nombremate where id_materia = :id");

            $statement->bindParam(":nombremate",$Materia);
            $statement->bindParam(":id", $Id);  
          


            if ($statement->execute()) {
                
                header("location:../pages/index.php");
            } else {
              
                header("location: ../pages/editar.php");
            }

        }
            public function eliminarMate($id){
            $statement = $this->db->prepare("DELETE from materias where id_materia = :id");
               $statement->bindParam(":id",$id);
               if ($statement->execute()) {

                echo "Usuario eliminado";
                
                header("location:../pages/index.php");
            } else {

                echo "Usuario no eliminado";
              
                header("location: ../pages/eliminar.php");
            }
        }
    }

?>
