<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
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
                        <input class="default" type="text" name="id" placeholder="El id se genera automáticamente" disabled/>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        IdDepartamento:
                    </td>
                    <td>
                        <select name="idDepartamento">
                            <option value="Ninguno" name="ninguno">Ninguno</option>
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

                                $sql = "SELECT IdDepartamento FROM departamentos;";

                                $filtro = mysqli_query($conexionSql, $sql);                                
                                while($row = mysqli_fetch_array($filtro))
                                {
                                    echo "<option value='".$row['IdDepartamento']."'>".$row['IdDepartamento']."</option>";      
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="oce-first">
                        Nombre de Usuario:
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
                        <select name="tipoUsuario">
                            <option value="Ninguno" name="ninguno">Ninguno</option>
                            <option value="ADMINISTRADOR" name="ADMINISTRADOR">ADMINISTRADOR</option>
                            <option value="JEFE DEPARTAMENTO MANTENIMIENTO" name="JEFE DEPARTAMENTO MANTENIMIENTO">JEFE DEPARTAMENTO MANTENIMIENTO</option>
                            <option value="USUARIO NORMAL" name="USUARIO NORMAL">USUARIO NORMAL</option>
                        </select>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>
                        <input type="reset" value="limpiar" class="default" />
                    </td>
                     <td>
                        <input type="submit" value="Enviar" name="Enviar" class="default" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
