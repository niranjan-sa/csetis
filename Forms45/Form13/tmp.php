<?php 
$id="";
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

$title_err="";
$gender_err="";
$fullname_err="";
$namefathus_err="";
$mothername_err="";
$academicpos_err="";
$dob_err="";
$highestqual_err="";
$statushiqual_err="";
$toa_err="";
$woa_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['title'])&&isset($_POST['gender'])&&isset($_POST['fullname'])&&isset($_POST['namefathus'])&&isset($_POST['mothername'])&&isset($_POST['academicpos'])&&isset($_POST['dob'])&&isset($_POST['highestqual'])&&isset($_POST['statushiqual'])&&isset($_POST['toa'])&&isset($_POST['woa'])) {

	if(!empty($title)) {
		$flag=1;
		$title_err="* The title is mandatory.";
		echo $title_err;
	} else {
		$title=cleared_input($_POST['title']);
	}

	if(!empty($gender)) {
		$flag=1;
		$gender_err="* The gender is mandatory.";
		echo $gender_err;
	} else {
		$gender=cleared_input($_POST['gender']);
	}

	if(!empty($fullname)) {
		$flag=1;
		$fullname_err="* The name is mandatory.";
		echo $fullname_err;
	} else {
		$fullname=cleared_input($_POST['fullname']);
	}

	if(!empty($namefathus)) {
		$flag=1;
		$namefathus_err="* The name is mandatory.";
		echo $namefathus_err;
	} else {
		$namefathus=cleared_input($_POST['namefathus']);
	}

	if(!empty($mothername)) {
		$flag=1;
		$mothername_err="* The name is mandatory.";
		echo $mothername_err;
	} else {
		$mothername=cleared_input($_POST['mothername']);
	}

	if(!empty($academicpos)) {
		$flag=1;
		$academicpos_err="* The Academic Position is mandatory.";
		echo $academicpos_err;
	} else {
		$academicpos=cleared_input($_POST['academicpos']);
	}

	if(!empty($dob)) {
		$flag=1;
		$dob_err="* The date of birth is mandatory.";
		echo $dob_err;
	} else {
		$dob=cleared_input($_POST['dob']);
	}

	if(!empty($highestqual)) {
		$flag=1;
		$highestqual_err="* The highest qualification is mandatory.";
		echo $highestqual_err;
	} else {
		$highestqual=cleared_input($_POST['highestqual']);
	}

	if(!empty($statushiqual)) {
		$flag=1;
		$statushiqual_err="* The status of highest qualification is mandatory.";
		echo $statushiqual_err;
	} else {
		$statushiqual=cleared_input($_POST['statushiqual']);
	}

	if(!empty($toa)) {
		$flag=1;
		$toa_err="* The type of appoinment is mandatory.";
		echo $toa_err;
	} else {
		$toa=cleared_input($_POST['toa']);
	}

	if(!empty($woa)) {
		$flag=1;
		$woa_err="* The wing of appoinment is mandatory.";
		echo $woa_err;
	} else {
		$woa=cleared_input($_POST['woa']);
	}
	//Entering the data into the data base
	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `basicdetails` VALUES ('','$title','$gender','$fullname','$namefathus','$mothername','$academicpos','$dob','$highestqual','$extrahiqual','$statushiqual','$toa','$woa')";
		if($query_run=mysql_query($query)) {
			echo "boom boom";	
		} else {
			echo 'Jim\'s dead';
		}
	}	
}
function cleared_input($data) {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

 ?>


<html>	
		<head>	
				<title>Main Page</title>
				<link rel="stylesheet" href="css/reset.css">
				<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
			<div class="wrap">
				
				<div class="header">
					<img src="img/logo.png" alt="Walchand College of Engineering!" width="100%" height="100%">
				</div>
				
				<div class="thumb">	
					<div class="formcontent">
						<div class="form">
							<div class="title">
								<h1>Faculty and profile details</h1>
							</div>
							<div class="descp">
								<p>Dear all, </p>
								<p>You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
								</p><p>Your username <a href="#">(smriti.bhandari@walchandsangli.ac.in)</a> will be recorded when you submit this form. Not smriti.bhandari? <a href="#">Sign out</a></p>
								<br><p id="req">* Required</p>
							</div>
							<br>
							<br>
							<div class="cont">
									<div class="form">
										<form action="action.php" method="post">
											<ul>
												<h2>Primary Details of the faculty :</h2><br>
												<li>
													<h4>Title *</h4><br>
													<select name="title" id="title">
														<option value=""></option>
														<option value="Master">Master</option>
														<option value="Ms.">Ms</option>
														<option value="Mr.">Mr.</option>
														<option value="Mrs.">Mrs.</option>
														<option value="Dr.">Dr.</option>
													</select>
													<p><?php  ?></p>
												</li>
												<br>
												<li>
													<h4>Gender *</h4><br>
													<select name="gender" id="gender">
														<option value=""></option>
														<option value="Male">Male</option>
														<option value="female">Female</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Name of the faculty *</h4>
													<p>*Use format 'N.K.Pathak' Do NOT give any spaces</p><br>
													<input type="text" name="fullname">
												</li>
												<br>
												<li>
													<h4>Name of Father/Husband *</h4>
													<p>*Use format 'N.K.Pathak' Do NOT give any spaces</p><br>
													<input type="text" name="fullname">
												</li>
												<br>
												<li>
													<h4>Mother's Name *</h4>
													<p>Sample: Sapana</p><br>
													<input type="text" name="fullname">
												</li>
												<br>
												<li>
													<h4>Academic Position *</h4><br>
													<select name="academicpos" id="academicpos">
														<option value=""></option>
														<option value="Lecturer">Lecturer</option>
														<option value="Sr. Lecturer">Sr. Lecturer</option>
														<option value="Assistant Professor">Assistant Professor</option>
														<option value="Associate Professor">Associate Professor</option>
														<option value="Professor">Professor</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Date of Birth *</h4><br>
													<input type="date" name="bday">
												</li>
												<br>
												<li>
													<h4>Highest Qualification *</h4>
													<p>Completed/pursuing</p><br>
													<select name="highestqual" id="highestqual">
														<option value=""></option>
														<option value="P.hD">P.hD</option>
														<option value="M.Tech">M.Tech</option>
														<option value="M.E.">M.E.</option>
														<option value="M.Sc">M.Sc</option>
														<option value="B.Tech">B.Tech</option>
														<option value="B.E.">B.E.</option>
														<option value="B.Sc">B.Sc</option>
														<option value="MBA">MBA</option>
														<option value="Other">Other</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Highest Qualification, If Other, Please Specify</h4><br>
													<input type="text" name="extrahiqual">
												</li>
												<br>
												<li>
													<h4>Status of Highest Qualification *</h4><br>
													<select name="statushiqual" id="statushiqual">
														<option value=""></option>
														<option value="Completed">Completed</option>
														<option value="Submitted">Submitted</option>
														<option value="Pursuing">Pursuing</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Type of Appointment *</h4><br>
													<select name="toa" id="toa">
														<option value=""></option>
														<option value="Regular">Regular</option>
														<option value="Contract">Contract</option>
														<option value="CHB">CHB</option>
														<option value="Adhoc">Adhoc</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Wing of Appointment *</h4><br>
													<select name="woa" id="woa">
														<option value=""></option>
														<option value="PG">PG</option>
														<option value="UG">UG</option>
														<option value="Diploma">Diploma</option>
													</select>
												</li>
												<br>
												<br>
												<li>
													<input type="submit" name="submit" value="Submit">
												</li>
											</ul>
										</form>
									</div>
									</div>
						</div>
					</div>						
				</div>				
			</div>
		
			<div class="footer">
				
			</div>
		</body>

</html>