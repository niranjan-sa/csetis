<?php
include 'core.inc.php'; 
include 'connect.inc.php';
$name=$_REQUEST['book'];

$s=$_SESSION['user_id'];
$query = "SELECT * FROM `bookpublished` WHERE `bookname`='$name' ";
$authorfrom="Not Set";
$department="Not Set";
$authorname="Not Set";
$coauthorname="Not Set";
$bookname="Not Set";
$dobp="Not Set";
$editionofbook="Not Set";
$isbn="Not Set";
$content="Not Set";


if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
																				
		$err="Invalid Data.";
	} else {
		$authorfrom=mysql_result($query_run, 0,'authorfrom');
		if(empty($authorfrom)){$authorfrom="Not Set";}

		$department=mysql_result($query_run, 0,'department');
		if(empty($department)){$department="Not Set";}

		$authorname=mysql_result($query_run, 0,'authorname');
		if(empty($authorname)){$authorname="Not Set";}

		$coauthorname=mysql_result($query_run, 0,'coauthorname');
		if(empty($coauthorname)){$coauthorname="Not Set";}

		$bookname=mysql_result($query_run, 0,'bookname');
		if(empty($bookname)){$bookname="Not Set";}

		$dobp=mysql_result($query_run, 0,'dobp');
		if(empty($dobp)){$dobp="Not Set";}

		$editionofbook=mysql_result($query_run, 0,'editionofbook');
		if(empty($editionofbook)){$editionofbook="Not Set";}

		$isbn=mysql_result($query_run, 0,'isbn');
		if(empty($isbn)){$isbn="Not Set";}

		$content=mysql_result($query_run, 0,'content');
		if(empty($content)){$content="Not Set";}
		}
	} else {
		echo mysql_error();
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
						<div class="row">
										<div class="col-xs-8"></div>
										<div class="col-xs-4">
											<a href=""><button type="button" class="btn btn-primary">Edit Info</button></a>
											<a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
											<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
										</div>
						</div>
						<br><br>
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Information about <?php echo "$bookname" ?></h3></div>
						
							<div class="panel-body">
								<div class="col-xs-12" id="demo1" >
												<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															<h3><span style="margin-top: 1%;" class="label label-default md">Books published by  <?php echo "$s"; ?></span></h3>
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Author from -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$authorfrom"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of First Author -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$authorname"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Co-Authors -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$coauthorname"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$bookname"; ?></strong></h5></div>
															</div>

															<br>
															<br>
															
														</div>
													</div>
												</div>
												<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															 
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Book Publication -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dobp"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Edition of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$editionofbook"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>ISBN Number of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$isbn"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Abstract/Content of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$content"; ?></strong></h5></div>
															</div>
															<br><br><br>
															<br>
															
														</div>
													</div>
												</div>
												</div>
											</div>
								
							</div>
							<div class="panel-footer">
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


