<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<div class="container">
	<div>	
  	<?php include 'navbar.php';?>
  </div>
	<div class="row">
		<!--<div id="equalheight">      -->
		<div class="col-3 col-lg-2 col-md-2 col-sm-2 col-xs-12 demo row">
			<div>
				<p>&nbsp</p>
				<p>&nbsp</p>
			</div>
			<div class="info-block">
				<!-- BODY BOX-->
				<img class="img-responsive img-thumbnail"
					src="./images/img_flower.jpg" alt="Chania">
			</div>
		</div>
		<div class="col-6 col-lg-8 col-md-8 col-sm-8 col-xs-10 demo">
			<div class="center-block">
				<h3>TTGA 2015 Board of Directors</h3>
			</div>
<form class="form-horizontal" role="form" action="make_payment.php" method="post">
<div class="col-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 demo">
   <div class="form-group">
    <label class="control-label col-sm-2" for="first">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="first" placeholder="Enter first name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address1">Address Line1:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address1" placeholder="Enter address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" placeholder="Enter city">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="zip">Zip Code:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="zip" placeholder="Enter zip code">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="membershpFee">Membership Fee:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="membershpFee" placeholder="Enter membership fee">
    </div>
  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="donate">Donate:</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="donate" placeholder="Enter phone number">
	    </div>
	  </div>      
</div>  
<div class="col-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 demo">
	<div class="form-group">
    	<label class="control-label col-sm-2" for="last">LastName:</label>
    	<div class="col-sm-10"> 
      		<input type="text" class="form-control" id="last" placeholder="Enter last name">
    	</div>
  	</div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="address2">Address Line2:</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="address2" placeholder="Enter address">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="state">State:</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="state" placeholder="Enter address">
	    </div>
	  </div>	  
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="mobile">Phone Number:</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="mobile" placeholder="Enter phone number">
	    </div>
	  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>		</div>
		<div class="col-3 col-lg-2 col-md-2 col-sm-2 col-xs-2 demo row">
			<?php include 'rightColumn-ads.php';?>  
		</div>
		<!--</div>-->
	</div>
	<!--/row-->
</div>
</html>