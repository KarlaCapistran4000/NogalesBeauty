 <?php

    if( isset($_POST["Servicio"]))
    {
        echo $_POST["Servicio"];
        require("conexion.php");
        $Servicio = $_POST["Servicio"];
        $Fecha = $_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $accion = "INSERT INTO cita (Servicio, Fecha, Hora) VALUES ('$Servicio', '$Fecha', '$Hora')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }