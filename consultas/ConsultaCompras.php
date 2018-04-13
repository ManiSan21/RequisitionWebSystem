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
    <title>Consulta de compras de materiales</title>
</head>
<body style="background-color: #DEF5F5;">
    <?php
        include "../nav.php";
    ?>

    <div class="container">
        <form name="form1" id="form1" method="POST">
            <caption><strong><h1 class="text-center text-primary">Consulta de compra de materiales</h1></strong></caption>
            <div>
                <label for="" class="col-md-2 text-right">IdCompra:</label>
                <input type="text" class="form-control col-md-3" name="idCompra" id="idCompra" placeholder="Ingrese el Id de compra:">
                <br>
                <input type="submit" name="consultarCompra" id="consultarCompra" value="Consultar Compra" class="btn btn-primary">
            </div>            
        </form>
    </div>
    <hr>
    <div class="container" >
        <table class="table table-bordered table-hover table-condensed" id="tablaMateriales" name="tablaMateriales">
            <tr class="table-primary">
                <th class="text-center">IdCompra:</th>
                <th class="text-center">Folio:</th>
                <th class="text-center">Proveedor:</th>
                <th class="text-center">Fecha:</th>
                <th class="text-center">Subtotal:</th>
                <th class="text-center">IVA:</th>
                <th class="text-center">Total:</th>
            </tr>
            <tr>
                <?php
                    include "../conexion.php";
                    $idCompra = 0;
                    if(!empty($_POST['idCompra']))
                    {
                        $idCompra = $_POST['idCompra'];
                        $_SESSION['idCompra'] = $idCompra;
                    }                                        
                    $idProveedor;
                    $nombre;

                    $sql = "SELECT * FROM compramateriales WHERE IdCompra='$idCompra'";
                    $result = mysqli_query($conexion, $sql);

                    while($row = $result->fetch_assoc())
                    {
                        $idProveedor = $row['IdProveedor'];
                        $sqlProv = "SELECT Nombre FROM proveedores WHERE IdProveedor='$idProveedor'";
                        $resultProv = mysqli_query($conexion, $sqlProv);
                        while($rowProv = $resultProv->fetch_assoc())
                        {
                            $nombre = $rowProv['Nombre'];
                        }
                        echo "<tr class='active'>";
                        echo "<td class='text-center'>".$row['IdCompra']."</td>";
                        echo "<td class='text-center'>".$row['Factura']."</td>";
                        echo "<td class='text-center'>".$nombre."</td>";
                        echo "<td class='text-center'>".$row['Fecha']."</td>";
                        echo "<td class='text-center'>".$row['Subtotal']."</td>";
                        echo "<td class='text-center'>".$row['IVA']."</td>";
                        echo "<td class='text-center'>".$row['Total']."</td>";
                        echo "</tr>";
                    }                                        
                    mysqli_close($conexion);
                ?>
            </tr>
        </table>
        <hr>
        <div class="container" >
        <table class="table table-bordered table-hover table-condensed" id="tablaMateriales" name="tablaMateriales">
            <tr class="table-primary">
                <th class="text-center">IdCompra:</th>
                <th class="text-center">IdMaterial:</th>
                <th class="text-center">Cantidad:</th>
                <th class="text-center">Costo:</th>
                <th class="text-center">Importe:</th>                
            </tr>
            <tr>
                <?php
                    include "../conexion.php";
                    $idCompraDetalle=$_SESSION['idCompra'];

                    $sql = "SELECT * FROM detallecompras WHERE IdCompra='$idCompraDetalle'";
                    $result = mysqli_query($conexion, $sql);

                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr class='active'>";
                        echo "<td class='text-center'>".$row['IdCompra']."</td>";
                        echo "<td class='text-center'>".$row['IdMaterial']."</td>";                        
                        echo "<td class='text-center'>".$row['Cantidad']."</td>";
                        echo "<td class='text-center'>".$row['Costo']."</td>";
                        echo "<td class='text-center'>".$row['Importe']."</td>";                        
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