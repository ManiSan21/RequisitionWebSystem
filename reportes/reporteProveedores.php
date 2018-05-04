<?php
    include "plantillaProveedores.php";
    include "../conexion.php";

    $sql = "SELECT * FROM proveedores";
    $result = mysqli_query($conexion, $sql);
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L');

    $pdf->SetFillColor(0,191,255);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(30,6,utf8_decode('IdProveedor'), 1, 0, 'C', 1);
    $pdf->Cell(60,6,'Nombre', 1, 0, 'C', 1);    
    $pdf->Cell(40,6,utf8_decode('Domicilio'), 1, 0, 'C', 1);
    $pdf->Cell(25,6,utf8_decode('Colonia'), 1, 0, 'C', 1);
    $pdf->Cell(25,6,'Estado', 1, 0, 'C', 1);    
    $pdf->Cell(15,6,utf8_decode('CP'), 1, 0, 'C', 1);
    $pdf->Cell(30,6,utf8_decode('Télefono'), 1, 0, 'C', 1);
    $pdf->Cell(60,6,utf8_decode('E-mail'), 1, 1, 'C', 1);

    $pdf->SetFont('Arial', '', 12);

    while($row = $result->fetch_assoc())
    {
        $pdf->Cell(30,6,$row['IdProveedor'], 1, 0, 'L');
        $pdf->Cell(60,6,utf8_decode($row['Nombre']), 1, 0, 'L');        
        $pdf->Cell(40,6,$row['Domicilio'], 1, 0, 'L');
        $pdf->Cell(25,6,utf8_decode($row['Colonia']), 1, 0, 'L');
        $pdf->Cell(25,6,$row['Estado'], 1, 0, 'L');   
        $pdf->Cell(15,6,utf8_decode($row['CP']), 1, 0, 'L');  
        $pdf->Cell(30,6,$row['Telefono'], 1, 0, 'L');            
        $pdf->Cell(60,6,utf8_decode($row['Email']), 1, 1, 'L');    
    }

    $pdf->Output();
?>