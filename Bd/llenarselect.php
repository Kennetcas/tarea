<?php
include 'conexionBD.php';
$query=$conn->query("Select * from alumnos");
while($valores=mysqli_fetch_array($query))
{
    echo '
            <option value="'.$valores['ID'].'">'.$valores['Nombre1, Nombre2'].'</option>
         ';
}

