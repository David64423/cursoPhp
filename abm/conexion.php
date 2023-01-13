<?php
    function conectar(){
    $host="localhost";
    $user="root";
    $nombreBD="php";
    $password="";


    $conn= mysqli_connect($host, $user, $password, $nombreBD) or die("No se pudo conectar");
    return $conn;
        }


        

?>