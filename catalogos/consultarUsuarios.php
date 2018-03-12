<?php
	require_once '../conexion.php';
	$result;

	// Create the query
	$sql = 'SELECT * FROM departamentos';
	// Create the query and asign the result to a variable call $result
	$result = mysqli_query($conexion, $sql);
	// Extract the values from $result

	// Since the values are an associative array we use foreach to extract the values from $rows
 ?>
 <!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="UTF-8" />
      <title>Query data sending an ID</title>
      <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css" />
      <link rel="stylesheet" type="text/css" href="../css/estilos.css" />

	</head>
    <body>
      <?php
        include "../nav.html";
       ?>
    	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
		<?php
			while ($row = mysqli_fetch_row($result)) {
		?>
			<tr>
				<td><a href="searchEmployee.php?id=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
				<td><?php echo $row[1]; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
  <?php 
    include "../footer.html";
   ?>
</body>
</html>
