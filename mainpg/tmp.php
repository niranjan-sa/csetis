<?php 

include 'core.inc.php';
include 'connect.inc.php';
include 'info.php';
$err="";

if(isset($_POST['username']) && isset($_POST['pass'])) {
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$password_hash=md5($password);

	if(!empty($username) && !empty($password)) {
		$query="SELECT `id`, `email` FROM `userlogin` WHERE `userlogin`.`email`='".mysql_real_escape_string($username)."' AND `userlogin`.`password`='".mysql_real_escape_string($password)."'";
		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$err="Invalid Password/Username combination";
			} else {
				$user_id=mysql_result($query_run, 0,'email');
				$_SESSION['user_id']=$user_id;
				header('Location: /csetis/mainpg/welcome/index.php'); 	
 			}
		}
	} else {
		$err="Username or password is incorrect.";
	}
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
					<img src="img/logo.png" alt="Walchand College of Engineering!">
				</div>
				<div class="depart">
					<div class="formwrap">
						<h1>Login :-</h1>
						<div class="form">
							<div class="formtags">
								<form action="index.php" method="post">
									<h2>Username :- </h2><br>
									<input type="text" name="username"><br><br>
									<h2>Password :- </h2><br>
									<input type="password" name="pass"><br><br>
									<input type="submit" value="submit"><br><br>
									<h2 id="red"><?php echo $err; ?></h2> 
								</form>
							</div>			
						</div>
					</div>
					
				</div>
				<div class="thumb">
					
				</div>
				<div class="hod">
					
				</div>
				
			</div>
		
			<div class="footer">
				
			</div>
		</body>

</html>