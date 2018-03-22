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
          include "../nav.php";
         ?>
        <form name="form1" action="RegistroUsuarios.php" method="post">
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
                            <?php
                                $db = 'rws';
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

                                mysqli_close($conexionSql);
                            ?>
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
            </table>
        </form>
        <<?php
          include "../footer.html";
         ?>
    </body>
</html>
