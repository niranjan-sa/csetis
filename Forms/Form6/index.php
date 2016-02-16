<!-- Form 1 Basic details -->
<?php 

include 'core.inc.php';
include 'connect.inc.php';

$a = $_SESSION['user_id'];	
$query="SELECT `username` FROM `userlogin` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
		echo $err="Invalid Password/Username combination";
	} else {
		$username=mysql_result($query_run, 0,'username');	
 	}
}
else
{
	echo mysql_error();
}


$eventcoordinatorfrom="";
$department="";
$typeofevent="";
$duration="";
$coordinatorname="";
$cocoordinatorname="";
$dos="";
$doe="";
$toe="";
$nameofresource1="";
$nameofresource2="";
$nameofresource3="";
$nameofresource4="";
$details="";
$totalparticipants="";
$wceparticipants="";
$nonwceparticipants="";
$expenditure="";
$expenditurethrough="";
$otherthing="";
$irg="";

if(isset($_POST['eventcoordinatorfrom'])&&isset($_POST['department'])&&isset($_POST['typeofevent'])&&isset($_POST['duration'])&&isset($_POST['coordinatorname'])&&isset($_POST['dos'])&&isset($_POST['doe'])&&isset($_POST['toe'])&&isset($_POST['nameofresource1'])&&isset($_POST['details'])&&isset($_POST['totalparticipants'])&&isset($_POST['wceparticipants'])&&isset($_POST['nonwceparticipants'])&&isset($_POST['expenditure'])&&isset($_POST['expenditurethrough'])) {
$eventcoordinatorfrom=cleared_input($_POST['eventcoordinatorfrom']);
$department=cleared_input($_POST['department']);
$typeofevent=cleared_input($_POST['typeofevent']);
$duration=cleared_input($_POST['duration']);
$coordinatorname=cleared_input($_POST['coordinatorname']);
$dos=cleared_input($_POST['dos']);
$doe=cleared_input($_POST['doe']);
$toe=cleared_input($_POST['toe']);
$nameofresource1=cleared_input($_POST['nameofresource1']);
$details=cleared_input($_POST['details']);
$totalparticipants=cleared_input($_POST['totalparticipants']);
$wceparticipants=cleared_input($_POST['wceparticipants']);
$nonwceparticipants=cleared_input($_POST['nonwceparticipants']);
$expenditure=cleared_input($_POST['expenditure']);
$expenditurethrough=cleared_input($_POST['expenditurethrough']);
$cocoordinatorname=cleared_input($_POST['cocoordinatorname']);
$nameofresource2=cleared_input($_POST['nameofresource2']);
$nameofresource3=cleared_input($_POST['nameofresource3']);
$nameofresource4=cleared_input($_POST['nameofresource4']);
$otherthing=cleared_input($_POST['otherthing']);
$irg=cleared_input($_POST['irg']);

		$query="INSERT INTO `eventorganized` VALUES ('$a','$eventcoordinatorfrom','$department','$typeofevent','$duration','$coordinatorname','$cocoordinatorname','$dos','$doe','$toe','$nameofresource1','$nameofresource2','$nameofresource3','$nameofresource4','$details','$totalparticipants','$wceparticipants','$nonwceparticipants','$expenditure','$expenditurethrough','$otherthing','$irg')";
		if($query_run=mysql_query($query)) {
			//header('Location: action.php');	
			//echo 'Bingo';
		} else {
			//echo 'Jim\'s dead';
		}
}

