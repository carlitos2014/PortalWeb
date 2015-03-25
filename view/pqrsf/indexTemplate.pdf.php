<?php

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,$mensaje);
//$pdf->Output();
//


use mvc\routing\routingClass as routing;
use mvc\i18n\i18nClass as i18n;

class PDF extends FPDF {

// Cabecera de página
    function Header() {
        // Logo
        $this->Image(routing::getInstance()->getUrlImg('log.png'), 10, 1, 20);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(90, 10, 'Reporte de PQRSF', 1, 0, 'C');
        // Salto de línea
        $this->Ln(30);
    }

// Pie de página
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

// Creación del objeto de la clase heredada


$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);

//$pdf->Cell(40, 10, 'ID ', 1);
//$pdf->Ln();
$pdf->Cell(50, 10, i18n::__('feedbackType'), 1);
//
$pdf->Cell(50,10, i18n::__('title'),1);
////$pdf->Ln();
//
//
$pdf->Cell(30,10, i18n::__('user_id'),1);
////$pdf->Ln();
//
//
//$pdf->Cell(55,10, 'USUARIO',1);
$pdf->Ln();
foreach ($objPqrsfReport as $data) {



    //$pdf->Cell(40, 10, utf8_decode($data->id), 1);
//$pdf->Ln();
    $pdf->Cell(50, 10, utf8_decode($data->tipo_pqrs_id), 1);
//
$pdf->Cell(50,10,  utf8_decode($data->titulo),1);
//
$pdf->Cell(30,10,  utf8_decode($data->usuario_id),1);
//
//$pdf->Cell(55,10,  utf8_decode($data->usuario_id),1);

    $pdf->Ln();
}



$pdf->Output();


