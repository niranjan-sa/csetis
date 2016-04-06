<?php 
include 'core.inc.php';
$email = 

$facultyfrom="";
$department="";
$nameofthefaculty="";
$nameoforganization="";
$place="";
$typeoflecture="";
$titleoflecture="";
$durationoflecture="";
$dol="";
$numberofstudents="";
$submitphotos="";

$facultyfrom_err="";
$department_err="";
$nameofthefaculty_err="";
$nameoforganization_err="";
$place_err="";
$typeoflecture_err="";
$titleoflecture_err="";
$durationoflecture_err="";
$dol_err="";
$numberofstudents_err="";
$submitphotos_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['facultyfrom'])&&isset($_POST['nameofthefaculty'])&&isset($_POST['nameoforganization'])&&isset($_POST['place'])&&isset($_POST['typeoflecture'])&&isset($_POST['titleoflecture'])&&isset($_POST['durationoflecture'])&&isset($_POST['dol'])&&isset($_POST['numberofstudents'])&&isset($_POST['submitphotos'])) {

	if(empty($facultyfrom)) {
		$flag=1;
		$facultyfrom_err="* This field is mandatory.";
	} else {
		$facultyfrom=cleared_input($_POST['facultyfrom']);
	}

	if(empty($nameofthefaculty)) {
		$flag=1;
		$nameofthefaculty_err="* This field is mandatory.";
	} else {
		$nameofthefaculty=cleared_input($_POST['nameofthefaculty']);
	}

	if(empty($nameoforganization)) {
		$flag=1;
		$nameoforganization_err="* This field is mandatory.";
	} else {
		$nameoforganization=cleared_input($_POST['nameoforganization']);
	}

	if(empty($place)) {
		$flag=1;
		$place_err="* This field is mandatory.";
	} else {
		$place=cleared_input($_POST['place']);
	}

	if(empty($typeoflecture)) {
		$flag=1;
		$typeoflecture_err="* This field is mandatory.";
	} else {
		$typeoflecture=cleared_input($_POST['typeoflecture']);
	}

	if(empty($titleoflecture)) {
		$flag=1;
		$titleoflecture_err="* This field is mandatory.";
		
	} else {
		$titleoflecture=cleared_input($_POST['titleoflecture']);
	}

	if(empty($durationoflecture)) {
		$flag=1;
		$durationoflecture_err="* This field is mandatory.";
		
	} else {
		$durationoflecture=cleared_input($_POST['durationoflecture']);
	}

	if(empty($dol)) {
		$flag=1;
		$dol_err="* This field is mandatory.";
	
	} else {
		$dol=cleared_input($_POST['dol']);
	}

	if(empty($numberofstudents)) {
		$flag=1;
		$numberofstudents_err="* This field is mandatory.";
	
	} else {
		$numberofstudents=cleared_input($_POST['numberofstudents']);
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
								<h1>Guest Lecture Delivered by Faculty</h1>
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
												<h2>Guest Lecture Delivered by Faculty :</h2><br>
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
													<h4>Name of Organization Where Lecture Delivered *</h4>
													<p>Example: Mechanical Engg. Dept., SPCE</p><br>
													<input type="text" name="nameoforganization">
													<p class="warning"><?php echo $nameoforganization_err; ?></p>
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
													<h4>Type of Lecture *</h4><br>
													<select name="typeoflecture" id="typeoflecture">
														<option value=""></option>
														<option value="Guest Lecture">Guest Lecture</option>
														<option value="Faculty Development Program">Faculty Development Program</option>
														<option value="Staff Development Program">Staff Development Program</option>
														<option value="Workshop">Workshop</option>
														<option value="Inauguration Of Event">Inauguration Of Event</option>
														<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $typeoflecture_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Title of Lecture *</h4><br>
													<input type="text" name="titleoflecture">
													<p class="warning"><?php echo $titleoflecture_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Duration of Lecture *</h4><br>
													<select name="durationoflecture" id="durationoflecture">
														<option value=""></option>
														<option value="One Hour">One Hour</option>
														<option value="Two Hour">Two Hour</option>
														<option value="Three Hour">Three Hour</option>
														<option value="One Day">One Day</option>
														<option value="Two Day">Two Day</option>
														<option value="More">More</option>
													</select>
													<p class="warning"><?php echo $durationoflecture_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Starting Date of Lecture *</h4><br>
													<input type="date" name="dol">
													<p class="warning"><?php echo $dol_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Number of Student/Faculties/Staff Attended Your Lecture *</h4><br>
													<input type="text" name="numberofstudents">
													<p class="warning"><?php echo $numberofstudents_err; ?></p>
												</li>
												<br>
												<li>
													<h4>I agree to submit photos related to lecture delivered by me at <a href="#">info@walchandsangli.ac.in</a> *</h4><br>
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
