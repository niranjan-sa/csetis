<?php 
include 'core.inc.php';

$email=$_SESSION['user_id'];
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
$agree="";


$wing_err="";
$department_err="";
$other1_err="";
$nof_err="";
$tod_err="";
$other2_err="";
$quantity_err="";
$purchased_err="";
$specification_err="";
$expenditure_err="";
$dop_err="";
$agree_err="";

$field_not_set="";

$flag=0;


if(isset($_POST['wing'])&&isset($_POST['department'])&&isset($_POST['nof'])&&isset($_POST['tod'])&&isset($_POST['purchased'])&&isset($_POST['specification'])&&isset($_POST['expenditure'])&&isset($_POST['dop'])&&isset($_POST['agree'])) {
	if(empty($_POST['wing'])) {
		$flag=1;
		$wing_err="* This field is mandatory.";
	} else {
		$wing=cleared_input($_POST['wing']);
	}

	if(empty($_POST['department'])) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($_POST['tod'])) {
		$flag=1;
		$tod_err="* This field is mandatory.";
	} else {
		$tod=cleared_input($_POST['tod']);
	}

	if(empty($_POST['nof'])) {
		$flag=1;
		$nof_err="* This field is mandatory.";
	} else {
		$nof=cleared_input($_POST['nof']);
	}

	if(empty($_POST['purchased'])) {
		$flag=1;
		$purchased_err="* This field is mandatory.";
	} else {
		$purchased=cleared_input($_POST['purchased']);
	}

	if(empty($_POST['specification'])) {
		$flag=1;
		$specification_err="* This field is mandatory.";
	} else {
		$specification=cleared_input($_POST['specification']);
	}
	
	if(empty($_POST['expenditure'])) {
		$flag=1;
		$expenditure_err="* This field is mandatory.";
	} else {
		$expenditure=cleared_input($_POST['expenditure']);
	}
	if(empty($_POST['dop'])) {
		$flag=1;
		$dop_err="* This field is mandatory.";
	} else {
		$dop=cleared_input($_POST['dop']);
	}
	if(empty($_POST['agree'])) {
		$flag=1;
		$agree_err="* This field is mandatory.";
	} else {
		$agree=cleared_input($_POST['agree']);
	}
	$other1=cleared_input($_POST['other1']);
	$other2=cleared_input($_POST['other2']);
	$quantity=cleared_input($_POST['quantity']);
	
	
	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `basicdetails` VALUES ('$email','$wing','$department','$other1','$nof','$tod','$other2','$quantity','$purchased','$specification','$expenditure','$dop',$agree')";
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
								<h1>Infrastructural Deveopment</h1>
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
												<h2>Infrastructural Deveopment</h2><br>
												<li>
													<h4>Infrastructural Development in Wing *</h4><br>
													<select name="wing" id="wing">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
													<p class="warning"><?php echo $wing_err; ?></p>
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
														<option value="Library">Library</option>
														<option value="BoysHostel">Boys Hostel</option>
														<option value="GirlsHostel">Girls Hostel</option>
														<option value="Gymkhana">Gymkhana</option>
														<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $department_err; ?></p>
												</li>
												<br>
												<li>
													<h4>If Other, Please Specify</h4><br>
													<input type="text" name="other1">
												</li>
												<br>
												<li>
													<h4>Name of Faculty (Under the guidance work carried) *</h4><br>
													<p>Example: A.H.Patil</p><br>
													<input type="text" name="nof"
													<p class="warning"><?php echo $nof_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Type of Development *</h4><br>
													<select name="tod" id="tod">
													<option value=""></option>
													<option value="Instrument">Instrument</option>
													<option value="Software">Software</option>
													<option value="Laptop">Laptop/PC/Server</option>
													<option value="Furniture">Furniture</option>
													<option value="AirConditioner">Air-Conditioner</option>
													<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $tod_err; ?></p>
												</li>
												<br>
												<li>
													<h4>If Other, Please Specify</h4><br>
													<input type="text" name="other2">
												</li>
												<br>
												<li>
													<h4>Total Purchased Quantity (If applicable)</h4><br>
													<input type="text" name="quantity"/>
												</li>
												<br>
												<li>
													<h4>Purcahsed Through *</h4><br>
													<select name="purchased" id="purchased">
													<option value=""></option>
													<option value="DRF">DRF</option>
													<option value="TEQIP">TEQIP</option>
													<option value="ProjectGrant">Project Grant</option>
													<option value="PGFund">PG Fund</option>
													<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $purchased_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Specification of Product *</h4><br>
													<textarea id="specification" name="specification" rows ="10" cols="70"></textarea>
													<p class="warning"><?php echo $specification_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Expenditure (In Lakhs) *</h4><br>
													<input type="text" name="expenditure" />
													<p class="warning"><?php echo $expenditure_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date of Purchase *</h4><br>
													<input type="date" name="dop">
													<p class="warning"><?php echo $dop_err; ?></p>
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
