<?php
function conectar()
{   
    $user = "root";
    $cla = "";
    $servidor = "localhost";
    $base="central hidroelectrica";
    $conexion= mysqli_connect($servidor,$user,$cla);
    mysli_select($base,$conexion);
    $con=conectar();
    echo "conexion exitosa";   
}


?>