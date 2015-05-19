<!DOCTYPE html>
<html lang="en">

<head>
	<title>login</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- width=device-width part sets the width of the page to follow the screen-width of the device -->
	<!-- initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser -->

	<link rel="stylesheet" href="/SAMSON/bootstrap-3.3.4-dist/css/bootstrap.min.css">

<body>

				<!-- navbar -->
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">SAMSON</a>
					</div>
					<div>
					  <ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
					  </ul>
					</div>
				  </div>
				</nav>

				<!-- login screen -->
				<div class="container">
					<div class="jumbotron">
						<h1 align="center"><u>Login Page</u></h1>
						  <form role="form" action="home.php">
							<div class="form-group">
							  <label for="text">User Name:</label>
							  <input type="text" class="form-control" id="userName" placeholder="Enter User Name">
							</div>
							<div class="form-group">
							  <label for="pwd">Password:</label>
							  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
							</div>
							<div class="checkbox">
							  <label><input type="checkbox"> Remember me</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						  </form>
					</div> <!-- jumbotron -->
				</div> <!-- container -->

	<script src="/SAMSON/bootstrap-3.3.4-dist/js/jquery-1.11.2.min.js"></script>
	<script src="/SAMSON/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
