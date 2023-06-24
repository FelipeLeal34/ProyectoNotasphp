<?php
    include_once('../../Conexion.php');
    class Administrador extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();

        }
        public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
        {
            $sql1 = "SELECT * FROM usuarios WHERE usuario = '$Usuariousu'";
            $Resultado=$this->db->query($sql1);
            if($Resultado->rowCount() < 0){
                echo "<script>
                alert('El usuario ya esta registrado');
                window.location = '../pages/agregar.php';
                </script>";
            }else
            {

            
            $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread, :Apellidoad,:Usuarioad,:Passwordad,:'Administrador',:'Activo')");

            $statement->bindParam("Nombread",$Nombread);
            $statement->bindParam(":Apellidoad",$Apellidoad);
            $statement->bindParam(":Usuarioad",$Usuarioad);
            $statement->bindParam(":Passwordad",$Passwordad);
            $statement->bindParam(":Perfilad"$Perfilad);
            $statement->bindParam(":Estadoad",$Estadoad);
            if($statement->execute())
            {
                echo"usuario registrado";
                header('Location: ../index.php');
            }else
                echo "usuario no registrado";
                header('Location: ../Pages/agregar.php');
        }

    }
}
    public function getad()
    {
        $row = null;
        $statement =$this->db->prepared("SELECT * FROM usuarios WHERE perfil ='Aministrador'");
        $statement->execute();
        while($resul= $statement->fecth())
        {
            $row[]=$resul;
        }
        return $row;
    }
        public function getidad($Id)
        {
            $row = null;
            $statement=$this->db->prepare("SELECT *FROM usuarios WHERE perfil='Administador' AND id_usuario=Id");
            $statement->binParam(':Id',$Id);
            $statement->execute();
            while($resul = $statement->fetch())
            {
                $row=$resul;
            }
            return $row;
        } 
        public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
        {
            $statement=$this->db->prepare("UPDATE usuarios SET Nombreusu=:Nombread,Apellidousu=:Apellidousu, Usuario=:Usuarioad, Passwordusu=:Paswordad, Estado=:Estadoad WHERE id_usuario=$Id");
            $statement->
            $statement->bindParam(':Id',$Id);
            $statement->bindParam(':Nombread',$Nombread);
            $statement->binParam(':Apellidoad',$Apellidoad);
            $statement->bindParam(':Usuarioad',$Usuarioad);
            $statement->binParam(':Passwordad'$Passwordad);
            $statement->bindParam(':Estadoad',$Estadoad);
            if($statement->execute())
            {
                header('Location:../pages/index.php');

            }else

            {
                header('Location: ../pages/editar.php');
            }
        }
    
    public function deletead($Id)
    {
        $statement=$this->db->prepare("DELETE + FROM usuarios WHERE id_usuario=$Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute())
        {
            echo "usuario eliminado";
            header('Location: ../pages/index.php')
        }else
        {
             header('Location: ../pages/eliminar.php');
        }
    }
?>
