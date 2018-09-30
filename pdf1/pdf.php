<?php
/*
	Clase para Tratar archivos PDF con Tablas.
	Hereda los atributos y las propiedades de
	la clase FPDF ~ El archivo de la clase se
	llama fpdf.inc El nombre de esta clase es
	pdf.inc
*/
require_once 'fonts/fpdf.php';

class PDF extends FPDF {
	// Operaciones...
	// Retornar número de páginas...
    function getPagesPerPage() {
    	return $this->page;
    }

	// Coloca la firma en el encabezado...
	function setHeader() {
        $this->aboutMe(10, 5);
	}

	// Coloca el número de página en el pie...
	function setFooter() {
		$this->Line(10, 176 + 1, 200, 176 + 1);
        $this->Text(10, 180, "Página " . $this->getPagesPerPage() .
        " - Estadísticas de Población UE");
	}

	// Cargar los datos...
	function loadData($file) {
		// Leer las líneas del archivo
		$lines = file($file);
		$data=array();
		foreach($lines as $line) {
			$data[]=explode(';', chop($line));
		}
		return $data;
	}

	// Tabla simple
	function basicTable($header, $data) {
       // Cabecera
       foreach($header as $col)
       	$this->Cell(40, 6, $col, 1);
       	$this->Ln();
       	// Datos
       	foreach($data as $row) {
       		// Dando formato por cada Campo...
            $this->Cell(40, 6, $row[0], 1);
            $this->Cell(40, 6, $row[1], 1);
            $this->Cell(40, 6, number_format($row[2], 2, ',', '.'), 1);
            $this->Cell(40, 6, number_format($row[3], 2, ',', '.'), 1);
            $this->Ln();
       	}
       	$this->setHeader();
        $this->setFooter();
	}

	// Una table más completa
	function improvedTable($header, $data) {
		// Anchuras de las columnas
		$w=array(40, 35, 40, 45);
		// Cabeceras
		for($i=0; $i<=count($header)-1; $i++) {
		$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
		}
		$this->Ln();
        // Datos
        foreach($data as $row) {
        	$this->Cell($w[0], 6, $row[0], 'LR');
        	$this->Cell($w[1], 6, $row[1], 'LR');
        	$this->Cell($w[2], 6, number_format($row[2], 2, ',', '.'), 'LR', 0, 'R');
        	$this->Cell($w[3], 6, number_format($row[3], 2, ',', '.'), 'LR', 0, 'R');
        	$this->Ln();
        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
        $this->setHeader();
		$this->setFooter();
	}

	// Tabla coloreada
	function fancyTable($header, $data) {
  		// Colorea, ancho de línea y fuente en negrita
  		$this->SetFillColor(255, 0, 0);
  		$this->SetTextColor(255);
  		$this->SetDrawColor(128, 0, 0);
  		$this->SetLineWidth(.3);
  		$this->SetFont('', 'B');
  		// Cabecera
  		$w=array(40, 35, 40, 45);
  		for($i=0; $i<=count($header)-1; $i++)
  		$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C', 1);
  		$this->Ln();
  		// Restauración de colores y fuentes
  		$this->SetFillColor(224, 235, 255);
  		$this->SetTextColor(0);
  		$this->SetFont('');
  		// Datos
  		$fill=false;
  		foreach($data as $row) {
  			$this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
  			$this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
  			$this->Cell($w[2], 6, number_format($row[2], 2, ',', '.'), 'LR', 0, 'R', $fill);
  			$this->Cell($w[3], 6, number_format($row[3], 2, ',', '.'), 'LR', 0, 'R', $fill);
  			$this->Ln();
  			$fill=!$fill;
  		}
  		$this->Cell(array_sum($w), 0, '', 'T');
        $this->setHeader();
		$this->setFooter();
	}
}
?>
