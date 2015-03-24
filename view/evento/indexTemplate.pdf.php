<?php


use mvc\routing\routingClass as routing;

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image(routing::getInstance()->getUrlImg('Logo.png'),10,1,40);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(90,10,'Reporte de eventos registrados',1,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada


$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,10,'ID',1);
//$pdf->Ln();
$pdf->Cell(40,10,'Nombre ',1);

$pdf->Cell(30,10, 'Categoria',1);
//$pdf->Ln();


$pdf->Cell(20,10, 'Costo',1);
//$pdf->Ln();


$pdf->Cell(55,10, 'Fecha Inicial',1);
$pdf->Ln();
foreach ($objEvento as $data){



$pdf->Cell(30,10,  utf8_decode($data->id),1);
//$pdf->Ln();
$pdf->Cell(40,10,  utf8_decode($data->nombre),1);

$pdf->Cell(30,10,  utf8_decode($data->categoria_id),1);

$pdf->Cell(20,10,  utf8_decode($data->costo),1);

$pdf->Cell(55,10,  utf8_decode($data->fecha_inicial_evento),1);

$pdf->Ln();
}



$pdf->Output();
