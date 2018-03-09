<!DOCTYPE html>
<html>
    <head>
        <title>My example aplication</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
</html>

<?php
    $db = 'rws';
    $host = 'localhost:3308';
    $user = 'root';
    $pass = '';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];        

    if(isset($_POST['Enviar']))
    {
        $departamento = $_POST['idDepartamento']; 
        $tipoUsuario = $_POST['tipoUsuario'];
    }

    $conexionSql = mysqli_connect($host, $user, $pass, $db);

    if(!$conexionSql)
    {
        die("Error de conexión: ". mysqli_connect_error());      
    }

    $sql = "INSERT INTO usuarios(IdDepartamento, NombreUsuario, Contrasena, TipoUsuario) VALUES('$departamento', '$usuario', '$password', '$tipoUsuario')";

    if(mysqli_query($conexionSql, $sql))
    {
        echo '<script language="javascript">alert("Usuario registrado exitosamente")</script>';        
    }
    else
    {
        echo '<script language="javascript">alert("Error al insertar")</script>';
    }

    mysqli_close($conexionSql);
?>