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

    <!--<div class="container">    
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
    </div>-->

    <?php
        include "../conexion.php";
        $idSolucion = 0;
        if(!empty($_POST['idSolucion']))
        {
            $idSolucion = $_POST['idSolucion'];
        }
        $sql = "SELECT * FROM solucionsolicitud WHERE IdSolucion='$idSolucion'";            
        $result = mysqli_query($conexion, $sql);

        while($row = $result->fetch_assoc())
        {
            $idSolucionConsulta = $row['IdSolucion'];
            $idSolicitud = $row['IdSolicitud'];
            $idServicio = $row['IdServicio'];
            $descripcion = $row['Descripcion'];
            $fecha = $row['Fecha'];
            $nomServicio;
            $sqlServicio = "SELECT Descripcion FROM servicios WHERE IdServicios='$idServicio'";
            $resultServicio = mysqli_query($conexion, $sqlServicio);

            while($rowServicio = $resultServicio->fetch_assoc())
            {
                $nomServicio = $rowServicio['Descripcion'];
            }


            echo "<div class='container'>";
            echo "<div class='form-group row'";
            echo "<label class='col-md-1'>IdSolución:</label>";
            echo "<input type='text' name='idSolucionCons' id='idSolucionCons' class='form-control col-md-2' value='$idSolucionConsulta' readonly>";
            echo "<label class='col-md-1'>IdSolicitud:</label>";
            echo "<input type='text' name='idSolicitud' id='idSolicitud' class='form-control col-md-2' value='$idSolicitud' readonly>";
            echo "<label class='col-md-1'>Servicio:</label>";
            echo "<input type='text' name='servicio' id='servicio' class='form-control col-md-3' value='$nomServicio' readonly>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label class='col-md-1'>Descripción:</label>";
            echo "<input type='text' name='descripcion' id='descripcion' class='form-control' value='$descripcion' readonly>";
            echo "</div>";
            echo "<div class='form-group row'>";
            echo "<label class='col-md-2'>Fecha:</label>";
            echo "<input type='text' id='fecha' name='fecha' class='form-control col-md-2' value='$fecha' readonly>";
            echo "</div>";
            echo "</div>";
        }

        echo "<hr>";

        $sql = "SELECT IdMaterial, Cantidad FROM detallesolucion WHERE IdSolucion='$idSolucion'";
        $result = mysqli_query($conexion, $sql);

        echo "<div class='container'>";
        echo "<table class='table table-bordered table-hover table-condensed' id='tablaDetalle' name='tablaDetalle'>";
        echo "<tr class='table-primary'>";
        echo "<th class='text-center'>Material</th>";
        echo "<th class='text-center'>Cantidad</th>";
        echo "</tr>";       
        while($row = $result->fetch_assoc())
        {
            $idMaterial = $row['IdMaterial'];
            $nombreMaterial;
            $sqlMaterial = "SELECT Nombre FROM materiales WHERE IdMaterial='$idMaterial'";
            $resultMaterial = mysqli_query($conexion, $sqlMaterial);

            while($rowMaterial = $resultMaterial->fetch_assoc())
            {
                $nombreMaterial = $rowMaterial['Nombre'];
            }

            echo "<tr class='active'>";
            echo "<td class='text-center'>".$nombreMaterial."</td>";
            echo "<td class='text-center'>".$row['Cantidad']."</td>";
            echo "</tr>";
        }        
        echo "</table>";
        echo "</div>";
        
    ?>        
    <?php
        include "../footer.html";
    ?>
</body>
</html>