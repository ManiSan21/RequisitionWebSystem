<?php
  $aula = $_POST['aula'];
  if ((include '../conexion.php') == TRUE)
  {
  }

  $sql = mysqli_query($conexion, "INSERT INTO aulas (Descripcion) VALUES('".$aula."');");

  if($sql)
  {
    echo "Departamento registrado correctamente";
  }
  else
  {
    echo "Error al insertar en la base de datos";
  }

?>
