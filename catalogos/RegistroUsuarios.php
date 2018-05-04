<?php
    $db = 'u941474371_rws';
    $host = 'mysql.hostinger.mx';
    $user = 'u941474371_root';
    $pass = 'V5xOX0iAIW5j';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if(isset($_POST['Enviar']))
    {
        $departamento = $_POST['departamentos'];
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
