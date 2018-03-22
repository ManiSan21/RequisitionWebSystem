<?php
    $db = 'rws';
    $host = 'localhost';
    $user = 'root';
    $pass = '';

    $nombre = $_POST['nombre'];
    $domicilio = $_POST['domicilio'];
    $colonia = $_POST['colonia'];
    $estado = $_POST['estado'];
    $telefono = $_POST['telefono'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];

    $conexionSql = mysqli_connect($host, $user, $pass, $db);
    //mysqli_select_db($conexion, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO proveedores(Nombre, Domicilio, Colonia, Estado, CP, Telefono, Email) VALUES('$nombre', '$domicilio', '$colonia', '$estado', '$cp', '$telefono', '$email')";

    if(mysqli_query($conexionSql, $sql))
    {
        echo '<script language="javascript">alert("Proveedor registrado exitosamente")</script>';
    }
    else
    {
        echo '<script language="javascript">alert("Error al insertar")</script>';
    }

    mysqli_close($conexionSql);
?>
