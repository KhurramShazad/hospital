<!DOCTYPE HTML>
<html>

<head>
	<title>Online Doctor Appointment</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				maxwidth: 1600,
				speed: 600
			});
		});
	</script>

</head>

<body>
	<?php include 'nav.php' ?>
	<!--start-image-slider---->
	<div class="image-slider">
		<!-- Slideshow 1 -->
		<ul class="rslides" id="slider1">
			<li><img src="images/img1.jpg" alt=""></li>
			<li><img src="images/img2.jpg" alt=""></li>
			<li><img src="images/img3.jpg" alt=""></li>
		</ul>
		<!-- Slideshow 2 -->
	</div>
	<!--End-image-slider---->
	<div class="clear"> </div>
	<div class="content-grids">
		<div class="wrap">
			<div class="section group">


				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Patients</h3>
						<p>Register & Book Appointment</p>

						<button type="button" class="btn btn-primary"><span><a href="hms/user-login.php" style="text-decoration: none; color:white;">Click Here</a></span></button>

					</div>
				</div>

				<div class="listview_1_of_3 images_1_of_3" style="margin: 0% 0 0% 4.6%;">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Doctors Login</h3>
						<br>
						<button type="button" class="btn btn-primary"><span><a href="hms/doctor/" style="text-decoration: none; color:white;">Click Here</a></span></button>

					</div>
				</div>


				<div class="listview_1_of_3 images_1_of_3" style="margin: 0% 0 0% 5.6%;">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Admin Login</h3>

						<br>
						<button type="button" class="btn btn-primary"><span><a href="hms/admin/" style="text-decoration: none; color:white;">Click Here</a></span></button>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clear"> </div>

	<?php include 'footer.php'; ?>
</body>

</html>