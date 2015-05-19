<!DOCTYPE html>
<html lang="en">

<head>
	<title>home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- width=device-width part sets the width of the page to follow the screen-width of the device -->
	<!-- initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser -->

<!-- changed by Chen-->
	<!--link rel="stylesheet" href="/SAMSON/bootstrap-3.3.4-dist/css/bootstrap.min.css"-->
	<link rel="stylesheet" href="/SAMSON/bootstrap-3.3.4-dist/css/bootstrap.css">
<!--   -->

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
					  </ul>
					</div>
				  </div>
				</nav>




<div class="container">
	<div class="row">
		<!-- profile screen -->
		<div class="col-md-9">
			<!--div class="container"-->
				<div class="jumbotron-image">
					<h1 align="center"><u>SAMSON</u></h1>
					<p align="center">Space Autonomous Mission for Swarming and Geo-locating Nanosatellites</p>
					<center><img src='./3SAMsoverME.jpg' width='450' height='300'></center>
				</div> <!-- jumbotron -->
			<!--/div--> <!-- container -->
		</div>



		<!-- login screen -->
		<!--div class="container"-->
		<div class="col-md-offset-9">

				<div class="jumbotron-login" style="background-color:lavender ;" >

					<form role="form" action="chief.php">
						<!--div class="container-fluid-new"-->

							<div class="form-group">
								<label-new for="text">User Name</label-new>
								<input type="text" class="form-control" id="userName" placeholder="Enter User Name">
							</div>
							<div class="form-group">
								<label-new for="pwd">Password</label-new>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password">
							</div>
							<div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn-new">Login</button>
							</div>

						<!--/div-->
					</form>

				</div> <!-- jumbotron -->

			<div class="jumbotron-login" style="background-color:lavender;">
				<div class="form-group-new">
					<a>Forgot your password?</a>
	
				</div>
			</div>
			<div class="jumbotron-panels" style="background-color:aqua;">
			</div>
			<div class="jumbotron-panels" style="background-color:LightCyan;">
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
