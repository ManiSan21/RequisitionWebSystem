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
    <title>Consulta de soluciones de solicitudes</title>    
</head>
<body style="background-color: #DEF5F5;">
    <?php
        include "../nav.php";
    ?>

    <div class="container">
        <form name="form1" id="form1" method="POST">
            <caption><strong><h1 class="text-center text-primary">Consulta de Soluciones de Solicitudes</h1></strong></caption>
            <div class="form-group">
                <label for="">IdSolución:</label>
                <input type="text" class="form-control col-md-3" name="idSolucion" id="idSolucion" placeholder="Ingrese el Id de la solución:">
                <br>
                <input type="submit" name="consultarSolucion" id="consultarSolucion" value="Consultar Solucion" class="btn btn-primary">
            </div>
        </form>
    </div>

    <hr>

    <div class="container">    
        <div class="form-group row">
            <label for="" class="col-md-1">IdSolución:</label>
            <input type="text" name="idSolucionCons" id="idSolucionCons" class="form-control col-md-2" readonly>
            <label for="" class="col-md-1">IdSolicitud:</label>
            <input type="text" name="idSolicitud" id="idSolicitud" class="form-control col-md-2" readonly>
            <label for="" class="col-md-1">Servicio:</label>
            <input type="text" name="servicio" id="servicio" class="form-control col-md-3" readonly>            
        </div>     
        <div class="form-group">
            <label for="" class="col-md-1">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" readonly>
        </div>   
        <div class="form-group row">
            <label for="" class="col-md-1">Fecha:</label>
            <input type="text" name="fecha" id="fecha" class="form-control col-md-2" readonly>
        </div>
    </div>
    <hr>

    <div class="container">
        <table class="table table-bordered table-hover table-condensed" id="tablaDetalle" name="tablaDetalle">
            <tr class="table-primary">                
                <th class="text-center">IdMaterial</th>
                <th class="text-center">Cantidad</th>
            </tr>
        </table>        
    </div>
    <hr>
    <div class="container">
        <div class="form-group text-center">
            <input type="reset" value="Limpiar Formulario" id="limpiarFormulario" name="limpiarFormulario" class="btn btn-danger text-center">
        </div>
    </div>
    <?php
        include "../footer.html";
    ?>
</body>
</html>