<?php
    include "plantillaSolicitudesPen.php";
    include "../conexion.php";

    $sql = "SELECT * FROM solicitudesservicios WHERE Estado = 'PENDIENTE'";
    $result = mysqli_query($conexion, $sql);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L');

    $pdf->SetFillColor(0,191,255);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(30,6,'IdSolicitud', 1, 0, 'C', 1);
    $pdf->Cell(30,6,'IDUsuario', 1, 0, 'C', 1);
    $pdf->Cell(20,6,'Id Aula', 1, 0, 'C', 1);
    $pdf->Cell(100,6,utf8_decode('Descripción'), 1, 0, 'C', 1);
    $pdf->Cell(30,6,'Fecha', 1, 0, 'C', 1);
    $pdf->Cell(70,6,'Estado', 1, 1, 'C', 1);

    $pdf->SetFont('Arial', '', 12);

    while($row = $result->fetch_assoc())
    {
        $pdf->Cell(30,6,$row['IdSolicitud'], 1, 0, 'L');
        $pdf->Cell(30,6,$row['IdUsuario'], 1, 0, 'L');
        $pdf->Cell(20,6,$row['IdAula'], 1, 0, 'L');
        $pdf->Cell(100,6,utf8_decode($row['Descripcion']), 1, 0, 'L');
        $pdf->Cell(30,6,$row['Fecha'], 1, 0, 'L');
        $pdf->Cell(70,6,$row['Estado'], 1, 1, 'L');
    }

    $pdf->Output();
?>