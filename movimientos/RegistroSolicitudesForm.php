<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro de solicitudes de servicio</title>

        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body style="background-color: #DEF5F5;">
        <?php
            include "../nav.php";
        ?>

        <div class="container">
            <form name="form1" action="" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de solicitud de servicios</h1></strong></caption>            
                <div class="form-group text-right">
                    <label for="" class="text-right">IdSolicitud:</label>
                    <input type="text" class="col-md-3 text-right" name="id" placeholder="El ID se obtiene de forma automática" readonly>                    
                </div>
                <div class="form-group text-right">
                    <label for="" class="text-right">IdUsuario:</label>
                    <input type="text" class="col-md-3 text-right" name="idUsuario" placeholder="El ID se obtiene de forma automática" readonly>
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Fecha:</label>
                    <input type="date" class="col-md-2 text-right" name="fecha">
                </div>
                <div class="form-group">
                    <label for="">IdAula:</label>
                    <select name="aula" id="aula" class="form-control col-md-3 text-right">
                        <option value="Ninguno">Seleccione una aula</option>
                        <?php
                            include "../conexion.php";

                            $sql = "SELECT IdAula FROM aula";
                            $result = mysqli_query($conexion, $sql);

                            while($row = $result->fetch_assoc())
                            {
                                echo "<option value'".$row['IdAula']."'>".$row['IdAula']."</option>";
                            }

                            mysqli_close($conexion);
                        ?>
                    </select>
                    <label for="">Descripción del aula:</label>
                    <input type="text" name="descripcion" id="descripcion" readonly class="form-control">
                    <hr>
                    <label for="">Descripción del servicio:</label>
                    <input type="text" name="descripcionServicio" id="descripcionServicio" readonly class="form-control">
                </div>
                <hr>
                
                <div class="form-group">
                    <input type="reset" value="Limpiar" class="btn btn-danger" />
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                </div>
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