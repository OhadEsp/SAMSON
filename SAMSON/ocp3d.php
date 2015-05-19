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

<script language="VBScript">
Dim stk

Sub InitPage()

	stkOptions = "dialogHeight:300px; dialogWidth:300px; center:yes; help:no; resizable:yes; status:no"
	SendCommand("ConControl / VerboseOff")
'	path = STKViewer.InstallDir + "Data\ExampleScenarios\Basic_STK_Space_Missions.vdf"
	path = "C:\temp\Basic_STK_Space_Missions.vdf"
'	path = STKViewer.InstallDir + "Data\Viewer\Basic_STK_Space_Missions.vdf"
	STKViewer.LoadPackage(path)
	STKViewer.MainToolbarVisible=TRUE
	STKViewer.GraphicsToolbarVisible=TRUE
	STKViewer.CaptureToolbarVisible=FALSE
	STKViewer.AnimationToolbarVisible=FALSE
	STKViewer.ProgressToolbarVisible=TRUE
	STKViewer.CompassToolbarVisible=FALSE
'	STKViewer.MessageToolbarVisible=FALSE
'	STKViewer.MovieMakingToolbarVisible=FALSE
	STKViewer.CompassVisible=FALSE
'	STKViewer.HelpToolbarVisible=FALSE
	STKViewer.MessageViewerVisible=FALSE
End Sub

Function SendCommand(command)
	on error resume next
	Set rVal = stk.Application.ExecuteCommand(command)
	if rVal.Count > 0 then
		SendCommand = rVal(0)
	else
		SendCommand = 0
	end if
End Function

Sub Forward()
	STKViewer.AnimateStartForward()
End Sub

Sub Reverse()
	STKViewer.AnimateStartReverse()
End Sub

Sub Reset()
	STKViewer.MessageViewerVisible=FALSE
	STKViewer.AnimateReset()
End Sub

Sub Pause()
	STKViewer.AnimatePause()
End Sub

Sub StepForward()
	STKViewer.AnimateStepForward()
End Sub

Sub StepReverse()
	STKViewer.AnimateStepReverse()
End Sub

Sub Slower()
	STKViewer.AnimateDecreaseStep()
End Sub

Sub Faster()
	STKViewer.AnimateIncreaseStep()
End Sub

</script>

<body>
		<div class="container-fluid">
				<!-- navbar -->
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">SAMSON</a>
					</div> <!-- navbar-header -->
					<div>
					  <ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profiles<span class="caret"></span></a>
						  <ul class="dropdown-menu">
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
							$("#sel1").change(function() {
							  if ($(this).val() == "op1") action="ocpTab.php"; 
							  if ($(this).val() == "op2") action="ocp2d.php"; 
							  if ($(this).val() == "op3") action="ocp3d.php"; 
							  $("#leftForm").attr("action", action);


							});
								$("#commands").hide();
								$('#maneuver').click(function() {
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

			<div class="col-md-8"> <!-- container for centralized part -->
				<div class="panel panel-default">
					<div class="panel-body"><center>
						<OBJECT
							name="STKViewer"
							classid="CLSID:B9ADF0BD-27E3-4C97-997F-94B139033429"
							width="640"
							height="480"
							border="0">
							<param name="EnableConnect" value="true">
							<param name="ConnectPort" value="5001">
						</OBJECT>
					</center></div>
				</div>
			</div> <!-- container for centralized part -->
			</div> <!-- row -->

<!-- <input type="button" onclick="STKViewer.LoadPackage('C:\temp\Basic_STK_Space_Missions.vdf')">
<p><script language="VBScript">Document.Write(STKViewer.InstallDir)</script></p> -->

</body>
</html>
