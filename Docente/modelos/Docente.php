<?php


    include_once("../../Conexion.php");

    class Docente extends Conexion{

    public function __construct(){
            $this->db = parent::__construct();
        }

        public function agregardoc($nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$usuariodoc,$passworddoc,$perfil,$estadodoc){

            $statement = $this->db->prepare("INSERT INTO docente(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)VALUES(:nombredoc,:apellidodoc,:documentodoc,:correodoc,:materiadoc,:usuariodoc,:passworddoc,:perfil,:estadodoc)");


            $statement->bindParam(":nombredoc",$nombredoc);
            $statement->bindParam(":apellidodoc",$apellidodoc);
            $statement->bindParam(":documentodoc",$documentodoc);
            $statement->bindParam(":correodoc",$correodoc);
            $statement->bindParam(":materiadoc",$materiadoc);
            $statement->bindParam(":usuariodoc",$usuariodoc);
            $statement->bindParam(":passworddoc",$passworddoc);
            $statement->bindParam(":perfil",$perfil);
            $statement->bindParam(":estadodoc",$estadodoc);




            if ($statement->execute()) {
                echo "Docente registrado";
                header("location:../pages/index.php");
            } else {
                echo "Docente no registrado";
                header("location: ../pages/agregar.php");
            }
        }



        public function getdoc(){

            $row = null;
            $statement = $this->db->prepare("SELECT * FROM docente");
            $statement->execute();
            while($result = $statement->fetch()){
                $row[] = $result;
            }

            return $row;

        }

        public function getiddoc($id){
            $row = null;
            $statement = $this->db->prepare("SELECT * from docente where id_docente = :id");
            $statement->bindParam(":id",$id);
            $statement->execute();
            while($result = $statement->fetch()){
                $row = $result;
            }

            return $row;
        }


        public function actualizardoc($id,$nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$notasmate){
            $statement = $this->db->prepare("UPDATE docente SET Nombredoc=:nombredoc, Apellidodoc=:apellidodoc, Documentodoc = :documentodoc, Correodoc = :correodoc, Materiadoc = :materiadoc, Notasmate = :notasmate where id_docente = :id");

            $statement->bindParam(":nombredoc",$nombredoc);
            $statement->bindParam(":apellidodoc",$apellidodoc);
            $statement->bindParam(":documentodoc",$documentodoc);
            $statement->bindParam(":correodoc",$correodoc);
            $statement->bindParam(":materiadoc",$materiadoc);
            $statement->bindParam(":notasmate",$notasmate);
            $statement->bindParam(":id",$id);


            if ($statement->execute()) {
                
                header("location:../pages/index.php");
            } else {
              
                header("location: ../pages/editar.php");
            }
        }



        public function eliminarad($id){
            $statement = $this->db->prepare("DELETE from docente where id_docente = :id");
               $statement->bindParam(":id",$id);
               if ($statement->execute()) {

                echo "Docente eliminado";
                
                header("location:../pages/index.php");
            } else {

                echo "Docente no eliminado";
              
                header("location: ../pages/eliminar.php");
            }
        }

    }


    
?>
