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
    <title>Consulta de Solicitudes de Servicios</title>
</head>
<body style="background-color: #DEF5F5;">
    <?php
        include "../nav.php";
    ?>

    <div class="container">
        <form name="form1" id="form1" method="POST">
            <caption><strong><h1 class="text-center text-primary">Consulta de Solicitudes de servicios</h1></strong></caption>
            <div>
                <label for="" class="col-md-2 text-right">IdSolicitud:</label>
                <input type="text" class="form-control col-md-3" name="idSolicitud" id="idSolicitud" placeholder="Ingrese el Id de la solicitud:">
                <br>
                <input type="submit" name="consultarSolicitud" id="consultarSolicitud" value="Consultar Solicitud" class="btn btn-primary">
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <table class="table table-bordered table-hover table-condensed" id="tablaMateriales" name="tablaMateriales">
            <tr class="table-primary">
                <th class="text-center">IdSolicitud:</th>
                <th class="text-center">IdUsuario:</th>
                <th class="text-center">IdAula:</th>
                <th class="text-center">Descripción del servicio:</th>
                <th class="text-center">Fecha:</th>
                <th class="text-center">Estado:</th>                
            </tr>
            <tr>
                <?php
                    include "../conexion.php";
                    $idSolicitud = 0;
                    if(!empty($_POST['idSolicitud']))
                    {
                        $idSolicitud = $_POST['idSolicitud'];                        
                    }                                        
                    $idAula;
                    $descripcion;

                    $sql = "SELECT * FROM solicitudesservicios WHERE IdSolicitud='$idSolicitud'";
                    $result = mysqli_query($conexion, $sql);

                    while($row = $result->fetch_assoc())
                    {
                        $idAula = $row['IdAula'];
                        $sqlCons = "SELECT Descripcion FROM aula WHERE IdAula='$idAula'";
                        $resultCons = mysqli_query($conexion, $sqlCons);

                        while($rowCons = $resultCons->fetch_assoc())
                        {
                            $descripcion = $rowCons['Descripcion'];
                        }

                        echo "<tr class='active'>";
                        echo "<td class='text-center'>".$row['IdSolicitud']."</td>";
                        echo "<td class='text-center'>".$row['IdUsuario']."</td>";
                        echo "<td class='text-center'>".$descripcion."</td>";
                        echo "<td class='text-center'>".$row['Descripcion']."</td>";
                        echo "<td class='text-center'>".$row['Fecha']."</td>";
                        echo "<td class='text-center'>".$row['Estado']."</td>";
                        echo "</tr>";
                    }
                    mysqli_close($conexion);
                ?>
            </tr>
        </table>
    </div>
    <?php
        include "../footer.html";
    ?>
</body>
</html>