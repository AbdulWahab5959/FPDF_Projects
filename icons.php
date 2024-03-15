<?php
require('fpdf/fpdf.php');

// Include Font Awesome font
$pdf = new FPDF();
$pdf->AddFont('FontAwesome', '', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"'); // Adjust the path as needed

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('FontAwesome', '', 12);

// Add an icon
$pdf->Cell(10, 10, "\uf118", 0, 1, 'L');
 // This will add a Font Awesome icon (in this case, the user icon)

// Output PDF
$pdf->Output();
?>

