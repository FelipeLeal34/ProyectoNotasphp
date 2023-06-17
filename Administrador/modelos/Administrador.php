<?php


    include_once("../../Conexion.php");

    class Administrador extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();
        }

        public function agregarad($nombread,$apellidoad,$usuarioad,$passwordad,$perfilad,$estadoad){

            $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:nombread,:apellidoad,:usuarioad,:passwordad,:'Administrador',:'Activo')");


            $statement->bindParam(":nombread",$nombread);
            $statement->bindParam(":apellidoad",$apellidoad);
            $statement->bindParam(":usuarioad",$usuarioad);
            $statement->bindParam(":passwordad",$passwordad);
            $statement->bindParam(":perfilad",$perfilad);
            $statement->bindParam(":estadoad",$estadoad);

            if ($statement->execute()) {
                echo "usuario registrado";
                header("location:../pages/index.php");
            } else {
                echo "usuario no registrado";
                header("location: ../pages/agregar.php");
            }
        }



        public function getad(){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
            $statement->execute();
            while($result = $statement->fetch()){
                $row[] = $result;
            }

            return $row;

        }

        public function getidad($id){
            $row = null;
            $statement = $this->db->prepare("SELECT * from usuarios where Perfil = 'Administrador' and id_usuario = :id");
            $statement->bindParam(":id",$id);
            $statement->execute();
            while($result = $statement->fetch()){
                $row = $result;
            }

            return $row;
        }


        public function actualizarad($id,$nombread,$apellidoad,$usuarioad,$passwordad,$estadoad){
            $statement = $this->db->prepare("UPDATE usuarios SET Nombreusu=:nombread, Apellidousu=:apellidoad, Usuario = :usuarioad, Passwordusu = :passwordad, Estado = :estadoad where id_usuario = :id");

            $statement->bindParam(":nombread",$nombread);
            $statement->bindParam(":apellidoad",$apellidoad);
            $statement->bindParam(":usuarioad",$usuarioad);
            $statement->bindParam(":passwordad",$passwordad);
            $statement->bindParam(":estadoad",$estadoad);
            $statement->bindParam(":id",$id);


            if ($statement->execute()) {
                
                header("location:../pages/index.php");
            } else {
              
                header("location: ../pages/editar.php");
            }
        }



        public function eliminarad($id){
            $statement = $this->db->prepare("DELETE from usuarios where id_usuario = :id");
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
