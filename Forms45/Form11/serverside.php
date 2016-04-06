<?php 
include 'core.inc.php';
$email = $_SESSION['user_id'];

$facultyfrom="";
$department="";
$typeofpatent="";
$statusofpatent="";
$nameoffirstauthor="";
$nameofcoauthor="";
$dateofpatentfiled="";
$dateofpatentawarded="";
$patentnumber="";
$detailsofpatent="";


$facultyfrom_err="";
$department_err="";
$typeofpatent_err="";
$statusofpatent_err="";
$nameoffirstauthor_err="";
$dateofpatentfiled_err="";
$patentnumber_err="";
$detailsofpatent_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['typeofpatent'])&&isset($_POST['statusofpatent'])&&isset($_POST['nameoffirstauthor'])&&isset($_POST['dateofpatentfiled'])&&isset($_POST['patentnumber'])&&isset($_POST['detailsofpatent'])) {

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

	if(empty($typeofpatent)) {
		$flag=1;
		$typeofpatent_err="* This field is mandatory.";
	} else {
		$typeofpatent=cleared_input($_POST['typeofpatent']);
	}

	if(empty($statusofpatent)) {
		$flag=1;
		$statusofpatent_err="* This field is mandatory.";
	} else {
		$statusofpatent=cleared_input($_POST['statusofpatent']);
	}

	if(empty($nameoffirstauthor)) {
		$flag=1;
		$nameoffirstauthor_err="* This field is mandatory.";
	} else {
		$nameoffirstauthor=cleared_input($_POST['nameoffirstauthor']);
	}

	if(empty($dateofpatentfiled)) {
		$flag=1;
		$dateofpatentfiled_err="* This field is mandatory.";
		
	} else {
		$dateofpatentfiled=cleared_input($_POST['dateofpatentfiled']);
	}

	if(empty($patentnumber)) {
		$flag=1;
		$patentnumber_err="* This field is mandatory.";
	
	} else {
		$patentnumber=cleared_input($_POST['patentnumber']);
	}

	if(empty($detailsofpatent)) {
		$flag=1;
		$detailsofpatent_err="* This field is mandatory.";
	
	} else {
		$detailsofpatent=cleared_input($_POST['detailsofpatent']);
	}

	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `patent` VALUES ('$email',$facultyfrom','$department','$typeofpatent','$statusofpatent','$nameoffirstauthor','$nameofcoauthor','$dateofpatentfiled','$dateofpatentawarded','$patentnumber','$detailsofpatent')";
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
								<h1>Patents Filed/Awarded by Faculty and Student</h1>
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
												<h2>Patents Filed/Awarded by Faculty and Student :</h2><br>
												<li>
													<h4>Faculty/Student From *</h4><br>
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
														<option value="General Science">General Science</option>
													</select>
													<p class="warning"><?php echo $department_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Type of Patent *</h4><br>
													<select name="typeofpatent" id="typeofpatent">
														<option value=""></option>
														<option value="International">International</option>
														<option value="National">National</option>
													</select>
													<p class="warning"><?php echo $typeofpatent_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Status of Patent *</h4><br>
													<select name="statusofpatent" id="statusofpatent">
														<option value=""></option>
														<option value="Filed">Filed</option>
														<option value="Awarded">Awarded</option>
													</select>
													<p class="warning"><?php echo $statusofpatent_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of First Author/Filed by *</h4>
													<p>Example: S.P.Chavan</p><br>
													<input type="text" name="nameoffirstauthor">
													<p class="warning"><?php echo $nameoffirstauthor_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Co-Authors/Filed by</h4><br>
													<input type="text" name="nameofcoauthor">
												</li>
												<br>
												<li>
													<h4>Date Of Patent Filed *</h4><br>
													<span><input type="date" name="dateofpatentfiled"></span>
													<p class="warning"><?php echo $dateofpatentfiled_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date Of Patent Awarded (If Applicable)</h4><br>
													<span><input type="date" name="dateofpatentawarded"></span>
												</li>
												<br>
												<li>
													<h4>Patent Number *</h4><br>
													<input type="text" name="patentnumber">
													<p class="warning"><?php echo $patentnumber_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Details of Patent *</h4>
													<textarea name="detailsofpatent" id="detailsofpatent" rows="8" cols="0"></textarea>
													<p class="warning"><?php echo $detailsofpatent_err; ?></p>
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
