<?php 
include 'connect.inc.php';

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
								<h1>Educational Details</h1>
							</div>
							<div class="descp">
								<p>Dear all, </p>
								<p>You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
								</p><p>Your username <a href="#">(smriti.bhandari@walchandsangli.ac.in)</a> will be recorded when you submit this form. Not smriti.bhandari? <a href="#">Sign out</a></p>
								<br><p id="req">* Required</p>
							</div>
							<br>
							<br>
							<div class="cont">
									<div class="form">
										<form action="action.php" method="post">
											<ul>
												<h2>Educational Details</h2><br>
												<li>
													<h4>Have You Completed Diploma? *</h4><br>
													<span><input type="radio" name="dip" value="y">Yes</input></span><br>
													<span><input type="radio" name="dip" value="n">No</input></span><br>
													<p><?php  ?></p>
												</li>
												<br>
												<li>
													<h4>Name of Diploma college (If Applicable)</h4><br>
													<input type="text" name="dipclg"/>
												</li>
												<br>
												<li>
													<h4>Name of Diploma Discipline (If Applicable)</h4><br>
													<input type="text" name="dipdiscilpine"/>
												</li>
												<br>
												<li>
													<h4>Percentage of Diploma (If Applicable)</h4><br>
													<input type="text" name="fullname">
												</li>
												<br>
												<li>
													<h4>Diploma Completed Date (If Applicable)</h4><br>
													<input type="date" name="dipdate">
												</li>
												<br>
												<li>
													<h4>Graduation *</h4><br>
													<select name="graduation" id="graduation">
														<option value=""></option>
														<option value="B.Tech">B.Tech</option>
														<option value="B.E.">B.E.</option>
														<option value="B.Sc.">B.Sc.</option>
														<option value="Other">Other</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Graduation, If Other, Please Mention</h4><br>
													<input type="text" name="othergrad">
												</li>
												<br>
												<li>
													<h4>Graduated Discipline *</h4>
													<p>Example: Mechanical Engineering</p><br>
													<input type="text" name="graddiscipline">
												</li>
												<br>
												<li>
													<h4>Name of Graduated College *</h4>
													<p>Example: WCE, Sangli, Maharashtra</p><br>
													<input type="text" name="gradinstitute">
												</li>
												<br>
												<li>
													<h4>Date of Graduation *</h4><br>
													<input type="date" name="graddate">
												</li>
												<br>
												<li>
													<h4>Percentage of Graduation *</h4><br>
													<p>Example: 85 or 8.5/10 (If CGPA)</p>
													<input type="text" name="score">
												</li>
												<br>
												<!-- -->
												<li>
													<h4>Post Graduation</h4><br>
													<select name="graduation" id="postgraduation">
														<option value=""></option>
														<option value="M.Tech">B.Tech</option>
														<option value="M.E.">B.E.</option>
														<option value="M.Sc.">B.Sc.</option>
														<option value="MBA">MBA</option>
														<option value="Other">Other</option>
													</select>
												</li>
												<br>
												<li>
													<h4>Post Graduation, If applicable</h4><br>
													<input type="text" name="otherpostgrad">
												</li>
												<br>
												<li>
													<h4>Post-Graduated Discipline (If Not Applicable, Keep Blank) </h4>
													<p>Example: Mechanical-Design Engineering</p><br>
													<input type="text" name="postgraddiscipline">
												</li>
												<br>
												<li>
													<h4>Post-Graduated College (If Not Applicable, Keep Blank)</h4>
													<p>Example: WCE, Sangli, Maharashtra</p><br>
													<input type="text" name="gradinstitute">
												</li>
												<br>
												<li>
													<h4>Date of Post Graduation (If Not Applicable, Keep Blank)</h4><br>
													<input type="date" name="graddate">
												</li>
												<br>
												<li>
													<h4>Percentage of Post-Graduation (If Not Applicable, Keep Blank)</h4><br>
													<p>Example: 85 or 8.5/10 (If CGPA)</p>
													<input type="text" name="score">
												</li>
												<br>
												
												<li>
													<h4>Doctoral Degree (If Applicable)</h4><br>
													<span><input type="radio" name="doc" value="Phd">Ph.D</input></span><br>
													<span><input type="radio" name="doc" value="Postdoc">Post-Doc</input></span><br>
													<p><?php  ?></p>
												</li>
												<br>
												
												<li>
													<h4>Area of Research (If Not Applicable, Keep Blank)</h4>
													<p>Example: MEMS</p><br>
													<input type="text" name="docdiscipline">
												</li>
												<br>
												<li>
													<h4>Name of College Where Ph.D. Registered (If Not Applicable, Keep Blank)</h4>
													<p>Example: WCE, Sangli, Maharashtra</p><br>
													<input type="text" name="docinstitute">
												</li>
												<br>
												<li>
													<h4>Doctoral Degree Award Date (If Not Applicable, Keep Blank)</h4><br>
													<input type="date" name="docdate">
												</li>
												<br>
												<li>
													<input type="submit" name="submit" value="Submit">
												</li>
											</ul>
										</form>
									</div>
									</div>
						</div>
					</div>						
				</div>				
			</div>
		
			<div class="footer">
				
			</div>
		</body>

</html>