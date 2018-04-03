<html>
<head><title>Addition php</title></head>
<body>
<h1>Success!</h1>
<?php
require('fpdf17/fpdf.php');
//create new pdf file
$pdf = new FPDF('P','mm',array(216,280));
// letter widh = 216 mm
//letter height = 280 mm
// default margine 10 mm
// total width = 216 - 2*10 = 196
$a = 196;
// create first page that containes candidate information from our payment page
$pdf->AddPage();

// set font for Header
$pdf->SetFont('Arial','B',18);
// all text should be inside of the cell
// cell parameters (width, height,"[text]", border (0 or 1), new line (0  or 1), alignment - optional)
$pdf->Image('logo.jpg',100,10,-550);
$pdf->Cell($a,20,"",0,1);


$pdf->Cell($a,10, "Registration and Payment Agreement Form", 0, 1,'C'); //new line

// set font for subheader
$pdf->SetFont('Arial','B',12);

$pdf->Cell($a,15,"Candidate Information:",0,1,'L');

//set font for body text
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

$pdf->Cell(20, $row_width, "City: ", 0, 0);
$pdf->Cell(25, $row_width, $_POST['City'], 1,0 );

$pdf->Cell(10,$row_width,"",0,0);//placeholder

$pdf->Cell(15, $row_width, "State: ", 0, 0);
$pdf->Cell(40, $row_width, $_POST['State'], 1,0 );

$pdf->Cell(11,$row_width,"",0,0);//placeholder

$pdf->Cell(20, $row_width, "ZIP Code: ", 0, 0);
$pdf->Cell(25, $row_width, $_POST['ZIP_Code'], 1,1 );

$pdf->Cell($a,$row_width,"",0,1);//new line

$pdf->Cell(45, $row_width, "Agreement Effective Date: ", 0, 0);
$pdf->Cell(30, $row_width, date("Y/m/d"), 1,1 ); //new line

$pdf->Cell($a,$row_width,"",0,1);//new line



// set font for subheader
$pdf->SetFont('Arial','B',12);

