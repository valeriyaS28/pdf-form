<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<title>Payment Agreement Form</title>
</head>
<body>
<div class="container">
<header>
<h1 name="Title">Payment Agreement Form</h1>
</header>
      <form class="contact-us form-horizontal" action="actionpdf.php" method="post">
        <legend>Fill Form and submit to generate PDF</legend>
        <div>
            <label>Name</label>
            <input type="text"   name="name" placeholder="Name">
        </div>
        <div>
            <label>Email</label>
            <input type="text"   name="email" placeholder="Email">
        </div>
    		<div>
            <label>Phone</label>
            <input type="text"   name="Phone" placeholder="Contact Phone number (XXX) XXX - XXXX">
        </div>
        <div>
            <label>Address</label>
            <input type="text"   name="Address">
        </div>
		    <div>
            <label>City</label>
            <input type="text"   name="City">
        </div>
	      <div>
            <label>ZIP_Code</label>
            <input type="text"   name="ZIP_Code">
        </div>
	      <div>
            <label>State</label>
            <input type="text"   name="State">
        </div>
	    	<div>
            <label>Course</label>
            <input type="text"   name="course" placeholder="course name">
        </div>
		    <div>
            <label>Price of the Course</label>
            <input type="text"    name="Price">
        </div>
        <div>
            <label>Number Of Payments</label>
            <input type="text"    name="NumberOfPayments" placeholder="Please select the payment plan">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn">Cancel</button>
        </div>
      </form>
</div>
</body>
</html>
