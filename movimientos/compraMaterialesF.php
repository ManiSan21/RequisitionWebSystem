<!DOCTYPE html>
<html>
    <head>
        <title>Compra de materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <script>

            function materialesCompra(){
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
    </head>
    <body>
        <?php
            include "../nav.php";
        ?>
        <form name="form1" action="aniadirMateriales.php" method="post" onsubmit="return false">
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
                            <?php
                                include "../conexion.php";

                                $sql = "SELECT IdMaterial FROM materiales";
                                $result = mysqli_query($conexion, $sql);

                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option value'".$row['IdMaterial']."'>".$row['IdMaterial']."</option>";
                                }

                                mysqli_close($conexion);
                            ?>
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
                        <button name="aniadir" onclick="materialesCompra()">Añadir material</button>
                    </td>
                </tr>
                <tr style="text-align:center">
                    <td class="oce-first" style="text-align:center">
                        Materiales de la compra:
                    </td>
                    <td>
                        <!--<p id="tabla"></p>-->
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
                    <input class="default" type="text" id="subtotal" name="subtotal" value="0" disabled />
                </td>
            </tr>
            <tr>
                <td class="oce-first" style="text-align:center">
                    IVA:
                </td>
                <td style="text-align:center">
                    <input class="default" type="text" id="iva" name="iva" value="0" disabled/>
                </td>
            </tr>
            <tr>
                <td class="oce-first" style="text-align:center">
                    Total:
                </td>
                <td style="text-align:center">
                    <input class="default" type="text" id="total" name="total" value="0" disabled/>
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
        </form>
        <?php
          include "../footer.html";
        ?>
    </body>
</html>
