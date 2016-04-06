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

$nodc="";
$dipdiscipline="";
$dippercentage="";
$dipdate="";
$graduation="";
$gradother="";
$graddiscipline="";
$nogc="";
$graddate="";
$gradpercentage="";
$postgraduation="";
$postgradother="";
$postgraddiscipline="";
$nopgc="";
$postgraddate="";
$postgradpercentage="";
$docdegree="";
$area="";
$nophdc="";
$docdate="";

$query="SELECT * FROM `diploma` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
	} else {
		$nodc=mysql_result($query_run, 0,'noc');
		$dipdiscipline=mysql_result($query_run, 0,'nod');
		$dippercentage=mysql_result($query_run, 0,'percentage');
		$dipdate=mysql_result($query_run, 0,'dodc');
		
	}
}
else
{
	echo mysql_error();
}


$query="SELECT * FROM `graduation` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
	} else {
		$graduation=mysql_result($query_run, 0,'graduation');
		$gradother=mysql_result($query_run, 0,'other');
		$graddiscipline=mysql_result($query_run, 0,'discipline');
		$nogc=mysql_result($query_run, 0,'noc');
		$graddate=mysql_result($query_run, 0,'dog');
		$gradpercentage=mysql_result($query_run, 0,'percentage');
	}
}
else
{
	echo mysql_error();
}

$query="SELECT * FROM `postgraduation` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
	} else {
		$postgraduation=mysql_result($query_run, 0,'pg');
		$postgradother=mysql_result($query_run, 0,'other');
		$postgraddiscipline=mysql_result($query_run, 0,'discipline');
		$nopgc=mysql_result($query_run, 0,'noc');
		$postgraddate=mysql_result($query_run, 0,'dopg');
		$postgradpercentage=mysql_result($query_run, 0,'percentage');
	}
}
else
{
	echo mysql_error();
}

$query="SELECT * FROM `doctoraldegree` WHERE `userid`='$a'";

if($query_run=mysql_query($query)) {
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0) {
	} else {
		$docdegree=mysql_result($query_run, 0,'dg');
		$area=mysql_result($query_run, 0,'area');
		$nophdc=mysql_result($query_run, 0,'noc');
		$docdate=mysql_result($query_run, 0,'dodd');

	}
}
else
{
	echo mysql_error();
}


