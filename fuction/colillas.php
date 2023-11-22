<?php


// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('DOCUMENTO HECHO CON DOM PDF

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    h2 {
      color: #333;
    }

    /* Nueva clase para alinear a la derecha */
    .text-right {
      text-align: right;
    }
  </style>
  <title>Detalle de Sueldo</title>
</head>
<body>

  <h2>Detalle de Sueldo</h2>

  <table>
    <thead>
      <tr>
        <th>Concepto</th>
        <th>Debe</th>
        <th>Haber</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sueldo Básico</td>
        <td class="text-right">$2,000.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Días Trabajados</td>
        <td class="text-right">30</td>
        <td></td>
      </tr>
      <tr>
        <td>Devengado</td>
        <td class="text-right">$2,000.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Incapacidad</td>
        <td class="text-right">-$50.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Horas Extras</td>
        <td class="text-right">$100.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Auxilio de Transporte</td>
        <td class="text-right">$50.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Recargo Nocturno</td>
        <td class="text-right">$20.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Turnos Extras</td>
        <td class="text-right">$30.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Otros Devengados</td>
        <td class="text-right">$40.00</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Devengado</td>
        <td class="text-right"><strong>$2,200.00</strong></td>
        <td></td>
      </tr>
      <tr>
        <td>Aportes EPS</td>
        <td></td>
        <td class="text-right">-$30.00</td>
      </tr>
      <tr>
        <td>Aportes Pensión</td>
        <td></td>
        <td class="text-right">-$50.00</td>
      </tr>
      <tr>
        <td>Retención en la Fuente</td>
        <td></td>
        <td class="text-right">-$20.00</td>
      </tr>
      <tr>
        <td>Fondo de Solidaridad</td>
        <td></td>
        <td class="text-right">-$10.00</td>
      </tr>
      <tr>
        <td>Prestamos</td>
        <td></td>
        <td class="text-right">-$15.00</td>
      </tr>
      <tr>
        <td>Otros Descuentos</td>
        <td></td>
        <td class="text-right">-$5.00</td>
      </tr>
      <tr>
        <td><strong>Total a Pagar</strong></td>
        <td></td>
        <td class="text-right"><strong>$2,100.00</strong></td>
      </tr>
    </tbody>
  </table>

</body>
</html>

');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'frame');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>