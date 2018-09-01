<?php
include 'conexionBD.php';
$stm=$conn->prepare("INSERT INTO alumnos (nombre1, nombre2) values (??)");
$stm->bind_param('ss',$_POST['nombre1'],$_POST['nombre2']);

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

