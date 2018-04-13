<?php
  $aula = $_POST['aula'];
  if ((include '../conexion.php') == TRUE)
  {
  }

  $sql = mysqli_query($conexion, "INSERT INTO aula (Descripcion) VALUES('$aula')");

  if($sql)
  {
    echo $aula;
  }
  else
  {
    echo $aula;
    echo "Error al insertar en la base de datos";
  }

?>
