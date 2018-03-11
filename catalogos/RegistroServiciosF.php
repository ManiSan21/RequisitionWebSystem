<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Servicios</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <?php
          include "../nav.html";
        ?>
        <form name="form1" action="RegistroServicios.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de Servicios
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Servicio:
                    </td>
                    <td>
                        <input class="default" type="text" name="id" placeholder="El Id se obtiene automáticamente" disabled/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Descripción:
                    </td>
                    <td>
                        <input class="default" type="text" name="descripcion" placeholder="Descripción del servicio" />
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Fecha:
                    </td>
                    <td>
                        <input class="default" id="fecha" type="date" name="fecha" placeholder="Descripción del servicio" />
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
