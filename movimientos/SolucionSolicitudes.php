<?php
  include "../conexion.php";
  session_start();
  $idSolucion = 0;
  $idSolicitud = $_POST['solicitudes'];
  $servicios = $_POST['servicios'];
  $fecha = $_POST['fecha'];
  $descripcion = $_POST['descripcion'];
  $sql = "SELECT IdServicios FROM servicios WHERE Descripcion = '$servicios'";
  $result = mysqli_query($conexion, $sql);
  $idServicio;
  while ($row = $result -> fetch_assoc())
  {
      $idServicio = $row['IdServicios'];
  }

  $sql = "INSERT INTO solucionsolicitud (IdSolicitud, IdServicio, Descripcion, Fecha) VALUES ($idSolicitud, $idServicio, '$descripcion', '$fecha')";
  if(mysqli_query($conexion, $sql))
  {

    echo "Solución registrada";
  }
  else
  {
    echo "Error al registrar";
  }
  $sql = "SELECT idSolucion FROM solucionsolicitud";
  $result = mysqli_query($conexion, $sql);
  while ($row = mysqli_fetch_row($result))
  {
    $idSolucion = $row[0];
  }
  $sql = "UPDATE solicitudesservicios SET Estado = 'SOLUCIONADO' WHERE idSolicitud = $idSolicitud";
  mysqli_query($conexion, $sql);

  for($x=0; $x<$_SESSION['contador']; $x++)
  {
    $idMaterial = $_SESSION['compra'][$x][0];
    $cantidad2 = $_SESSION['compra'][$x][2];

    $sqlDetalle = "INSERT INTO detalleSolucion (idSolucion, IdMaterial, Cantidad) VALUES('$idSolucion','$idMaterial','$cantidad2')";
    if(mysqli_query($conexion, $sqlDetalle))
    {
        $sqlUpdate = "UPDATE materiales SET Existencias = Existencias - $cantidad2 WHERE IdMaterial = $idMaterial";
        mysqli_query($conexion, $sqlUpdate);
        echo '<script language="javascript">alert("Compra de material registrado exitosamente")</script>';
    }
  }

 ?>
