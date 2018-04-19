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
    ?>
    <div class="container">
        <form action="SolucionSolicitudes.php" method="post" name="solucionForm" id="solucionForm">
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

            <div class="container">
                <table class="table table-bordered table-hover table-condensed" id="tablaDetalle" name="tablaDetalle">
                    <tr class="table-primary">
                        <th class="text-center">IdSolución</th>
                        <th class="text-center">IdMaterial</th>
                        <th class="text-center">Cantidad</th>
                    </tr>
                </table>
            </div>

            <hr>

            <div class="form-group">
                <label for="" class="col-md-2">Servicio:</label>
                <select name="servicios" id="servicios" class="form-control col-md-4" onchange="cargarDatosServicio(this.value)">
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
            <div class="form-group row" id="datosServicio">
                <b>Aquí se mostrarán los datos del servicio...</b>                    
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
</html>