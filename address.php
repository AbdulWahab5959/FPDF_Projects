<?php
require('fpdf/fpdf.php');

// Define MyPDF class by extending FPDF
class MyPDF extends FPDF {

}

// Instantiate PDF object
$pdf = new MyPDF();

$pdf->SetMargins(35, 10); // 10 units left and right margins
// Set title and subject
$pdf->SetTitle('Address Project');
$pdf->SetSubject('Address Project');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, 'SAMPLE PRESS RELEASE', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'Children Invited to Vacation Bible School', 0, 'C');
$pdf->MultiCell(0, 5, 'at First Baptist Church of Our Town', 0, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'FOR RELEASE:', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, 'May 19, 2008 though May 30, 2008', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'FROM:', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, 'First Baptist Church of Our Town, Street Address, Our Town, State, Zip', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'PHONE:', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, '(000) 000-0000 Church Phone', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'WEBSITE: ', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, 'www.yourchurchwebsite.com', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'CONTACT PERSON:', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, ' Rev. Joe Friendly, Associate Pastor', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'SUBJECT: ', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 10, 'Vacation Bible School, June 2, 2008 June 6.', 0, 1, 'L'); // Add a line break
$pdf->Cell(0, 10, 'TEXT: ', 0, 1, 'L');
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'First Baptist Church of Our Town invites all children who have completed ', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'the first grade through those who have completed the fifth grade to join us ', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'for Vacation Bible School beginning Monday, June 2, 2008 through Friday,', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'June 6, 2008. We will meet begin daily at 9:00 a.m. and dismiss at 12:00 ', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'noon.', 0, 1, 'L'); // Add a line break
$pdf->SetY($pdf->GetY() + 5); // Move the Y position down by 10 units
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'For more information or to register, visit our website at', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'www.yourchurchwebsite.com, call the church office at 000-0000, or e-mail', 0, 1, 'L'); // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 5, 'pastorjoe@yourchurchwebsite.com.', 0, 1, 'L');
 // Add a line break
$pdf->Cell(10); // Add some space
$pdf->Cell(0, 15, 'Thank you!', 0, 1, 'L'); // Add a line break

// Output PDF
$pdf->Output();
?>




 
