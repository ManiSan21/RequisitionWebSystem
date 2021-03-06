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
        $idMaterial = array();
        $idServicio;
        $contIdMaterial = 0;
        $nombreMaterial = array();

        $sql = "SELECT IdServicios FROM servicios WHERE Descripcion = '".$q."'";
        $result = mysqli_query($conexion, $sql);

        while($row = $result->fetch_assoc())
        {
            $idServicio = $row['IdServicios'];
        }

        $sqlDetServicio = "SELECT IdMaterial FROM detalleservicios WHERE IdServicios = '$idServicio'";
            $resultDetServicio = mysqli_query($conexion, $sqlDetServicio);

            while($rowDetServicio = $resultDetServicio->fetch_array())
            {
                $idMaterial[] = $rowDetServicio['IdMaterial'];                
            
                $sqlMaterial = "SELECT Nombre FROM materiales WHERE IdMaterial = '$idMaterial[$contIdMaterial]'";
                $resultMaterial = mysqli_query($conexion, $sqlMaterial);
                $contNomMat = 0;
                while($rowMaterial = $resultMaterial->fetch_array())
                {
                    $nombreMaterial[] = $rowMaterial['Nombre'];                   
                }
                $contIdMaterial++;
            }

            echo "<label for=''>IdServicio:</label>";
            echo "<input type='text' name='idServicio' id='idServicio' class='form-control col-md-2' value='$idServicio' readonly >";
            echo "<br/>";
            echo "<label for='' class=''>Materiales:</label>";
            echo "<br>";
            $nombreTexto = "material";
            $cont = 0;
            $cantMaterial = "cantidad";
            $contMaterial = 0;
            $contNumMateriales = sizeof($nombreMaterial);            
            for($i = 0; $i < $contNumMateriales; $i++)
            {
                $nombreTextoFin = $nombreTexto.$cont;
                $cantMaterialFin = $cantMaterial.$contMaterial;                
                echo "<label><i>$nombreMaterial[$i]:</i></label>";
                echo "<input type='text' name='$cantMaterialFin' id='$cantMaterialFin' class='form-control col-md-3' placeholder='Ingrese la cantidad de material'>";
                $cont++;
                $contMaterial++;
                echo "<br>";
            }            

        mysqli_close($conexion);
    ?>
</body>
</html>