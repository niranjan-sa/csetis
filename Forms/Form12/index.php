<?php 
include 'core.inc.php';
include 'connect.inc.php';

$a = $_SESSION['user_id'];	
$query="SELECT `username` FROM `userlogin` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
		echo $err="Invalid Password/Username combination";
	} else {
		$username=mysql_result($query_run, 0,'username');	
 	}
}
else
{
	echo mysql_error();
}

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

		
	if(isset($_POST['investigatorfrom'])&&isset($_POST['department'])&&isset($_POST['nameofagency'])&&isset($_POST['statusofproject'])&&isset($_POST['nameofprincipalinvestigator'])&&isset($_POST['titleofproject'])&&isset($_POST['amountsantioned'])&&isset($_POST['dateofprojectsantioned'])&&isset($_POST['projectabstract'])&&isset($_POST['equipmentdetails'])&&isset($_POST['totalpaperspublished'])&&isset($_POST['btechstudents'])&&isset($_POST['mtechstudents'])&&isset($_POST['phdstudents'])) {

		$investigatorfrom=cleared_input($_POST['investigatorfrom']);
		$department=cleared_input($_POST['department']);
		$nameofagency=cleared_input($_POST['nameofagency']);
		$otherfundingagency=cleared_input($_POST['otherfundingagency']);
		$statusofproject=cleared_input($_POST['statusofproject']);
		$nameofprincipalinvestigator=cleared_input($_POST['nameofprincipalinvestigator']);
		$nameofcoinvestigator=cleared_input($_POST['nameofcoinvestigator']);
		$titleofproject=cleared_input($_POST['titleofproject']);
		$amountsantioned=cleared_input($_POST['amountsantioned']);
		$dateofprojectsantioned=cleared_input($_POST['dateofprojectsantioned']);
		$dateofprojectcompleted=cleared_input($_POST['dateofprojectcompleted']);
		$projectabstract=cleared_input($_POST['projectabstract']);
		$equipmentdetails=cleared_input($_POST['equipmentdetails']);
		$totalrevenue=cleared_input($_POST['totalrevenue']);
		$totalpaperspublished=cleared_input($_POST['totalpaperspublished']);
		$btechstudents=cleared_input($_POST['btechstudents']);
		$mtechstudents=cleared_input($_POST['mtechstudents']);
		$phdstudents=cleared_input($_POST['phdstudents']);
	

		$query="INSERT INTO `projectgrants` VALUES ('$a','$investigatorfrom','$department','$nameofagency','$otherfundingagency','$statusofproject','$nameofprincipalinvestigator','$nameofcoinvestigator','$titleofproject','$amountsantioned','$dateofprojectsantioned','$dateofprojectcompleted','$projectabstract','$equipmentdetails','$totalrevenue','$totalpaperspublished','$btechstudents','$mtechstudents','$phdstudents')";
		if($query_run=mysql_query($query)) {
			//header('Location: action.php');	
			echo 'Bingo';
		} else {
			echo 'Jim\'s dead';
		}
	}
		
