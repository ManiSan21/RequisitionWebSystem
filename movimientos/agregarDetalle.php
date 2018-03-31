<?php
  include "../conexion.php";
  session_start();
  $_SESSION['compra'][$_SESSION['contador']][0] = $_POST['materiales'];
  $_SESSION['compra'][$_SESSION['contador']][1] = $_POST['cantidad'];
  $_SESSION['compra'][$_SESSION['contador']][2] = $_POST['precio'];

  $sql = "SELECT IdMaterial FROM materiales WHERE Nombre='".$_POST['materiales']."'";
  $nombre = "Hola";
  $importe = $_POST['cantidad']*$_POST['precio'];
  $result = mysqli_query($conexion, $sql);
  while($row = mysqli_fetch_row($result))
  {
    $nombre = $row[0];
  }
  echo "<tr class=active>
       <td>
          ".$nombre."
        </td>
        <td>
          ".$_POST['materiales']."
        </td>
        <td>
          ".$_POST['cantidad']."
        </td>
        <td>
          ".$_POST['precio']."
        </td>
        <td>
          ".$importe."
        </td>
  </tr>";

  $_SESSION['contador'] = $_SESSION['contador'] + 1;
 ?>
