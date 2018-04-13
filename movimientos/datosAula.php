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

    $sql = "SELECT Descripcion FROM aula WHERE IdAula = $q";
    $result = mysqli_query($conexion, $sql);

    while($row = $result->fetch_assoc())
    {
        $descripcion = $row['Descripcion'];

        echo "<label for=''>Descripción del aula:</label>";
        echo "<input type='text' name='descripcion' id='descripcion' readonly value='$descripcion' class='form-control'>";
    }
    mysqli_close($conexion);
?>

</body>
</html>
