<?php
   include_once('../../Conexion.php');
    class Estudiante extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();

        }
        
        public function agregarestu($Nombreestu,$Apellidoestu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio, $Fecha_registro)
        {
            $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)values(:Nombreestu, :Apellidoestu,:Documentoestu,:Correoestu,:Materia,:Docente,:Promedio,:Fecha_registro)");

            $statement->bindParam(":Nombreestu",$Nombreestu);
            $statement->bindParam(":Apellidoestu",$Apellidoestu);
            $statement->bindParam(":Documentoestu",$Documentoestu);
            $statement->bindParam(":Correoestu",$Correoestu);
            $statement->bindParam(":Materia",$Materia);
            $statement->bindParam(":Docente",$Docente);
            $statement->bindParam(":Promedio",$Promedio);
            $statement->bindParam(":Fecha_registro",$Fecha_registro);

            if($statement->execute())
            {
                if ($_SESSION['rol']== "administrador") {
                     print"<script>alert('Estudiante registrado');
                window.location = '../../Administrador/pages/index.php'
                </script>";
                } else{

                    print"<script>alert('Estudiante registrado');
                window.location = '../../Estudiante/pages/index.php'
                </script>";
                }
               
                
            }else{

            echo"<script>alert('Estudiante no registrado');
                window.location = '../pages/agregar.php'
                </script>";
                
        }
    }

    



    
    public function getad()
    {
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        while($resul= $statement->fetch()) 
        {
            $row[]=$resul;
        }
        return $row;
    }



        public function getidad($Id)
        {
            $row = null;
            $statement=$this->db->prepare("SELECT *FROM estudiantes WHERE  id_estudiante=:Id");
            $statement->bindParam(':Id',$Id);
            $statement->execute();
            while($resul = $statement->fetch())
            {
                $row=$resul;
            }
            return $row;
        } 
        public function updateestudiante($Id,$Nombreestu,$Apellidoestu,$Documentoestu,$Correoestu,$Materia,$Docente,$Promedio,$Fecha_registro)
        {
            $statement=$this->db->prepare("UPDATE estudiantes SET Nombreestu=:Nombreestu,Apellidoestu=:Apellidoestu, Documentoestu=:Documentoestu, Correoestu=:Correoestu, Materia=:Materia, Docente=:Docente, Promedio=:Promedio, Fecha_registro=:Fecha_registro WHERE id_estudiante=:Id");
        
            $statement->bindParam(':Nombreestu',$Nombreestu);
            $statement->bindParam(':Apellidoestu',$Apellidoestu);
            $statement->bindParam(':Documentoestu',$Documentoestu);
            $statement->bindParam(':Correoestu',$Correoestu);
            $statement->bindParam(':Materia',$Materia);
            $statement->bindParam(':Docente',$Docente);
            $statement->bindParam(':Promedio',$Promedio);
            $statement->bindParam(':Fecha_registro',$Fecha_registro);

            $statement->bindParam(':Id',$Id);

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
        $statement=$this->db->prepare("DELETE  FROM estudiantes WHERE id_estudiante=:Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute())
        {
            echo "usuario eliminado";
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/eliminar.php');
        }
    }
}

?>
