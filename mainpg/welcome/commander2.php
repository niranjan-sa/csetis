<?php 
include 'connect.inc.php';

$usernames;
$id;
$mysql_num_rows=0;
$query = "SELECT * FROM `userlogin` WHERE 1";
if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
		$info="The database is empty";
	}
	else {
		for($i=0;$i<$query_num_rows;$i++) {
			$username[$i]=mysql_result($query_run,$i,'username');
			$id[$i]=mysql_result($query_run,$i,'userid');
		}
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
	<title>Login Page</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
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
			<div class="col-xs-1"></div>
			<div class="col-xs-10" align="center">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3>Control Panel</h3></div>
					<div class="panel-body">
						<div class="row" align="center" style="padding-top: 1%;">
							<div class="col-xs-6"></div>
							<div class="col-xs-6" height="5%">
									<a href="createuser.php"><button class="btn btn-primary btn-md">Create User</button></a>
									<a href="index.php"><button class="btn btn-primary btn-md">My Page</button></a>
									<a href="deleteuser.php"><button class="btn btn-warning btn-md">Delete User</button></a>
									<a href="logout.php"><button class="btn btn-danger btn-md">Logout</button></a>
							</div>
						</div>

						<div class="row" align="center" style="padding-top: 1%;">
							<div class="col-xs-1"></div>
							<div class="col-xs-4" style="margin-left: 1%;">
								<legend>Users Registered <span class="badge"><?php echo $query_num_rows; ?></span></legend>
							</div>
							<div class="col-xs-7"></div>
						</div>

						<div class="row" align="center" style="padding-top: 1%;">
							<div class="col-xs-1"></div>
							<div class="col-xs-10" align="center" style="padding-top: 2%;">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="col-xs-6">
										<?php 
											for($i=0; $i<=$query_num_rows/2; $i++) {?>
											<div class="row" align="center">
												<a href="jump.php?user_id=<?php echo $id[$i];?>"><button class="btn btn-info"><?php echo $username[$i] ?></button></a>
											</div><br>
												 
										<?php }?>	
										</div>
										<div class="col-xs-6">
											<?php 
												for($i=($query_num_rows/2)+1; $i<$query_num_rows; $i++) {?>
													<div class="row" align="center">
														<a href="jump.php?user_id=<?php echo $id[$i];?>"><button class="btn btn-info"><?php echo $username[$i] ?></button></a>	
													</div><br>
													
											<?php	}?>
										</div>	
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="panel-footer"><h4>An APK Lab Creation.</h4></div>
				</div>	
			</div>
			
		</div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>