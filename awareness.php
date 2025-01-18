<?php include("admin/admin_inc/db.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Matrisokhi ~Helping Women~</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">				
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
	
	
	<style>
		.nimg{
		width: 100%;
		height: 200px;
		padding: 5px;
		}
		.news{
			text-align: center;
		}
		.mymain{
			margin: 80px auto;
		}
	</style>
	<div class="container">
		<div class="row mymain">
		<?php 
			$sel="SELECT * FROM news";
			$rs=$con->query($sel);
			while($row=$rs->fetch_assoc()){
		?>
			<div class="col-md-4">
				<div class="card">
					<div class="news">
						<img width="100%" height="200px" class="nimg" src="admin/newsimage/<?php echo $row['image']; ?>" />
						<h3><?php echo $row['heading']; ?></h3>
						<p><button data-toggle="modal" data-target="#myDetails<?php echo $row['nid']; ?>" class="btn btn-primary">Know more</button></p>
					</div>
				</div>


			</div>
			<!-- The Modal -->
			<div class="modal" id="myDetails<?php echo $row['nid']; ?>">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title"><?php echo $row['heading']; ?></h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							<?php echo $row['details']; ?>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>

					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	
	
	<!--footer-->
	<?php include("inc/footer.php");?>
	
	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>