<?php
  include ../conexion.php;

  $idSolicitud = $_POST['solicitudes'];
  $servicios = $_POST['servicios'];
  $fecha = $_POST['fecha'];
  $descripcion = $_POST['descripcion'];
  $sql = "SELECT IdServicio FROM Servicios WHERE Descripcion = $servicios";
  $result = mysqli_result($conexion, $sql);
  $idServicio;
  while ($row = $result -> fetch_assoc())
  {
      $idServicio = $row[0];
  }

  $sql = "INSERT INTO solucionsolicitud (IdSolicitud, IdServicio, Descripcion, Fecha) VALUES ($idSolicitud, $idServicio, $descripcion, $fecha);"
  if(mysqli_query($conexion, $sql))
  {
    echo "Solución registrada";
  }
  else
  {
    echo "Error al registrar";
  }
 ?>
