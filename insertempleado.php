<?php

    if( isset($_POST["Nombre"]))
    {
        echo $_POST["Nombre"];
        require("conexion.php");
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $Alergias = $_POST["Alergias"];
        $Domicilio = $_POST["Domicilio"];
        $Celular = $_POST["Celular"];
        $Email = $_POST["Email"];
        $Contraseña = $_POST["Contraseña"];
        $accion = "INSERT INTO empleado (Nombre, Apellido, Alergias, Domicilio, Celular, Email, Contraseña) VALUES ('$Nombre', '$Apellido', '$Alergias', '$Domicilio', '$Celular','$Email','$Contraseña')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    } 
   
    