if(isset($_POST['graduation'])&&isset($_POST['graddiscipline'])&&isset($_POST['nogc'])&&isset($_POST['graddate'])&&isset($_POST['gradpercentage'])){

$nodc=cleared_input($_POST['nodc']);
$dipdiscipline=cleared_input($_POST['dipdiscipline']);
$dippercentage=cleared_input($_POST['dippercentage']);
$dipdate=cleared_input($_POST['dipdate']);
$graduation=cleared_input($_POST['graduation']);
$gradother=cleared_input($_POST['gradother']);
$graddiscipline=cleared_input($_POST['graddiscipline']);
$nogc=cleared_input($_POST['nogc']);
$graddate=cleared_input($_POST['graddate']);
$gradpercentage=cleared_input($_POST['gradpercentage']);
$postgraduation=cleared_input($_POST['postgraduation']);
$postgradother=cleared_input($_POST['postgradother']);
$postgraddiscipline=cleared_input($_POST['postgraddiscipline']);
$nopgc=cleared_input($_POST['nopgc']);
$postgraddate=cleared_input($_POST['postgraddate']);
$postgradpercentage=cleared_input($_POST['postgradpercentage']);
$docdegree=cleared_input($_POST['docdegree']);
$area=cleared_input($_POST['area']);
$nophdc=cleared_input($_POST['nophdc']);
$docdate=cleared_input($_POST['docdate']);


		$query="SELECT `userid` FROM `diploma` WHERE `userid`='$a'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$query1 ="INSERT INTO `diploma` VALUES ('$a','$nodc','$dipdiscipline','$dippercentage','$dipdate')";
					if($query_run=mysql_query($query1)) {
						//echo "boom boom";	
					} else {
						//echo 'Jim\'s dead';
					}		
			} else {
				$query2 ="UPDATE `diploma` SET `noc`='$nodc',`nod`='$dipdiscipline',`percentage`='$dippercentage',`dodc`='$dipdate' WHERE `userid`='$a'";
 				if($query_run=mysql_query($query2)) {
						//echo "boom boom1";	
					} else {
						//echo 'Jim\'s dead1';
					}
 			}
		}
		else
		{
			echo mysql_error();
		}

		$query="SELECT `userid` FROM `graduation` WHERE `userid`='$a'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$query1 ="INSERT INTO `graduation` VALUES ('$a','$graduation','$gradother','$graddiscipline','$nogc','$graddate','$gradpercentage')";
					if($query_run=mysql_query($query1)) {
						//echo "boom boom";	
					} else {
						//echo 'Jim\'s dead';
					}		
			} else {
				$query2 ="UPDATE `graduation` SET `graduation`='$graduation',`other`='$gradother',`discipline`='$graddiscipline',`noc`='$nogc',`dog`='$graddate',`percentage`='$gradpercentage' WHERE `userid`='$a'";
 				if($query_run=mysql_query($query2)) {
						//echo "boom boom1";	
					} else {
						//echo 'Jim\'s dead1';
					}
 			}
		}
		else
		{
			echo mysql_error();
		}

		$query="SELECT `userid` FROM `postgraduation` WHERE `userid`='$a'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$query1 ="INSERT INTO `postgraduation` VALUES ('$a','$postgraduation','$postgradother','$postgraddiscipline','$nopgc','$postgraddate','$postgradpercentage')";
					if($query_run=mysql_query($query1)) {
						//echo "boom boom";	
					} else {
						//echo 'Jim\'s dead';
					}		
			} else {
				$query2 ="UPDATE `postgraduation` SET `pg`='$postgraduation',`other`='$postgradother',`discipline`='$postgraddiscipline',`noc`='$nopgc',`dopg`='$postgraddate',`percentage`='$postgradpercentage' WHERE `userid`='$a'";
 				if($query_run=mysql_query($query2)) {
						//echo "boom boom1";	
					} else {
						//echo 'Jim\'s dead1';
					}
 			}
		}
		else
		{
			echo mysql_error();
		}

		$query="SELECT `userid` FROM `doctoraldegree` WHERE `userid`='$a'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				$query1 ="INSERT INTO `doctoraldegree` VALUES ('$a','$docdegree','$area','$nophdc','$docdate')";
					if($query_run=mysql_query($query1)) {
						//echo "boom boom";	
					} else {
						//echo 'Jim\'s dead';
					}		
			} else {
				$query2 ="UPDATE `doctoraldegree` SET `dg`='$docdegree',`area`='$area',`noc`='$nophdc',`dodd`='$docdate' WHERE `userid`='$a'";
 				if($query_run=mysql_query($query2)) {
						//echo "boom boom1";	
					} else {
						//echo 'Jim\'s dead1';
					}
 			}
		}
		else
		{
			echo mysql_error();
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
	<title>Educational Details</title>
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
					<form action="index.php" role="form" method="POST">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Educational Details</h3></div>
							
							<div class="panel panel-default" style="padding-top: 1%;">
								<p class="bg-info" align="left">
									Dear all,
									You are requested to fill the below information to improve our college database which will be helpful at the time of accreditation or any institute activity. 
									Your username <a href="../../mainpg/welcome/">(<?php echo $username; ?>)</a> will be recorded when you submit this form. <button type="button" class="btn btn-link"><a href="logout.inc.php">Sign out</a></button><br>
								</p>
								<p class="bg-danger">* Required</p>
							</div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
										
										
											<div class="form-group"  style="margin-top: 5%;">
												<label for="" style="text-align: right;">
														<h4>Name of Diploma college</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nodc" name="nodc" value="<?php echo $nodc?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Diploma Discipline </h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="dipdiscipline" name="dipdiscipline" value="<?php echo $dipdiscipline?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Percentage of Diploma</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="dippercentage" name="dippercentage" value="<?php echo $dippercentage?>">
												</div>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Diploma Completed Date</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="dipdate" class="form-control" id="dipdate" value="<?php echo $dipdate?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Graduation *</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="graduation" id="graduation" class="form-control" required>
														<option value="<?php echo $graduation?>"><?php echo $graduation?></option>
														<option value="B.Tech.">B.Tech.</option>
														<option value="B.E.">B.E.</option>
														<option value="B.Sc.">B.Sc.</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Graduation, If Other</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="gradother" name="gradother" value="<?php echo $gradother?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Graduated Discipline *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="graddiscipline" name="graddiscipline" value="<?php echo $graddiscipline?>" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Graduation college</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nogc" name="nogc" value="<?php echo $nogc?>" required>
												</div>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Graduation *</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="graddate" class="form-control" id="graddate" value="<?php echo $graddate?>" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Percentage of Graduation *</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="gradpercentage" name="gradpercentage" value="<?php echo $gradpercentage?>" required>
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Post-Graduation</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="postgraduation" id="postgraduation" class="form-control" >
														<option value="<?php echo $postgraduation?>"><?php echo $postgraduation?></option>
														<option value="M.Tech.">M.Tech.</option>
														<option value="M.E.">M.E.</option>
														<option value="M.Sc.">M.Sc.</option>
														<option value="MBA">MBA</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>


									</div>
								</div>
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
											
											
											<div class="form-group" style="margin-top: 5%;">
												<label for="" style="text-align: right;">
														<h4>Post-Graduation, If Other</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="postgradother" name="postgradother" value="<?php echo $postgradother?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Post-Graduated Discipline </h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="postgraddiscipline" name="postgraddiscipline" value="<?php echo $postgraddiscipline?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Post-Graduation College</h4>
												</label><br>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nopgc" name="nopgc" value="<?php echo $nopgc?>">
												</div><br><br>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Date of Post-Graduation</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="postgraddate" class="form-control" id="postgraddate" value="<?php echo $postgraddate?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Percentage of Post-Graduation</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="postgradpercentage" name="postgradpercentage" value="<?php echo $postgradpercentage?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Doctoral Degree</h4>
												</label>

												<div class="col-xs-4" style="float: right; margin-right: 8%;" >
													<select name="docdegree" id="docdegree" class="form-control" >
														<option value="<?php echo $docdegree?>"><?php echo $docdegree?></option>
														<option value="Ph.D.">Ph.D.</option>
														<option value="Post-Doc">Post-Doc</option>
													</select>
												</div>
											</div>

											
											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Area of Research</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="area" name="area" value="<?php echo $area?>">
												</div>
									
											</div>

											<div class="form-group">
												<label for="" style="text-align: right;">
														<h4>Name of Ph.D. College</h4>
												</label>
												
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="text" class="form-control" id="nophdc" name="nophdc" value="<?php echo $nophdc?>">
												</div>
									
											</div>

											<div class="form-group" style="margin-top: 5%;">
												<label for="">
														<h4>Doctoral Degree Award Date</h4>
												</label>
												<div class="col-xs-5" style="float: right; margin-right: 8%;" >
													<input type="date" name="docdate" class="form-control" id="docdate" value="<?php echo $docdate?>">
												</div>
									
											</div><br><br><br><br>

			
									</div>
								</div>
							</div>
							
							<div class="panel-footer">
								<button type="submit" class="btn btn-default btn-md" value="submit">Submit</button>
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
