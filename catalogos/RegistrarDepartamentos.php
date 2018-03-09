<?php
  $departamento = $_POST['departamento'];
  if ((include '../conexion.php') == TRUE)
  {
  }

  $sql = mysqli_query($conexion, "INSERT INTO departamentos (Descripcion) VALUES('".$departamento."');");

  if($sql)
  {
    echo "Departamento registrado correctamente";
  }
  else
  {
    echo "Error al insertar en la base de datos";
  }

?>
