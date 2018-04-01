<?php
  include "../conexion.php";
  session_start();
  $_SESSION['compra'][$_SESSION['contador']][1] = $_POST['materiales'];
  $_SESSION['compra'][$_SESSION['contador']][2] = $_POST['cantidad'];
  $_SESSION['compra'][$_SESSION['contador']][3] = $_POST['precio'];
 // $_SESSION['compra'][$_SESSION['contador']][4] = $_POST['importe'];


  $sql = "SELECT IdMaterial FROM materiales WHERE Nombre='".$_POST['materiales']."'";
  $nombre = "Hola";
  $importe = $_POST['cantidad']*$_POST['precio'];
  $_SESSION['importe'] = $importe;
  $_SESSION['subtotal'] = $_SESSION['subtotal'] + $importe;
  $_SESSION['iva'] = $_SESSION['iva'] + $importe*0.16;

  $total = $importe + $importe*0.16;
  $_SESSION['total'] = $total;  

  $_SESSION['compra'][$_SESSION['contador']][4] = $importe;
  $result = mysqli_query($conexion, $sql);
  while($row = mysqli_fetch_row($result))
  {
    $nombre = $row[0];
  }
  $_SESSION['compra'][$_SESSION['contador']][0] = $nombre;
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
