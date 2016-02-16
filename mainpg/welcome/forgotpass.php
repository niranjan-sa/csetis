<?php 
include 'core.inc.php';
include 'connect.inc.php';

$reply="";
$username="";
$que="";
$ans="";

if(isset($_POST['username']) && isset($_POST['que']) && isset($_POST['ans'])) {
	$username = $_POST['username'];
	$que = $_POST['que'];
	$ans = strtolower($_POST['ans']);

	$query = "SELECT * FROM `seque` WHERE `username`='$username' AND `que`='$que' AND `ans`='$ans'";
	if($query_run=mysql_query($query)) {
		$max_num_rows=mysql_num_rows($query_run);
		if($max_num_rows==0) {
			$reply="Security Question Not Set.";
		}else {
			$query = "SELECT `password` FROM `userlogin` WHERE `username`='$username'";
			$res=mysql_query($query);
			if($res) {
				$p=mysql_result($res, 0, 'password');
				$reply="Your Password is $p (Handle with care)";
			} else {
				$reply="Error in input";
			}
		}

	} else {

	}


}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<!--<div class="jumbotron">-->
			<div class="header">
				<div class="row" style="padding-top: 2%;">
					<div class="col-xs-3 " padding-right="10%" height="10%">
						<br>
						<img src="img/Walchand_11.gif" class="img-responsive" alt="Responsive Image" align="right"  />
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
			<div class="col-xs-4"></div>
			<div class="col-xs-4" align="center" style="padding-left: 2%;">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3>Forgot Password</h3></div>
					<div class="panel-body">
						<form action="forgotpass.php" method="post" role="form">
							<div class="form-group">
								<label for="username"><h4>Username </h4> </label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="text" class="form-control" name="username" required>
								</class>
							</div><br>
							<div class="form-group">
								<label for="seque"><h4>Security Question </h4> </label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<select class="form-control" id="username" name="que" required>
										<option value=""></option>
										<option value="What is your pet name?">What is your pet name?</option>
										<option value="What is your Vehicle No?">What is your Vehicle No?</option>
										<option value="What is your favorite color?">What is your favorite color?</option>
										<option value="What is your first email id?">What is your first email id?</option>
									</select>
								</class>
							</div><br>
							<div class="form-group">
								<label for="ans"><h4>Answer </h4></label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="text" class="form-control" name="ans" required><br>
								</class>
							</div>
							<br><br>

							<div class="form-group">
								<h4 class="text-info"><?php echo "$reply"; ?></h4>
							</div><br>


							<div class="form-group">
								<button type="submit" class="btn btn-default btn-md" >Submit</button>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<p class="text-warning">To Login <a href="../"><button type="button" class="btn btn-link">Click here</button></p>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>