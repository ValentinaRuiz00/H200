<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF {
    function EditableCell($w, $h, $text, $border=0, $ln=0, $align='', $fill=false, $link='') {
        // Add a Unicode character with a zero-width space (zwnj) to make the cell editable
        $text = str_replace(' ', '&zwnj; ', $text);
        $this->Cell($w, $h, $text, $border, $ln, $align, $fill, $link);
    }
}

// Crear instancia de PDF
$pdf = new PDF();

// Agregar página
$pdf->AddPage();

// Configurar la fuente
$pdf->SetFont('Arial', 'B', 7);


$texto = "H2O CONTROL INGENIERIA S.A.S.";
$texto2 = "NIT 800240559-6";

$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100, 6, utf8_decode($texto) . "\n" . utf8_decode($texto2), 1, 0, 'C');
$pdf->Ln(10);





+





// Crear encabezados de columna
$pdf->EditableCell(20, 10, 'NOMBRE', 1);
$pdf->EditableCell(20, 10, 'CEDULA', 1);
$pdf->Ln(); // Añadir espacio entre encabezados y datos

// Llenar la tabla con datos
$datos = array(
    'LUZESDERYS',
    '1.845.200',
);  

$datos2 = array(
    'hola',
    'que',
);

// Organizar los datos debajo de las celdas correspondientes
foreach ($datos as $dato) {
    $pdf->EditableCell(20, 10, $dato, 1);
}
$pdf->Ln(); // Saltar a la siguiente fila después de completar una fila


foreach ($datos2 as $dato2) {
    $pdf->EditableCell(20, 10, $dato2, 1);
}
$pdf->Ln(); // Saltar a la siguiente fila después de completar una fila


// Salida del PDF
$pdf->Output();
?>

