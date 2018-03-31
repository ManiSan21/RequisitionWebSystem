<?php
  session_start();
  $_SESSION['compra'][$_SESSION['contador']][0] = $_POST['materiales'];
  $_SESSION['compra'][$_SESSION['contador']][1] = $_POST['cantidad'];
  $_SESSION['compra'][$_SESSION['contador']][2] = $_POST['precio'];

  echo "<tr>
       <td>
          ".$_POST['materiales']."
        </td>
        <td>
          ".$_POST['cantidad']."
        </td>
        <td>
          ".$_POST['precio']."
        </td>
  </tr>";

  $_SESSION['contador'] = $_SESSION['contador'] + 1;
 ?>
