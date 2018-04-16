<?php
    session_start();

    $usuario = $_SESSION['usuario'];
    $contra = $_SESSION['contra'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estiloMenu.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>RWS - Página principal</title>
  </head>
  <body>
    <nav>
      <ul>          
          <li><a title="registrarAulas" href="catalogos/RegistrarAulasF.php">Regitrar aulas</a></li>
          <li><a title="registrarDepartamentos" href="catalogos/RegistrarDepartamentosF.php">Registrar departamentos</a></li>
          <li><a title="registrarUsuarios" href="catalogos/RegistrarUsuarioF.php">Registrar Usuarios</a></li>
          <li><a title="registrarMateriales" href="catalogos/RegistroMaterialesForm.php">Registrar materiales</a></li>
          <li><a title="registrarProveedores" href="catalogos/RegistroProveedoresF.php">Registrar proveedores</a></li>
          <li><a title="registrarServicios" href="catalogos/RegistroServiciosF.php">Registrar servicios</a></li>
          <li><a title="compraMateriales" href="movimientos/compraMaterialesF.php">Registrar Compras de materiales</a></li>
          <li><a title="solicitudesServicio" href="movimientos/RegistroSolicitudesForm.php">Registrar solicitud de servicio</a></li>
          <li><a title="solucionSolicitudes" href="movimientos/SolucionSolicitudesForm.php">Registrar solución de solicitudes</a></li>
          <li>Usuario en sesion: <?php echo $usuario; ?></li>
          <li><a title="cerrarSesion" name="cerrarSession" href="cerrarSesion.php">Cerrar Sesión</a></li>          
      </ul>
    </nav>
    <table style="width:100%">
      <tr colspan="2">
        <td style="text-align:center"><img src="img/logoDM.png"/></td>
      </tr>
    </table>    
  </body>
</html>
