<?php
require('fpdf/fpdf.php');

// Define MyPDF class by extending FPDF
class MyPDF extends FPDF {
}

// Instantiate PDF object
$pdf = new MyPDF();

// Set title and subject
$pdf->SetTitle('COMMERCIAL INVOICE');
$pdf->SetSubject('COMMERCIAL INVOICE');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, 'COMMERCIAL INVOICE', 0, 1, 'C');

// Define margins
$marginLeft = 10; // Adjusted left margin
$marginRight = 10; // Adjusted right margin
$marginTop = $pdf->GetY(); // Get current Y position as top margin

$pdf->Image('images_and_PDF_files\profileemail.jpg', 85, 25, 14, 14, 'JPG');

// Calculate cell width
$pageWidth = $pdf->GetPageWidth();
$cellWidth = ($pageWidth - $marginLeft - $marginRight) / 2;
$pdf->SetFont('Arial', '', 8);
$text = "Exporter";
// Calculate position to center text horizontally
$textX = 11;
$textY = 23; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$pdf->SetFont('Arial', 'B', 8);
// Set left margin
$pdf->SetLeftMargin($marginLeft);
$pdf->MultiCell($cellWidth, 5, "\nShenzhen Tonghua Weiye Technology Co., Ltd. \nNo.92 Fukang Road, Henggang Street Flat B,\n5 Floor, Yaoxiang Industrial Building,\nShenzhen, Guangdong, Longgang District\n518115 CN", 1, 'L');
// First cell

// Set right margin and Y position for second cell
$pdf->SetY($marginTop); // Reset Y position to top margin
$pdf->SetRightMargin($marginRight); // Set right margin

// Calculate starting X position for second cell
$secondCellX = $marginLeft + $cellWidth;

$pdf->SetFont('Arial', '', 8);
$text = "Pages";
// Calculate position to center text horizontally
$textX = 191;
$textY = 23; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
// Second cell - Pages
$pdf->SetX($secondCellX);
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell($cellWidth, 5, "\n1 of 1", 1, 'R');

// Move to the next line after both cells (first and second) are printed
$pdf->Ln(); 

// Adjust X position for cells in the next row (below second cell)
$marginTop = $pdf->GetY()-5; // Get current Y position as top margin
$pdf->SetY($marginTop); // Reset Y position to top margin
$nextRowX = $secondCellX; // Start from the same X position as the second cell
$pdf->SetFont('Arial', '', 8);
$text = "Invoice Number & Date";
// Calculate position to center text horizontally
$textX = 106;
$textY = 33; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "32529";
$pdf->SetFont('Arial', 'B', 8);
// Calculate position to center text horizontally
$textX = 106;
$textY = 38; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "16 Sep 2022";
$pdf->SetFont('Arial', 'B', 8);
// Calculate position to center text horizontally
$textX = 126;
$textY = 38; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

// Cell for Row 1 (below second cell)
$pdf->SetX($nextRowX);
$pdf->Cell($cellWidth/2, 10, "", 1, 0, 'L');
$text = "AWB/BL";
$pdf->SetFont('Arial', '', 8);
// Calculate position to center text horizontally
$textX = 154;
$textY = 33; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "97699059";
$pdf->SetFont('Arial', 'B', 8);
// Calculate position to center text horizontally
$textX = 154;
$textY = 38; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$pdf->Cell($cellWidth/2, 10, '', 1, 0, 'L');

