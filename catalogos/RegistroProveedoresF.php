<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Proveedores</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body style="background-color: #DEF5F5;">
        <?php
          include "../nav.php";
        ?>
        <div class="container">
            <form name="form1" action="RegistroProveedores.php" method="post">
            <caption><strong><h1 class="text-center text-primary">Formulario de registro de departamentos</h1></strong></caption>                
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">IdProveedor:</label>
                    <input class="col-md-3" type="text" name="id" readonly placeholder="El id se genera automáticamente."/>                    
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Nombre:</label>
                    <input class="col-md-5" type="text" name="nombre" placeholder="Nombre del proveedor" />                     
                </div>
                <hr>
                <div class="form-group row">
                    <label for="">Domicilio:</label>                      
                    <input class="form-control col-md-5" type="text" name="domicilio" placeholder="Domicilio del proveedor"/>
                    <label for="">Colonia:</label>
                    <input class="form-control col-md-4" type="text" name="colonia" placeholder="Colonia del proveedor"/>                    
                </div>
                <div class="form-group">
                    <label for="">Estado:</label>
                    <input class="form-control col-md-4" type="text" name="estado" placeholder="Estado del proveedor"/>
                    <label for="">Código postal:</label>
                    <input class="form-control col-md-2" type="text" name="cp" placeholder="CP del proveedor"/>                    
                </div>
                <div class="form-group row">
                    <label for="">Teléfono:</label>
                    <input class="form-control col-md-3" type="text" name="telefono" placeholder="Teléfono del proveedor"/>                    
                    <label for="">E-mail:</label>
                    <input class="form-control col-md-4" type="text" name="email" placeholder="E-mail del proveedor"/>
                </div>
                <hr>
                <div class="form-group row text-center">
                    <input type="reset" value="Limpiar" class="btn btn-danger" />
                    <input type="submit" value="Enviar" class="btn btn-primary" />
                </div>
            <!--<input type="hidden" name="oculto" value="valorOculto" />
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
