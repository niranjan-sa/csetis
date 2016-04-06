<?php 
include 'core.inc.php';

$email=$_SESSION['user_id'];
$eventcoordinatorfrom="";
$department="";
$typeofevent="";
$duration="";
$coordinatorname="";
$cocoordinatorname="";
$dos="";
$doe="";
$toe="";
$nameofresource1="";
$nameofresource2="";
$nameofresource3="";
$nameofresource4="";
$details="";
$totalparticipants="";
$wceparticipants="";
$nonwceparticipants="";
$expenditure="";
$expenditurethrough="";
$otherthing="";
$irg="";
$agree="";



$eventcoordinatorfrom_err="";
$department_err="";
$typeofevent_err="";
$duration_err="";
$coordinatorname_err="";
$cocoordinatorname_err="";
$dos_err="";
$doe_err="";
$toe_err="";
$nameofresource1_err="";
$nameofresource2_err="";
$nameofresource3_err="";
$nameofresource4_err="";
$details_err="";
$totalparticipants_err="";
$wceparticipants_err="";
$nonwceparticipants_err="";
$expenditure_err="";
$expenditurethrough_err="";
$otherthing_err="";
$irg_err="";
$agree_err="";


$field_not_set="";

$flag=0;

if(isset($_POST['eventcoordinatorfrom'])&&isset($_POST['department'])&&isset($_POST['typeofevent'])&&isset($_POST['duration'])&&isset($_POST['coordinatorname'])&&isset($_POST['dos'])&&isset($_POST['doe'])&&isset($_POST['toe'])&&isset($_POST['nameofresource1'])&&isset($_POST['details'])&&isset($_POST['totalparticipants'])&&isset($_POST['wceparticipants'])&&isset($_POST['nonwceparticipants'])&&isset($_POST['expenditure'])&&isset($_POST['expenditurethrough'])&&isset($_POST['agree'])) {

	if(empty($_POST['eventcoordinatorfrom'])) {
		$flag=1;
		$eventcoordinatorfrom_err="* This field is mandatory.";
	} else {
		$eventcoordinatorfrom=cleared_input($_POST['eventcoordinatorfrom']);
	}

	if(empty($_POST['department'])) {
		$flag=1;
		$department_err="* This field is mandatory.";
	} else {
		$department=cleared_input($_POST['department']);
	}

	if(empty($_POST['typeofevent'])) {
		$flag=1;
		$typeofevent_err="* This field is mandatory.";
	} else {
		$typeofevent=cleared_input($_POST['typeofevent']);
	}

	if(empty($_POST['duration'])) {
		$flag=1;
		$duration_err="* This field is mandatory.";
	} else {
		$duration=cleared_input($_POST['duration']);
	}

	if(empty($_POST['coordinatorname'])) {
		$flag=1;
		$coordinatorname_err="* This field is mandatory.";
	} else {
		$coordinatorname=cleared_input($_POST['coordinatorname']);
	}

	if(empty($_POST['dos'])) {
		$flag=1;
		$dos_err="* This field is mandatory.";
	} else {
		$dos=cleared_input($_POST['dos']);
	}
	
	if(empty($_POST['doe'])) {
		$flag=1;
		$doe_err="* This field is mandatory.";
	} else {
		$doe=cleared_input($_POST['doe']);
	}
	
	if(empty($_POST['toe'])) {
		$flag=1;
		$toe_err="* This field is mandatory.";
	} else {
		$toe=cleared_input($_POST['toe']);
	}
	
	if(empty($_POST['nameofresource1'])) {
		$flag=1;
		$nameofresource1_err="* This field is mandatory.";
	} else {
		$nameofresource1=cleared_input($_POST['nameofresource1']);
	}
	
	if(empty($_POST['details'])) {
		$flag=1;
		$details_err="* This field is mandatory.";
	} else {
		$details=cleared_input($_POST['details']);
	}
	
	if(empty($_POST['totalparticipants'])) {
		$flag=1;
		$totalparticipants_err="* This field is mandatory.";
	} else {
		$totalparticipants=cleared_input($_POST['totalparticipants']);
	}
	
	if(empty($_POST['wceparticipants'])) {
		$flag=1;
		$wceparticipants_err="* This field is mandatory.";
	} else {
		$wceparticipants=cleared_input($_POST['wceparticipants']);
	}
	
	if(empty($_POST['nonwceparticipants'])) {
		$flag=1;
		$nonwceparticipants_err="* This field is mandatory.";
	} else {
		$nonwceparticipants=cleared_input($_POST['nonwceparticipants']);
	}
	
	if(empty($_POST['expenditure'])) {
		$flag=1;
		$expenditure_err="* This field is mandatory.";
	} else {
		$expenditure=cleared_input($_POST['expenditure']);
	}
	
	if(empty($_POST['expenditurethrough'])) {
		$flag=1;
		$expenditurethrough_err="* This field is mandatory.";
	} else {
		$expenditurethrough=cleared_input($_POST['expenditurethrough']);
	}
	
	if(empty($_POST['agree'])) {
		$flag=1;
		$agree_err="* This field is mandatory.";
	} else {
		$agree=cleared_input($_POST['agree']);
	}
	$cocoordinatorname=cleared_input($_POST['cocoordinatorname']);
	$nameofresource2=cleared_input($_POST['nameofresource2']);
	$nameofresource3=cleared_input($_POST['nameofresource3']);
	$nameofresource4=cleared_input($_POST['nameofresource4']);
	$otherthing=cleared_input($_POST['otherthing']);
	$irg=cleared_input($_POST['irg']);
	
	
	if($flag==0) {
		include 'include.inc.php';
		$query="INSERT INTO `basicdetails` VALUES ('$email','$eventcoordinatorfrom','$department','$typeofevent','$duration','$coordinatorname','$cocoordinatorname','$dos','$doe','$toe','$nameofresource1','$nameofresource2','$nameofresource3','$nameofresource4','$details','$totalparticipants','$wceparticipants','$nonwceparticipants','$expenditure','$expenditurethrough','$otherthing','$irg','$agree')";
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
								<h1>Event Organized by Faculty and Staff</h1>
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
												<h2>Event Organized by Faculty and Staff</h2><br>
												<li>
													<h4>Event Coordinator From *</h4><br>
													<select name="eventcoordinatorfrom" id="eventcoordinatorfrom">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
													<p class="warning"><?php echo $eventcoordinatorfrom_err; ?></p>
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
													<h4>Type of Event *</h4><br>
													<select name="typeofevent" id="typeofevent">
													<option value=""></option>
													<option value="FacultyDevelopmentProgramme">Faculty Development Programme</option>
													<option value="StaffDevelopmentProgramme">Staff Development Programme</option>
													<option value="Workshop">Workshop</option>
													<option value="Conference">Conference</option>
													<option value="Webinar">Webinar</option>
													</select>
													<p class="warning"><?php echo $typeofevent_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Duration of Event *</h4><br>
													<select name="duration" id="duration">
														<option value=""></option>
														<option value="oneday">One Day</option>
														<option value="twodays">Two Days</option>
														<option value="threedays">Three Days</option>
														<option value="fourdays">Four Days</option>
														<option value="oneweek">One Week</option>
														<option value="twoweeks">Two Weeks</option>
														<option value="threeweeks">Three Weeks</option>
														<option value="onemonth">One Month</option>
													</select>
													<p class="warning"><?php echo $duration_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Coordinator *</h4>
													<p >Example: A.H.Patil</p><br>
													<input type="text" name="coordinatorname">
													<p class="warning"><?php echo $coordinatorname_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Co-Coordinator</h4><br>
													<p>Example: A.H.Patil, P.B.Deshmukh</p><br>
													<input type="text" name="cocoordinatorname"/>
													<p class="warning"><?php echo $cocoordinatorname_err; ?></p>
												</li>
												<br>
												<li>
												<li>
													<h4>Starting Date of Event *</h4><br>
													<input type="date" name ="dos"/>
													<p class="warning"><?php echo $dos_err; ?></p>
												</li>
												<br>
													<h4>End Date of Event *</h4>
													<input type="date" name="doe"/>
													<p class="warning"><?php echo $doe_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Title of Event *</h4><br>
													<p>Example: Recent Trends in Manufacturing Engineering</p>
													<input type="text" name="toe" />
													<p class="warning"><?php echo $toe_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Resourse Person1 *</h4><br>
													<input type="text" name="nameofresource1" />
													<p class="warning"><?php echo $nameofresource1_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Resourse Person2 (Optional)</h4><br>
													<input type="text" name="nameofresource2" />
												</li>
												<br>
												<li>
													<h4>Name of Resourse Person3 (Optional)</h4><br>
													<input type="text" name="nameofresource3" />
												</li>
												<br>
												<li>
													<h4>Name of Resourse Person4 (Optional)</h4><br>
													<input type="text" name="nameofresource4" />
												</li>
												<br>
												<li>
													<h4>Details of Event *</h4><br>
													<textarea id="details" name="details" rows="10" cols="70"></textarea>
													<p class="warning"><?php echo $details_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Number of Participant *</h4><br>
													<input type="text" name="totalparticipants" />
													<p class="warning"><?php echo $totalparticipants_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Number of WCE Participant *</h4><br>
													<input type="text" name="wceparticipants" />
													<p class="warning"><?php echo $wceparticipants_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Number of Non-WCE Participant *</h4><br>
													<input type="text" name="nonwceparticipants" />
													<p class="warning"><?php echo $nonwceparticipants_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Total Expenditure of Event (In Lakhs) *</h4><br>
													<input type="text" name="expenditure" />
													<p class="warning"><?php echo $expenditure_err; ?></p>
												</li>
												<br>
												<li>
													<h4>Expenditure Through *</h4><br>
													<select name="expenditurethrough" id="expenditurethrough">
													<option value=""></option>
													<option value="TEQIPII">TEQIPII</option>
													<option value="WCE">WCE</option>
													<option value="AICTE">AICTE</option>
													<option value="UGC">UGC</option>
													<option value="DTE">DTE</option>
													<option value="Other">Other</option>
													</select>
													<p class="warning"><?php echo $expenditurethrough_err; ?></p>
												</li>
												<br>
												<li>
													<h4>If other, Please Specify</h4><br>
													<input type="text" name="otherthing" />
												</li>
												<br>
												<li>
													<h4>Total IRG Generated (In Lakhs)</h4><br>
													<input type="text" name="irg" />
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
