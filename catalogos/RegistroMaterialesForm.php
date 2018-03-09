<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Materiales</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
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
                            <option value="idProveedor">Seleccione Proveedor</option>                          
                            <?php
                                include '../RegistroMateriales.php';
                                
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
                        <input type="submit" value="Enviar" class="default" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>