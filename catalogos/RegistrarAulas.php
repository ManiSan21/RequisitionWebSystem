<?php
  $aula = $_POST['aula'];
  if ((include '../conexion.php') == TRUE)
  {
  }

  $sql = mysqli_query($conexion, "INSERT INTO aula (Descripcion) VALUES('".$aula."');");

  if($sql)
  {
    echo "Aula registrada correctamente";
  }
  else
  {
    echo "Error al insertar en la base de datos";
  }

?>
