<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $DB = "unidad3";

    //Creacion de conexion
    $conn = mysqli_connect($servidor,$usuario,$contraseña,$DB);

    //Test conexion
    if(!$conn){
        echo "No conexion ". mysqli_connect_error();
    } 
    echo "Connected successfully";
    
?>