<?php 
include 'core.inc.php';
$email = $_SESSION['user_id'];

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
$submitphotos="";

$facultyfrom_err="";
$department_err="";
$nameofthefaculty_err="";
$nameofresourceperson_err="";
$place_err="";
$titleoflecture_err="";
$start_err="";
$end_err="";
$numberofstudents_err="";
$totalexpenditure_err="";
$expthrough_err="";
$submitphotos_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['nameofthefaculty'])&&isset($_POST['nameofresourceperson'])&&isset($_POST['place'])&&isset($_POST['titleoflecture'])&&isset($_POST['startdate'])&&isset($_POST['starttime'])&&isset($_POST['enddate'])&&isset($_POST['endtime'])&&isset($_POST['numberofstudents'])&&isset($_POST['totalexpenditure'])&&isset($_POST['expthrough'])&&isset($_POST['submitphotos'])) {

	if(empty($facultyfrom)) {
		$flag=1;
		$facultyfrom_err="* This field is mandatory.";
	} else {
		$facultyfrom=cleared_input($_POST['facultyfrom']);
	}

	if(empty($department)) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($nameofthefaculty)) {
		$flag=1;
		$nameofthefaculty_err="* This field is mandatory.";
	} else {
		$nameofthefaculty=cleared_input($_POST['nameofthefaculty']);
	}

	if(empty($nameofresourceperson)) {
		$flag=1;
		$nameofresourceperson_err="* This field is mandatory.";
	} else {
		$nameofresourceperson=cleared_input($_POST['nameofresourceperson_err']);
	}

	if(empty($place)) {
		$flag=1;
		$place_err="* This field is mandatory.";
	} else {
		$place=cleared_input($_POST['place']);
	}

	if(empty($titleoflecture)) {
		$flag=1;
		$titleoflecture_err="* This field is mandatory.";
		
	} else {
		$titleoflecture=cleared_input($_POST['titleoflecture']);
	}

	if(empty($starttime)||empty($startdate)) {
		$flag=1;
		$start_err="* This field is mandatory.";
		
	} else {
		$startdate=cleared_input($_POST['startdate']);
		$starttime=cleared_input($_POST['starttime']);
	}

	if(empty($endtime)||empty($enddate)) {
		$flag=1;
		$end_err="* This field is mandatory.";
		
	} else {
		$enddate=cleared_input($_POST['enddate']);
		$endtime=cleared_input($_POST['endtime']);
	}

	if(empty($numberofstudents)) {
		$flag=1;
		$numberofstudents_err="* This field is mandatory.";
	
	} else {
		$numberofstudents=cleared_input($_POST['numberofstudents']);
	}

	if(empty($totalexpenditure)) {
		$flag=1;
		$totalexpenditure_err="* This field is mandatory.";
	
	} else {
		$totalexpenditure=cleared_input($_POST['totalexpenditure']);
	}

	if(empty($expthrough)) {
		$flag=1;
		$expthrough_err="* This field is mandatory.";
	
	} else {
		$expthrough=cleared_input($_POST['expthrough']);
	}

	if(empty($submitphotos)) {
		$flag=1;
		$submitphotos_err="* This field is mandatory.";
	
	} else {
		$submitphotos=cleared_input($_POST['submitphotos']);
	}

	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `basicdetails` VALUES ('','$title','$gender','$fullname','$namefathus','$mothername','$academicpos','$dob','$highestqual','$extrahiqual','$statushiqual','$toa','$woa')";
		if($query_run=mysql_query($query)) {
			//header('Location: action.php');	
			echo 'Bingo';
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
					<img src="img/logo.png" alt="Walchand College of Engineering!">
				</div>
				
				<div class="thumb">	
					<div class="formcontent">
						<div class="form">
							<div class="title">
								<h1>Guest Lecture Organized by Faculty</h1>
							</div>
							<div class="descp">
								<p>Dear all, </p>
								<p>You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
								</p><p>Your username <a href="../../mainpg/welcome/">(<?php echo $_SESSION['user_id']; ?>)</a> will be recorded when you submit this form. Not smriti.bhandari? <a href="logout.inc.php">Sign out</a></p>
								<br><p id="req">* Required</p>
							</div>
							<br>
							<br>
							<div class="cont">
									<div class="form">
										<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
											<ul>
												<h2>Guest Lecture Organized by Faculty :</h2><br>
												<li>
													<h4>Faculty From *</h4><br>
													<select name="facultyfrom" id="facultyfrom">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
													<p class="warning"><?php echo $facultyfrom_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Department</h4><br>
													<select name="department" id="department">
														<option value=""></option>
														<option value="Mechanical">Mechanical</option>
														<option value="Civil">Civil</option>
														<option value="Electrical">Electrical</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="Electronics">Electronics</option>
													</select>
													
												</li>
												<br>
												<li>
													<h4>Name of the faculty *</h4>
													<p>*Use format 'N.K.Pathak' Do NOT give any spaces</p><br>
													<input type="text" name="nameofthefaculty">
													<p class="warning"><?php echo $nameofthefaculty_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Resource Person *</h4>
													<input type="text" name="nameofresourceperson">
													<p class="warning"><?php echo $nameofresourceperson_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Organization of Resource Person</h4>
													<p>Example: Mechanical Engg. Dept., COEP</p><br>
													<input type="text" name="organization">
													
												</li>
												<br>
																					
												<li>
													<h4>Place *</h4>
													<p>Example: Andheri (E), Mumbai</p><br>
													<input type="text" name="place">
													<p class="warning"><?php echo $place_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Title of Lecture *</h4>
													<input type="text" name="titleoflecture">
													<p class="warning"><?php echo $titleoflecture_err; ?></p>
												</li>
												
												<br>
												<li>
													<h4>Starting Date and Time of Lecture *</h4><br>
													<span><input type="date" name="startdate">       <input type="time" name="starttime"></span>
													<p class="warning"><?php echo $start_err; ?></p>
													
												</li>
												<br>
												<li>
													<h4>End Date and Time of Lecture *</h4><br>
													<span><input type="date" name="enddate">       <input type="time" name="endtime"></span>
													<p class="warning"><?php echo $end_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Number of Student/Faculties/Staff Attended Guest Lecture *</h4><br>
													<input type="text" name="numberofstudents">
													<p class="warning"><?php echo $numberofstudents_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Expenditure of Guest Lecture *</h4><br>
													<input type="text" name="totalexpenditure">
													<p class="warning"><?php echo $totalexpenditure_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Expenditure Through *</h4><br>
													<select name="expthrough" id="expthrough">
														<option value=""></option>
														<option value="TEQIP">TEQIP</option>
														<option value="Student Contribution">Student Contribution</option>
														<option value="WCE">WCE</option>
														<option value="Other">Other</option>
													</select>
												</li>
												<br>
												
												<li>
													<h4>I agree to submit photos related to lecture organized by me at <a href="#">info@walchandsangli.ac.in</a> *</h4><br>
													<span><input type="radio" name="submitphotos" value="agree">I Agree</input></span><br>
													<span><input type="radio" name="submitphotos" value="notagree">Not Agree</input></span><br>
													<span><input type="radio" name="submitphotos" value="notavailable">Not Available</input></span><br>
													<p class="warning"><?php echo $submitphotos_err; ?></p>
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
