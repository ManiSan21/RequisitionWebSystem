<!DOCTYPE html>
<html>
    <head>
        <title>Compra de materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    </head>
    <body style="background-color: #DEF5F5;">
        <?php
            include "../nav.php";
            $detalle = array();
            $_SESSION['compra'] = $detalle;
            $_SESSION['contador'] = 0;
            $_SESSION['subtotal'] = 0;
            $_SESSION['iva'] = 0;
            $_SESSION['total'] = 0;

        ?>
        <div class="container">
            <form name="form1" id="form1" action="" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de compra de materiales</h1></strong></caption>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">IdCompra:</label>
                    <input type="text" class="col-md-3 text-right" name="id" placeholder="El Id se obtiene automáticamente" readonly>
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Folio:</label>
                    <input type="text" class="col-md-2 text-right" name="factura" placeholder="Ingrese el folio:">
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Fecha:</label>
                    <input type="date" class="col-md-2 text-right" name="fecha">
                </div>
                <div class="form-group">
                    <label for="">Proveedor:</label>
                    <select name="proveedores" id="proveedores" class="form-control col-md-3 text-right">
                        <option value="ninguno">Seleccione un proveedor</option>
                            <?php
                                include "../conexion.php";

                                $sql = "SELECT Nombre FROM proveedores";
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
                    <label for="">IdProveedor:</label>
                    <input type="text" name="idProveedor" id="idProveedor" class="form-control col-md-1" readonly>
                    <label for="">Domicilio:</label>
                    <input type="text" name="domicilio" id="domicilio" class="form-control col-md-3" readonly>
                    <label for="">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class="form-control col-md-2" readonly>
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
                        <label for="">Precio</label>
                        <input type="text" name="precio" id="precio" class="form-control col-md-2">
                        <button class="btn btn-primary" type="button" name="agregar" id="agregar">Agregar al carrito</button>
                    </div>

                    <hr>

                    <div class="container" >
                        <table class="table table-bordered table-hover table-condensed" id="tablaMateriales" name="tablaMateriales">
                            <tr class="table-primary">
                                <th class="text-center">IdMaterial</th>
                                <th class="text-center">Material:</th>
                                <th class="text-center">Cantidad:</th>
                                <th class="text-center">Precio:</th>
                                <th class="text-center">Importe:</th>
                            </tr>
                            <div id="detalles">

                            </div>
                        </table>
                    </div>
                    <hr>
                    <br>

                    <div class="container">
                        <div class="form-group row">
                            <label for="">Subtotal:</label>
                            <input type="text" name="subtotal" id="subtotal" class="form-control col-md-1" readonly>
                            <label for="">IVA:</label>
                            <input type="text" name="iva" id="iva" class="form-control col-md-1" readonly>
                            <label for="">Total:</label>
                            <input type="text" name="total" id="total" class="form-control col-md-1" readonly>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group text-center">
                            <input type="submit" name="registrarCompra" id="registrarCompra" value="Registrar compra" class="btn btn-primary">
                        </div>
                    </div>
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
                    url: 'agregarDetalle.php',
                    type: 'POST',
                    dataType: 'html',
                    data: $('#form1').serialize(),
                    success: function(newContent)
                    {
                        $('#tablaMateriales').append(newContent);
                    }
                });

                return false;
            });
      });
        $(document).ready(function()
        {
                $('#form1').submit(function()
                 {
                    $.ajax({
                        url: 'aniadirMateriales.php',
                        type: 'POST',
                        dataType: 'html',
                        data: $(this).serialize(),
                        success: function(newContent)
                        {
                          alert("Se registró la compra correctamente");
                        }
                    });
                    return false;
                });
            });
    </script>
</html>
