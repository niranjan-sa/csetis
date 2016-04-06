<?php 
include 'core.inc.php';


$authorfrom="";
$department="";
$authorname="";
$coauthorname="";
$bookname="";
$dobp="";
$editionofbook="";
$isbn="";
$content="";
$agree="";

$authorfrom_err="";
$department_err="";
$authorname_err="";
$coauthorname_err="";
$bookname_err="";
$dobp_err="";
$editionofbook_err="";
$isbn_err="";
$content_err="";
$agree_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['authorfrom'])&&isset($_POST['department'])&&isset($_POST['authorname'])&&isset($_POST['bookname'])&&isset($_POST['dobp'])&&isset($_POST['content'])&&isset($_POST['agree'])) {

	if(empty($authorfrom)) {
		$flag=1;
		$authorfrom_err="* This field is mandatory.";
	} else {
		$authorfrom=cleared_input($_POST['authorfrom']);
	}

	if(empty($department)) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($authorname)) {
		$flag=1;
		$authorname_err="* This field is mandatory.";
	} else {
		$authorname=cleared_input($_POST['authorname']);
	}

	if(empty($bookname)) {
		$flag=1;
		$bookname_err="* This field is mandatory.";
	} else {
		$bookname=cleared_input($_POST['bookname']);
	}

	if(empty($dobp)) {
		$flag=1;
		$dobp_err="* This field is mandatory.";
	} else {
		$dobp=cleared_input($_POST['dobp']);
	}

	if(empty($content)) {
		$flag=1;
		$content_err="* This field is mandatory.";
		
	} else {
		$content=cleared_input($_POST['content']);
	}

	if(empty($agree)) {
		$flag=1;
		$agree_err="* This field is mandatory.";
		
	} else {
		$agree=cleared_input($_POST['agree']);
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
					<img src="img/logo.png" alt="Walchand College of Engineering!" width="100%" height="100%">
				</div>
				
				<div class="thumb">	
					<div class="formcontent">
						<div class="form">
							<div class="title">
								<h1>Book Published by Faculty and Student</h1>
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
												<h2>Book Published by Faculty and Student</h2><br>
												<li>
													<h4>Author from *</h4><br>
													<select name="authorfrom" id="authorfrom">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
																											</select>
													<p class="warning"><?php echo $authorfrom_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Department *</h4><br>
													<select name="department" id="department">
														<option value=""></option>
														<option value="Civil">Civil</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Electrical">Electrical</option>
														<option value="Electronics">Electronics</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="GeneralScience">General Science</option>
													</select>
													<p class="warning"><?php echo $department_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of First Author *</h4>
													<p>*Example: B.H.Patil</p><br>
													<input type="text" name="authorname">
													<p class="warning"><?php echo $authorname_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Co-Authors</h4>
													<p>*Example: A.H.Deshmukh, C.B.Patil</p><br>
													<input type="text" name="coauthorname">
												</li>
												<br>
												<li>
													<h4>Title of Book *</h4>
													<input type="text" name="bookname">
													<p class="warning"><?php echo $bookname_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date of Book Publication *</h4><br>
													<input type="date" name="dobp">
													<p class="warning"><?php echo $dobp_err; ?></p>
												</li>
												<br>
												<li>
												<li>
													<h4>Edition of Book</h4><br>
													<input type="text" name ="editionofbook" id="editionofbook"/>
												</li>
												<br>
													<h4>ISBN Number of Book</h4>
													<input type="text" name="isbn" id="isbn">
												</li>
												<br>
												<li>
													<h4>Abstract/Content of Book *</h4><br>
													<textarea id="content" name="content" rows ="10" cols="70"></textarea>
													<p class="warning"><?php echo $content_err; ?></p>
												</li>
												<br>
												<li>
													<h4>I agree to submit cover page of publication at <a href="#">info@walchandsangli.ac.in  *</a></h4><br>
													<select name="agree" id="agree">
														<option value=""></option>
														<option value="I Agree">I Agree</option>
														<option value="Not Agree">Not Agree</option>
														<option value="Not Available">Not Available</option>
														</select>
													<p class="warning"><?php echo $agree_err; ?></p>
												</li>
												<br>
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
