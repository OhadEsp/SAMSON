<!DOCTYPE html>
<html lang="en">

<head>
	<title>home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- width=device-width part sets the width of the page to follow the screen-width of the device -->
	<!-- initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser -->

	<link rel="stylesheet" href="/SAMSON/bootstrap-3.3.4-dist/css/bootstrap.css">

  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

<body>

				<!-- navbar -->
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">SAMSON</a>
					</div>
					<div>
					  <ul class="nav navbar-nav">
						<li class="active"><a href="home.php">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profiles<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#">System Overview Functional Profile</a></li>
							<li><a href="ocp.php">Orbit Control Profile</a></li>
							<li><a href="#">Geo-Location Profile</a></li>
							<li><a href="#">Satellite(s) Maintenance Profile</a></li>
							<li><a href="#">Ground Station Maintenance Profile</a></li>
							<li><a href="#">System Administrator Profile</a></li>
						  </ul>
						</li>
					  </ul>
					  <ul class="nav navbar-nav navbar-right">
							<li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      				  </ul>
					</div>
				  </div>
				</nav>




<div class="container">
	<div class="row">
		<!-- profile screen -->
		<div class="col-md-9">
				<div class="jumbotron-image">
					<h1 align="center"><u>SAMSON</u></h1>
					<p align="center">Space Autonomous Mission for Swarming and Geo-locating Nanosatellites</p>
					<center><img src='./3SAMsoverME.jpg' width='450' height='300'></center>					
				</div>
		</div>



		<!-- login screen -->
		<!--div class="container"-->
		<div class="col-md-offset-9">

				<div class="jumbotron-profile" style="background-color:lavender ;" >

					<form role="form" action="chief.php">
						<!--div class="container-fluid-new"-->

							<div class="form-group-user">
								<div class="col-md-7">
									<h5 for="text">Welcome!</h5>
								</div>
								<div class="col-md-offset-7">
									<img src='./myPic.jpg' class= "img-circle-new" width='75' height='60'>
								</div>
							</div>


						<!--/div-->
					</form>

				</div> <!-- jumbotron -->

			<div class="jumbotron-login" style="background-color:lavender;">
				<div class="form-group-new">
					<a>Edit your personal information</a>	
				</div>
			</div>

			<div class="jumbotron-panels" style="background-color:aqua;">
			</div>
			<div class="jumbotron-panels" style="background-color:LightCyan;">
			</div>
			<div class="jumbotron-panels" style="background-color:PaleTurquoise ;">
			</div>
			<div class="jumbotron-panels" style="background-color:PaleTurquoise ;">
			</div>
			<div class="jumbotron-panels" style="background-color:aqua;">
			</div>


		</div> <!--col-md-offset-9-->


	</div> <!--row-->
</div><!-- container -->









	<script src="/SAMSON/bootstrap-3.3.4-dist/js/jquery-1.11.2.min.js"></script>
	<script src="/SAMSON/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
</html>
