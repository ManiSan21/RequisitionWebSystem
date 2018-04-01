<?php
    include "../conexion.php";
    session_start();

    $idCompra;
    $idMaterial;
    $cantidad;
    $costo;

        $idProveedor = $_POST['idProveedor'];
        $factura = $_POST['factura'];
        $fecha = $_POST['fecha'];
        $subtotal = $_POST['subtotal'];
        $iva = $_POST['iva'];
        $total = $_POST['total'];
        $importe = $_SESSION['importe'];


        $sql = "INSERT INTO compramateriales (IdProveedor, Factura, Fecha, Subtototal, IVA, Total) VALUES('$idProveedor','$factura','$fecha','$subtotal','$iva','$total')";


        if(mysqli_query($conexion, $sql))
        {
            echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
        }
        else
        {
          echo '<script language="javascript">alert("Compra de material no se regitró")</script>';
        }
        $sql = "SELECT IdCompra FROM compramateriales";
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

          $sqlDetalle = "INSERT INTO detallecompras (IdCompra, IdMaterial, Cantidad, Costo, Importe) VALUES('$idCompra','$idMaterial','$cantidad2','$precio','$importe')";
          if(mysqli_query($conexion, $sqlDetalle))
          {
              echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
          }
          else
          {
              echo '<script language="javascript">alert("Compra de material no se regitró")</script>';
          }
        }
?>
