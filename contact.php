<!DOCTYPE html>
<html>
<head>
<title>Matrisokhi ~Helping Women~</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Doctor Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
	<!--header-->
	<?php include("inc/header.php"); ?>
	<!--//header-->
	
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>Contact us</h3>
			<div class="contact-form">
				<form action="contactconnection.php" method="POST">
					<input type="text" name="Name" placeholder="Name.." required="">
					<div class="col-md-6 cnt-inpt">
						<input  type="email" name="Email" placeholder="Email.." required="">
					</div>
					<div class="col-md-6 cnt-inpt">
						<input type="text" name="Telephone" placeholder="Phone Number.." required="">
					</div>
					<div class="clearfix"> </div>
					<textarea name="Message" placeholder="Phone Number.." required=""></textarea>
					<input name="submit" type="submit" value="submit">
				</form>
			</div>
		</div>
	</div>
	<!--//contact-->
	
	<!--footer-->
	<?php include("inc/footer.php");?>
	<!--smooth-scrolling-of-move-up-->
	
    <script src="js/bootstrap.js"> </script>
</body>
</html>