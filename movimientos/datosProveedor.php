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

    $sql = "SELECT IdProveedor, Domicilio, Telefono FROM proveedores WHERE Nombre = '".$q."'";
    $result = mysqli_query($conexion, $sql);

    while($row = $result-> fetch_assoc())
    {
        $idProveedor = $row['IdProveedor'];
        $domicilio = $row['Domicilio'];
        $telefono = $row['Telefono'];

        echo "<label for=''>IdProveedor:</label>";
        echo "<input type='text' name='idProveedor' id='idProveedor' class='form-control col-md-1' value='$idProveedor' readonly >";
        echo "<label for=''>Domicilio:</label>";
        echo "<input type='text' name='domicilio' id='domicilio' class='form-control col-md-3' value='$domicilio' readonly>";
        echo "<label for=''>Teléfono:</label>";
        echo "<input type='text' name='telefono' id='telefono' class='form-control col-md-2' value='$telefono' readonly>";
    }
    mysqli_close($conexion);    
?>

</body>
</html>