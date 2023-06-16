<?php


    include_once("../../Conexion.php");

    class Administrador extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();
        }

        public function agregarad($nombread,$apellidoad,$usuarioad,$passwordad,$perfilad,$estadoad){

            $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:nombread,:apellidoad,:usuarioad,:passwordad,:perfilad,:estadoad)");


            $statement->bindParam(":nombread",$nombread);
            $statement->bindParam(":apellidoad",$apellidoad);
            $statement->bindParam(":usuarioad",$usuarioad);
            $statement->bindParam(":passwordad",$passwordad);
            $statement->bindParam(":perfilad",$perfilad);
            $statement->bindParam(":estadoad",$estadoad);

            if ($statement->execute()) {
                echo "usuario registrado";
            } else {
                echo "usuario no registrado";
            }
        }

    }
?>
