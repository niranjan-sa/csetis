<!-- Form 1 Basic details -->
<?php 
include 'core.inc.php';
include 'connect.inc.php';

$a = $_SESSION['user_id'];	
$query="SELECT `username` FROM `userlogin` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
		$err="Invalid Password/Username combination";
	} else {
		$username=mysql_result($query_run, 0,'username');	
 	}
}
else
{
	echo mysql_error();
}

$title="";
$gender="";
$fullname="";
$namefathus="";
$mothername="";
$academicpos="";
$dob="";
$highestqual="";
$extrahiqual="";
$statushiqual="";
$toa="";
$woa="";
$department="";

$query="SELECT * FROM `basicdetails` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
	} else {
		$title=mysql_result($query_run, 0,'title');
		$gender=mysql_result($query_run, 0,'gender');
		$fullname=mysql_result($query_run, 0,'fullname');
		$namefathus=mysql_result($query_run, 0,'namefathus');
		$mothername=mysql_result($query_run, 0,'mothername');
		$academicpos=mysql_result($query_run, 0,'academicpos');
		$dob=mysql_result($query_run, 0,'dob');
		$highestqual=mysql_result($query_run, 0,'highestqual');
		$extrahiqual=mysql_result($query_run, 0,'extrahiqual');
		$statushiqual=mysql_result($query_run, 0,'statushiqual');
		$toa=mysql_result($query_run, 0,'toa');
		$woa=mysql_result($query_run, 0,'woa');
		$department=mysql_result($query_run, 0,'department');	
 	}
}
else
{
	echo mysql_error();
}

