<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script>
        function cargarDatosSolicitud(str){
            if(str == ""){
                document.getElementById("datos").innerHTML = "";
                return;
            } else{
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                } else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("datos").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","datosSolicitud.php?q="+str,true);
                xmlhttp.send();
            }
        }

        function cargarDatosServicio(str){
            if(str == ""){
                document.getElementById("datosServicio").innerHTML = "";
                return;
            } else{
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                } else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("datosServicio").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","datosServicios.php?q="+str,true);
                xmlhttp.send();
            }
        }

    </script>
    <title>Solución de solicitudes</title>
</head>
<body style="background-color: #DEF5F5;">
    <?php
        include "../nav.php";

            $detalle = array();
            $_SESSION['compra'] = $detalle;
            $_SESSION['contador'] = 0;
    ?>
    <div class="container">
        <form action="" method="post" name="solucionForm" id="solucionForm">
            <caption><strong><h1 class="text-center text-primary">Formulario de Solución de solicitudes de servicio</h1></strong></caption>

            <div class="form-group text-right">
                <label for="" class="col-md-2 text-right">IdSolución:</label>
                <input type="text" name="idSolucion" id="idSolucion" class="col-md-3 text-right" placeholder="El ID se obtiene automaticamente">
            </div>
            <div class="form-group text-right">
                <label for="" class="col-md-2 text-right">Fecha:</label>
                <input type="date" class="col-md-2 text-right" name="fecha">
            </div>
            <hr>
            <div class="form-group">
                <label for="" class="col-md-2">IdSolicitud:</label>
                <select name="solicitudes" id="solicitudes" class="form-control col-md-3" onchange="cargarDatosSolicitud(this.value)">
                    <option value="ninguno">Seleccione una solicitud</option>
                    <?php
                        include "../conexion.php";

                        $estado = "PENDIENTE";

                        $sql = "SELECT IdSolicitud FROM solicitudesservicios WHERE Estado = '$estado'";
                        $result = mysqli_query($conexion, $sql);

                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value'".$row['IdSolicitud']."'>".$row['IdSolicitud']."</option>";
                        }

                        mysqli_close($conexion);
                    ?>
                </select>
            </div>
            <div class="form-group row" id="datos">
                <b>Aquí se mostrarán los datos de la solicitud...</b>
            </div>
            <hr>

            <div class="form-group">
                <label for="" class="col-md-2">Servicio:</label>
                <select name="servicios" id="servicios" class="form-control col-md-4">
                    <option value="ninguno">Seleccione un servicio</option>
                    <?php
                        include "../conexion.php";

                        $sql = "SELECT Descripcion FROM servicios";
                        $result = mysqli_query($conexion, $sql);

                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value'".$row['Descripcion']."'>".$row['Descripcion']."</option>";
                        }

                        mysqli_close($conexion);
                    ?>
                </select>
            </div>  
            <hr>

            <div class="container">
                <div class="form-group">
                    <label for="">Materiales:</label>
                    <select name="materiales" id="materiales" class="form-control col-md-3 text-right">
                        <option value="Ninguno">Seleccione un material</option>
                        <?php
                            include "../conexion.php";
                            $sql = "SELECT Nombre FROM materiales";
                            $result = mysqli_query($conexion, $sql);

                            while($row = $result->fetch_assoc())
                            {
                                echo "<option value'".$row['Nombre']."'>".$row['Nombre']."</option>";
                            }
                            mysqli_close($conexion);
                        ?>
                    </select>
                </div>

                <div class="form-group row">
                    <label>Cantidad:</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control col-md-1">
                    <button class="btn btn-primary" type="button" name="agregar" id="agregar">Agregar al carrito</button>
                </div>
            <div class="container">
                <table class="table table-bordered table-hover table-condensed" id="tablaDetalle" name="tablaDetalle">
                    <tr class="table-primary">
                        <th class="text-center">IdMaterial</th>
                        <th class="text-center">Cantidad</th>
                    </tr>
                </table>
            </div>            
                      
            <hr>
            <div class="form-group">
                <label for="" class="col-md-2">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese una descripción de la solución de solicitud">
            </div>
            <hr>

            <div class="form-group text-center">
                <input type="submit" name="registrarSolucion" id="registrarSolucion" value="Registrar Solución" class="btn btn-primary">
                <input type="reset" name="limpiar" id="limpiar" value="Limpiar formulario" class="btn btn-danger">
            </div>
        </form>
    </div>
    <?php
        include "../footer.html";
    ?>
</body>
<script>
  $(document).ready(function()
  {
      $('#agregar').click(function()
      {
          $.ajax({
              url: 'agregarDetalleSolucion.php',
              type: 'POST',
              dataType: 'html',
              data: $('#solucionForm').serialize(),
              success: function(newContent)
              {
                  $('#tablaDetalle').html(newContent);
              }
          });
          return false;
      });
  });
  $(document).ready(function()
  {
      $('#solucionForm').submit(function()
      {
          $.ajax({
              url: 'solucionSolicitudes.php',
              type: 'POST',
              dataType: 'html',
              data: $(this).serialize(),
              success: function(newContent)
              {
                  alert(newContent);
              }
          });
          return false;
      });
  });

  </script>
</html>
