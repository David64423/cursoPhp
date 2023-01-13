<?php
    $correo= $_POST['correo'];
    require "conexion.php";

    $sql="insert into correos(correo) values ('$correo');";
    
    $conn=conectar();

    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)>0){
        echo "<h2>La consulta salio bien </h2>";
    }

    else{
        echo"<h2>ERROR EN LA CONSULTA</h2>";
    }
?>