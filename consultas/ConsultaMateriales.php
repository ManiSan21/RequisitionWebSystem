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
            <th>IdMaterial</th>
            <th>IdProveedor</th>
            <th>Nombre</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencias</th>
            <th>Precio</th>            
        </tr>    
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

                $sql = "SELECT * FROM materiales";
                $result = mysqli_query($conexionSql, $sql);

                while($row = $result->fetch_assoc())//= mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['IdMaterial']."</td>";
                    echo "<td>".$row['IdProveedor']."</td>";
                    echo "<td>".$row['Nombre']."</td>";
                    echo "<td>".$row['Maximo']."</td>";
                    echo "<td>".$row['Minimo']."</td>";
                    echo "<td>".$row['Existencias']."</td>";
                    echo "<td>".$row['Precio']."</td>";                        
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