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
        <div class="control-group">
            <label class="control-label">Name</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" class="input-xlarge" name="name" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="email" placeholder="Email">
                </div>
            </div>    
        </div>
		<div class="control-group">
            <label class="control-label">Phone</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="Phone" placeholder="Contact Phone number (XXX) XXX - XXXX">
                </div>
            </div>    
        <div class="control-group">
            <label class="control-label">Address</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="Address" >
                </div>
            </div> 
		<div class="control-group">
            <label class="control-label">City</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="City" >
                </div>
            </div>
	    <div class="control-group">
            <label class="control-label">ZIP_Code</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="ZIP_Code" >
                </div>
            </div>
	    <div class="control-group">
            <label class="control-label">State</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" class="input-xlarge" name="State" >
                </div>
            </div>
		<div class="control-group">
            <label class="control-label">Course</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
					<input type="text" class="input-xlarge" name="course" placeholder="course name">
                </div>
            </div>
		</div>
        <div class="control-group">
            <label class="control-label">Price of the Course</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-globe"></i></span>
                    <input type="text"  class="input-xlarge" name="Price" placeholder=" ">
                </div>
            </div>
        </div>	
        </div>
        <div class="control-group">
            <label class="control-label">Number Of Payments</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-globe"></i></span>
                    <input type="text"  class="input-xlarge" name="NumberOfPayments" placeholder="Please select the payment plan">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Comment</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                    <textarea name="comment" class="span4" rows="4" cols="80" placeholder="Comment (Max 200 characters)"></textarea>
                </div>
            </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn">Cancel</button>
          </div>    
        </div>
      </form>
</div>
</body>
</html>