if(isset($_POST['title'])&&isset($_POST['gender'])&&isset($_POST['fullname'])&&isset($_POST['namefathus'])&&isset($_POST['mothername'])&&isset($_POST['academicpos'])&&isset($_POST['dob'])&&isset($_POST['highestqual'])&&isset($_POST['statushiqual'])&&isset($_POST['toa'])&&isset($_POST['woa'])) {
	
	$title=cleared_input($_POST['title']);
	$gender=cleared_input($_POST['gender']);
	$fullname=cleared_input($_POST['fullname']);
	$namefathus=cleared_input($_POST['namefathus']);
	$mothername=cleared_input($_POST['mothername']);
	$academicpos=cleared_input($_POST['academicpos']);
	$dob=cleared_input($_POST['dob']);
	$highestqual=cleared_input($_POST['highestqual']);
	$extrahiqual=cleared_input($_POST['extrahiqual']);
	$statushiqual=cleared_input($_POST['statushiqual']);
	$toa=cleared_input($_POST['toa']);
	$woa=cleared_input($_POST['woa']);
	$department=cleared_input($_POST['department']);
	

		$query="SELECT `userid` FROM `basicdetails` WHERE `userid`='$a'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$query1 ="INSERT INTO `basicdetails` VALUES ('$a','$title','$gender','$fullname','$namefathus','$mothername','$academicpos','$dob','$highestqual','$extrahiqual','$statushiqual','$toa','$woa','$department')";
					if($query_run=mysql_query($query1)) {
						//echo "boom boom";	
					} else {
						//echo 'Jim\'s dead';
					}		
			} else {
				$query2 ="UPDATE `basicdetails` SET `title`='$title',`gender`='$gender',`fullname`='$fullname',`namefathus`='$namefathus',`mothername`='$mothername',`academicpos`='$academicpos',`dob`='$dob',`highestqual`='$highestqual',`extrahiqual`='$extrahiqual',`statushiqual`='$statushiqual',`toa`='$toa',`woa`='$woa',`department`='$department' WHERE `userid`='$a'";
 				if($query_run=mysql_query($query2)) {
						//echo "boom boom1";	
					} else {
						//echo 'Jim\'s dead1';
					}
 			}
		}
		else
		{
			echo mysql_error();
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
	<title>Basic Details</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
		var fname =document.forms["myForm"]["fullname"].value;
		if(fname.test(/[0-9]/))
		{
			document.getElementById("demo").innerHTML="Failed";
			return false;
		}
			
	</script>
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
					<form action="index.php" role="form" method="post" name="myForm" >
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Basic Details</h3></div>
							
							<div class="panel panel-default" style="padding-top: 1%;">
								<p class="bg-info" align="left">
									Dear all,
									You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
									Your username <a href="../../mainpg/welcome/">(<?php echo $username; ?>)</a> will be recorded when you submit this form. <button type="button" class="btn btn-link"><a href="logout.inc.php">Sign out</a></button><br>
								</p>
								<p class="bg-danger">* Required</p>
							</div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Title *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="title" id="title" class="form-control"  required>
														<option value="<?php echo $title?>"><?php echo $title?></option>
														<option value="Master">Master</option>
														<option value="Ms.">Ms.</option>
														<option value="Mr.">Mr.</option>
														<option value="Mrs.">Mrs.</option>
														<option value="Dr.">Dr.</option>
													</select>
												</div>
												
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Gender *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="gender" id="gender" class="form-control" required>
														<option value="<?php echo $gender?>"><?php echo $gender?></option>
														<option value="Male">Male</option>
														<option value="female">Female</option>
													</select>
												</div>
												
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of the faculty *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $fullname?>" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Father/Husband *</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" name="namefathus" id="namefathus" value="<?php echo $namefathus?>" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>


									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Mother's Name *</h4>
												</label>

												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" name="mothername" id="mothername" value="<?php echo $mothername?>" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Sample: Sapana</p></div><br>

									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Academic Position *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="academicpos" id="academicpos" class="form-control">
														<option value="<?php echo $academicpos?>"><?php echo $academicpos?></option>
														<option value="Lecturer">Lecturer</option>
														<option value="Sr. Lecturer">Sr. Lecturer</option>
														<option value="Assistant Professor">Assistant Professor</option>
														<option value="Associate Professor">Associate Professor</option>
														<option value="Professor">Professor</option>
													</select>
												</div>

											<div class="form-group" >
												<label for="">
														<h4>Date of Birth *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dob" class="form-control" id="dob" value="<?php echo $dob?>"required>
												</div>
									
											</div>
									
											</div>	
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											
											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Highest Qualification *</h4>
												</label>
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="highestqual" id="highestqual" class="form-control">
															<option value="<?php echo $highestqual?>"><?php echo $highestqual?></option>
															<option value="Ph.D.">Ph.D.</option>
															<option value="M.Tech">M.Tech</option>
															<option value="M.E.">M.E.</option>
															<option value="M.Sc">M.Sc</option>
															<option value="B.Tech">B.Tech</option>
															<option value="B.E.">B.E.</option>
															<option value="B.Sc">B.Sc</option>
															<option value="MBA">MBA</option>
															<option value="Other">Other</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="">
														<h4>Highest Qualification, If Other, Please Specify</h4>
												</label>

												<div class="col-xs-10" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="extrahiqual" name="extrahiqual" value="<?php echo $extrahiqual?>"><br>
												</div>
												<br>
												
											</div>
											<div class="form-group">
												<label for="">
														<h4>Status of Highest Qualification *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="statushiqual" id="statushiqual" class="form-control" required>
														<option value="<?php echo $statushiqual?>"><?php echo $statushiqual?></option>
														<option value="Completed">Completed</option>
														<option value="Submitted">Submitted</option>
														<option value="Pursuing">Pursuing</option>
													</select>
												</div>

											</div>
											<div class="form-group">
												<label for="">
														<h4>Type of Appointment *</h4>
												</label>
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="toa" id="toa" class="form-control">
														<option value="<?php echo $toa?>"><?php echo $toa?></option>
														<option value="Regular">Regular</option>
														<option value="Contract">Contract</option>
														<option value="CHB">CHB</option>
														<option value="Adhoc">Adhoc</option>
													</select>
												</div>

									

											</div>
											<div class="form-group">
												<label for="">
														<h4>Wing of Appointment *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="woa" id="woa" class="form-control">
														<option value="<?php echo $woa?>"><?php echo $woa?></option>
														<option value="PG">PG</option>
														<option value="UG">UG</option>
														<option value="Diploma">Diploma</option>
													</select>
												</div>

											</div>

											<div class="form-group">
												<label for="">
														<h4>Working Department *</h4>
												</label>
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control" required>
														<option value="<?php echo $department?>"><?php echo $department?></option>
														<option value="Institute Level MoU">Institute Level MoU</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Civil">Civil</option>
														<option value="Electrical">Electrical</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="Electronics">Electronics</option>
														<option value="General Science">General Science</option>
													</select>
												</div>

									

											</div><br><br>
									</div>
								</div>
							</div>
							
							<div class="panel-footer">
								<button type="submit" class="btn btn-default btn-md" value="submit" onclick="return validateForm()">Submit</button>
								<p id="demo"> </p>
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