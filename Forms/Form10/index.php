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

$typeofmou="";
$facultyfrom="";
$department="";
$nameofindustry="";
$moudate="";
$purposeofmou="";
$detailsofmou="";

	if(isset($_POST['typeofmou'])&&isset($_POST['facultyfrom'])&&isset($_POST['department'])&&isset($_POST['nameofindustry'])&&isset($_POST['moudate'])&&isset($_POST['purposeofmou'])&&isset($_POST['detailsofmou'])) {

		$typeofmou=cleared_input($_POST['typeofmou']);
		$facultyfrom=cleared_input($_POST['facultyfrom']);
		$department=cleared_input($_POST['department']);
		$nameofindustry=cleared_input($_POST['nameofindustry']);
		$moudate=cleared_input($_POST['moudate']);
		$purposeofmou=cleared_input($_POST['purposeofmou']);
		$detailsofmou=cleared_input($_POST['detailsofmou']);

		$query="INSERT INTO `mou` VALUES ('$a','$typeofmou','$facultyfrom','$department','$nameofindustry','$moudate','$purposeofmou','$detailsofmou')";
		if($query_run=mysql_query($query)) {
			//header('Location: action.php');	
			//echo 'Bingo';
		} else {
			//echo 'Jim\'s dead';
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
	<title>Memorandum of Understanding (MoU)</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
	function validateForm(){
		

		var name=document.forms["myForm"]["nameofindustry"].value;
		var patt1=/[0-9]/;
		

		if(patt1.test(name) )
				{
					
					 alert("No digits are allowed in name fields");
	       					 return false;
				}

		/*if(!patt1.test(numberofstudents) || !patt1.test(totalexpenditure) )
				{

					alert("Only digits allowed in Number fields");
					return false;
				}
*/
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
							<div class="panel-heading"><h3>Memorandum of Understanding (MoU)</h3></div>
							
							<div class="panel panel-default" style="padding-top: 1%;">
								<p class="bg-info" align="left">
									Dear all,
									You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
									Your username <a href="../../mainpg/welcome/">(<?php echo $username; ?>)</a> will be recorded when you submit this form.  <button type="button" class="btn btn-link"><a href="logout.inc.php">Sign out</a></button><br>
								</p>
								<p class="bg-danger">* Required</p>
							</div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
										<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Type of MoU or MoU with *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<span><input type="radio" id="typeofmou" name="typeofmou" value="Industry" >Industry</input>
														  <input type="radio" id="typeofmou" name="typeofmou" value="Institute" >Institute</input></span><br>
												</div>
											</div>
											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Faculty Coordinator from *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="facultyfrom" id="facultyfrom" class="form-control">
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Department</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control">
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
														<h4>Name of Place *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofindustry" name="nameofindustry" required>
												</div>
											</div>
											
											
											
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											
											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of MoU *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="moudate" class="form-control" id="moudate" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Purpose of MoU *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<textarea name="purposeofmou" id="purposeofmou" rows="1" cols="10" class="form-control" required></textarea>
												</div><br>
											</div>
		
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Details of MoU *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<textarea name="detailsofmou" id="detailsofmou" rows="1" cols="0" class="form-control" required></textarea>
												</div><br>

												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Funding, Resources, Equipments etc. should be provided.</p></div><br>
											</div><br><br>


																
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
