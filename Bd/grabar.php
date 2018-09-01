<?php
include 'conexionBD.php';
$stm=$conn->prepare("INSERT INTO alumnos (nombre1, nombre2,apellido1,apellido2,correo,telefono,facultad) values (?,?,?,?,?,?,?)");
$stm->bind_param('sssssss',$_POST['nombre1'],$_POST['nombre2'],$_POST['apellido1'],$_POST['apellido2'],$_POST['correo1'],$_POST['telefono1'],$_POST['namefacultad']);

$stm->execute();
if($stm->affected_rows>0)
{
    echo '
            <script type="text/javascript"> 
            alert("Exito");
            window.location.href="../index.php";
            </script>
        ';
    //header('Location: ../index.php');
}else
{
    echo '
            <script type="text/javascript"> 
            alert("Error");
            window.location.href="../index.php";
            </script>
        ';
}
$stm->close();
$conn->close();