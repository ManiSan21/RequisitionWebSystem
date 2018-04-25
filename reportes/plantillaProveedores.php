<?php
    require("../fpdf181/fpdf.php");
    include "../conexion.php";

    class PDF extends FPDF
    {
        function Header()
        {
            $date = date('d/m/Y');     
            $this->Image('../img/logoDMChico.png', 5, 5, 30);
            $this->Ln(10);
            $this->SetFont('Arial', 'I', 30);
            $this->Cell(270,10,"D&M SOFTWARE", 0, 0, 'C');
            $this->Ln(15);
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(130, 10, "Reporte general de proveedores", 0, 0, 'C');       
            $this->Cell(50,10, $date, 0, 0, 'C');
            //$this->Ln(20);
            $this->SetY(15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0,10, utf8_decode('Página '.$this->PageNo().'/{nb}'), 0, 0,'R');

            $this->Ln(30);            
        }
    }
?>