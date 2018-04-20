<?php
    require("../fpdf181/fpdf.php");
    include "../conexion.php";

    class PDF extends FPDF
    {
        function Header()
        {
            $this->Image('../img/logoRWS.png', 5, 5, 30);
            $this->Ln(30);
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(100, 10, "Reporte general de Solicitudes de servicios", 0, 0, 'C');            

            $this->Ln(20);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0,10, 'Página '.$this->PageNo().'/{nb}', 0, 0,'C');
        }
    }
?>