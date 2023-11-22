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
<title>Detalle de Sueldo</title>

  <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 700px;
            border: 1px solid #000;
        }

        header,
        div,
        footer {
            text-align: center;
            padding: 10px;
            border: 1px solid #000;
        }

        div {
            margin-top: 10px;
        }

        .header-text2 {
          text-align: center;
          color: #000099;
          text-transform: none;
          font-style: italic;
          width: 50%;
          height: 50%;
        }

  </style>

</head>
<body>


  <table border="1">

  <thead>
    <tr>
        <th colspan="3">
            <h1>H20 CONTROL INGENIERIA S.A.S</h1>
            <p>NIT 800240559-6</p>
        </th>
    </tr>
  </thead>

  

  
  <tbody>
    <tr class="header-text2">
      <td colspan="3">
        <p>Nómina # 107 correspondiente al periodo del 01/09/2023 al 13/09/2023</p>
      </td>
    </tr>

    <tr>
      <td colspan="3">
        <p><b>NOMBRE TRABAJADOR:</b> LUZ ESDERYS MUNERA SANCHEZ</p>
        <p><b>IDENTIFICACION:</b> 43567710 <b>CARGO:</b> Analista administrativa </p>
      </td>
    </tr>

      <tr>
        <td>SUELDO BASICO</td>
        <td class="text-right">1.845.200</td>
        <td></td>
      </tr>
      <tr>
        <td>DIAS TRABAJADOS</td>
        <td class="text-right">15</td>
        <td></td>
      </tr>
      <tr>
        <td>DEVENGADO</td>
        <td class="text-right">922.600</td>
        <td></td>
      </tr>
      <tr>
        <td>INCAPACIDAD</td>
        <td class="text-right">0</td>
        <td></td>
      </tr>
      <tr>
        <td>HORAS EXTRAS</td>
        <td class="text-right">76.878</td>
        <td></td>
      </tr>
      <tr>
        <td>AUXILIO DE TRASNPORTE</td>
        <td class="text-right">70.303</td>
        <td></td>
      </tr>
      <tr>
        <td>RECARGO NOCTURNO</td>
        <td class="text-right">0</td>
        <td></td>
      </tr>
      <tr>
        <td>TURNOS EXTRAS</td>
        <td class="text-right">0</td>
        <td></td>
      </tr>
      <tr>
        <td>OTROS DEVENGADOS</td>
        <td class="text-right">0</td>
        <td></td>
      </tr>
      <tr>
        <td>TOTAL DEVENGADO </strong></td>
        <td class="text-right"><strong>1.069.781</strong></td>
        <td></td>
      </tr>
      <tr>
        <td>APORTES EPS</td>
        <td></td>
        <td class="text-right">39.979</td>
      </tr>
      <tr>
        <td>APORTES PENSION</td>
        <td></td>
        <td class="text-right">39.979</td>
      </tr>
      <tr>
        <td>RETENCION EN LA FUENTE</td>
        <td></td>
        <td class="text-right">0</td>
      </tr>
      <tr>
        <td>FONDO DE SOLIDARIDAD</td>
        <td></td>
        <td class="text-right">0</td>
      </tr>
      <tr>
        <td>PRESTAMOS</td>
        <td></td>
        <td class="text-right">0</td>
      </tr>
      <tr>
        <td>OTROS DESCUENTOS</td>
        <td></td>
        <td class="text-right">50.000</td>
      </tr>
      <tr>
        <td><strong>TOTAL DESCUENTOS</strong></td>
        <td></td>
        <td class="text-right"><strong>129.958</strong></td>
      </tr>
      <tr>
      <td><strong>NETO A PAGAR</strong></td>
      <td></td>
      <td class="text-right"><strong>939.823</strong></td>
    </tr>
    </tbody>



    <tfoot>
     <tr>
        <td colspan="3">
            <p>FIRMA DEL EMPLEADO</p><br>
            <p>C.C _________________________________________________________________________ </p>
        </td>
     </tr>
    </tfoot>
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