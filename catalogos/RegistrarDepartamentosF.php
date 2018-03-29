<!DOCTYPE html>
<html>
    <head>
        <title>Registro de departamentos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body style="background-color: #DEF5F5;">
        <?php
          include "../nav.php";
        ?>
        <div class="container">
            <form name="form1" action="RegistrarDepartamentos.php" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de registro de departamentos</h1></strong></caption>                
                <div class="form-group">
                    <label for="">IdDepartamento:</label>
                    <input class="form-control col-md-3" type="text" name="id" readonly placeholder="El id se provee automáticamente"/>
                    <label for="">Departamento:</label>
                    <input class="form-control" type="text" name="departamento" placeholder="Nombre del departamento" />
                </div>
                <div class="container">
                    <div class="form-group row">
                        <input type="reset" value="Limpiar" class="btn btn-danger" />  
                        <input type="submit" value="Enviar" class="btn btn-primary" />
                    </div>
                </div>
            <!--<input type="hidden" name="oculto" value="valorOculto" />
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
