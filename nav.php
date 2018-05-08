<?php
    session_start();
    
    $usuario = $_SESSION['usuario'];
    $contra = $_SESSION['contra'];
    //$idUsuario = $_SESSION['idUsuario'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>RWS - Página principal</title>
  </head>
  <body>
    <nav>
      <ul>
      <li><a title="registrarAulas" href="../catalogos/RegistrarAulasF.php">Regitrar aulas</a></li>
      <li><a title="registrarDepartamentos" href="../catalogos/RegistrarDepartamentosF.php">Registrar departamentos</a></li>
      <li><a title="registrarUsuarios" href="../catalogos/RegistrarUsuarioF.php">Registrar Usuarios</a></li>
      <li><a title="registrarMateriales" href="../catalogos/RegistroMaterialesForm.php">Registrar materiales</a></li>
      <li><a title="registrarProveedores" href="../catalogos/RegistroProveedoresF.php">Registrar proveedores</a></li>
      <li><a title="registrarServicios" href="../catalogos/RegistroServiciosF.php">Registrar servicios</a></li>
      <li><a title="compraMateriales" href="../movimientos/compraMaterialesF.php">Registrar Compras de materiales</a></li>
      <li><a title="solicitudesServicio" href="../movimientos/RegistroSolicitudesForm.php">Registrar solicitud de servicio</a></li>
      <li><a title="solucionSolicitudes" href="../movimientos/SolucionSolicitudesForm.php">Registrar solución de solicitudes</a></li>
      <div class="dropdown">
        <button class="dropbtn">Consultas
          <i class="fa fa-caret-down"></i>
        </button>
        <div id="consultas" class="dropdown-content">
          <a href="../consultas/ConsultaSolicitudes.php">Consulta de solicitudes</a>
          <a href="../consultas/ConsultaCompras.php">Consulta de Compras</a>
          <a href="../consultas/ConsultaSoluciones.php">Consulta de Soluciones</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Reportes
          <i class="fa fa-caret-down"></i>
        </button>
        <div id="reportes" class="dropdown-content">
          <a href="../reportes/reporteAulas.php">Reporte de Aulas</a>
          <a href="../reportes/reporteMateriales.php">Reporte de Materiales</a>
          <a href="../reportes/reporteProveedores.php">Reporte de Proveedores</a>
          <a href="../reportes/reporteServicios.php">Reporte de Servicios</a>
          <a href="../reportes/reporteSolicitudes.php">Reporte de Solicitudes</a>
          <a href="../reportes/reporteSolicitudesPen.php">Reporte de Solicitudes pendientes</a>
          <a href="../reportes/reporteSolicitudesSol.php">Reporte de Solicitudes solucionadas</a>
          <a href="../reportes/reporteSoluciones.php">Reporte de Soluciones</a>
        </div>
      </div>
      <li>Usuario en sesion: <?php echo $usuario; ?></li>      
      <li><a title="cerrarSesion" name="cerrarSession" href="../cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>
    </nav>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    function miFuncion(){
      
    }
  </script>
</html>
