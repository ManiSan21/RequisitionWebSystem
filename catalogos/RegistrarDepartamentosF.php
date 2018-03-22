<!DOCTYPE html>
<html>
    <head>
        <title>Registro de departamentos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <?php
          include "../nav.php";
         ?>
        <form name="form1" action="RegistrarDepartamentos.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de departamento
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Departamento:
                    </td>
                    <td>
                        <input class="default" type="text" name="id" disabled placeholder="El id se provee automáticamente"/>

                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Departamento:
                    </td>
                    <td>
                        <input class="default" type="text" name="departamento" placeholder="Nombre del departamento" />

                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>
                        <input type="reset" value="limpiar" class="default" />
                    </td>
                     <td>
                        <input type="submit" value="enviar" class="default" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
          include "../footer.html";
         ?>
    </body>
</html>
