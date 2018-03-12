<!DOCTYPE html>
<html>
    <head>
        <title>Registro de aulas</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    </head>
    <body>
        <?php
          include "../nav.html";
          if(!@$_POST['aula'])
         ?>
        <form name="form1" action="RegistrarAulas.php" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de usuarios
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Aula:
                    </td>
                    <td>
                        <input class="default" type="text" name="id"/>

                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Aula:
                    </td>
                    <td>
                        <input class="default" type="text" name="aula" placeholder="Número de aula" />

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
            <?php
              include "../footer.html";
             ?>
        </form>
    </body>
</html>
