<?php
  $db = 'rws';
  $host = 'localhost:3308';
  $user = 'root';
  $pass = '';
  /*$db = 'rws';
  $host = 'localhost';
  $user = 'root';
  $pass = '';*/

  $conexion = mysqli_connect($host, $user, $pass);
  mysqli_select_db($conexion, $db);
?>
