<?php
    $db = 'rws';
    $host = 'localhost:3308';
    $user = 'root';
    $pass = '';

    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $contrasenaUsuario;
    $nombreUsuario;
    $tipoUsuario;

    $conexionSql = mysqli_connect($host, $user, $pass, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());      
    }

    $sql = "SELECT NombreUsuario, Contrasena, TipoUsuario FROM usuarios WHERE NombreUsuario='".$usuario."' && Contrasena='".$password."';";

    $resultado = mysqli_query($conexionSql, $sql);

    while($row = $resultado -> fetch_assoc())
    {
        $nombreUsuario = $row['NombreUsuario'];
        $contrasenaUsuario = $row['Contrasena'];
        $tipoUsuario = $row['TipoUsuario'];
    }

    if($nombreUsuario == $usuario && $contrasenaUsuario == $password)
    {
        if($tipoUsuario == "ADMINISTRADOR")
        {
            header("Location: index.html");
        }
        elseif($tipoUsuario == "NORMAL")
        {
            header("Location: indexNormal.html");
        }
    }
    elseif($nombreUsuario == null && $contrasenaUsuario == null)
    {
        echo '<script language="javascript">alert("Usuario no existe. Regístrese como nuevo usuario")</script>';        
    }
    elseif($nombreUsuario != $usuario && $contrasenaUsuario != $password)
    {
        echo '<script language="javascript">alert("Nombre de usuario incorrecto o contraseña incorrecta")</script>';        
    }    
    /*else
    {
        
    }*/

    mysqli_close($conexionSql);
?>