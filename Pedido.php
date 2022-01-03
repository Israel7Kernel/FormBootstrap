<?php

    require_once "conexion/conexionMySQL.php";
    $conxBD = conxMySQL();


    if(mysqli_connect_errno())
    {
        echo "<scipt> alert('ERROR EN CONEXION BD'); </scipt>";
    }else{
        echo "<script> alert('CONEXIÓN EXITOSA'); </script>";
    }

?>

<html>
    <head>

    </head>
    <body>

    </body>
</html>


