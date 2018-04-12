<?php
  $db = 'rws';
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  /*$db = 'rws';
  $host = 'localhost';
  $user = 'root';
  $pass = '';*/

  $conexion = mysqli_connect($host, $user, $pass);
  mysqli_select_db($conexion, $db);
?>
