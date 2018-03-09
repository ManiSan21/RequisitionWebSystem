<?php
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  if ((include '../conexion.php') == TRUE)
  {
  }

  $sql = mysqli_query($conexion, "INSERT INTO usuarios (Usuario, Password) VALUES('".$departamento."');");

  if($sql)
  {
    echo "Departamento registrado correctamente";
  }
  else
  {
    echo "Error al insertar en la base de datos";
  }

?>
