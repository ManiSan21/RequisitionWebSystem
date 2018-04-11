<?php
    $db = 'rws';
    $host = 'localhost:3308';
    $user = 'root';
    $pass = '';

    //$idMaterial = $_POST['id'];
    $nombre = $_POST['nombre'];
    $maximo = $_POST['maximo'];
    $minimo = $_POST['minimo'];
    $existencias = $_POST['existencias'];
    $precio = $_POST['precio'];

    if(isset($_POST['Enviar']))
    {
        //$idProveedor = $_POST['proveedores'];
    }

    $conexionSql = mysqli_connect($host, $user, $pass, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO materiales (Nombre, Maximo, Minimo, Existencias, Precio) VALUES('$nombre', '$maximo', '$minimo', '$existencias', '$precio')";

    if(mysqli_query($conexionSql, $sql))
    {
        echo '<script language="javascript">alert("Material registrado exitosamente")</script>';
        /*echo "<a href='FormularioMateriales.php'>Regresar al formulario de materiales</a>";
        include "modal.html"; */
    }
    else
    {
        echo '<script language="javascript">alert("Error al insertar")</script>';
    }

    mysqli_close($conexionSql);
?>
