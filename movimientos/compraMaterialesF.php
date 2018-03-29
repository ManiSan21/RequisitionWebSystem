<!DOCTYPE html>
<html>
    <head>
        <title>Compra de materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <?php
            include "../nav.php";
        ?>
        <div class="container">
            <form name="form1" action="aniadirMateriales.php" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de compra de materiales</h1></strong></caption>                
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">IdCompra:</label>
                    <input type="text" class="col-md-3 text-right" name="id" placeholder="El Id se obtiene automáticamente" readonly>                    
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Folio:</label>
                    <input type="text" class="col-md-2 text-right" name="id" placeholder="Ingrese el folio:">
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
                        <input type="text" name="cantidad" id="cantidad" class="form-control col-md-1" readonly>
                        <label for="">Precio</label>
                        <input type="text" name="precio" id="precio" class="form-control col-md-2" readonly>                                  
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>

                    <hr>

                    <div class="container">
                        <table class="table table-bordered table-hover table-condensed" id="tablaMateriales" name="tablaMateriales">
                            <tr class="table-primary">
                                <th class="text-center">Material:</th>
                                <th class="text-center">Cantidad:</th>
                                <th class="text-center">Precio:</th>
                            </tr>
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
                            <input type="button" name="registrarCompra" id="registrarCompra" value="Registrar compra" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--<form name="form1" action="aniadirMateriales.php" method="post" class="form-group">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="100%" id="one-column-emphasis" style="text-align:center">
                <caption>
                    Formulario de compra de materiales
                </caption>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Id Compra:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" name="id" placeholder="El Id se obtiene automáticamente" disabled/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Factura:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" name="factura" placeholder="Factura de la compra" />
                    </td>
                </tr>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Fecha:
                    </td>
                    <td style="text-align:center">
                        <input class="default" id="fecha" type="date" name="fecha" placeholder="Descripción del servicio" />
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Id Material:
                    </td>
                    <td>
                        <select name="materiales" id="materiales">
                            <option value="ninguno">Seleccione un material</option>
                            
                                /*include "../conexion.php";

                                $sql = "SELECT IdMaterial FROM materiales";
                                $result = mysqli_query($conexion, $sql);

                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option value'".$row['IdMaterial']."'>".$row['IdMaterial']."</option>";
                                }

                                mysqli_close($conexion);*/
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Cantidad:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" id="cantidad" name="cantidad" placeholder="Cantidad del material" />
                    </td>
                </tr>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Costo:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" id="costo" name="costo" placeholder="Costo del material" />
                        <button type="button" name="aniadir" onclick="materialesCompra()" >Añadir material</button>
                    </td>
                </tr>
                <tr style="text-align:center">
                    <td class="oce-first" style="text-align:center">
                        Materiales de la compra:
                    </td>
                    <td>
                        
                        <table border="1" id="tablaMateriales" name="tablaMateriales">
                            <tr>
                                <th>Id Material</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                <td class="oce-first" style="text-align:center">
                    Subtotal:
                </td>
                <td style="text-align:center">
                    <input class="default" type="text" id="subtotal" name="subtotal" value="0" />
                </td>
            </tr>
            <tr>
                <td class="oce-first" style="text-align:center">
                    IVA:
                </td>
                <td style="text-align:center">
                    <input class="default" type="text" id="iva" name="iva" value="0"/>
                </td>
            </tr>
            <tr>
                <td class="oce-first" style="text-align:center">
                    Total:
                </td>
                <td style="text-align:center">
                    <input class="default" type="text" id="total" name="total" value="0"/>
                </td>
            </tr>
                <tr style="text-align: center;">
                    <td>
                        <input type="reset" value="limpiar" class="default" />
                    </td>
                     <td>
                        <input type="submit" name="enviar" value="enviar" class="default" />
                    </td>
                </tr>
            </table>
        </form>-->
        <?php
          include "../footer.html";
        ?>
    </body>
    <script>

        function materialesCompra()
        {

            var idMaterial = document.getElementById('materiales').value;
            var cantidad = document.getElementById('cantidad').value;
            var costo = document.getElementById('costo').value;
            var tabla = document.getElementById('tablaMateriales');
            var numFilas = document.getElementById('tablaMateriales').rows.length;

            var subtotal = cantidad * costo;
            var iva = subtotal * 0.16;
            var total = subtotal + iva;

            var subtotalValor = document.getElementById('subtotal');
            var ivaValor = document.getElementById('iva');
            var totalValor = document.getElementById('total');

            var subtotalFin = parseFloat(subtotalValor.value);
            var ivaFin = parseFloat(ivaValor.value);
            var totalFin = parseFloat(totalValor.value);

            subtotalFin = parseFloat(subtotalFin + subtotal);
            ivaFin = parseInt(ivaFin + iva);
            totalFin = parseInt(totalFin + total);

            subtotalValor.value = subtotalFin;
            ivaValor.value = ivaFin;
            totalValor.value = totalFin;

            var columnas = "";

            numFilas = numFilas + 1;

            var fila = tabla.insertRow();
            var columna1 = fila.insertCell(0);
            var columna2 = fila.insertCell(1);
            var columna3 = fila.insertCell(2);

            columna1.innerHTML = idMaterial;
            columna2.innerHTML = cantidad;
            columna3.innerHTML = costo;



            document.getElementById('total').text = totalValor.value;
            document.getElementById('iva').text= ivaValor.value;
            subtotal.getElementById('subtotal').text = subtotalValor.value;


        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</html>