function cleared_input($data) {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Project Grants Received by Faculty :</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
	function validateForm(){

		var otherfundingagency=document.forms["myForm"]["otherfundingagency"].value;
		var nameofprincipalinvestigator=document.forms["myForm"]["nameofprincipalinvestigator"].value;
		var nameofcoinvestigator=document.forms["myForm"]["nameofcoinvestigator"].value;
		var titleofproject=document.forms["myForm"]["titleofproject"].value;
		var amountsantioned=document.forms["myForm"]["amountsantioned"].value;
		var totalrevenue=document.forms["myForm"]["totalrevenue"].value;
		var totalpaperspublished=document.forms["myForm"]["totalpaperspublished"].value;
		var btechstudents=document.forms["myForm"]["btechstudents"].value;
		var mtechstudents=document.forms["myForm"]["mtechstudents"].value;
		var phdstudents=document.forms["myForm"]["phdstudents"].value;
		var patt1=/[0-9]/;
		

		if(patt1.test(otherfundingagency) || patt1.test(nameofprincipalinvestigator) || patt1.test(nameofcoinvestigator) || patt1.test(titleofproject) )
				{
					
					 alert("No digits are allowed in name fields");
	       					 return false;
				}

		if(!patt1.test(amountsantioned) || !patt1.test(totalrevenue) || !patt1.test(btechstudents) || !patt1.test(mtechstudents) || !patt1.test(phdstudents) 
			|| !patt1.test(totalpaperspublished))
				{

					alert("Only digits allowed in Number fields");
					return false;
				}

	}
	</script>
</head>
<body>
<body>
	<div class="container-fluid">
		<!--<div class="jumbotron">-->
			<div class="header">
				<div class="row" style="padding-top: 2%;">
					<div class="col-xs-3 " padding-right="10%" height="10%">
						<br>
						<img src="../../bootstrap/img/Walchand_11.gif" class="img-responsive" alt="Responsive Image" align="right"  />
					</div>
					<div class="col-xs-9 ">
						<h1 style="text-align: left;">Walchand College of Engineering, Sangli.</h1>
						<h5 style="text-align: right; padding-right: 30%; font-weight: bold; font-style: italic;">(An autonomous institute.)</h5>
						<h3 style="padding-left: 5%; font-weight: bold;">Department of Computer Science and Engineering.</h3>
						<h3 style="padding-left: 17%; text-decoration: underline; font-weight: bold;">Teacher's Information System.</h3>
					</div>	
				</div>
			</div>
		<!--</div>-->	

		<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-10" style="margin-left: 8%">
					<form action="index.php" role="form" name="myForm" onSubmit="return validateForm()" method="POST">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Project Grants Received by Faculty :</h3></div>
							
							<div class="panel panel-default" style="padding-top: 1%;">
								<p class="bg-info" align="left">
									Dear all,
									You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
									Your username <a href="../../mainpg/welcome/">(<?php echo $_SESSION['user_id']; ?>)</a> will be recorded when you submit this form. Not smriti.bhandari? <button type="button" class="btn btn-link"><a href="logout.inc.php">Sign out</a></button><br>
								</p>
								<p class="bg-danger">* Required</p>
							</div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
										<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Principal Investigator From *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="investigatorfrom" id="investigatorfrom" class="form-control" required>
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
										</div>
											
											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Department *</h4>
 												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control" required>
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
												</div>
											</div>

											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Funding Agency *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="nameofagency" id="nameofagency" class="form-control" required> 
														<option value=""></option>
														<option value="AICTE">AICTE</option>
														<option value="UGC">UGC</option>
														<option value="BARC">BARC</option>
														<option value="DRDO">DRDO</option>
														<option value="BRNS">BRNS</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>If Other Funding Agency, Please Specify Name</h4>
												</label><br>
												
												<div class="col-xs-5" style="float: right; margin-right: 5%;" >
													<input type="text" class="form-control" id="otherfundingagency" name="otherfundingagency" >
												</div><br><br>
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Status of Project *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="statusofproject" id="statusofproject" class="form-control" required>
														<option value=""></option>
														<option value="Not Started">Not Started</option>
														<option value="On-Going">On-Going</option>
														<option value="Completed">Completed</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Principal Investigator *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 5%;" >
													<input type="text" class="form-control" id="nameofprincipalinvestigator" name="nameofprincipalinvestigator" required>
												</div>

												<div class="col-xs-10" style="margin-left: 5%;margin-top:5%;"><p class="bg-info">Example: S.P.Chavan</p></div><br>				
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Co-Investigator</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 5%;" >
													<input type="text" class="form-control" id="nameofcoinvestigator" name="nameofcoinvestigator" >
												</div><br><br>

												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Example: C.N.Patil, K.Y.Deshmukh</p></div><br>				
											</div><br>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Title of Project *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="titleofproject" name="titleofproject" required>
												</div><br>
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Total Amount Santioned for Project (In Lakhs) *</h4>
												</label><br>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="amountsantioned" name="amountsantioned" required>
												</div><br><br><br>
											</div>

											

									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Project Santioned *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dateofprojectsantioned" class="form-control" id="dateofprojectsantioned" required>
												</div><br>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Project Completed (If Completed)</h4>
												</label><br>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dateofprojectcompleted" class="form-control" id="dateofprojectcompleted">
												</div><br><br>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Project Abstract *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<textarea name="projectabstract" id="projectabstract" rows="1" cols="0" class="form-control" required></textarea>
												</div>

											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Equipment Details Purchased Under Project Grant *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<textarea name="equipmentdetails" id="equipmentdetails" rows="1" cols="0" class="form-control" required></textarea>
												</div>

											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Revenue Generated Through Project(In Lakhs, If Any)</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="totalrevenue" name="totalrevenue">
												</div>
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Total Papers Published Related to Project Grants *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="totalpaperspublished" name="totalpaperspublished" required>
												</div>
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Number of B.Tech. Students Completed Dissertation *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="btechstudents" name="btechstudents" required>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Number of M.Tech. Students Completed Dissertation *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="mtechstudents" name="mtechstudents" required>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Number of Ph.D. Students Completed Dissertation *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="phdstudents" name="phdstudents" required>
												</div><br><br><br><br>
											</div>

									</div>
								</div>
							</div>
							
							<div class="panel-footer">
								<button type="submit" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			
		</div>
	</div>

<script src="../../bootstrap/js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
