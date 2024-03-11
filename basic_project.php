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
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print current and total page numbers
        $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

// Instantiate PDF object
$pdf = new MyPDF();

// Set title and subject
$pdf->SetTitle('Basic FPDF File');
$pdf->SetSubject('Basic Project');

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Add content
$pdf->Cell(0, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 1, 'L');

$pdf->SetTextColor(0, 250, 0); // Set text color to red (RGB: 255, 0, 0)
$pdf->Text(10, 40, 'This text will be displayed in red.');
$pdf->SetTextColor(0, 0, 255); // Set text color to blue (RGB: 0, 0, 255)
$pdf->Text(10, 50, 'This text will be displayed in blue.');
$pdf->SetTextColor(0); // Set text color to black (RGB: 0)
$pdf->Text(10, 55, 'This is a sample text.');



// Output PDF
$pdf->Output();
?>
