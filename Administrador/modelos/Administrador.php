<?php


    include_once("../../Conexion.php");

    class Administrador extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();
        }




        public function agregarad($nombread,$apellidoad,$usuarioad,$passwordad,$perfilad,$estadoad){


            $hash = password_hash($passwordad, PASSWORD_DEFAULT);


            $sql1 = "SELECT * FROM usuarios where Usuario = '$usuarioad'" ;


            $resultado = $this->db->query($sql1);

        if ($resultado->rowCount() > 0) {
                echo "<script>alert('El usuario ya está registrado');

                window.location = '../pages/agregar.php';
                </script>";
            } 

        else {

            $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:nombread,:apellidoad,:usuarioad,:hash,:perfilad,:estadoad)");


            $statement->bindParam(":nombread",$nombread);
            $statement->bindParam(":apellidoad",$apellidoad);
            $statement->bindParam(":usuarioad",$usuarioad);
            $statement->bindParam(":hash",$hash);
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
        }



        public function getad(){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'administrador'");
            $statement->execute();
            while($result = $statement->fetch()){
                $row[] = $result;
            }

            return $row;

        }

        public function getidad($id){
           
            $statement = $this->db->prepare("SELECT * from usuarios where id_usuario = :id");
            $statement->bindParam(":id",$id);
            $statement->execute();

            $resultado = $statement->fetch(PDO::FETCH_ASSOC);
           

            return $resultado;
        }


        public function actualizarad($id,$nombread,$apellidoad,$usuarioad,$passwordad,$perfil,$estadoad){
            $statement = $this->db->prepare("UPDATE usuarios SET Nombreusu=:nombread, Apellidousu=:apellidoad, Usuario = :usuarioad, Passwordusu = :passwordad, Perfil = :perfil, Estado = :estadoad where id_usuario = :id");

            $statement->bindParam(":nombread",$nombread);
            $statement->bindParam(":apellidoad",$apellidoad);
            $statement->bindParam(":usuarioad",$usuarioad);
            $statement->bindParam(":passwordad",$passwordad);
            $statement->bindParam(":perfil",$perfil);
            $statement->bindParam(":estadoad",$estadoad);
            $statement->bindParam(":id",$id);


            if ($statement->execute()) {
                
              
                echo "<script>alert('USUARIO ACTUALIZADO');
                window.location = '../pages/index.php';
                </script>";
            } else {


                echo "<script>alert('USUARIO NO ACTUALIZADO');
                window.location = '../pages/agregar.php';
                </script>";
                

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
