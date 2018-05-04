<?php
    $db = 'u941474371_rws';
    $host = 'mysql.hostinger.mx';
    $user = 'u941474371_root';
    $pass = 'V5xOX0iAIW5j';

    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $conexionSql = mysqli_connect($host, $user, $pass, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO servicios (Descripcion, Fecha) VALUES('$descripcion', '$fecha')";

    if(mysqli_query($conexionSql, $sql))
    {
        $redirect = "RegistroServiciosF.html";
        echo '<script language="javascript">alert("Servicio registrado exitosamente")</script>';
        //echo '<script>window.location.href = '.$redirect.';</script>';
        //header("Location: RegistroServicios.html");
       // exit();
        //echo "<a href='FormularioMateriales.php'>Regresar al formulario de materiales</a>";
        //include "modal.html";
    }
    else
    {
        echo '<script language="javascript">alert("Error al insertar")</script>';
    }

    mysqli_close($conexionSql);
?>
