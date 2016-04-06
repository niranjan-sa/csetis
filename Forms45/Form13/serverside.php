<?php 
include 'core.inc.php';
$email = $_SESSION['_id'];

$investigatorfrom="";
$department="";
$nameofagency="";
$otherfundingagency="";
$statusofproject="";
$nameofprincipalinvestigator="";
$nameofcoinvestigator="";
$titleofproject="";
$amountsantioned="";
$dateofprojectsantioned="";
$dateofprojectcompleted="";
$projectabstract="";
$equipmentdetails="";
$totalrevenue="";
$totalpaperspublished="";
$btechstudents="";
$mtechstudents="";
$phdstudents="";
$submitletter="";

$investigatorfrom_err="";
$department_err="";
$nameofagency_err="";
$statusofproject_err="";
$nameofprincipalinvestigator_err="";
$titleofproject_err="";
$amountsantioned_err="";
$dateofprojectsantioned_err="";
$projectabstract_err="";
$equipmentdetails_err="";
$totalpaperspublished_err="";
$btechstudents_err="";
$mtechstudents_err="";
$phdstudents_err="";
$submitletter_err="";

$field_not_set="";

$flag=0;

if(isset($_POST['investigatorfrom'])&&isset($_POST['department'])&&isset($_POST['nameofagency'])&&isset($_POST['statusofproject'])&&isset($_POST['nameofprincipalinvestigator'])&&isset($_POST['titleofproject'])&&isset($_POST['amountsantioned'])&&isset($_POST['dateofprojectsantioned'])&&isset($_POST['projectabstract'])&&isset($_POST['equipmentdetails'])&&isset($_POST['totalpaperspublished'])&&isset($_POST['btechstudents'])&&isset($_POST['mtechstudents'])&&isset($_POST['phdstudents'])&&isset($_POST['submitletter'])) {

	if(empty($investigatorfrom)) {
		$flag=1;
		$investigatorfrom_err="* This field is mandatory.";
	} else {
		$investigatorfrom=cleared_input($_POST['investigatorfrom']);
	}

	if(empty($department)) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($nameofagency)) {
		$flag=1;
		$nameofagency_err="* This field is mandatory.";
	} else {
		$nameofagency=cleared_input($_POST['nameofagency']);
	}

	if(empty($statusofproject)) {
		$flag=1;
		$statusofproject_err="* This field is mandatory.";
	} else {
		$statusofproject=cleared_input($_POST['statusofproject']);
	}

	if(empty($nameofprincipalinvestigator)) {
		$flag=1;
		$nameofprincipalinvestigator_err="* This field is mandatory.";
	} else {
		$nameofprincipalinvestigator=cleared_input($_POST['nameofprincipalinvestigator']);
	}

	if(empty($titleofproject)) {
		$flag=1;
		$titleofproject_err="* This field is mandatory.";
		
	} else {
		$titleofproject=cleared_input($_POST['titleofproject']);
	}

	if(empty($amountsantioned)) {
		$flag=1;
		$amountsantioned_err="* This field is mandatory.";
	
	} else {
		$amountsantioned=cleared_input($_POST['amountsantioned']);
	}

	if(empty($dateofprojectsantioned)) {
		$flag=1;
		$dateofprojectsantioned_err="* This field is mandatory.";
	
	} else {
		$dateofprojectsantioned=cleared_input($_POST['dateofprojectsantioned']);
	}

	if(empty($projectabstract)) {
		$flag=1;
		$projectabstract_err="* This field is mandatory.";
	
	} else {
		$projectabstract=cleared_input($_POST['projectabstract']);
	}
	if(empty($equipmentdetails)) {
		$flag=1;
		$equipmentdetails_err="* This field is mandatory.";
	
	} else {
		$equipmentdetails=cleared_input($_POST['equipmentdetails']);
	}
	if(empty($totalpaperspublished)) {
		$flag=1;
		$totalpaperspublished_err="* This field is mandatory.";
	
	} else {
		$totalpaperspublished=cleared_input($_POST['totalpaperspublished']);
	}
	if(empty($btechstudents)) {
		$flag=1;
		$btechstudents_err="* This field is mandatory.";
	
	} else {
		$btechstudents=cleared_input($_POST['btechstudents']);
	}
	if(empty($mtechstudents)) {
		$flag=1;
		$mtechstudents_err="* This field is mandatory.";
	
	} else {
		$mtechstudents=cleared_input($_POST['mtechstudents']);
	}
	if(empty($phdstudents)) {
		$flag=1;
		$phdstudents_err="* This field is mandatory.";
	
	} else {
		$phdstudents=cleared_input($_POST['phdstudents']);
	}
	if(empty($submitletter)) {
		$flag=1;
		$submitletter_err="* This field is mandatory.";
	
	} else {
		$submitletter=cleared_input($_POST['submitletter']);
	}
	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `projectgranted` VALUES ('$email',$investigatorfrom','$department','$nameofagency','$otherfundingagency','$statusofproject','$nameofprincipalinvestigator','$nameofcoinvestigator','$titleofproject','$amountsantioned','$dateofprojectsantioned','$dateofprojectcompleted','$projectabstract','$equipmentdetails','$totalrevenue','$totalpaperspublished','$btechstudents','$mtechstudents','$phdstudents','$submitletter',')";
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
								<h1>Project Grants Received by Faculty</h1>
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
												<h2>Project Grants Received by Faculty :</h2><br>
												<li>
													<h4>Principal Investigator From *</h4><br>
													<select name="investigatorfrom" id="investigatorfrom">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
													<p class="warning"><?php echo $investigatorfrom_err; ?></p>
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
													<h4>Name of Funding Agency *</h4><br>
													<select name="nameofagency" id="nameofagency">
														<option value=""></option>
														<option value="AICTE">AICTE</option>
														<option value="UGC">UGC</option>
														<option value="BARC">BARC</option>
														<option value="DRDO">DRDO</option>
														<option value="BRNS">BRNS</option>
														<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $nameofagency_err; ?></p>
												</li>
												<br>
												<li>
													<h4>If Other Funding Agency, Please Specify Name</h4><br>
													<input type="text" name="otherfundingagency">
												</li>
												<br>
												<li>
													<h4>Status of Project *</h4><br>
													<select name="statusofproject" id="statusofproject">
														<option value=""></option>
														<option value="Not Started">Not Started</option>
														<option value="On-Going">On-Going</option>
														<option value="Completed">Completed</option>
													</select>
													<p class="warning"><?php echo $statusofproject_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Principal Investigator *</h4>
													<p>Example: S.P.Chavan</p><br>
													<input type="text" name="nameofprincipalinvestigator">
													<p class="warning"><?php echo $nameofprincipalinvestigator_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Co-Investigator</h4>
													<p>Example: C.N.Patil, K.Y.Deshmukh</p><br>
													<input type="text" name="nameofcoinvestigator">
												</li>
												<br>
												<li>
													<h4>Title of Project *</h4><br>
													<input type="text" name="titleofproject">
													<p class="warning"><?php echo $titleofproject_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Amount Santioned for Project (In Lakhs) *</h4><br>
													<input type="text" name="amountsantioned">
													<p class="warning"><?php echo $amountsantioned_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date of Project Santioned *</h4><br>
													<span><input type="date" name="dateofprojectsantioned"></span>
													<p class="warning"><?php echo $dateofprojectsantioned_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Date of Project Completed (If Completed)</h4><br>
													<span><input type="date" name="dateofprojectcompleted"></span>
												</li>
												<br>
												<li>
													<h4>Project Abstract *</h4><br>
													<textarea name="projectabstract" id="projectabstract" rows="8" cols="0"></textarea>
													<p class="warning"><?php echo $projectabstract_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Equipment Details Purchased Under Project Grant *</h4><br>
													<textarea name="equipmentdetails" id="equipmentdetails" rows="8" cols="0"></textarea>
													<p class="warning"><?php echo $equipmentdetails_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Revenue Generated Through Project Grant (In Lakhs, If Any)</h4><br>
													<input type="text" name="totalrevenue">
												</li>
												<br>
												<li>
													<h4>Total Papers Published Related to Project Grants *</h4><br>
													<input type="text" name="totalpaperspublished">
													<p class="warning"><?php echo $totalpaperspublished_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Number of B.Tech. Students Completed Dissertation Using Above Grant *</h4><br>
													<input type="text" name="btechstudents">
													<p class="warning"><?php echo $btechstudents_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Number of M.Tech. Students Completed Dissertation Using Above Grant *</h4><br>
													<input type="text" name="mtechstudents">
													<p class="warning"><?php echo $mtechstudents_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Number of Ph.D. Students Completed Dissertation Using Above Grant *</h4><br>
													<input type="text" name="phdstudents">
													<p class="warning"><?php echo $phdstudents_err; ?></p>
												</li>
												<br>
												<li>
													<h4>I agree to submit sanctioned letter of grant at <a href="#">info@walchandsangli.ac.in</a> *</h4><br>
													<span><input type="radio" name="submitletter" value="agree">I Agree</input></span><br>
													<span><input type="radio" name="submitletter" value="notagree">Not Agree</input></span><br>
													<span><input type="radio" name="submitletter" value="notavailable">Not Available</input></span><br>
													<p class="warning"><?php echo $submitletter_err; ?></p>
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
