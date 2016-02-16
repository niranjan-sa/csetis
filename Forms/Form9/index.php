
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

$wing="";
$department="";
$other1="";
$nof="";
$tod="";
$other2="";
$quantity="";
$purchased="";
$specification="";
$expenditure="";
$dop="";

if(isset($_POST['wing'])&&isset($_POST['department'])&&isset($_POST['nof'])&&isset($_POST['tod'])&&isset($_POST['purchased'])&&isset($_POST['specification'])&&isset($_POST['expenditure'])&&isset($_POST['dop'])) {
$wing=cleared_input($_POST['wing']);
$department=cleared_input($_POST['department']);
$tod=cleared_input($_POST['tod']);
$nof=cleared_input($_POST['nof']);
$purchased=cleared_input($_POST['purchased']);
$specification=cleared_input($_POST['specification']);
$expenditure=cleared_input($_POST['expenditure']);
$dop=cleared_input($_POST['dop']);
$other1=cleared_input($_POST['other1']);
$other2=cleared_input($_POST['other2']);
$quantity=cleared_input($_POST['quantity']);

$query="INSERT INTO `infrastructuredevelopment` VALUES ('$a','$wing','$department','$other1','$nof','$tod','$other2','$quantity','$purchased','$specification','$expenditure','$dop')";
		
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
	<title>Infrastructural Development</title>
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
							<div class="panel-heading"><h3>Infrastructural Development</h3></div>
							
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
														<h4>Infrastructural Development in Wing *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="wing" id="wing" class="form-control" required>
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
											</div><br><br>

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
														<option value="Library">Library</option>
														<option value="BoysHostel">Boys Hostel</option>
														<option value="GirlsHostel">Girls Hostel</option>
														<option value="Gymkhana">Gymkhana</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>
											

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>If Other, Please Specify</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="other1" name="other1">
												</div>
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Faculty (Under the guidance work carried) *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nof" name="nof" required>
												</div>
											</div><br><br>

											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Type of Development *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="tod" id="tod" class="form-control" required>
													<option value=""></option>
													<option value="Instrument">Instrument</option>
													<option value="Software">Software</option>
													<option value="Laptop">Laptop/PC/Server</option>
													<option value="Furniture">Furniture</option>
													<option value="AirConditioner">Air-Conditioner</option>
													<option value="Other">Other</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>If Other, Please Specify</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="other2" name="other2">
												</div>
											</div>

											


									
												
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
										<br><br>
										<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Total Purchased Quantity (If applicable)</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="quantity" name="quantity">
												</div>
										</div><br><br>

										<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Purcahsed Through *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="purchased" id="purchased" class="form-control" required>
													<option value=""></option>
													<option value="DRF">DRF</option>
													<option value="TEQIP">TEQIP</option>
													<option value="ProjectGrant">Project Grant</option>
													<option value="PGFund">PG Fund</option>
													<option value="Other">Other</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Specification of Product *</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="specification" name="specification" required>
												</div>						
											</div><br><br>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Total Expenditure (In Lakhs) *</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="expenditure" name="expenditure" required>
												</div>						
											</div><br><br>

										<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Purchase *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dop" class="form-control" id="dop" required>
												</div>
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