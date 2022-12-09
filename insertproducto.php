<?php

    if( isset($_POST["IDproducto"]))
    {
        echo $_POST["IDproducto"];
        require("conexion.php");
        $IDproducto = $_POST["IDproducto"];
        $Nombre = $_POST["Nombre"];
        $Precio = $_POST["Precio"];
        $Cantidad = $_POST["Cantidad"];
        $accion = "INSERT INTO productos (IDproducto, Nombre, Precio, Cantidad) 
        VALUES ('$IDproducto', '$Nombre', '$Precio', '$Cantidad')";
        mysqli_query($con, $accion); 
        echo mysqli_error($con);
    }
