<?php

    require_once "conexion/conexionMySQL.php";
    $conxBD = conxMySQL();

    if(mysqli_connect_errno())
    {
        echo "<script> alert('ERROR DE CONEXIÓN CON BD'); </script>";
    }else{
        echo "<script> alert('CONEXIÓN EXITOSA'); </script>";
    }
?>

<html>
    <head>

    </head>
    <body></body>
</html>