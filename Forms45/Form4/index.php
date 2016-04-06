
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

$authorfrom="";
$department="";
$authorname="";
$coauthorname="";
$bookname="";
$dobp="";
$editionofbook="";
$isbn="";
$content="";

if(isset($_POST['authorfrom'])&&isset($_POST['department'])&&isset($_POST['authorname'])&&isset($_POST['bookname'])&&isset($_POST['dobp'])&&isset($_POST['content'])) {
$authorfrom=cleared_input($_POST['authorfrom']);
$coauthorname=cleared_input($_POST['coauthorname']);
$department=cleared_input($_POST['department']);
$authorname=cleared_input($_POST['authorname']);
$bookname=cleared_input($_POST['bookname']);
$dobp=cleared_input($_POST['dobp']);
$content=cleared_input($_POST['content']);
$isbn=cleared_input($_POST['isbn']);
$editionofbook=cleared_input($_POST['editionofbook']);

		$query="INSERT INTO `bookpublished` VALUES ('$a','$authorfrom','$department','$authorname','$coauthorname','$bookname','$dobp','$editionofbook','$isbn','$content')";
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
	<title>Book Published by Faculty and Student</title>
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
					<form action="index.php" role="form" method="post">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Book Published by Faculty and Student</h3></div>
							
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
														<h4>Author from *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="authorfrom" id="authorfrom" class="form-control" required>
														<option value=""></option>
														<option value="Diploma">Diploma</option>
														<option value="UG">UG</option>
														<option value="PG">PG</option>
													</select>
												</div>
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="" >
														<h4>Department *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="department" id="department" class="form-control" required>
														<option value=""></option>
														<option value="Civil">Civil</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Electrical">Electrical</option>
														<option value="Electronics">Electronics</option>
														<option value="CSE">CSE</option>
														<option value="IT">IT</option>
														<option value="GeneralScience">General Science</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of First Author *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="authorname" name="authorname" required>
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Use format 'N.K.Pathak' Do NOT give any spaces</p></div><br>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Co-Authors</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="coauthorname" name="coauthorname">
												</div>
												
												<div class="col-xs-10" style="margin-left: 5%;"><p class="bg-info">*Example: A.H.Deshmukh, C.B.Patil</p></div><br>
									
											</div>
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Title of Book *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="bookname" name="bookname" required>
												</div>									
											</div>


									
												
									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
										<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Book Publication *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dobp" class="form-control" id="dobp" required>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Edition of Book</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="editionofbook" name="editionofbook">
												</div>						
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>ISBN Number of Book</h4>
												</label>
													
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="isbn" name="isbn">
												</div>						
											</div>

										<div class="form-group">
												<label for="" style="text-align: right;" style="margin-top: 5%;">
														<h4>Abstract/Content of Book *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" ><br>
													<textarea id="content" name="content" rows="05" cols="80" class="form-control" required></textarea>
												</div>
												<br><br><br><br><br><br>
											</div>
								</div>
							</div>
							</div>
							<div class="panel-footer">
								<input type="submit" class="btn btn-default btn-md" value="submit"/>
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










<!--

<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-10" style="margin-left: 8%">
					<form action="#" role="form">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Basic Details</h3></div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
												
									</div>
								</div>
								<div class="col-xs-6" >
									<div class="panel panel-default">
										
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<button type="button" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			
		</div>

-->