<?php
    include "plantillaMateriales.php";
    include "../conexion.php";

    $sql = "SELECT * FROM materiales";
    $result = mysqli_query($conexion, $sql);
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L');

    $pdf->SetFillColor(0,191,255);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(30,6,utf8_decode('IdMaterial'), 1, 0, 'C', 1);
    $pdf->Cell(100,6,'Nombre', 1, 0, 'C', 1);    
    $pdf->Cell(30,6,utf8_decode('Máximo'), 1, 0, 'C', 1);
    $pdf->Cell(30,6,utf8_decode('Mínimo'), 1, 0, 'C', 1);
    $pdf->Cell(30,6,'Existencias', 1, 0, 'C', 1);    
    $pdf->Cell(30,6,'Precio', 1, 1, 'C', 1);

    $pdf->SetFont('Arial', '', 12);

    while($row = $result->fetch_assoc())
    {
        $pdf->Cell(30,6,$row['IdMaterial'], 1, 0, 'L');
        $pdf->Cell(100,6,$row['Nombre'], 1, 0, 'L');        
        $pdf->Cell(30,6,$row['Maximo'], 1, 0, 'L');
        $pdf->Cell(30,6,utf8_decode($row['Minimo']), 1, 0, 'L');
        $pdf->Cell(30,6,$row['Existencias'], 1, 0, 'L');   
        $pdf->Cell(30,6,$row['Precio'], 1, 1, 'L');   
    }

    $pdf->Output();
?>