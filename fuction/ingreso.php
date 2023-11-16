<?php
require('../fpdf/fpdf.php'); // Ajusta la ruta según la estructura de tu proyecto

$conexion = mysqli_connect("localhost", "root", "", "h2o");

// Obtener la cédula del formulario
$cedula_ingresada = $_POST['dni'];

// Consulta SQL para obtener información basada en la cédula
$consulta = "SELECT * FROM personas WHERE cedula = '$cedula_ingresada'";
$resultado = mysqli_query($conexion, $consulta);

// Verificación y generación del PDF
if ($fila = mysqli_fetch_assoc($resultado)) {
    // Crear instancia de FPDF
    $pdf = new PDFWithAlpha();
    $pdf->AddPage();

// Obtener el ancho de la página
$anchoPagina = $pdf->GetPageWidth();
// Obtener el ancho de la imagen
$anchoImagen = 30;
$anchoImagen2=70;

// Calcular la posición X centrada
$posicionX = ($anchoPagina - $anchoImagen) / 1.2;
// Insertar la imagen del logo
$pdf->Image ('../img/logo.png', $posicionX, 5, $anchoImagen, 0);

// // Calcular la posición X centrada para la segunda imagen (marca de agua)
// $posicionX2 = ($anchoPagina - $anchoImagen2) / 2;
// // Insertar la imagen centrada como marca de agua
// $pdf->Image('../img/logo.png', $posicionX2, 60, $anchoImagen2, 0, '', '', '', false, 300, '', false, false, 0, 0, 0, 50);

// Definir las variables $x, $y, $width, $height
$x = 50; // ajusta según tus necesidades
$y = 50; // ajusta según tus necesidades
$width = 100; // ajusta según tus necesidades
$height = 100; // ajusta según tus necesidades

// Agregar marca de agua
$pdf->SetAlpha(0.5); // Establecer transparencia
$pdf->Image('../img/logo.png', $x, $y, $width, $height);
// $pdf->SetAlpha(1);


    // Generar contenido del certificado
    $fecha = "Sabaneta, 09 de noviembre de 2023";
    $empresa = "H2O CONTROL INGENIERIA S.A.S";
    $nit = $cedula_ingresada;
    $nombre = "LUZ ESDERYS MUNERA SANCHEZ";
    $fecha_contrato = "16/12/2019";
    $tipo_contrato = "Indefinido";
    $salario = "$1.845.200";
    $cargo = "Analista administrativa";
    $telefonos = "(604) 6074981 – 3146451208 – 3183890548";
    
    // Agregar contenido al PDF
    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(30, "$fecha\n\nCERTIFICADO LABORAL\n\n");
    $pdf->Write(30, "Por medio de la presente, la empresa $empresa, identificada con el NIT $nit,\n");
 

    // Descargar el PDF generado
    $pdf->Output('certificado_ingreso.pdf', 'D');
} else {
    // La cédula no coincide
    echo '<script>';
    echo 'alert("La cédula no fue encontrada en la base de datos.");';
    echo '</script>';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