// Cell for Row 2 (below Row 1)
$pdf->Ln(); // Move to the next line
$pdf->SetX($nextRowX);
$text = "Purchase Order";
$pdf->SetFont('Arial', '', 8);
// Calculate position to center text horizontally
$textX = 106;
$textY = 43; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "152409066001020196";
$pdf->SetFont('Arial', 'B', 8);
// Calculate position to center text horizontally
$textX = 106;
$textY = 48; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "Reference";
$pdf->SetFont('Arial', '', 8);
// Calculate position to center text horizontally
$textX = 154;
$textY = 43; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$text = "1BD8ZR4L";
$pdf->SetFont('Arial', 'B', 8);
// Calculate position to center text horizontally
$textX = 154;
$textY = 48; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);
$pdf->Cell($cellWidth/2, 10, '', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, '', 1, 0, 'L');
$text = "Consignee";
$pdf->SetFont('Arial', '', 8);
// Calculate position to center text horizontally
$textX = 11;
$textY = 53; // Y position for the text, below the rectangle
// Output the text at the calculated position
$pdf->Text($textX, $textY, $text);

$pdf->Ln(); // Move to the next line
$marginTop = $pdf->GetY()+50; // Get current Y position as top margin
$pdf->MultiCell($cellWidth, 5, "\n", 1, 'L');
// Output PDF
// Set right margin and Y position for second cell
$pdf->Ln(); // Move to the next line
$pdf->SetY($marginTop-50); // Reset Y position to top margin
$pdf->SetRightMargin($marginRight); // Set right margin

// Calculate starting X position for second cell
$secondCellX = $marginLeft + $cellWidth;

// Second cell - Pages
$pdf->SetX($secondCellX);
$pdf->MultiCell($cellWidth, 3, "Exporter\nShenzhen Tonghua Weiye Technology Co., Ltd. \nNo.92 Fukang Road, Henggang Street Flat B,\n5 Floor, Yaoxiang Industrial Building,\nShenzhen, Guangdong, Longgang District\n518115 CN", 1, 'L');

$pdf->Cell($cellWidth/2, 10, 'Row 5', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, 'Row 6', 1, 0, 'L');


$marginTop = $pdf->GetY(); // Get current Y position as top margin
$pdf->SetY($marginTop); // Reset Y position to top margin
$nextRowX = $secondCellX; // Start from the same X position as the second cell

// Cell for Row 1 (below second cell)
$pdf->SetX($nextRowX);
$pdf->Cell($cellWidth/2, 10, 'Row 7 ', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, 'Row 8', 1, 0, 'L');

$pdf->Ln(); // Move to the next line
// Set initial position for left side
$leftX = $pdf->GetX();
$leftY = $pdf->GetY();

// Cell for Row 1 - Column 1
$pdf->Cell($cellWidth/2, 10, 'Row 1 - Column 1', 1, 0, 'L');
// Cell for Row 1 - Column 2
$pdf->Cell($cellWidth/2, 10, 'Row 1 - Column 2', 1, 1, 'L'); // Move to next line

// Cell for Row 2 (below Row 1)
$pdf->SetXY($leftX, $leftY + 10); // Move to the position below Row 1
$pdf->Cell($cellWidth/2, 10, 'Row 5', 1, 0, 'L');
// Cell for Row 3 (below Row 2)
$pdf->Cell($cellWidth/2, 10, 'Row 6', 1, 1, 'L'); // Move to next line

// Cell for New Row (on the right side)
$pdf->SetXY($leftX + $cellWidth, $leftY); // Move to the right side
$pdf->Cell($cellWidth, 20, 'New Row', 1, 1, 'L'); // Move to next line

$pdf->Cell($cellWidth/2, 10, 'Row 5', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, 'Row 6', 1, 0, 'L');


$marginTop = $pdf->GetY(); // Get current Y position as top margin
$pdf->SetY($marginTop); // Reset Y position to top margin
$nextRowX = $secondCellX; // Start from the same X position as the second cell

// Cell for Row 1 (below second cell)
$pdf->SetX($nextRowX);
$pdf->Cell($cellWidth/2, 10, 'Row 7 ', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, 'Row 8', 1, 0, 'L');

$pdf->Ln(); // Move to the next line
$pdf->Cell($cellWidth/4, 10, 'Row 5', 1, 0, 'L');
$pdf->Cell($cellWidth/2, 10, 'Row 6', 1, 0, 'L');
$pdf->Cell($cellWidth/4, 10, 'Row 6', 1, 0, 'L');


