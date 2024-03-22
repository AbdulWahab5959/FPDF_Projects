<?php
require('fpdf/fpdf.php');

// Define MyPDF class by extending FPDF
class MyPDF extends FPDF {

}

// Instantiate PDF object
$pdf = new MyPDF();
$pdf->SetMargins(35, 10); // 10 units left and right margins

// Set title and subject
$pdf->SetTitle('Cv_PDF');
$pdf->SetSubject('CV Pdf');

$pdf->AddPage(); // Add page here
// Set fill color and draw a filled rectangle
$pdf->SetFillColor(22, 147, 204); // RGB: 22, 147, 204 (light blue)
$pdf->Rect(0, 10, $pdf->GetPageWidth() - 10, 30, 'F');

// Set font and text color
$pdf->SetFont('Arial', 'B', 50);
$pdf->SetTextColor(255, 255, 255); // Set text color to white

// Get width of text
$text = "YOUR NAME";

// Calculate position to center text horizontally
$textX = 70;
$textY = 30; // Y position for the text

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

// Set font and text color
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

// Get width of text
$text = "Write down a professional summary or a resume objective.Note that this part ";
// 


// Calculate position to center text horizontally
$textX = 70;
$textY = 50; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$text = "is different for every country.Drink at the casino or quiver.Everyone wants to";
// Calculate position to center text horizontally
$textX = 70;
$textY = 55; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$text = "live  in the arc of the course of Euismod. ";
// Calculate position to center text horizontally
$textX = 70;
$textY = 60; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "________________________________";
// Calculate position to center text horizontally
$textX = 70;
$textY = 65; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "EDUCATION";
// Calculate position to center text horizontally
$textX = 70;
$textY = 75; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "M.Sc. Bioengineering2014-present";
// Calculate position to center text horizontally
$textX = 70;
$textY = 80; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Harvard University, Cambridge, MA";
// Calculate position to center text horizontally
$textX = 70;
$textY = 85; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Clubs & Societies: Robotics Society, Business Club";
// Calculate position to center text horizontally
$textX = 70;
$textY = 90; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "B.A. Applied Economics2010-2014";
// Calculate position to center text horizontally
$textX = 70;
$textY = 105; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Yale University, New Haven, CT";
// Calculate position to center text horizontally
$textX = 70;
$textY = 110; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Graduated Summa Cum Laude";
// Calculate position to center text horizontally
$textX = 70;
$textY = 115; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$text = "Clubs & Societies: Business Club";
// Calculate position to center text horizontally
$textX = 70;
$textY = 120; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "________________________________";
// Calculate position to center text horizontally
$textX = 70;
$textY = 130; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "EXPERIENCE";
// Calculate position to center text horizontally
$textX = 70;
$textY = 140; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Intern2018-present ";
// Calculate position to center text horizontally
$textX = 70;
$textY = 145; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Tesla Inc., Fremont, CA";
// Calculate position to center text horizontally
$textX = 70;
$textY = 150; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Describe your responsibilities and achievements";
// Calculate position to center text horizontally
$textX = 70;
$textY = 155; // Y position for the text, below the rectangle

$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black
$text = "Intern2016-2018 ";
// Calculate position to center text horizontally
$textX = 70;
$textY = 165; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Boeing, Pleasanton, CA";
// Calculate position to center text horizontally
$textX = 70;
$textY = 170; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Describe your responsibilities and achievements";
// Calculate position to center text horizontally
$textX = 70;
$textY = 175; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black
$text = "Intern2014-2016";
// Calculate position to center text horizontally
$textX = 70;
$textY = 185; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Audi Palo Alto, Palo Alto, CA";
// Calculate position to center text horizontally
$textX = 70;
$textY = 190; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Set text color to black

$text = "Describe your responsibilities and achievements";
// Calculate position to center text horizontally
$textX = 70;
$textY = 195; // Y position for the text, below the rectangle

// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->SetFillColor(67,83,106); // Set fill color to red (RGB: 255, 0, 0)
$pdf->Rect(10, 0, 50, $pdf->GetPageHeight(), 'F'); // Draw a filled rectangle spanning the entire page

