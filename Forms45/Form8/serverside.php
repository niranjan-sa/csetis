<?php 
include 'core.inc.php';

$email=$_SESSION['user_id'];
$facultyfrom="";
$department="";
$pov="";
$nof="";
$details="";
$eov="";
$sponsor="";
$other="";
$agree="";



$facultyfrom_err="";
$department_err="";
$pov_err="";
$nof_err="";
$details_err="";
$eov_err="";
$sponsor_err="";
$other_err="";
$agree_err="";


$field_not_set="";

$flag=0;

if(isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['pov'])&&isset($_POST['nof'])&&isset($_POST['details'])&&isset($_POST['eov'])&&isset($_POST['sponsor'])&&isset($_POST['agree'])) {

	if(empty($_POST['facultyfrom'])) {
		$flag=1;
		$facultyfrom_err="* This field is mandatory.";
	} else {
		$facultyfrom=cleared_input($_POST['facultyfrom']);
	}

	if(empty($_POST['department'])) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($_POST['pov'])) {
		$flag=1;
		$pov_err="* This field is mandatory.";
	} else {
		$pov=cleared_input($_POST['pov']);
	}

	if(empty($_POST['nof'])) {
		$flag=1;
		$nof_err="* This field is mandatory.";
	} else {
		$nof=cleared_input($_POST['nof']);
	}

	if(empty($_POST['details'])) {
		$flag=1;
		$details_err="* This field is mandatory.";
	} else {
		$details=cleared_input($_POST['details']);
	}

	if(empty($_POST['eov'])) {
		$flag=1;
		$eov_err="* This field is mandatory.";
	} else {
		$eov=cleared_input($_POST['eov']);
	}
	
	if(empty($_POST['sponsor'])) {
		$flag=1;
		$sponsor_err="* This field is mandatory.";
	} else {
		$sponsor=cleared_input($_POST['sponsor']);
	}
	
	if(empty($_POST['agree'])) {
		$flag=1;
		$agree_err="* This field is mandatory.";
	} else {
		$agree=cleared_input($_POST['agree']);
	}
	$other=cleared_input($_POST['other']);
	
	
	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `basicdetails` VALUES ('$email','$facultyfrom','$department','$pov','$nof','$details','$eov','$sponsor','$other','$agree')";
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
								<h1>Foreign Travel</h1>
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
												<h2>Foreign Travel</h2><br>
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
													<h4>Purpose of Visit *</h4><br>
													<select name="pov" id="pov">
													<option value=""></option>
													<option value="Conference">Conference</option>
													<option value="Workshop">Workshop</option>
													<option value="MoU">MoU</option>
													<option value="Training">Training</option>
													<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $pov_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Faculty *</h4><br>
													<p>Example: A.H.Patil</p><br>
													<input type="text" name="nof"
													<p class="warning"><?php echo $nof_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Details of Visit *</h4><br>
													<textarea id="details" name="details" rows="10" cols="70"></textarea>
													<p class="warning"><?php echo $details_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Expenditure of Visit *</h4><br>
													<input type="text" name="eov"/>
													<p class="warning"><?php echo $eov_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Visit Sponsored Under *</h4><br>
													<select name="sponsor" id="sponsor">
													<option value=""></option>
													<option value="TEQIP">TEQIP</option>
													<option value="WceFund">WCE Fund</option>
													<option value="Self">Self</option>
													<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $sponsor_err; ?></p>
												</li>
												<br>
												<li>
													<h4>If other, Please Mention</h4><br>
													<input type="text" name="other" />
												</li>
												<br>
												<li>
													<h4>I agree to submit event photos to <a href="#">info@walchandsangli.ac.in</a> *</h4><br>
													<span><input type="radio" name="agree" value="agree">I Agree</input></span><br>
													<span><input type="radio" name="agree" value="notagree">Not Agree</input></span><br>
													<span><input type="radio" name="agree" value="notavailable">Not Available</input></span><br>
													<p class="warning"><?php echo $agree_err; ?></p>
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
