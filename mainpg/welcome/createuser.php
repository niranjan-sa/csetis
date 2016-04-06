<?php 
include 'connect.inc.php';



$username="";
$password="";
$type="";
$info="";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];

	$query = "SELECT * FROM `userlogin` WHERE `username`='$username'";
	if($query_run=mysql_query($query)) {
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows!=0) {
			$info="Username already taken";
		}
		else {
			$query="INSERT INTO `userlogin` VALUES ('','$username','$password','$type')";
			if(mysql_query($query)) {
				$info="User Created Successfully";
			} else {
				$info="An Error Occured!!";
				echo mysql_error();
			}
		}
	} else {
		echo mysql_error();
	}
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Login Page</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<script>
		function validate () {
			alert("Are you sure to create an user??");
			return true;
		}
	</script>
</head>
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
			<div class="col-xs-6"></div>
			<div class="col-xs-6" height="5%">
					<a href="commander2.php"><button class="btn btn-primary btn-md">Home</button></a>
					<a href="logout.php"><button class="btn btn-danger btn-md">Logout</button></a>
			</div>
		</div>

		<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-4"></div>
			<div class="col-xs-4" align="center" style="padding-left: 2%;">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3>Create User</h3></div>
					<div class="panel-body">
						<form action="createuser.php" onSubmit="return validate()" role="form" method="post">
							<div class="form-group">
								<label for="username"><h4>Username </h4> </label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="text" class="form-control" name="username" required>
								</class>
							</div><br>
							
							<div class="form-group">
								<label for="ans"><h4>Password </h4></label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<input type="text" class="form-control" id="ans" name="password" required><br>
								</class>
							</div>

							<div class="form-group">
								<label for="seque"><h4>Type of account </h4> </label><br>
								<class class="col-xs-8" style="margin-left: 17%;">
									<select class="form-control" id="username" name="type" required>
										<option value=""></option>
										<option value="t">Teacher</option>
										<option value="a">Administrator</option>
									</select>
								</class>
							</div><br>
							

							<div class="form-group">
								<h4 class="text-info"><?php echo "$info"; ?></h4>
							</div><br>

							<div class="form-group">
								<button type="input" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<p class="text-warning">To Login Click<button type="button" class="btn btn-link">here</button>to retrive</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>