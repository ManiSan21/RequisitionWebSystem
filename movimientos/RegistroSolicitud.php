<?php
    include "../conexion.php";

    $idUsuario = $_POST['idUsuario'];
    $fecha = $_POST['fecha'];
    $aula = $_POST['aula'];
    $descripcion = $_POST['descripcionServicio'];

    $sql = "INSERT INTO solicitudesservicios (IdUsuario, IdAula, Descripcion, Fecha) VALUES('$idUsuario','$aula','$descripcion','$fecha')";
    
    if(mysqli_query($conexion, $sql))
    {
        echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
    }
    else
    {
        echo '<script language="javascript">alert("Compra de material no se regitró")</script>';
    }
    mysqli_close($conexion);
?>