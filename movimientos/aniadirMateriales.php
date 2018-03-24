<?php
    include "../conexion.php"; 
    //session_start();

    $idCompra;
    $idMaterial;
    $cantidad;
    $costo;

    if(isset($_POST['aniadir'])){
        $idMaterial = $_POST['materiales'];
        $cantidad = $_POST['cantidad'];
        $costo = $_POST['costo'];

        $sql = "SELECT IdCompra FROM compramateriales ORDER BY IdCompra DESC LIMIT 1";
        $result = mysqli_query($conexion, $sql);
    
        $idCompra = $result;
        $idCompra = $idCompra + 1;

        echo "<td>".$idCompra."</td>";
        echo "<td>".$idMaterial."</td>";
        echo "<td>".$cantidad."</td>";
        echo "<td>".$costo."</td>";
        
        header('Location: compraMaterialesF.php');
    }

    if(isset($_POST['enviar']))
    {
        $factura = $_POST['factura'];
        $fecha = $_POST['fecha'];
        $subtotal = $_POST['subtotal'];
        $iva = $_POST['iva'];
        $total = $_POST['total'];

        $sql = "INSERT INTO compramateriales (Factura, Fecha, Subtotal, IVA, Total) VALUES('.$factura.','.$fecha.','.$subtotal.','.$iva.','.$total.')";

        if(mysqli_query($conexion, $sql))
        {
            echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';             
        }
        else
        {
            echo '<script language="javascript">alert("Error al registrar la compra")</script>';             
        }
    }
?>