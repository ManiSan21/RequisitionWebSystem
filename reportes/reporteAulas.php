<?php
    include "plantillaAulas.php";
    include "../conexion.php";

    $sql = "SELECT * FROM aula";
    $result = mysqli_query($conexion, $sql);
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFillColor(0,191,255);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(30,6,utf8_decode('IdAula'), 1, 0, 'C', 1);
    $pdf->Cell(100,6,utf8_decode('Descripción'), 1, 1, 'C', 1);    

    $pdf->SetFont('Arial', '', 12);

    while($row = $result->fetch_assoc())
    {
        $pdf->Cell(30,6,$row['IdAula'], 1, 0, 'L');
        $pdf->Cell(100,6,utf8_decode($row['Descripcion']), 1, 1, 'L');        
    }

    $pdf->Output();
?>