<?php

    function conxMySQL()
    {
        /* GENREACIÓN DE CONEXIÓN LOCAL*/
        $pass = '';
        $database = 'costanzoventas';
        $username = 'root';
        $hostname = 'localhost';
        $conx = mysqli_connect($hostname, $username, $pass, $database);

        return $conx;
    }
?>