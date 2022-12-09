<?php

    if( isset($_POST["IDservicio"]))
    {
        echo $_POST["IDservicio"];
        require("conexion.php");
        $IDservicio = $_POST["IDservicio"];
        $Nombre = $_POST["Nombre"];
        $Precio = $_POST["Precio"];
        $accion = "INSERT INTO servicios (IDservicio, Nombre, Precio) VALUES ('$IDservicio', '$Nombre', '$Precio')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }

