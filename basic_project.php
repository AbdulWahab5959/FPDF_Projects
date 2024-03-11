<?php
require('fpdf/fpdf.php');

class MyPDF extends FPDF {
    // Header
    function Header() {
        // Set font
        $this->SetFont('Arial', 'B', 12);
        // Title
        $this->Cell(0, 10, 'My Document Header', 0, 1, 'C');
    }

    // Footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Instantiate PDF object
$pdf = new MyPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Add content
$pdf->Cell(0, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

// Output PDF
$pdf->Output();
?>
