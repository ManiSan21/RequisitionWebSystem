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
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>

        <script>
            function cargarDatos(str){
                if(str == ""){
                    document.getElementById("datos").innerHTML = "";                    
                    return;
                } else{
                    if(window.XMLHttpRequest){
                        xmlhttp = new XMLHttpRequest();
                    } else{
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById("datos").innerHTML = this.responseText;                            
                        }
                    };
                    xmlhttp.open("GET","datosAula.php?q="+str,true);
                    xmlhttp.send();
                }
            }            
        </script>
    </head>
    <body style="background-color: #DEF5F5;">
        <?php        
            include "../nav.php";

            include "../conexion.php";

            $sql = "SELECT IdUsuario FROM usuarios WHERE NombreUsuario = '".$_SESSION['usuario']."'";
            $result = mysqli_query($conexion, $sql);

            while($row = $result->fetch_assoc())
            {
                $_SESSION['idUsuario'] = $row['IdUsuario'];
            }
            mysqli_close($conexion);            
        ?>

        <div class="container">
            <form name="form1" id="form1" action="" method="POST">
                <caption><strong><h1 class="text-center text-primary">Formulario de solicitud de servicios</h1></strong></caption>            
                <div class="form-group text-right">
                    <label for="" class="text-right">IdSolicitud:</label>
                    <input type="text" class="col-md-3 text-right" name="id" placeholder="El ID se obtiene de forma automática" readonly>                    
                </div>
                <div class="form-group text-right">
                    <label for="" class="text-right">IdUsuario:</label>
                    <input type="text" class="col-md-3 text-right" name="idUsuario" value="<?php print($_SESSION['idUsuario']); ?>" readonly>
                </div>
                <div class="form-group text-right">
                    <label for="" class="col-md-2 text-right">Fecha:</label>
                    <input type="date" class="col-md-2 text-right" name="fecha">
                </div>
                <div class="form-group">
                    <label for="">IdAula:</label>
                    <select name="aula" id="aula" class="form-control col-md-3 text-right" onchange="cargarDatos(this.value)">
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
                </div>
                <div class="form-group row" id="datos">
                    <b>Descripción del aula:</b>                    
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Descripción del servicio:</label>
                    <input type="text" name="descripcionServicio" id="descripcionServicio" class="form-control">
                </div>
                
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
    
    <script>
        $(document).ready(function()
        {
            $('#form1').submit(function()
            {
                $.ajax({
                    url: 'RegistroSolicitud.php',
                    type: 'POST',
                    dataType: 'html',
                    data: $(this).serialize(),
                    success: function(newContent)
                    {
                        alert("Solicitud registrada exitosamente");
                    }
                });
                return false;
            });
        });
    </script>
</html>