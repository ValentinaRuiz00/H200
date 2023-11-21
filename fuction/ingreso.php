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
    $pdf = new FPDF('P', 'mm', 'Letter');
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);
    // Obtener el ancho de la página
    $anchoPagina = $pdf->GetPageWidth();
    // Obtener el ancho de la imagen
    $anchoImagen = 30;
    $anchoImagen2 = 70;

    // Definir las variables $x, $y, $width, $height
    $x = 50; // ajusta según tus necesidades
    $y = 50; // ajusta según tus necesidades
    $width = 100; // ajusta según tus necesidades
    $height = 100; // ajusta según tus necesidades

    // Agregar marca de agua
    $pdf->Image('../img/MA.png', $x, $y, $width, $height);
    $pdf->SetY(0);

    // Calcular la posición X centrada
    $posicionX = ($anchoPagina - $anchoImagen) / 1.2;
    // Insertar la imagen del logo
    $pdf->Image('../img/logo.png', $posicionX, 5, $anchoImagen, 0);

    //Centrar titulo
    // Obtener el ancho del texto
    $textWidth = $pdf->GetStringWidth("\nCERTIFICADO LABORAL\n\n");

    // Calcular la posición X para centrar el texto
    $xPosition = ($anchoPagina - $textWidth) / 2;

   
    // Generar contenido del certificado
    $fecha = "Sabaneta, 09 de noviembre de 2023";
    $cedula = $cedula_ingresada;
    $nombre = $fila['nombre'];
    $fechaing = $fila['fecha'];
    $cargo = $fila['cargo'];

    // Agregar contenido al PDF
    $pdf->Write(70, utf8_decode("$fecha"));

    // Establecer la posición X para centrar el texto
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetX($xPosition);
    $pdf->Cell($textWidth, 115, "\nCERTIFICADO LABORAL\n\n", 0, 1, 'C');

    $pdf->SetY($pdf->GetY() - 43);
    
    $pdf->SetFont('Arial', '', 12);

    $texto = utf8_decode("Por medio de la presente, la empresa H2O CONTROL INGENIERÍA S.A.S, identificada
    con el NIT 800.240.559-6, se permite certificar que la señora $nombre, identificado/a con cédula $cedula, 
    trabaja para la empresa a partir del $fechaing, con contrato Indefinido y salario mensual de $1.845.200
    desempeñando el cargo de $cargo.\nSe expide este certificado a solicitud del empleado. Para más información puede
    comunicarse al (604) 6074981 – 3146451208 – 3183890548.\n");

    // Función personalizada para justificar texto
    function justificarTexto($pdf, $texto, $ancho, $alturaLinea) {
    $palabras = explode(" ", $texto);
    $linea = "";
    foreach ($palabras as $palabra) {
        if ($pdf->GetStringWidth($linea . $palabra) > $ancho) {
            $pdf->Cell($ancho, $alturaLinea, $linea, 0, 1, 'J');
            $linea = $palabra . " ";
        } else {
            $linea .= $palabra . " ";
        }
    }
    $pdf->Cell($ancho, $alturaLinea, $linea, 0, 1, 'J');
    }

    // Definir el ancho y altura deseados
    $anchoDeseado = 180; // Ajusta según tus necesidades
    $alturaDeseada = 5;  // Ajusta según tus necesidades

    // Llamar a la función personalizada para justificar el texto
    justificarTexto($pdf, $texto, $anchoDeseado, $alturaDeseada);

    $pdf->Ln();
    $pdf->Ln();


    $pdf->MultiCell(0, 5, utf8_decode("Atentamente,\n\n"));
    $pdf->Image('../img/Firma.png');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Write(20, utf8_decode("JAQUELINE BARRAGAN ROMERO\n"));    
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 5, utf8_decode("Directora Administrativa"));
    $pdf->MultiCell(0, 5, utf8_decode("H2OControl IngenieriaSAS"));

    // Descargar el PDF generado
    $pdf->Output('certificado_ingreso.pdf', 'D');
} else {
    // La cédula no coincide
    echo '<script>';
    echo 'alert("La cédula no fue encontrada en la base de datos.");';
    echo 'window.location.href = "../certificates/cert_ingreso.php";'; // Puedes redirigir a otra página si lo deseas
    echo '</script>';
    exit(); // Detener la ejecución del script para evitar la generación del PDF
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
