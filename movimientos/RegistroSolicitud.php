<?php
    include "../conexion.php";

    $idUsuario = $_POST['idUsuario'];
    $fecha = $_POST['fecha'];
    $aula = $_POST['aula'];
    $descripcion = $_POST['descripcionServicio'];
    $estado = "PENDIENTE";

    $sql = "INSERT INTO solicitudesservicios (IdUsuario, IdAula, Descripcion, Fecha, Estado) VALUES('$idUsuario','$aula','$descripcion','$fecha', '$estado')";
    
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