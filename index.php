
<!--Main Page of the project the login page -->

<?php 
//trial
include 'core.inc.php';
include 'connect.inc.php';
include 'info.php';
$err="";
$t="";

if(isset($_POST['username']) && isset($_POST['passwd'])) {
	$username = $_POST['username'];
	$password = $_POST['passwd'];
	$password_hash=md5($password);
	
	if(!empty($username) && !empty($password)) {
		
		$query="SELECT `userid`, `username`, `type` FROM `userlogin` WHERE `userlogin`.`username`='".mysql_real_escape_string($username)."' AND `userlogin`.`password`='".mysql_real_escape_string($password)."'";
		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Password/Username combination";
			} else {
				
				$user_id=mysql_result($query_run, 0,'userid');
				$t=mysql_result($query_run, 0, 'type');
				if($t=="t") {
					$_SESSION['user_id']=$user_id;
					header('Location: /csetis/mainpg/welcome/index.php');
				} else {
					$_SESSION['user_id']=$user_id;
					header('Location: /csetis/mainpg/welcome/commander2.php');
				}	
 			}
		}
	} else {
		$err="Username or password is incorrect.";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Login Page</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<!--<div class="jumbotron">-->
			<div class="header">
				<div class="row" style="padding-top: 2%;">
					<div class="col-xs-3 " padding-right="10%" height="10%">
						<br>
						<img src="../bootstrap/img/Walchand_11.gif" class="img-responsive" alt="Responsive Image" align="right"  />
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
					<div class="panel-heading"><h3>Login</h3></div>
					<div class="panel-body">
						<form action="index.php" role="form" method="post">
							<div class="form-group">
								<label for="username"><h4>Username </h4> </label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="text" class="form-control" id="username" name="username" required>
								</class>
							</div><br>
							<div class="form-group">
								<label for="passwd"><h4>Password </h4></label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="password" class="form-control" id="passwd" name="passwd" required><br>
								</class>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-default btn-md" value="submit"></input><br>
								<p class="bg-danger"><?php echo $err;?></p>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<p class="text-warning">Forgot Your password?  <a href="welcome/forgotpass.php"><button type="button" class="btn btn-link">Click</button></a>to retrive</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>