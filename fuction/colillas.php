<?php
require('../fpdf/fpdf.php'); // Ajusta la ruta según la estructura de tu proyecto

class PDF extends FPDF
{
    // Encabezado de página
    function Header()
    {
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'Este es el encabezado de la tabla',0,1,'C');
    }

    // Pie de página
    function Footer()
    {
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'Este es el encabezado de la tabla',0,1,'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);


$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();
$pdf->Cell(40,10,'Celda1 ',1);
$pdf->Cell(40,10,'Celda2 ',1);
$pdf->Cell(40,10,'Celda3 ',1);
$pdf->Ln();




$pdf->Output();
?>