function cleared_input($data) {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Event Organised</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
<body>
	<div class="container-fluid">
		<!--<div class="jumbotron">-->
			<div class="header">
				<div class="row" style="padding-top: 2%;">
					<div class="col-xs-3 " padding-right="10%" height="10%">
						<br>
						<img src="../../bootstrap/img/Walchand_11.gif" class="img-responsive" alt="Responsive Image" align="right"  />
					</div>
					<div class="col-xs-9 ">
						<h1 style="text-align: left;">Walchand College of Engineering, Sangli.</h1>
						<h5 style="text-align: right; padding-right: 30%; font-weight: bold; font-style: italic;">(An autonomous institute.)</h5>
						<h3 style="padding-left: 5%; font-weight: bold;">Department of Computer Science and Engineering.</h3>
						<h3 style="padding-left: 17%; text-decoration: underline; font-weight: bold;">Teacher's Information System.</h3>
					</div>	
				</div>
			</div>
		<!--</div>-->	

		<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-10" style="margin-left: 8%">
					<form action="index.php" role="form" method="post">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Event Organized by Faculty and Staff</h3></div>
							
							<div class="panel panel-default" style="padding-top: 1%;">
								<p class="bg-info" align="left">
									Dear all,
									You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
									Your username <a href="../../mainpg/welcome/">(<?php echo $username; ?>)</a> will be recorded when you submit this form.  <button type="button" class="btn btn-link"><a href="logout.inc.php">Sign out</a></button><br>
								</p>
								<p class="bg-danger">* Required</p>
							</div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Event Coordinator From *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" required>
													<select name="eventcoordinatorfrom" id="eventcoordinatorfrom" class="form-control">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Department *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control" required>
														<option value=""></option>
														<option value="Civil">Civil</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Electrical">Electrical</option>
														<option value="Electronics">Electronics</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="GeneralScience">General Science</option>
													</select>
												</div>
											</div>
											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Type of Event *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="typeofevent" id="typeofevent" class="form-control" required>
														<option value=""></option>
													<option value="FacultyDevelopmentProgramme">Faculty Development Programme</option>
													<option value="StaffDevelopmentProgramme">Staff Development Programme</option>
													<option value="Workshop">Workshop</option>
													<option value="Conference">Conference</option>
													<option value="Webinar">Webinar</option>
													</select>
												</div>
												
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Duration of Event *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="duration" id="duration" class="form-control">
														<option value=""></option>
														<option value="oneday">One Day</option>
														<option value="twodays">Two Days</option>
														<option value="threedays">Three Days</option>
														<option value="fourdays">Four Days</option>
														<option value="oneweek">One Week</option>
														<option value="twoweeks">Two Weeks</option>
														<option value="threeweeks">Three Weeks</option>
														<option value="onemonth">One Month</option>
													</select>
												</div>
												
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Coordinator *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="coordinatorname" name="coordinatorname" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Co-Coordinator</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="cocoordinatorname" name="cocoordinatorname">
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>
											</div>

											<div class="form-group">
												<label for="">
														<h4>Starting Date of Event *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dos" class="form-control" id="dos" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="">
														<h4>End Date of Event *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="doe" class="form-control" id="doe" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Title of Event *</h4>
												</label>

												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="toe" name="toe" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Example: Recent Trends in Manufacturing Engineering</p></div><br>

									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Resourse Person1 *</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofresource1" name="nameofresource1" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info"></p></div><br>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;" style="margin-top: 5%;">
														<h4>Name of Resourse Person2</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofresource2" name="nameofresource2">
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;" style="margin-top: 5%;">
														<h4>Name of Resourse Person 3</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofresource3" name="nameofresource3">
												</div>
											</div><br><br>



									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											<div class="form-group" style="margin-top: 5%;">
												<label for="" style="text-align: right;" style="margin-top: 5%;">
														<h4>Name of Resourse Person4</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofresource4" name="nameofresource4">
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info"></p></div><br>
											</div>

											

											<div class="form-group">
												<label for="" style="text-align: right;" style="margin-top: 5%;">
														<h4>Details of Event *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" ><br>
													<textarea id="details" name="details" rows="05" cols="80" class="form-control" required></textarea>
												</div>
												<br><br><br><br><br><br>
											</div>
											<div class="form-group">
												<label for="">
														<h4>Total Number of Participant *</h4>
												</label>
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<input type="text" id="totalparticipants" name="totalparticipants" class="form-control" required>
															
												</div>
											</div>
											<div class="form-group">
												<label for="">
														<h4>Total Number of WCE Participant *</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="wceparticipants" name="wceparticipants" required><br>
												</div>
												<br>
												
											</div>

											<div class="form-group">
												<label for="">
														<h4>Total Number of Non-WCE Participant *</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nonwceparticipants" name="nonwceparticipants" required><br>
												</div>
												
											</div>

											<div class="form-group">
												<label for="">
														<h4>Total Expenditure of Event (In Lakhs) *</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="expenditure" name="expenditure" required><br>
												</div>
												
											</div>
											<div class="form-group">
												<label for="">
														<h4>Expenditure Through *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="expenditurethrough" id="expenditurethrough" class="form-control" required>
													<option value=" "> </option>
													<option value="TEQIPII">TEQIPII</option>
													<option value="WCE">WCE</option>
													<option value="AICTE">AICTE</option>
													<option value="UGC">UGC</option>
													<option value="DTE">DTE</option>
													<option value="Other">Other</option>
													</select>
												</div>

											</div>
											<div class="form-group">
												<label for="">
														<h4>If other, Please Specify</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="otherthing" name="otherthing">
												</div>
												
											</div>

									

											<div class="form-group">
												<label for="">
														<h4>Total IRG Generated (In Lakhs)</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="irg" name="irg">
												</div><br><br><br>
												
											</div>

									</div>
								</div>
							</div>
							
							<div class="panel-footer">
								<button type="submit" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			
		</div>
	</div>

<script src="../../bootstrap/js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>










<!--

<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-10" style="margin-left: 8%">
					<form action="#" role="form">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Basic Details</h3></div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
												
									</div>
								</div>
								<div class="col-xs-6" >
									<div class="panel panel-default">
										
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<button type="button" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			
		</div>

-->