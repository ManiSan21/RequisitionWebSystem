<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body style="background-color: #DEF5F5;">
        <?php
          include "../nav.php";
        ?>
        <div class="container">
            <form name="form1" action="RegistroMateriales.php" method="post">
            <caption><strong><h1 class="text-center text-primary">Formulario de registro de materiales</h1></strong></caption>                
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">IdMaterial:</label>
                    <input class="col-md-3 text-right" type="text" name="id" readonly placeholder="El id se genera automáticamente"/>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Ingrese el nombre del material"/>                    
                </div>
                <div class="form-group row">
                    <label for="">Máximo:</label>
                    <input class="form-control col-md-2" type="text" name="maximo" placeholder="0"/>
                    <label for="">Mínimo:</label>
                    <input class="form-control col-md-2" type="text" name="minimo" placeholder="0"/>
                </div>
                <div class="form-group">
                    <label for="">Existencias:</label>
                    <input class="form-control col-md-2" type="text" name="existencias" placeholder="0"/>
                    <label for="">Precio:</label>
                    <input class="form-control col-md-2" type="text" name="precio" placeholder="$0.00"/>
                </div>
                <hr>
                <div class="form-group row">
                    <input type="reset" value="Limpiar" class="btn btn-danger" />
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
                </div>
            <!--<input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de Materiales
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Material:
                    </td>
                    <td>
                        <input class="default" type="text" name="id" disabled placeholder="El id se genera automáticamente"/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Id Proveedor:
                    </td>
                    <td>
                        <select name="proveedores">
                            <option value="Ninguno">Seleccione Proveedor</option>
                            
                                /*include "../conexion.php";

                                $sql = "SELECT IdProveedor FROM proveedores";
                                $result = mysqli_query($conexion, $sql);

                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option value='".$row['IdProveedor']."'>".$row['IdProveedor']."</option>";
                                }

                                mysqli_close($conexion);*/
                         
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Nombre:
                    </td>
                    <td>
                        <input class="default" type="text" name="nombre"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Máximo:
                    </td>
                    <td>
                        <input class="default" type="text" name="maximo"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Mínimo:
                    </td>
                    <td>
                        <input class="default" type="text" name="minimo"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Existencias:
                    </td>
                    <td>
                        <input class="default" type="text" name="existencias"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Precio:
                    </td>
                    <td>
                        <input class="default" type="text" name="precio"/>
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td>
                        <input type="reset" value="Limpiar" class="default" />
                    </td>
                     <td>
                        <input type="submit" name="Enviar" value="Enviar" class="default" />
                    </td>
                </tr>
            </table>-->            
            </form>
        </div>
        <?php
            include "../footer.html";
        ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</html>
