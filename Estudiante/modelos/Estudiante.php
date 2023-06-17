<?php
   include_once('../../Conexion.php');
    class Estudiante extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();

        }
        public function agregarad($Nombreestu,$Apellidoestu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio, $Fecha_registro)
        {
            $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)values(:Nombreestu, :Apellidoestu,:Documentoestu,:Correoestu,:Materia,:Docente,:Promedio,:Fecha_registro");

            $statement->bindParam("Nombreestu",$Nombreestu);
            $statement->bindParam(":Apellidoestu",$Apellidoestu);
            $statement->bindParam(":Documentoestu",$Documentoestu);
            $statement->bindParam(":Correoestu",$Correoestu);
            $statement->bindParam(":Materia"$Materia);
            $statement->bindParam(":Docente",$Docente);
            $statement->bindParam(":Promedio",$Promedio);
            $statement->bindParam(":Fecha_registro",$Fecha_registro);
            if($statement->execute())
            {
                echo"estudiante registrado";
                header('Location: ../index.php');
            }else
                echo "estudiante no registrado";
                header('Location: ../Pages/agregar.php');
        }

    }
    public function getad()
    {
        $row = null;
        $statement =$this->db->prepared("SELECT * FROM estudiantes");
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
            $statement=$this->db->prepare("SELECT *FROM estudiantes WHERE  id_estudiante=Id");
            $statement->binParam(':Id',$Id);
            $statement->execute();
            while($resul = $statement->fetch())
            {
                $row=$resul;
            }
            return $row;
        } 
        public function updatead($Id,$Nombreestu,$Apellidoesstu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio,$Fecha_registro)
        {
            $statement=$this->db->prepare("UPDATE estudiantes SET Nombreesstu=:Nombreestu,Apellidoestu=:Apellidoestu, Documentoestu=:Documentoestu, Passwordusu=:Paswordad, Estado=:Estadoad WHERE id_usuario=$Id");
            $statement->
            $statement->bindParam(':Id',$Id);
            $statement->bindParam(':Nombreestu',$Nombreestu);
            $statement->binParam(':Apellidoestu',$Apellidoestu);
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
        $statement=$this->db->prepare("DELETE + FROM estudiantes WHERE id_estudiante=$Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute())
        {
            echo "usuario eliminado";
            header('Location: ../pages/index.php');
        }else{}
    }
?>
