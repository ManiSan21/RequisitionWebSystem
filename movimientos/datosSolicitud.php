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
</head>
<body>
    <?php
        include "../conexion.php";

        $q = $_GET['q'];

        $nombreUsuario;
        $descripcionAula;
        $sql = "SELECT IdUsuario, IdAula, Descripcion, Fecha, Estado FROM solicitudesservicios WHERE IdSolicitud='".$q."'";
        $result = mysqli_query($conexion, $sql);

        while($row = $result->fetch_assoc())
        {
            $idUsuario = $row['IdUsuario'];
            $idAula = $row['IdAula'];
            $descripcion = $row['Descripcion'];
            $fecha = $row['Fecha'];
            $estado = $row['Estado'];

            $sqlUsuario = "SELECT NombreUsuario FROM usuarios WHERE IdUsuario = $idUsuario";
            $resultUsuario = mysqli_query($conexion, $sqlUsuario);
            while($rowUsuario = $resultUsuario->fetch_assoc())
            {
                $nombreUsuario = $rowUsuario['NombreUsuario'];
            }

            $sqlAula = "SELECT Descripcion FROM aula WHERE IdAula = $idAula";
            $resultAula = mysqli_query($conexion, $sqlAula);

            while($rowAula = $resultAula->fetch_assoc())
            {
                $descripcionAula = $rowAula['Descripcion'];
            }

            echo "<label for=''>Usuario:</label>";
            echo "<input type='text' name='usuario' id='usuario' class='form-control col-md-2' value='$nombreUsuario' readonly >";
            echo "<label for=''>Aula:</label>";
            echo "<input type='text' name='aula' id='aula' class='form-control col-md-2' value='$descripcionAula' readonly>";
            echo "<label for=''>Descripción:</label>";
            echo "<input type='text' name='descripSolicitud' id='descripSolicitud' class='form-control col-md-3' value='$descripcion' readonly>";
            echo "<br>";
            echo "<label for=''>Fecha:</label>";
            echo "<input type='text' name='fecha' id='fecha' class='form-control col-md-2' value='$fecha' readonly>";
            echo "<lable for=''>Estado:</label>";
            echo "<input type='text' name='estado' id='estado' class='form-control col-md-7' value='$estado' readonly>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>