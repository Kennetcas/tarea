<?php
include 'conexionBD.php';

$query=$conn->query("SELECT * FROM alumnos");
while($valores=mysqli_fetch_array($query))
{
    echo '
            <tr>
                <td>'.$valores['Nombre1, Nombre2'].'</td>
            </tr>
        ';
}