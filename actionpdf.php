<html>
<head><title>Addition php</title></head>
<body>
<h1>Success!</h1>
<?php
require('fpdf17/fpdf.php');
//create new pdf file
$pdf = new FPDF('P','mm',array(216,356));
// legal widh = 216 mm
//legal height = 356 mm
// default margine 10 mm 
// total width = 216 - 2*10 = 196
$a = 196;
// create first page that containes candidate information from our payment page
$pdf->AddPage();
// set font for Header
$pdf->SetFont('Arial','B',18);
// all text should be inside of the cell
// cell parameters (width, height,"[text]", border (0 or 1), new line (0  or 1), alignment - optional)
$pdf->Cell($a, 25, "Infotek Solutions Registration and Payment Agreement Form", 0, 1,'C'); //new line
// set font for body text
$pdf->SetFont('Arial','',10);
// width of 1st column is 50 mm;
$b1 = 50;
$b2 = $a - $b1;
$pdf->Cell($b1, 10, "Candidate's Full Name: " , 0, 0);
$pdf->Cell($b2, 10, $_POST['name'], 1, 1); //new line

$pdf->Cell($b1, 10, "Candidate's Email ID: ", 0, 0);
$pdf->Cell($b2, 10, $_POST['email'], 1,1 ); //new line

$pdf->Cell($b1, 10, "Candidate's Phone number: ", 0, 0);
$pdf->Cell($b2, 10, $_POST['Phone'], 1,1 ); //new line

//$pdf->Cell($b1, 10, "Candidate's Address: ", 0, 0);
//$pdf->Cell($b2, 10, $_POST['Address'], 1,1 ); //new line

$pdf->Cell($b1, 10, "Course Name: ", 0, 0);
$pdf->Cell($b2, 10, $_POST['course'], 1, 1); //new line

$pdf->Cell($b1, 10, "Price: ", 0, 0);
$pdf->Cell($b2, 10, $_POST['Price'], 1, 1); //new line

$pdf->Cell($b1, 10, "Payment Plan: ", 0, 0);
$pdf->Cell($b2, 10, $_POST['NumberOfPayments'], 1, 1); //new line

//create second page that with our agreement text and does not change
$pdf->AddPage();

$pdf->Cell($a, 10, "Please read carefully all payment terms.", 0, 1); //new line
// blow is numbered list, that starts from 1
// width for numbered list is 10 mm;

$c1 = 10;
$c2 = $a - $c1;
$pdf->Cell(5,10,"1. ",0,0);
$pdf->Cell(184, 10, "You will be provided to attend free six hours class before making your decision to enroll in a training program.", 0, 1); //new line
$pdf->Cell(5,10,"2. ",0,0);
$pdf->Cell(184, 10, "After making a payment, you will get  the receipt from Infotek billing team on enrolled course. ", 0, 1); //new line
$pdf->Cell(5,10,"3. ",0,0);
$pdf->Cell(184, 10, "In case of choosing any installment-based payment plan, please stick with the plan to get continuous service.", 0, 1);
$pdf->Cell(5,10,"4. ",0,0);
$pdf->Cell(184, 10, "If payment is not made till due date, then the account will be deactivated, and other services will be terminated.", 0, 1); //new line
$pdf->Cell(5,10,"5. ",0,0);
$pdf->Cell(184, 10, "Account renewal requires additional charges of $199.", 0, 1); //new line
$pdf->Cell(5,10,"6. ",0,0);
$pdf->Cell(184, 10, "80% of total fee refund if you have attended the first week and decide to discontinue from the second week of training.", 0, 1); //new line
$pdf->Cell(5,10,"7. ",0,0);
$pdf->Cell(184, 10, "50% refund if you have decided to quit after attending two weeks of training.", 0, 1); //new line
$pdf->Cell(5,10,"8. ",0,0);
$pdf->Cell(184, 10, "NO REFUND is provided in any other cases if you have decided not to continue training. You have an option to reschedule", 0, 1); //new line
$pdf->Cell(5,10,"  ",0,0);
$pdf->Cell(184, 10, "your classes during one-year period since start of your training with approval of Infotek-Solutions.", 0, 1); //new line
$pdf->Cell(5,10,"9. ",0,0);
$pdf->Cell(189, 10, "If you are on weekly or installment payment plan and decide to discontinue after attending first two weeks of", 0, 1); //new line
$pdf->Cell(5,10,"  ",0,0);
$pdf->Cell(184, 10, "training classes, then you are still accountable to pay the balance of remaining fee. 
", 0, 1); //new line
$pdf->Cell(5,10,"10.",0,0);
$pdf->Cell(189, 10, "Failing to pay fee balance will leads to forward your case for collections.", 0, 1); //new line

$pdf->Cell(189, 20, "My signature below indicates that I have read and understood all of the policies stated and agree to abide by these policies.", 0, 1); //new line




//result of the script
$pdf->output($_POST['name'].'.pdf', 'F');
?>
</body>
</html>