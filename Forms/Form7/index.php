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

$facultyfrom="";
$department="";
$nameofthefaculty="";
$nameofresourceperson="";
$organization="";
$place="";
$titleoflecture="";
$startdate="";
$starttime="";
$enddate="";
$endtime="";
$numberofstudents="";
$totalexpenditure="";
$expthrough="";

	if(isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['nameofthefaculty'])&&isset($_POST['nameofresourceperson'])&&isset($_POST['place'])&&isset($_POST['titleoflecture'])&&isset($_POST['startdate'])&&isset($_POST['starttime'])&&isset($_POST['enddate'])&&isset($_POST['endtime'])&&isset($_POST['numberofstudents'])&&isset($_POST['totalexpenditure'])&&isset($_POST['expthrough'])) {

		$facultyfrom=cleared_input($_POST['facultyfrom']);
		$department=cleared_input($_POST['department']);
		$nameofthefaculty=cleared_input($_POST['nameofthefaculty']);
		$nameofresourceperson=cleared_input($_POST['nameofresourceperson']);
		$organization=cleared_input($_POST['organization']);
		$place=cleared_input($_POST['place']);
		$titleoflecture=cleared_input($_POST['titleoflecture']);
		$startdate=cleared_input($_POST['startdate']);
		$starttime=cleared_input($_POST['starttime']);
		$enddate=cleared_input($_POST['enddate']);
		$endtime=cleared_input($_POST['endtime']);
		$numberofstudents=cleared_input($_POST['numberofstudents']);
		$totalexpenditure=cleared_input($_POST['totalexpenditure']);
		$expthrough=cleared_input($_POST['expthrough']);
	

		$query="INSERT INTO `guestlectureorganized` VALUES ('$a','$facultyfrom','$department','$nameofthefaculty','$nameofresourceperson','$organization','$place','$titleoflecture','$startdate','$starttime','$enddate','$endtime','$numberofstudents','$totalexpenditure','$expthrough')";
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
	<title>Guest Lecture Organized by Faculty</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
	function validateForm(){
		var facultynm=document.forms["myForm"]["nameofthefaculty"].value;
		var orgnm=document.forms["myForm"]["organization"].value;
		var place=document.forms["myForm"]["place"].value;
		var tol=document.forms["myForm"]["titleoflecture"].value;
		var numberofstudents=document.forms["myForm"]["numberofstudents"].value;
		var totalexpenditure=document.forms["myForm"]["totalexpenditure"].value;
		var patt1=/[0-9]/;
		

		if(patt1.test(facultynm) || patt1.test(orgnm) || patt1.test(tol) || patt1.test(place) )
				{
					
					 alert("No digits are allowed in name fields");
	       					 return false;
				}

		if(!patt1.test(numberofstudents) || !patt1.test(totalexpenditure) )
				{

					alert("Only digits allowed in Number fields");
					return false;
				}

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
					<form action="index.php" role="form" name="myForm" onSubmit="return validateForm()" method="POST">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Guest Lecture Organized by Faculty</h3></div>
							
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
														<h4>Faculty From *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="facultyfrom" id="facultyfrom" class="form-control" required>
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
											</div>	
												
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Department *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control" required="required">
														<option value=""></option>
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
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of the faculty *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofthefaculty" name="nameofthefaculty" required="required">
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>
									
											</div>

												<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Resource Person *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofresourceperson" name="nameofresourceperson" required>
												</div>
												
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Organization *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="organization" name="organization" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Example: Mechanical Engg. Dept., SPCE</p></div><br><br>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Place *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="place" name="place" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Example: Andheri (E), Mumbai</p></div>
									
											</div>

											<div class="form-group" >
												<label for="" style="text-align: right;">
														<h4>Title of Lecture *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="titleoflecture" name="titleoflecture" required>
												</div>
											</div><br><br>

											
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											
											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Starting Date of Lecture *</h4>
												</label><br>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="startdate" class="form-control" id="startdate" required><br><input type="time" name="starttime" class="form-control" id="starttime" required>
												</div>
									
											</div>



											<div class="form-group" >
												<label for="">
														<h4>End Date and Time of Lecture *</h4>
												</label><br>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="enddate" class="form-control" id="enddate" required><br><input type="time" name="endtime" class="form-control" id="endtime" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Number of Students Attended Lecture *</h4>
												</label><br>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="numberofstudents" name="numberofstudents" required>
												</div><br><br>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Total Expenditure*</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="totalexpenditure" name="totalexpenditure" required>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Expenditure Through *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="expthrough" id="expthrough" class="form-control" name="expthrough" required>
														<option value=""></option>
														<option value="TEQIP">TEQIP</option>
														<option value="Student Contribution">Student Contribution</option>
														<option value="WCE">WCE</option>
														<option value="Other">Other</option>
													</select>
												</div><br><br>
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
