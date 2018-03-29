<!DOCTYPE html>
<html>
    <head>
        <title>Registro de usuarios</title>
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
            <form name="form1" action="RegistroUsuarios.php" method="post">
                <caption><strong><h1 class="text-center text-primary">Formulario de registro de usuarios</h1></strong></caption> 
                <div class="form-group">
                    <label for="">IdUsuario:</label>
                    <input class="form-control col-md-3" type="text" name="id" placeholder="El id se asigna de forma automática." disabled/>
                    <label for="">Departamento:</label>
                    <select class="form-control col-md-4" name="departamentos" id="departamento">
                        <option value="seleccionarDepartamento">Seleccionar departamento:</option>
                        <?php
                            include "../conexion.php";

                            $sql = "SELECT IdDepartamento FROM departamentos";
                            $result = mysqli_query($conexion, $sql);

                            while($row = $result->fetch_assoc())
                            {
                                echo "<option value='".$row['IdDepartamento']."'>".$row['IdDepartamento']."</option>";
                            }

                            mysqli_close($conexionSql);
                        ?>
                    </select>
                    <label for="">Nombre de Usuario:</label>
                    <input class="form-control" type="text" name="usuario" placeholder="Escribir nombre de usuario" />
                    <label for="">Contraseña:</label>
                    <input class="form-control col-md-4" type="password" name="password" placeholder="Escribir Contraseña"/>
                    <label for="">Tipo de usuario:</label>
                    <select class="form-control col-md-4" name="tipoUsuario" id="tipoUsuario">
                        <option value="seleccionarTipo">Seleccione tipo:</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <option value="NORMAL">NORMAL</option>
                        <option value="JEFE SERVICIOS">JEFE DEPARTAMENTO SERVICIOS</option>
                    </select>
                    <hr>                    
                </div>
                <div class="form-group row">
                    <input type="reset" value="Limpiar" class="btn btn-danger" />
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
                </div>
            <!--<input type="hidden" name="oculto" value="valorOculto" />
            <table width="200" id="one-column-emphasis">
                <caption>
                    Formulario de registro de usuarios
                </caption>
                <tr>
                    <td class="oce-first">
                        Id Usuario:
                    </td>
                    <td>
                        <input class="default" type="text" name="id" placeholder="El id se asigna de forma automática." disabled/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Departamento:                    
                    </td>
                    <td>
                        <select name="departamentos" id="departamento">
                            <option value="seleccionarDepartamento">Seleccionar departamento:</option>
                            
                                /*$db = 'rws';
                                $host = 'localhost:3308';
                                $user = 'root';
                                $pass = '';

                                $conexionSql = mysqli_connect($host, $user, $pass, $db);
                                
                                if(!$conexionSql)
                                {
                                    die("Error de conexión: ". mysqli_connect_error());      
                                }

                                $sql = "SELECT IdDepartamento FROM departamentos";
                                $result = mysqli_query($conexionSql, $sql);

                                while($row = $result->fetch_assoc())//= mysqli_fetch_row($result))
                                {
                                    echo "<option value='".$row['IdDepartamento']."'>".$row['IdDepartamento']."</option>";
                                }

                                mysqli_close($conexionSql);*/
                        
                        </select>
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
                <tr>
                    <td class="oce-first">
                        Tipo de usuario:
                    </td>
                    <td>
                        <select name="tipoUsuario" id="tipoUsuario">
                            <option value="seleccionarTipo">Seleccione tipo:</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                            <option value="NORMAL">NORMAL</option>
                            <option value="JEFE SERVICIOS">JEFE DEPARTAMENTO SERVICIOS</option>
                        </select>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>
                        <input type="reset" value="limpiar" class="default" />
                    </td>
                     <td>
                        <input type="submit" name="Enviar" value="enviar" class="default" />
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
