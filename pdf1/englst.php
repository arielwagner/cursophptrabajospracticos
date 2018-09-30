<?php 

include 'PDF.php';

$pdf=new PDF();
// Titulos de las columnas
$header=array('Pais', 'Capital', 'Superficie (Km2)', 'Pobl. (miles)');
// Carga de datos...
$data=$pdf->loadData('paises.csv');
$pdf->SetFont('Arial', '', 10);
$pdf->AddPage();
$pdf->SetTitle('Estadisticas de los Paises');
$pdf->basicTable($header, $data);
$pdf->AddPage();
$pdf->improvedTable($header, $data);
$pdf->AddPage();
$pdf->fancyTable($header, $data);
$pdf->OutPut();

?>