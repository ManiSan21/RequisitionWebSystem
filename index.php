<?php
    $db = 'rws';
    $host = 'localhost:3308';
    $user = 'root';
    $pass = '';

    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $contrasenaUsuario;
    $nombreUsuario;

    $conexionSql = mysqli_connect($host, $user, $pass, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());      
    }

    $sql = "SELECT (NombreUsuario, Contrasena) FROM usuarios WHERE NombreUsuario=".$usuario." && Contrasena=".$password.";";

    $resultado = mysqli_query($conexionSql, $sql);

    while($row = mysqli_fetch_assoc($resultado))
    {
        $nombreUsuario = $row['NombreUsuario'];
        $contrasenaUsuario = $row['Contrasena'];
    }

    if($resultado != null)
    {
        header("menuPrincipal.html");//echo '<script language="javascript">alert("Usuario no existe. Regístrese como nuevo usuario")</script>';        
    }
    elseif($nombreUsuario != $usuario && $contrasenaUsuario != $password)
    {
        echo '<script language="javascript">alert("Nombre de usuario incorrecto o contraseña incorrectas")</script>';        
    }    
    /*else
    {
        
    }*/

    mysqli_close($conexionSql);
?>