$marginTop = $pdf->GetY(); // Get current Y position as top margin
$pdf->SetY($marginTop); // Reset Y position to top margin
$nextRowX = $secondCellX; // Start from the same X position as the second cell

// Cell for Row 1 (below second cell)
$pdf->SetX($nextRowX);
$pdf->Cell($cellWidth/4, 10, 'Row 7 ', 1, 0, 'L');
$pdf->Cell($cellWidth/4, 10, 'Row 7 ', 1, 0, 'L');
$pdf->Cell($cellWidth/4, 10, 'Row 7 ', 1, 0, 'L');
$pdf->Cell($cellWidth/4, 10, 'Row 8', 1, 0, 'L');
$pdf->Ln(); // Move to the next line
$pdf->Cell($cellWidth*2, 50, 'Row 9', 1, 0, 'L');
$pdf->Ln(); // Move to the next line
$pdf->Cell($cellWidth*2, 5, 'Row 10', 1, 0, 'L');
$pdf->Ln(); // Move to the next line
$pdf->Cell($cellWidth*2, 5, 'Row 11', 1, 0, 'L');

$pdf->Ln(); // Move to the next line
$marginTop = $pdf->GetY(); // Get current Y position as top margin

// Calculate cell width
$pageWidth = $pdf->GetPageWidth();
$cellWidth = ($pageWidth - $marginLeft - $marginRight) / 2;

// Set left margin
$pdf->SetLeftMargin($marginLeft);

$pdf->MultiCell($cellWidth, 5, "Exporter\nShenzhen Tonghua Weiye Technology Co., Ltd.\nExporter\nShenzhen Tonghua Weiye Technology Co., Ltd.\nExporter\nShenzhen Tonghua Weiye Technology Co., Ltd.\nExporter\nShenzhen Tonghua Weiye Technology Co., Ltd. \nNo.92 Fukang Road, Henggang Street Flat B,\n5 Floor, Yaoxiang Industrial Building,\nShenzhen, Guangdong, Longgang District\n518115 CN", 1, 'L');
// First cell

// Set right margin and Y position for second cell
$pdf->SetY($marginTop); // Reset Y position to top margin
$pdf->SetRightMargin($marginRight); // Set right margin

// Calculate starting X position for second cell
$secondCellX = $marginLeft + $cellWidth;

// Second cell - Pages
$pdf->SetX($secondCellX);
$pdf->MultiCell(70, 5, "Pages\n1 of 1", 1, 'L');
$pdf->SetY($marginTop); // Reset Y position to top margin

$pdf->SetX($secondCellX+70);
$pdf->MultiCell(25, 5, "Pages\n1 of 1", 1, 'L');
$secondCellX = $marginLeft + $cellWidth;
$pdf->SetX($secondCellX);
$pdf->MultiCell(70, 5, "Pages\n1 of 1", 1, 'L');
$pdf->SetY($marginTop+10); // Reset Y position to top margin
$pdf->SetX($secondCellX+70);
$pdf->MultiCell(25, 5, "Pages\n1 of 1", 1, 'L');
$pdf->SetY($marginTop+20); // Reset Y position to top margin
$secondCellX = $marginLeft + $cellWidth;
$pdf->SetX($secondCellX);
$pdf->MultiCell($cellWidth, 5, "Pages\n1 of 1", 1, 'L');
$pdf->SetY($marginTop+30); // Reset Y position to top margin
$secondCellX = $marginLeft + $cellWidth;
$pdf->SetX($secondCellX);
$pdf->MultiCell($cellWidth, 5, "Pages\n1 of 1", 1, 'L');
$secondCellX = $marginLeft + $cellWidth;
$pdf->SetX($secondCellX);
$pdf->MultiCell($cellWidth, 10, "Pages\n1 of 1", 1, 'L');

// Move to the next line after both cells (first and second) are printed
$pdf->Ln();   
$pdf->Output();
?>
