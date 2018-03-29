<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Servicios</title>
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
            <form name="form1" action="RegistroServicios.php" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de registro de usuarios</h1></strong></caption> 
                <div class="form-group text-right">
                    <label for="">IdServicio:</label>
                    <input class="col-md-3 text-right" type="text" name="id" placeholder="El Id se obtiene automáticamente" readonly/>
                </div>
                <div class="form-group">
                    <label for="">Descripción:</label>
                    <input class="form-control" type="text" name="descripcion" placeholder="Descripción del servicio" />
                    <label for="">Fecha:</label>
                    <input class="form-control col-md-4" id="fecha" type="date" name="fecha" />
                </div>

                <hr>

                <div class="form-group">
                    <input type="reset" value="Limpiar" class="btn btn-danger" />
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                </div>
            <!--<input type="hidden" name="oculto" value="valorOculto" />
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
