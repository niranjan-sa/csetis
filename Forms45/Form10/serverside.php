<?php 
include 'core.inc.php';
$email = $_SESSION['user_id'];

$typeofmou="";
$facultyfrom="";
$department="";
$nameofindustry="";
$moudate="";
$purposeofmou="";
$detailsofmou="";
$submitphotos="";

$typeofmou_err="";
$facultyfrom_err="";
$department_err="";
$nameofindustry_err="";
$moudate_err="";
$purposeofmou_err="";
$detailsofmou_err="";
$submitphotos_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['typeofmou'])&&isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['nameofindustry'])&&isset($_POST['moudate'])&&isset($_POST['purposeofmou'])&&isset($_POST['detailsofmou'])&&isset($_POST['submitphotos'])) {

	if(empty($typeofmou)) {
		$flag=1;
		$typeofmou_err="* This field is mandatory.";
	} else {
		$typeofmou=cleared_input($_POST['typeofmou']);
	}

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

	if(empty($nameofindustry)) {
		$flag=1;
		$nameofindustry_err="* This field is mandatory.";
	} else {
		$nameofindustry=cleared_input($_POST['nameofindustry_err']);
	}

	if(empty($moudate)) {
		$flag=1;
		$moudate_err="* This field is mandatory.";
	} else {
		$moudate=cleared_input($_POST['moudate']);
	}

	if(empty($purposeofmou)) {
		$flag=1;
		$purposeofmou_err="* This field is mandatory.";
		
	} else {
		$purposeofmou=cleared_input($_POST['purposeofmou']);
	}

	
	if(empty($detailsofmou)) {
		$flag=1;
		$detailsofmou_err="* This field is mandatory.";
	
	} else {
		$detailsofmou=cleared_input($_POST['detailsofmou']);
	}

	if(empty($submitphotos)) {
		$flag=1;
		$submitphotos_err="* This field is mandatory.";
	
	} else {
		$submitphotos=cleared_input($_POST['submitphotos']);
	}

	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `mou` VALUES ('$email','$typeofmou','$facultyfrom','$department','$nameofindustry','$moudate','$purposeofmou','$detailsofmou','$submitphotos')";
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
								<h1>Memorandum of Understanding (MoU)</h1>
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
												<h2>Memorandum of Understanding (MoU) :</h2><br>
												<li>
													<h4>Type of MoU or MoU with *</h4><br>
													<span><input type="radio" name="typeofmou" value="Industry">Industry</input></span><br>
													<span><input type="radio" name="typeofmou" value="Institute">Institute</input></span><br>
													<?php echo $typeofmou_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Faculty Coordinator from *</h4><br>
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
														<option value="Institute Level MoU">Institute Level MoU</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Civil">Civil</option>
														<option value="Electrical">Electrical</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="Electronics">Electronics</option>
														<option value="General Science">General Science</option>
													</select>
													<p class="warning"><?php echo $department_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Industry/Institute and Place *</h4><br>
													<input type="text" name="nameofindustry">
													<p class="warning"><?php echo $nameofindustry_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date of MoU *</h4><br>
													<span><input type="date" name="moudate"></span>
													<p class="warning"><?php echo $moudate_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Purpose of MoU *</h4><br>
													<textarea name="purposeofmou" id="purposeofmou" rows="8" cols="0"></textarea>
													<p class="warning"><?php echo $purposeofmou_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Details of MoU *</h4>
													<p>Funding, Resources, Equipments etc. provided.</p><br>
													<textarea name="detailsofmou" id="detailsofmou" rows="8" cols="0"></textarea>
													<p class="warning"><?php echo $detailsofmou_err; ?></p>
												</li>
												<br>
												
												<li>
													<h4>I agree to submit photos related to MoU at <a href="#">info@walchandsangli.ac.in</a> *</h4><br>
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
