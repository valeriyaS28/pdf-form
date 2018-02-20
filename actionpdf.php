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
$pdf->Image('logo.png',80,10,-450);
$pdf->Cell($a,20,"",0,1);
$pdf->Cell($a,20, "Registration and Payment Agreement Form", 0, 1,'C'); //new line
// set font for body text

$pdf->Cell($a,15,"Candidate Information:",0,1,'L');
$pdf->SetFont('Arial','',10);

$row_width = 6;
$row_distance = 4;

$pdf->Cell(40, $row_width, "Candidate's Full Name: " , 0, 0);
$pdf->Cell(($a-40), $row_width, $_POST['name'], 1, 1); 

$pdf->Cell($a,$row_distance,"",0,1); //new line

$pdf->Cell(20, $row_width, "Email ID: ", 0, 0);
$pdf->Cell(80, $row_width, $_POST['email'], 1,0 ); 

$pdf->Cell(10,$row_width,"",0,0);//placeholder

$pdf->Cell(28, $row_width, "Phone number: ", 0, 0);
$pdf->Cell(($a-20-80-10-28), $row_width, $_POST['Phone'], 1,1 ); 

$pdf->Cell($a,$row_distance,"",0,1);//new line

$pdf->Cell(20, $row_width, "Address: ", 0, 0);
$pdf->Cell(($a-20), $row_width, $_POST['Address'], 1,1 );

$pdf->Cell($a,$row_distance,"",0,1);//new line

$pdf->Cell(20, $row_width, "ZIP Code: ", 0, 0);
$pdf->Cell(25, $row_width, $_POST['ZIP_Code'], 1,0 );

$pdf->Cell(10,$row_width,"",0,0);//placeholder

$pdf->Cell(15, $row_width, "State: ", 0, 0);
$pdf->Cell(40, $row_width, $_POST['State'], 1,1 ); 

$pdf->Cell($a,$row_distance,"",0,1);//new line

$pdf->Cell(50, $row_width, "Agreement Effective Date: ", 0, 0);
$pdf->Cell(35, $row_width, date("Y/m/d"), 1,1 ); //new line

$pdf->Cell($a,$row_width,"",0,1);//new line

$pdf->Cell($a, $row_width, "Services Provided: ", 0, 1); //new line
$pdf->Cell($a, $row_width, "Infotek Solutions, Inc. (Provider) is responsible for running Training related activities and training materials and assessment.", 0, 1); //new line
$pdf->Cell($a, $row_width, "Nothing in this Agreement shall be read as an Employment Contract between Candidate and Provider. This training should", 0, 1); //new line
$pdf->Cell($a, $row_width, "not be considered as a degree from a College or University.", 0, 1); //new line
$pdf->Cell($a, $row_distance, "", 0, 1); //new line
$pdf->Cell($a, $row_width, "Candidate agrees to not allow anyone else to have or use password details. Training materials are intellectual property", 0, 1); //new line
$pdf->Cell($a, $row_width, "of Provider. Candidate agrees to refrain from copying, reproducing, creating derivative works, publishing or further", 0, 1); //new line
$pdf->Cell($a, $row_width, "distributing training materials provided by Provider.", 0, 1); //new line
$pdf->Cell($a, $row_distance, "", 0, 1); //new line

$pdf->Cell($a, $row_width, "Payment Policy:", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line
// blow is numbered list, that starts from 1
// width for numbered list is 10 mm;

$c1 = 10;
$c2 = $a - $c1;
$pdf->Cell($c1, $row_width, "1. ",0,0);
$pdf->Cell($c2, $row_width, "You will be provided to attend free six hours class before making your decision to enroll in a training program.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "2. ",0,0);
$pdf->Cell($c2, $row_width, "After making a payment, you will get  the receipt from Infotek billing team on enrolled course. ", 0, 1); //new line
$pdf->Cell($c1, $row_width, "3. ",0,0);
$pdf->Cell($c2, $row_width, "In case of choosing any installment-based payment plan, please stick with the plan to get continuous service.", 0, 1);
$pdf->Cell($c1, $row_width,"4. ",0,0);
$pdf->Cell($c2, $row_width, "If payment is not made till due date, then the account will be deactivated, and other services will be terminated.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "5. ",0,0);
$pdf->Cell($c2, $row_width, "Account renewal requires additional charges of $199.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "6. ",0,0);
$pdf->Cell($c2, $row_width, "80% of total fee refund if you have attended the first week and decide to discontinue from the second week of training.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "7. ",0,0);
$pdf->Cell($c2, $row_width, "50% refund if you have decided to quit after attending two weeks of training.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "8. ",0,0);
$pdf->Cell($c2, $row_width, "NO REFUND is provided in any other cases if you have decided not to continue training. You have an option to", 0, 1); //new line
$pdf->Cell($c1,$row_width,"  ",0,0);
$pdf->Cell($c2, $row_width, "reschedule your classes during one-year period since start of your training with approval of Infotek-Solutions.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "9. ",0,0);
$pdf->Cell($c2, $row_width, "If you are on weekly or installment payment plan and decide to discontinue after attending first two weeks of", 0, 1); //new line
$pdf->Cell($c1, $row_width, "  ",0,0);
$pdf->Cell($c2, $row_width, "training classes, then you are still accountable to pay the balance of remaining fee. 
", 0, 1); //new line
$pdf->Cell($c1, $row_width, "10.",0,0);
$pdf->Cell($c2, $row_width, "Failing to pay fee balance will leads to forward your case for collections.", 0, 1); //new line
$pdf->Cell($a, $row_width, "", 0, 1); //new line


$pdf->Cell($a, $row_width, "Fee for your enrollment plan:", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line

// width of 1st column is 50 mm;
$b1 = 30;
$b2 = $a - $b1;


$pdf->Cell($b1, $row_width, "Course Name: ", 0, 0);
$pdf->Cell($b2, $row_width, $_POST['course'], 1, 1); //new line
$pdf->Cell($a,$row_distance,"",0,1); //new line

$pdf->Cell($b1, $row_width, "Price: ", 0, 0);
$pdf->Cell(50, $row_width, $_POST['Price'], 1, 0); //new line

$pdf->Cell($b1, $row_width, "Payment Plan: ", 0, 0);
$pdf->Cell(50, $row_width, $_POST['NumberOfPayments'], 1, 1); //new line
$pdf->Cell($a,$row_distance,"",0,1); //new line



//create second page that with our agreement text and does not change
$pdf->AddPage();



$pdf->Cell(189, 20, "My signature below indicates that I have read and understood all of the policies stated and agree to abide by these policies.", 0, 1); //new line




//result of the script
$pdf->output($_POST['name'].'.pdf', 'F');
?>
</body>
</html>