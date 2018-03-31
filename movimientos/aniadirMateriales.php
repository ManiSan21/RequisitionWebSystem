<?php
    include "../conexion.php";
    session_start();

    $idCompra;
    $idMaterial;
    $cantidad;
    $costo;

        $factura = $_POST['factura'];
        $fecha = $_POST['fecha'];
        $subtotal = $_SESSION['subtotal'];
        $iva = $_SESSION['iva'];
        $total = $_SESSION['total'];


        $sql = "INSERT INTO compramateriales (Factura, Fecha, Subtotal, IVA, Total) VALUES('$factura','$fecha','$subtotal','$iva','$total')";

        if(mysqli_query($conexion, $sql))
        {
            echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
        }
        else
        {
          echo '<script language="javascript">alert("Compra de material no se regitró")</script>';
        }
        $sql = "SELECT COUNT(*) FROM compramateriales";
        $result = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_row($result))
        {
          $idCompra = $row[0];
        }


        for($x=0; $x<$_SESSION['contador']; $x++)
        {
          $idMaterial = $_SESSION['compra'][$x][0];
          $cantidad2 = $_SESSION['compra'][$x][2];
          $precio = $_SESSION['compra'][$x][3];

          $sqlDetalle = "INSERT INTO detallecompra (idCompra, idMaterial, cantidad, costo) VALUES('$idCompra','$idMaterial','$cantidad2','$precio')";
          if(mysqli_query($conexion, $sqlDetalle))
          {
              echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
          }
        }
?>
