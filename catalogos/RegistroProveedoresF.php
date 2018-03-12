<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Proveedores</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
    </head>
    <body>
        <?php
          include "../nav.html";
         ?>
        <form name="form1" action="RegistroProveedores.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de Proveedores
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Proveedor:
                    </td>
                    <td>
                        <input class="default" type="text" name="id" disabled placeholder="El id se genera automáticamente."/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Nombre:
                    </td>
                    <td>
                        <input class="default" type="text" name="nombre" placeholder="Nombre del proveedor" />
                        <!--<select>
                            <option value="Ninguno" name="idProveedor">Ninguno</option>
                        </select>-->
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Domicilio:
                    </td>
                    <td>
                        <input class="default" type="text" name="domicilio"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Colonia:
                    </td>
                    <td>
                        <input class="default" type="text" name="colonia"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Estado:
                    </td>
                    <td>
                        <input class="default" type="text" name="estado"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Código Postal:
                    </td>
                    <td>
                        <input class="default" type="text" name="cp"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        Teléfono:
                    </td>
                    <td>
                        <input class="default" type="text" name="telefono"/>
                    </td>
                </tr>

                <tr>
                    <td class="oce-first">
                        E-mail:
                    </td>
                    <td>
                        <input class="default" type="text" name="email"/>
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
            <?php
              include "../footer.html";
             ?>
        </form>
    </body>
</html>
