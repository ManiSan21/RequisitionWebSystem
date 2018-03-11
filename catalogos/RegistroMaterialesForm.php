<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
    </head>
    <body>
        <?php
          include "../nav.html";
         ?>
        <form name="form1" action="RegistroMateriales.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
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
                            <?php                               
                                $db = 'rws';
                                $host = 'localhost:3308';
                                $user = 'root';
                                $pass = '';

                                $conexionSql = mysqli_connect($host, $user, $pass, $db);
                                
                                if(!$conexionSql)
                                {
                                    die("Error de conexión: ". mysqli_connect_error());      
                                }

                                $sql = "SELECT IdProveedor FROM proveedores";
                                $result = mysqli_query($conexionSql, $sql);

                                while($row = $result->fetch_assoc())//= mysqli_fetch_row($result))
                                {
                                    echo "<option value='".$row['IdProveedor']."'>".$row['IdProveedor']."</option>";
                                }

                                mysqli_close($conexionSql);
                            ?>
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
            </table>
            <?php
              include "../footer.html";
            ?>
        </form>
    </body>
</html>
