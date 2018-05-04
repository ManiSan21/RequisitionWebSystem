<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de proveedores</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
</head>
<body>
    <?php
        include "../nav.html";
    ?>

    <table border="1">
        <tr>
            <th>IdProveedor</th>
            <th>Nombre</th>
            <th>Domicilio</th>
            <th>Colonia</th>
            <th>Estado</th>
            <th>Código postal</th>
            <th>Teléfono</th>
            <th>E-mail</th>
        </tr>
            <?php
                $db = 'u941474371_rws';
                $host = 'mysql.hostinger.mx';
                $user = 'u941474371_root';
                $pass = 'V5xOX0iAIW5j';

                $conexionSql = mysqli_connect($host, $user, $pass, $db);

                if(!$conexionSql)
                {
                    die("Error de conexión: ". mysqli_connect_error());
                }

                $sql = "SELECT * FROM proveedores";
                $result = mysqli_query($conexionSql, $sql);

                while($row = $result->fetch_assoc())//= mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['IdProveedor']."</td>";
                    echo "<td>".$row['Nombre']."</td>";
                    echo "<td>".$row['Domicilio']."</td>";
                    echo "<td>".$row['Colonia']."</td>";
                    echo "<td>".$row['Estado']."</td>";
                    echo "<td>".$row['CP']."</td>";
                    echo "<td>".$row['Telefono']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "</tr>";
                }

                mysqli_close($conexionSql);
            ?>
    </table>
    <?php
        include "../footer.html";
    ?>
</body>
</html>
