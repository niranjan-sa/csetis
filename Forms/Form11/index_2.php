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

$facultyfrom="";
$department="";
$typeofpatent="";
$statusofpatent="";
$nameoffirstauthor="";
$nameofcoauthor="";
$title="";
$dateofpatentfiled="";
$dateofpatentawarded="";
$patentnumber="";
$detailsofpatent="";

	if(isset($_POST['facultyfrom']) && isset($_POST['department'])&&isset($_POST['typeofpatent'])&&isset($_POST['statusofpatent'])&&isset($_POST['nameoffirstauthor'])&&isset($_POST['title'])&&isset($_POST['dateofpatentfiled'])&&isset($_POST['patentnumber'])&&isset($_POST['detailsofpatent'])) {

		$facultyfrom=cleared_input($_POST['facultyfrom']);
		$department=cleared_input($_POST['department']);
		$typeofpatent=cleared_input($_POST['typeofpatent']);
		$statusofpatent=cleared_input($_POST['statusofpatent']);
		$nameoffirstauthor=cleared_input($_POST['nameoffirstauthor']);
		$nameofcoauthor=cleared_input($_POST['nameofcoauthor']);
		$title=cleared_input($_POST['title']);
		$dateofpatentfiled=cleared_input($_POST['dateofpatentfiled']);
		$dateofpatentawarded=cleared_input($_POST['dateofpatentawarded']);
		$patentnumber=cleared_input($_POST['patentnumber']);
		$detailsofpatent=cleared_input($_POST['detailsofpatent']);

		$query="INSERT INTO `patent` VALUES ('$a','$facultyfrom','$department','$typeofpatent','$statusofpatent','$nameoffirstauthor','$nameofcoauthor','$title','$dateofpatentfiled','$dateofpatentawarded','$patentnumber','$detailsofpatent')";
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
	<title>Patents Filed/Awarded by Faculty and Student</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
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
					<form action="index.php" role="form" method="POST">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Patents Filed/Awarded by Faculty and Student</h3></div>
							
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
														<h4>Faculty/Student From *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="facultyfrom" id="facultyfrom" class="form-control" required>
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
														<h4>Type of Patent *</h4>
												</label>
												
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="typeofpatent" id="typeofpatent" class="form-control" required>
														<option value=""></option>
														<option value="International">International</option>
														<option value="National">National</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Status of Patent *</h4>
												</label>
												
												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="statusofpatent" id="statusofpatent" class="form-control" required>
														<option value=""></option>
														<option value="Filed">Filed</option>
														<option value="Awarded">Awarded</option>
													</select>
												</div>
											</div>
											

											<div class="form-group" >
												<label for="" style="text-align: right;">
														<h4>Name of First Author *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameoffirstauthor" name="nameoffirstauthor" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">Example: S.P.Chavan</p></div><br>
									
											</div>

											<div class="form-group" >
												<label for="" style="text-align: right;">
														<h4>Name of Co-Authors</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nameofcoauthor" name="nameofcoauthor">
												</div>
									
											</div>
	
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											
											
											
											<div class="form-group" style="margin-top: 5%;">
												<label for="" style="text-align: right;">
														<h4>Title of Patent *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="title" name="title" required>
												</div>
											</div>




											
											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date Of Patent Filed *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dateofpatentfiled" class="form-control" id="dateofpatentfiled" required>
												</div>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Patent Awarded (If Applicable)</h4>
												</label><br>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dateofpatentawarded" class="form-control" id="dateofpatentawarded">
												</div><br><br>
									
											</div>


											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Patent Number *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="patentnumber" name="patentnumber" required>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Details of Patent *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<textarea name="detailsofpatent" id="detailsofpatent" rows="1" cols="0" class="form-control" required></textarea>
												</div><br>
											</div><br>


			
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
