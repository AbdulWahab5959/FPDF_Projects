<?php
require('fpdf/fpdf.php');

// Define MyPDF class by extending FPDF
class MyPDF extends FPDF {

}

// Instantiate PDF object
$pdf = new MyPDF();

$pdf->SetMargins(35, 10); // 10 units left and right margins
// Set title and subject
$pdf->SetTitle('Letter-of-Retirement');
$pdf->SetSubject('Letter-of-Retirement');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 22);
$pdf->Cell(0, 30, 'LETTER OF RETIREMENT', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 5, 'From: _____________________', 0, 1, 'L');
$pdf->Cell(0, 5, 'Address: _____________________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'Address (2): _____________________', 0, 1, 'L');
$pdf->Cell(0, 5, 'Phone: _____________________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'E-Mail: _____________________', 0, 1, 'L');
$pdf->Cell(0, 30, 'Date: ________________', 0, 1, 'L');
$pdf->Cell(0, 5, 'To: _____________________', 0, 1, 'L');
$pdf->Cell(0, 5, 'Address: _____________________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'Address (2): _____________________', 0, 1, 'L');
$pdf->Cell(0, 5, 'Phone: _____________________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'E-Mail: _____________________', 0, 1, 'L');
$pdf->Cell(0, 30, 'Dear _____________,', 0, 1, 'L');
$pdf->Cell(0, 5, 'This letter represents my official notice of retirement from my position of __________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'with _____________ be made final on the ___ day of _______________, 20___.', 0, 1, 'L'); // Add a line break
$pdf->SetY($pdf->GetY() + 5); // Move the Y position down by 10 units
$pdf->Cell(0, 5, 'It has been with great pleasure to be alongside the individuals at _____________ and I', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'will always appreciate the experience and knowledge I gained during my time here.', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'noon.', 0, 1, 'L'); // Add a line break
$pdf->SetY($pdf->GetY() + 5); // Move the Y position down by 10 units
$pdf->Cell(0, 5, 'I hope the notice-period is enough for you to find a replacement. Furthermore, please let', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'me know of any help that I could be to train or assist the person that will take over my', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'position.', 0, 1, 'L');
// Add a line break
$pdf->Cell(0, 15, 'Sincerely,', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, '_____________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'Signature', 0, 1, 'L'); // Add a line break
$pdf->SetY($pdf->GetY() + 5); // Move the Y position down by 10 units
$pdf->Cell(0, 5, '_____________', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 5, 'Print Name', 0, 1, 'L'); // Add a line break

// Output PDF
$pdf->Output();
?>




 
