<?php
  include "../conexion.php";
  session_start();
  $ban = true;

  echo "<table>
          <tr class=table-primary>
            <th class=text-center>IdMaterial</th>
            <th class=text-center>Material:</th>
            <th class=text-center>Cantidad:</th>
            <th class=text-center>Precio:</th>
            <th class=text-center>Importe:</th>
        </tr>";
  for($a=0; $a<$_SESSION['contador']; $a++)
  {
    $sql = "SELECT IdMaterial FROM materiales WHERE Nombre='".$_POST['materiales']."'";
    $result = mysqli_query($conexion, $sql);
    $id=0;
    while($row = mysqli_fetch_row($result))
    {
      $id = $row[0];
    }

    if($_SESSION['compra'][$a][0] == $id)
    {
      $_SESSION['compra'][$a][2] = $_SESSION['compra'][$a][2] + $_POST['cantidad'];
      $cant = $_SESSION['compra'][$a][2];
      $ban = false;
    }
    $importe = $_SESSION['compra'][$a][2]*$_SESSION['compra'][$a][3];
    $_SESSION['importe'] = $importe;
    $_SESSION['subtotal'] = $_SESSION['subtotal'] + $importe;
    $_SESSION['iva'] = $_SESSION['iva'] + $importe*0.16;

    $total = $importe + $importe*0.16;
    $_SESSION['total'] = $total;

    $_SESSION['compra'][$a][4] = $importe;

    echo "<tr class=active>
        <td>
            ".$_SESSION['compra'][$a][0]."
          </td>
          <td>
            ".$_SESSION['compra'][$a][1]."
          </td>
          <td>
            ".$_SESSION['compra'][$a][2]."
          </td>
          <td>
            ".$_SESSION['compra'][$a][3]."
          </td>
          <td>
            ".$_SESSION['compra'][$a][4]."
          </td>
    </tr>";
  }
  if($ban)
  {
    $_SESSION['compra'][$_SESSION['contador']][1] = $_POST['materiales'];
    $_SESSION['compra'][$_SESSION['contador']][2] = $_POST['cantidad'];
    $_SESSION['compra'][$_SESSION['contador']][3] = $_POST['precio'];
  // $_SESSION['compra'][$_SESSION['contador']][4] = $_POST['importe'];


    $sql = "SELECT IdMaterial FROM materiales WHERE Nombre='".$_POST['materiales']."'";
    $nombre = 0;
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
  }

  echo "</table>";
 ?>
