<?php 
include 'core.inc.php';
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
					<img src="img/logo.png" alt="Walchand College of Engineering.">
				</div>
				<div class="infocat">
					<h1>Forms</h1>
					<div class="forms">
						<ul>
							<li> <a href="../../Forms/Form1/">Basic Details</a> </li>
							<li> <a href="../../Forms/Form2/">Educational Details</a></li>
							<li> <a href="../../Forms/Form3/">Upload a Photo</a></li>
						</ul>
					</div>
				</div>
				<div class="detail">
					<h1>Welcome Hello<a href="#"><?php echo $_SESSION['user_id']; ?></a></h1><br><br>
					<h1><a href="logout.php">Logout</a></h1>
				</div>	
			</div>
		
			<div class="footer">
				
			</div>
		</body>
 
</html>