$pdf->Cell($a, $row_width, "Services Provided: ", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line

//set font for body text
$pdf->SetFont('Arial','',10);

$pdf->Cell($a, $row_width, "[Company name] (Provider) is responsible for running Training related activities and training materials and assessment.", 0, 1); //new line
$pdf->Cell($a, $row_width, "Nothing in this Agreement shall be read as an Employment Contract between Candidate and Provider. This training should", 0, 1); //new line
$pdf->Cell($a, $row_width, "not be considered as a degree from a College or University.", 0, 1); //new line
$pdf->Cell($a, $row_distance, "", 0, 1); //new line
$pdf->Cell($a, $row_width, "Candidate agrees to not allow anyone else to have or use password details. Training materials are intellectual property of", 0, 1); //new line
$pdf->Cell($a, $row_width, "Provider. Candidate agrees to refrain from copying, reproducing, creating derivative works, publishing or further distributing", 0, 1); //new line
$pdf->Cell($a, $row_width, "training materials provided by Provider.", 0, 1); //new line
$pdf->Cell($a, $row_distance, "", 0, 1); //new line

// set font for subheader
$pdf->SetFont('Arial','B',12);

$pdf->Cell($a, $row_width, "Fee for your enrollment plan:", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line

//set font for body text
$pdf->SetFont('Arial','',10);


// width of 1st column is 50 mm;
$b1 = 30;
$b2 = $a - $b1;

$pdf->Cell($b1, $row_width, "Course Name: ", 0, 0);
$pdf->Cell($b2, $row_width, $_POST['course'], 1, 1); //new line
$pdf->Cell($a,$row_distance,"",0,1); //new line

$pdf->Cell($b1, $row_width, "Price: ", 0, 0);
$pdf->Cell(50, $row_width, $_POST['Price'], 1, 0);

$pdf->Cell(15,$row_width,"",0,0);//placeholder

$pdf->Cell($b1, $row_width, "Payment Plan: ", 0, 0);
$pdf->Cell(50, $row_width, $_POST['NumberOfPayments'], 1, 1); //new line
$pdf->Cell($a,$row_distance,"",0,1); //new line


// set font for subheader
$pdf->SetFont('Arial','B',12);

$pdf->Cell($a, $row_width, "Payment Policy:", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line

//set font for body text
$pdf->SetFont('Arial','',10);


// blow is numbered list, that starts from 1
// width for numbered list is 10 mm;

$c1 = 10;
$c2 = $a - $c1;

$pdf->Cell($c1, $row_width, "1. ",0,0);
$pdf->Cell($c2, $row_width, "Candidate will be provided to attend free six hours class before making the decision to enroll in a training program.", 0, 1); //new line

$pdf->Cell($c1, $row_width, "2. ",0,0);
$pdf->Cell($c2, $row_width, "After making a payment, Candidate will get the receipt from the Billing Team on the enrolled course.", 0, 1); //new line

$pdf->Cell($c1, $row_width, "3. ",0,0);
$pdf->Cell($c2, $row_width, "To get continuous service Candidate should submit the payment before the due date.", 0, 1);//new line

$pdf->Cell($c1, $row_width, "4. ",0,0);
$pdf->Cell($c2, $row_width, "Weekly installment plan made through Stripe Service is deducted automatically.", 0, 1);

$pdf->Cell($c1, $row_width,"5. ",0,0);
$pdf->Cell($c2, $row_width, "If payment is not made till due date, then the account will be deactivated, and other services will be terminated.", 0, 1); //new line
$pdf->Cell($c1, $row_width, "6. ",0,0);
$pdf->Cell($c2, $row_width, "Account renewal requires additional charges of $199.", 0, 1); //new line

$pdf->Cell($c1, $row_width, "7. ",0,0);
$pdf->Cell($c2, $row_width, "Failing to pay fee balance will leads to forward your case to collectors.", 0, 1); //new line

//create second page use:
$pdf->AddPage();


// set font for subheader
$pdf->SetFont('Arial','B',12);

$pdf->Cell($a, $row_width, "Refund policy: ", 0, 1); //new line
$pdf->Cell($a,$row_width,"",0,1);//new line

//set font for body text
$pdf->SetFont('Arial','',10);

$pdf->Cell($c1, $row_width, "1. ",0,0);
$pdf->Cell($c2, $row_width, "Candidate will receive 80% of total fee refund if he/she has attended the first week and decide to quit after attending", 0, 1); //new line
$pdf->Cell($c1,$row_width,"  ",0,0);
$pdf->Cell($c2, $row_width, "first week of training.", 0, 1); //new line


$pdf->Cell($c1, $row_width, "2. ",0,0);
$pdf->Cell($c2, $row_width, "Candidate will receive 50% of total fee refund if he/she have decided to quit after attending two weeks of training.", 0, 1); //new line

$pdf->Cell($c1, $row_width, "3. ",0,0);
$pdf->Cell($c2, $row_width, "NO REFUND is provided in any other cases. Candidate will have an option to reschedule the classes", 0, 1); //new line
$pdf->Cell($c1,$row_width,"  ",0,0);
$pdf->Cell($c2, $row_width, "during one-year period since start of the training with approval of Provider.", 0, 1); //new line

$pdf->Cell($c1, $row_width, "4. ",0,0);
$pdf->Cell($c2, $row_width, "If Candidate is paying by weekly or installment payment plan and decide to discontinue after attending first two weeks", 0, 1); //new line
$pdf->Cell($c1, $row_width, "  ",0,0);
$pdf->Cell($c2, $row_width, "of training classes, then he/she is still accountable to pay the balance of remaining fee.", 0, 1); //new line

$pdf->Cell($a, $row_width, " ",0,1);//new line





$pdf->Cell($a, $row_width, "My signature below indicates that I have read and understood all of the policies stated and agree to abide by these policies.", 0, 1);
$pdf->Cell(20, $row_width, "Signature", 0, 0);
$pdf->Cell(($a-20-15-20-40), $row_width, "", 1, 0);

$pdf->Cell(15,$row_width,"",0,0);//placeholder

$pdf->Cell(20, $row_width, "Date", 0, 0);
$pdf->Cell(40, $row_width, "", 1, 1);

$pdf->Cell($a, $row_width, "Original: to Billing Team Office; Copy: to Candidate", 0, 1);







//result of the script
$pdf->output($_POST['name'].'.pdf', 'F');
?>
</body>
</html>
