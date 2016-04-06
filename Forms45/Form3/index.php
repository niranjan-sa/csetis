
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
					<img src="img/logo.png" alt="Walchand College of Engineering!">
				</div>
				<div class="thumb">	
					<div class="formcontent">
						<div class="form">
							<div class="title">
								<h1>Upload a photo</h1>
							</div>
							<div class="descp">
								<p>Welcome , <?php echo $_SESSION['user_id']; ?></p>
								<p>You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
								</p><p>Your username <a href="../../mainpg/welcome/">(<?php echo $_SESSION['user_id']; ?>)</a> will be recorded when you submit this form. Not <?php echo $_SESSION['user_id']; ?>? <a href="../../mainpg/">Sign out</a></p>
								<br><p id="req">* Required</p>
							</div>
							<div class="photo">
								<div class="img">
									<output id="list"></output>
								</div>
								<form action="action.php" method="post" enctype="multipart/form-data">
									<input type="file"  id='files' name="file"><br><br>
									<input type="submit" value="submit">
									<script>
										if (window.FileReader) {
									      function handleFileSelect(evt) {
									        var files = evt.target.files;
									        var f = files[0];
									        var reader = new FileReader();
											
									          reader.onload = (function(theFile) {
									            return function(e) {
									              document.getElementById('list').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="100%" height="100%"/>'].join('');
									            };
									          })(f);
									    
									          reader.readAsDataURL(f);
									      }
										 } else {
										  alert('This browser does not support FileReader');
										}
									    
									      document.getElementById('files').addEventListener('change', handleFileSelect, false);
		    						</script>
						</form>
							</div>
						</div>
					</div>						
				</div>				
			</div>
		
			<div class="footer">
				
			</div>
		</body>

</html>