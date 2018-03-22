<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Servicios</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
    </head>
    <body>
        <?php
          include "../nav.php";
        ?>
        <form name="form1" action="RegistroServicios.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="100%" id="one-column-emphasis" style="text-align:center">
                <caption>
                    Formulario de registro de Servicios
                </caption>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Id Servicio:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" name="id" placeholder="El Id se obtiene automáticamente" disabled/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first" style="text-align:center">
                        Descripción:
                    </td>
                    <td style="text-align:center">
                        <input class="default" type="text" name="descripcion" placeholder="Descripción del servicio" />
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
