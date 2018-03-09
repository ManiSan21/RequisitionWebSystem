<?php
    $db = 'rws';
    $host = 'localhost:3308';
    $user = 'root';
    $pass = '';

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
        //echo '<script language="javascript">alert("Servicio registrado exitosamente")</script>';             
        //echo "<a href='FormularioMateriales.php'>Regresar al formulario de materiales</a>"; 
        include "modal.html";
    }
    else
    {
        echo '<script language="javascript">alert("Error al insertar")</script>';
    }

    mysqli_close($conexionSql);
?>