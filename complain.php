<?php
require('fpdf/fpdf.php');

class MyPDF extends FPDF {}
    

// Instantiate PDF object
$pdf = new MyPDF();
$pdf->AddPage();
// Set title and subject
$pdf->SetTitle('Complain of SMS block');
$pdf->SetSubject('Complain of SMS block');

// Add random picture inside the second rectangle
// Assuming standard A4 page width (210mm)
$pageWidth = 210; // in millimeters

// Calculate the aspect ratio to maintain proportions
$imageWidth = $pageWidth; // Set the image width to match the page width
$imageHeight = 150; // Automatically calculate the height

// Your original code
$pdf->Image('images_and_PDF_files\Screenshot_26.png', 10, 10, $imageWidth, $imageHeight, 'PNG');
$pdf->Image('images_and_PDF_files\IMG_20240317_171615.png', 5, 165, 90, 60, 'PNG');
$pdf->Image('images_and_PDF_files\IMG_20240317_171621.jpg', 110, 165, 90, 60, 'JPG');




// Output PDF
$pdf->Output();
?>
