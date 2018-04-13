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
        $proveedor = $_POST['proveedores'];


        $sql = "INSERT INTO compramateriales (IdProveedor, Factura, Fecha, Subtotal, IVA, Total) VALUES('$proveedor', '$factura','$fecha','$subtotal','$iva','$total')";

        if(mysqli_query($conexion, $sql))
        {
            echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
        }
        else
        {
          echo '<script language="javascript">alert("Compra de material no se regitró")</script>';
        }
        $sql = "SELECT idCompra FROM compramateriales";
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
          $importe = $cantidad2*$precio;

          $sqlDetalle = "INSERT INTO detallecompras (IdCompra, IdMaterial, Cantidad, Costo, Importe) VALUES('$idCompra','$idMaterial','$cantidad2','$precio', '$importe')";
          if(mysqli_query($conexion, $sqlDetalle))
          {
              $sqlUpdate = "UPDATE materiales SET Existencias = Existencias +$cantidad2, Precio = $precio WHERE idMaterial = $idMaterial";
              mysqli_query($conexion, $sqlUpdate);
              echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
          }
        }
?>
