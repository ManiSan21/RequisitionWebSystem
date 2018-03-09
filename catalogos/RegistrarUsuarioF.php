<!DOCTYPE html>
<html>
    <head>
        <title>Registro de usuarios</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <?php
          include "../nav.html";
         ?>
        <form name="form1" action="/recursosEnServidor" method="post">
            <input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de usuarios
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Usuario:
                    </td>
                    <td>
                        <input class="default" type="text" name="id"/>

                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Usuario:
                    </td>
                    <td>
                        <input class="default" type="text" name="usuario" placeholder="Escribir usuario" />

                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Contraseña:
                    </td>
                    <td>
                        <input class="default" type="password" name="password" placeholder="Escribir Contraseña"/>
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
        <<?php
          include "../footer.html";
         ?>
    </body>
</html>