// Add random picture inside the second rectangle
$imagePath = 'images_and_PDF_files\profileemail.jpg'; // Path to the image file
$imageX = 25; // X position of the image
$imageY = 15; // Y position of the image
$imageWidth = 20; // Width of the image (adjust as needed)
$pdf->Image($imagePath, $imageX, $imageY, $imageWidth);
// Adjust position for text to fit inside the rectangle
$textX = 9; // X position for the text
$textY = 35; // Y position for the text

$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '________', 0, 1, 'L'); // Add the text

$textX = 20; // X position for the text
$textY = 45; // Y position for the text

$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'CONTACT', 0, 1, 'L'); // Add the text

$textX = 20; // X position for the text
$textY = 50; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '000-000-000', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\telephone.png', 15, 53, 4, 3, 'PNG');

$textX = 20; // X position for the text
$textY = 55; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'jane.smith@gmail.com', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\letter.png', 15, 58, 4, 3, 'PNG');

$textX = 20; // X position for the text
$textY = 60; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'London, GB', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\home.png', 15, 63, 4, 3, 'PNG');

$textX = 20; // X position for the text
$textY = 65; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'janesmith.com', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\globe.png', 15, 68, 4, 3, 'PNG');

$textX = 9; // X position for the text
$textY = 70; // Y position for the text

$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '________', 0, 1, 'L'); // Add the text

$textX = 25; // X position for the text
$textY = 80; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'SKILLS', 0, 1, 'L'); // Add the text

$textX = 15; // X position for the text
$textY = 85; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'MS Word, MS Excel', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\square.png', 16, 92, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 20, 92, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 24, 92, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 28, 92, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 32, 92, 3, 3, 'PNG');

$textX = 15; // X position for the text
$textY = 95; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'PTC Creo, Catia', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\square.png', 16, 102, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 20, 102, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 24, 102, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 28, 102, 3, 3, 'PNG');
$pdf->Image('flaticons\square_black.png', 32, 102, 3, 3, 'PNG');

$textX = 15; // X position for the text
$textY = 105; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'Python, Java, CSS', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\square.png', 16, 112, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 20, 112, 3, 3, 'PNG');
$pdf->Image('flaticons\square.png', 24, 112, 3, 3, 'PNG');
$pdf->Image('flaticons\square_black.png', 28, 112, 3, 3, 'PNG');
$pdf->Image('flaticons\square_black.png', 32, 112, 3, 3, 'PNG');


$textX = 9; // X position for the text
$textY = 120; // Y position for the text

$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '________', 0, 1, 'L'); // Add the text

$textX = 20; // X position for the text
$textY = 130; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'LANGUAGES', 0, 1, 'L'); // Add the text

$textX = 15; // X position for the text
$textY = 135; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'ENGLISH', 0, 1, 'L'); // Add the text

$textX = 15; // X position for the text
$textY = 145; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'GERMAN', 0, 1, 'L'); // Add the text

$textX = 15; // X position for the text
$textY = 155; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'SPANISH', 0, 1, 'L'); // Add the text

$textX = 9; // X position for the text
$textY = 165; // Y position for the text

$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '________', 0, 1, 'L'); // Add the text

$textX = 20; // X position for the text
$textY = 175; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, 'HOBBIES', 0, 1, 'L'); // Add the text
$pdf->Image('flaticons\photo-camera.png', 18, 185, 6, 6, 'PNG');
$pdf->Image('flaticons\ball.png', 30, 185, 6, 6, 'PNG');
$pdf->Image('flaticons\electric-guitar.png', 42, 185, 6, 6, 'PNG');

$textX = 20; // X position for the text
$textY = 50; // Y position for the text
$pdf->SetXY($textX, $textY); // Set the position for the text
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(255, 255, 255); // Set the text color to white
$pdf->Cell(0, 10, '000-000-000', 0, 1, 'L'); // Add the text

// Output PDF
$pdf->Output();

?>

