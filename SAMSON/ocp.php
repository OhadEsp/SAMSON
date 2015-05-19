<!DOCTYPE html>
<html lang="en">

<head>
	<title>Orbit Control Profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- width=device-width part sets the width of the page to follow the screen-width of the device -->
	<!-- initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser -->

	<link rel="stylesheet" href="/SAMSON/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/SAMSON/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css">

	<script src="/SAMSON/bootstrap-3.3.4-dist/js/jquery-1.11.2.min.js"></script>
	<script src="/SAMSON/moment-develop/moment.js"></script>
	<script src="/SAMSON/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	<script src="/SAMSON/bootstrap-datetimepicker-master/src/js/bootstrap-datetimepicker.js"></script>

<body>
		<div class="container-fluid">


				<!-- upper menu -->

				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">SAMSON</a>
					</div> <!-- navbar-header -->
					<div>
					  <ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profiles<span class="caret"></span></a>
						  <ul class="dropdown-menu"> <!-- menu of profiles -->
							<li><a href="#">System Overview Functional Profile</a></li>
							<li><a href="#">Orbit Control Profile</a></li>
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
				  </div> <!-- container-fluid -->
				</nav>

				<!-- end of upper menu -->

				<h5 align="left"><b>Orbit Control Profile</b></h2>

			<div class="row">



			<!-- left side menu for orbit control profile -->

			<div class="col-md-2 well" style="background-color:lavender;"> <!-- container for left side form -->
				<form role="form" action="ocpTab.php" id="leftForm">
					<div class="container-fluid">
							<div class="form-group">
								<label for="datetimepicker6">From:</label>
								<div class='input-group date' id='datetimepicker6'>
									<input type='text' class="form-control" required/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="datetimepicker7">To:</label>
								<div class='input-group date' id='datetimepicker7'>
									<input type='text' class="form-control" required/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="form-group">
							  <label for="sel1">Operation mode:</label>
							  <select class="form-control" id="sel1">
								<option value="op1">table</option>
								<option value="op2">2D</option>
								<option value="op3">3D</option>
							  </select>
							</div>
							<div class="checkbox">
							  	<label><input type="checkbox" id="maneuver"> Maneuver</label>
							</div>
							<div class="form-group" id="commands">
							  <label for="command">Commands:</label>
							  <textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Update</button>
					</div>
					<script type="text/javascript">

						var action;

						$(function () {
							$('#datetimepicker6').datetimepicker();
							$('#datetimepicker7').datetimepicker();
							$("#datetimepicker6").on("dp.change", function (e) {
								$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
							});
							$("#datetimepicker7").on("dp.change", function (e) {
								$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
							});
						});

						$(document).ready(function(){
							// jump when something in the 'select' box is chosen.
							$("#sel1").change(function() {
							  if ($(this).val() == "op1") action="ocpTab.php"; 
							  if ($(this).val() == "op2") action="ocp2d.php"; 
							  if ($(this).val() == "op3") action="ocp3d.php"; 
							  $("#leftForm").attr("action", action);


							});
								$("#commands").hide(); //hide all the "send commands" options
								$('#maneuver').click(function() { /*show all the "send commands" options when click on
																	 checkbox was detected.*/
									if( $(this).is(':checked')) {
										$("#commands").show();
									} else {
										$("#commands").hide();
									}
								});
						});
					</script>
				</form>
			</div> <!-- container for left side form -->

			<!-- end of left side menu for orbit control profile -->


			<!-- centralized part -->

			<div class="col-md-8"> <!-- container for centralized part -->
				<div class="panel panel-default">
				  <div class="panel-body">A Basic Panel</div>
				</div>
			</div> <!-- container for centralized part -->

			<!-- end of centralized part -->
			</div> <!-- row -->

</body>
</html>
