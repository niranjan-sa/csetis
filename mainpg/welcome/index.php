<!-- Form 1 Basic details -->
<?php
include 'core.inc.php';
include 'connect.inc.php';
//error_reporting(E_ERROR | E_PARSE);
//Handles 
if(!isset($_SESSION['user_id'])) {
	header("Location: ../index.php");
}

$a = $_SESSION['user_id'];
$query22="SELECT `username` FROM `userlogin` WHERE `userid`='$a'";

if($query_run22=mysql_query($query22)) {
	$query_num_rows22=mysql_num_rows($query_run22);
	if($query_num_rows22==0) {
		echo $err="Invalid Password/Username combination";
	} else {
		$username=mysql_result($query_run22, 0,'username');	
 	}
}
else
{
	echo mysql_error();
}

$id="Not Set";
$title="Not Set";
$gender="Not Set";
$fullname="Not Set";
$namefathus="Not Set";
$mothername="Not Set";
$academicpos="Not Set";
$dob="Not Set";
$highestqual="Not Set";
$extrahiqual="Not Set";
$statushiqual="Not Set";
$toa="Not Set";
$woa="Not Set";

$query = "SELECT * FROM `basicdetails` WHERE `userid`='$a' ";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				
				$title=mysql_result($query_run, 0,'title');
				if(empty($title)){$title="Not Set";}

				$gender=mysql_result($query_run, 0,'gender');
				if(empty($gender)){$gender="Not Set";}

				$fullname=mysql_result($query_run, 0,'fullname');
				if(empty($fullname)){$fullname="Not Set";}

				$namefathus=mysql_result($query_run, 0,'namefathus');
				if(empty($namefathus)){$namefathus="Not Set";}

				$mothername=mysql_result($query_run, 0,'mothername');
				if(empty($mothername)){$mothername="Not Set";}

				$academicpos=mysql_result($query_run, 0,'academicpos');
				if(empty($academicpos)){$academicpos="Not Set";}

				$dob=mysql_result($query_run, 0,'dob');
				if(empty($dob)){$dob="Not Set";}

				$highestqual=mysql_result($query_run, 0,'highestqual');
				if(empty($highestqual)){$highestqual="Not Set";}

				$extrahiqual=mysql_result($query_run, 0,'extrahiqual');
				if(empty($extrahiqual)){$extrahiqual="Not Set";}

				$statushiqual=mysql_result($query_run, 0,'statushiqual');
				if(empty($statushiqual)){$statushiqual="Not Set";}

				$toa=mysql_result($query_run, 0,'toa');
				if(empty($toa)){$toa="Not Set";}

				$woa=mysql_result($query_run, 0,'woa');
				if(empty($woa)){$woa="Not Set";}


 			}
} else {
	echo mysql_error();
}



$query = "SELECT * FROM `guestlecturedelivered` WHERE `userid`='$a' ";
$facultyfrom="Not Set";
$department1="Not Set";
$nameofthefaculty="Not Set";
$nameoforganization="Not Set";
$place="Not Set";
$typeoflecture="Not Set";
$titleoflecture="Not Set";
$durationoflecture="Not Set";
$dol="Not Set";
$numberofstudents="Not Set";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$facultyfrom=mysql_result($query_run, 0,'facultyfrom');
				if(empty($facultyfrom)){$facultyfrom="Not Set";}

				$department1=mysql_result($query_run, 0,'department');
				if(empty($department1)){$department1="Not Set";}

				$nameofthefaculty=mysql_result($query_run, 0,'nameofthefaculty');
				if(empty($nameofthefaculty)){$nameofthefaculty="Not Set";}

				$nameoforganization=mysql_result($query_run, 0,'nameoforganization');
				if(empty($nameoforganization)){$nameoforganization="Not Set";}

				$place=mysql_result($query_run, 0,'place');
				if(empty($place)){$place="Not Set";}

				$typeoflecture=mysql_result($query_run, 0,'typeoflecture');
				if(empty($typeoflecture)){$typeoflecture="Not Set";}

				$titleoflecture=mysql_result($query_run, 0,'titleoflecture');
				if(empty($titleoflecture)){$titleoflecture="Not Set";}

				$durationoflecture=mysql_result($query_run, 0,'durationoflecture');
				if(empty($durationoflecture)){$durationoflecture="Not Set";}

				$dol=mysql_result($query_run, 0,'dol');
				if(empty($dol)){$dol="Not Set";}

				$numberofstudents=mysql_result($query_run, 0,'numberofstudents');
				if(empty($numberofstudents)){$numberofstudents="Not Set";}


 			}
} else {
	echo mysql_error();
}

$query = "SELECT * FROM `eventorganized` WHERE `userid`='$a' ";
$eventcoordinatorfrom="Not Set";
$department2="Not Set";
$typeofevent="Not Set";
$duration="Not Set";
$coordinatorname="Not Set";
$cocoordinatorname="Not Set";
$dos="Not Set";
$doe="Not Set";
$toe="Not Set";
$nameofresource1="Not Set";
$nameofresource2="Not Set";
$nameofresource3="Not Set";
$nameofresource4="Not Set";
$details="Not Set";
$totalparticipants="Not Set";
$wceparticipants="Not Set";
$nonwceparticipants="Not Set";
$expenditure="Not Set";
$expenditurethrough="Not Set";
$otherthing="Not Set";
$irg="Not Set";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$eventcoordinatorfrom=mysql_result($query_run, 0,'eventcoordinatorfrom');
				if(empty($eventcoordinatorfrom)){$eventcoordinatorfrom="Not Set";}

				$department2=mysql_result($query_run, 0,'department');
				if(empty($department2)){$department2="Not Set";}

				$typeofevent=mysql_result($query_run, 0,'typeofevent');
				if(empty($typeofevent)){$typeofevent="Not Set";}

				$duration=mysql_result($query_run, 0,'duration');
				if(empty($duration)){$duration="Not Set";}

				$coordinatorname=mysql_result($query_run, 0,'coordinatorname');
				if(empty($coordinatorname)){$coordinatorname="Not Set";}

				$cocoordinatorname=mysql_result($query_run, 0,'cocoordinatorname');
				if(empty($cocoordinatorname)){$cocoordinatorname="Not Set";}

				$dos=mysql_result($query_run, 0,'dos');
				if(empty($dos)){$dos="Not Set";}

				$doe=mysql_result($query_run, 0,'doe');
				if(empty($doe)){$doe="Not Set";}

				$toe=mysql_result($query_run, 0,'toe');
				if(empty($toe)){$toe="Not Set";}

				$nameofresource1=mysql_result($query_run, 0,'nameofresource1');
				if(empty($nameofresource1)){$nameofresource1="Not Set";}

				$nameofresource2=mysql_result($query_run, 0,'nameofresource2');
				if(empty($nameofresource2)){$nameofresource2="Not Set";}

				$nameofresource3=mysql_result($query_run, 0,'nameofresource3');
				if(empty($nameofresource3)){$nameofresource3="Not Set";}

				$nameofresource4=mysql_result($query_run, 0,'nameofresource4');
				if(empty($nameofresource4)){$nameofresource4="Not Set";}

				$details=mysql_result($query_run, 0,'details');
				if(empty($details)){$details="Not Set";}

				$totalparticipants=mysql_result($query_run, 0,'totalparticipants');
				if(empty($totalparticipants)){$totalparticipants="Not Set";}

				$wceparticipants=mysql_result($query_run, 0,'wceparticipants');
				if(empty($wceparticipants)){$wceparticipants="Not Set";}

				$nonwceparticipants=mysql_result($query_run, 0,'nonwceparticipants');
				if(empty($nonwceparticipants)){$nonwceparticipants="Not Set";}

				$expenditure=mysql_result($query_run, 0,'expenditure');
				if(empty($expenditure)){$expenditure="Not Set";}

				$expenditurethrough=mysql_result($query_run, 0,'expenditurethrough');
				if(empty($expenditurethrough)){$expenditurethrough="Not Set";}

				$otherthing=mysql_result($query_run, 0,'otherthing');
				if(empty($otherthing)){$otherthing="Not Set";}

				$irg=mysql_result($query_run, 0,'irg');
				if(empty($irg)){$irg="Not Set";}

 			}
} else {
	echo mysql_error();
}


$query = "SELECT * FROM `guestlectureorganized` WHERE `userid`='$a' ";

$facultyfrom1="";
$department3="";
$nameofthefaculty1="";
$nameofresourceperson="";
$organization1="";
$place1="";
$titleoflecture="";
$startdate="";
$starttime="";
$enddate="";
$endtime="";
$numberofstudents="";
$totalexpenditure="";
$expthrough="";
if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$facultyfrom1=mysql_result($query_run, 0,'facultyfrom');
				if(empty($facultyfrom1)){$facultyfrom1="Not Set";}

				$department3=mysql_result($query_run, 0,'department');
				if(empty($department3)){$department3="Not Set";}

				$nameofthefaculty1=mysql_result($query_run, 0,'nameofthefaculty');
				if(empty($nameofthefaculty1)){$nameofthefaculty1="Not Set";}

				$nameofresourceperson=mysql_result($query_run, 0,'nameofresourceperson');
				if(empty($nameofresourceperson)){$nameofresourceperson="Not Set";}

				$organization1=mysql_result($query_run, 0,'organization');
				if(empty($organization1)){$organization1="Not Set";}

				$place1=mysql_result($query_run, 0,'place');
				if(empty($place1)){$place1="Not Set";}

				$titleoflecture=mysql_result($query_run, 0,'titleoflecture');
				if(empty($titleoflecture)){$titleoflecture="Not Set";}

				$startdate=mysql_result($query_run, 0,'startdate');
				if(empty($startdate)){$startdate="Not Set";}

				$starttime=mysql_result($query_run, 0,'starttime');
				if(empty($starttime)){$starttime="Not Set";}

				$enddate=mysql_result($query_run, 0,'enddate');
				if(empty($enddate)){$enddate="Not Set";}

				$endtime=mysql_result($query_run, 0,'endtime');
				if(empty($endtime)){$endtime="Not Set";}

				$numberofstudents=mysql_result($query_run, 0,'numberofstudents');
				if(empty($numberofstudents)){$numberofstudents="Not Set";}

				$totalexpenditure=mysql_result($query_run, 0,'totalexpenditure');
				if(empty($totalexpenditure)){$totalexpenditure="Not Set";}

				$expthrough=mysql_result($query_run, 0,'expthrough');
				if(empty($expthrough)){$expthrough="Not Set";}


 			}
} else {
	echo mysql_error();
}

$query = "SELECT * FROM `foreigntravel` WHERE `userid`='$a' ";

$facultyfrom2="";
$department4="";
$pov="";
$nof="";
$details1="";
$eov="";
$sponsor="";
$othera="";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$facultyfrom2=mysql_result($query_run, 0,'facultyfrom');
				if(empty($facultyfrom2)){$facultyfrom2="Not Set";}

				$department4=mysql_result($query_run, 0,'department');
				if(empty($department4)){$department4="Not Set";}

				$pov=mysql_result($query_run, 0,'pov');
				if(empty($pov)){$pov="Not Set";}

				$nof=mysql_result($query_run, 0,'nof');
				if(empty($nof)){$nof="Not Set";}

				$details1=mysql_result($query_run, 0,'details');
				if(empty($details1)){$details1="Not Set";}

				$eov=mysql_result($query_run, 0,'eov');
				if(empty($eov)){$eov="Not Set";}

				$sponsor=mysql_result($query_run, 0,'sponsor');
				if(empty($sponsor)){$sponsor="Not Set";}

				$othera=mysql_result($query_run, 0,'other');
				if(empty($othera)){$othera="Not Set";}

 			}
} else {
	echo mysql_error();
}

$query = "SELECT * FROM `infrastructuredevelopment` WHERE `userid`='$a' ";

$wing1="";
$department5="";
$other1="";
$nof1="";
$tod1="";
$other2="";
$quantity1="";
$purchased1="";
$specification1="";
$expenditure1="";
$dop1="";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$wing1=mysql_result($query_run, 0,'wing');
				if(empty($wing1)){$wing1="Not Set";}

				$department5=mysql_result($query_run, 0,'department');
				if(empty($department5)){$department5="Not Set";}

				$other1=mysql_result($query_run, 0,'other1');
				if(empty($other1)){$other1="Not Set";}

				$nof1=mysql_result($query_run, 0,'nof');
				if(empty($nof1)){$nof1="Not Set";}

				$tod1=mysql_result($query_run, 0,'tod');
				if(empty($tod1)){$tod1="Not Set";}

				$other2=mysql_result($query_run, 0,'other2');
				if(empty($other2)){$other2="Not Set";}

				$quantity1=mysql_result($query_run, 0,'quantity');
				if(empty($quantity1)){$quantity1="Not Set";}

				$purchased1=mysql_result($query_run, 0,'purchased');
				if(empty($purchased1)){$purchased1="Not Set";}

				$specification1=mysql_result($query_run, 0,'specification');
				if(empty($specification1)){$specification1="Not Set";}

				$expenditure1=mysql_result($query_run, 0,'expenditure');
				if(empty($expenditure1)){$expenditure1="Not Set";}

				$dop1=mysql_result($query_run, 0,'dop');
				if(empty($dop1)){$dop1="Not Set";}


 			}
} else {
	echo mysql_error();
}

$query = "SELECT * FROM `mou` WHERE `userid`='$a' ";

$typeofmou="";
$facultyfrom5="";
$department6="";
$nameofindustry="";
$moudate="";
$purposeofmou="";
$detailsofmou="";
$submitphotos="";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$typeofmou=mysql_result($query_run, 0,'typeofmou');
				if(empty($typeofmou)){$typeofmou="Not Set";}

				$facultyfrom5=mysql_result($query_run, 0,'facultyfrom');
				if(empty($facultyfrom5)){$facultyfrom5="Not Set";}

				$department6=mysql_result($query_run, 0,'department');
				if(empty($department6)){$department6="Not Set";}

				$nameofindustry=mysql_result($query_run, 0,'nameofindustry');
				if(empty($nameofindustry)){$nameofindustry="Not Set";}

				$moudate=mysql_result($query_run, 0,'moudate');
				if(empty($moudate)){$moudate="Not Set";}

				$purposeofmou=mysql_result($query_run, 0,'purposeofmou');
				if(empty($purposeofmou)){$purposeofmou="Not Set";}

				$detailsofmou=mysql_result($query_run, 0,'detailsofmou');
				if(empty($detailsofmou)){$detailsofmou="Not Set";}
				

 			}
} else {
	echo mysql_error();
}

$query = "SELECT * FROM `patent` WHERE `userid`='$a' ";

$facultyfrom3="";
$department7="";
$typeofpatent="";
$statusofpatent="";
$nameoffirstauthor="";
$nameofcoauthor="";
$title1="";
$dateofpatentfiled="";
$dateofpatentawarded="";
$patentnumber="";
$detailsofpatent="";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$facultyfrom3=mysql_result($query_run, 0,'facultyfrom');
				if(empty($facultyfrom3)){$facultyfrom3="Not Set";}

				$department7=mysql_result($query_run, 0,'department');
				if(empty($department7)){$department="Not Set";}

				$typeofpatent=mysql_result($query_run, 0,'typeofpatent');
				if(empty($typeofpatent)){$typeofpatent="Not Set";}

				$statusofpatent=mysql_result($query_run, 0,'statusofpatent');
				if(empty($statusofpatent)){$statusofpatent="Not Set";}

				$nameoffirstauthor=mysql_result($query_run, 0,'nameoffirstauthor');
				if(empty($nameoffirstauthor)){$nameoffirstauthor="Not Set";}

				$nameofcoauthor=mysql_result($query_run, 0,'nameofcoauthor');
				if(empty($nameofcoauthor)){$nameofcoauthor="Not Set";}

				$title1=mysql_result($query_run, 0,'title');
				if(empty($title1)){$title1="Not Set";}

				$dateofpatentfiled=mysql_result($query_run, 0,'dateofpatentfiled');
				if(empty($dateofpatentfiled)){$dateofpatentfiled="Not Set";}

				$dateofpatentawarded=mysql_result($query_run, 0,'dateofpatentawarded');
				if(empty($dateofpatentawarded)){$dateofpatentawarded="Not Set";}

				$patentnumber=mysql_result($query_run, 0,'patentnumber');
				if(empty($patentnumber)){$patentnumber="Not Set";}

				$detailsofpatent=mysql_result($query_run, 0,'detailsofpatent');
				if(empty($detailsofpatent)){$detailsofpatent="Not Set";}
				

 			}
} else {
	echo mysql_error();
}


$query = "SELECT * FROM `projectgrants` WHERE `userid`='$a' ";

$investigatorfrom="";
$department8="";
$nameofagency="";
$otherfundingagency="";
$statusofproject="";
$nameofprincipalinvestigator="";
$nameofcoinvestigator="";
$titleofproject="";
$amountsantioned="";
$dateofprojectsantioned="";
$dateofprojectcompleted="";
$projectabstract="";
$equipmentdetails="";
$totalrevenue="";
$totalpaperspublished="";
$btechstudents="";
$mtechstudents="";
$phdstudents="";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$investigatorfrom=mysql_result($query_run, 0,'investigatorfrom');
				if(empty($investigatorfrom)){$investigatorfrom="Not Set";}

				$department8=mysql_result($query_run, 0,'department');
				if(empty($department8)){$department8="Not Set";}

				$nameofagency=mysql_result($query_run, 0,'nameofagency');
				if(empty($nameofagency)){$nameofagency="Not Set";}

				$otherfundingagency=mysql_result($query_run, 0,'otherfundingagency');
				if(empty($otherfundingagency)){$otherfundingagency="Not Set";}

				$statusofproject=mysql_result($query_run, 0,'statusofproject');
				if(empty($statusofproject)){$statusofproject="Not Set";}

				$nameofprincipalinvestigator=mysql_result($query_run, 0,'nameofprincipalinvestigator');
				if(empty($nameofprincipalinvestigator)){$nameofprincipalinvestigator="Not Set";}

				$nameofcoinvestigator=mysql_result($query_run, 0,'nameofcoinvestigator');
				if(empty($nameofcoinvestigator)){$nameofcoinvestigator="Not Set";}

				$titleofproject=mysql_result($query_run, 0,'titleofproject');
				if(empty($titleofproject)){$titleofproject="Not Set";}

				$amountsantioned=mysql_result($query_run, 0,'amountsantioned');
				if(empty($amountsantioned)){$amountsantioned="Not Set";}

				$dateofprojectsantioned=mysql_result($query_run, 0,'dateofprojectsantioned');
				if(empty($dateofprojectsantioned)){$dateofprojectsantioned="Not Set";}

				$dateofprojectcompletedt=mysql_result($query_run, 0,'dateofprojectcompleted');
				if(empty($dateofprojectcompletedt)){$dateofprojectcompletedt="Not Set";}

				$projectabstract=mysql_result($query_run, 0,'projectabstract');
				if(empty($projectabstract)){$projectabstract="Not Set";}

				$equipmentdetails=mysql_result($query_run, 0,'equipmentdetails');
				if(empty($equipmentdetails)){$equipmentdetails="Not Set";}

				$totalrevenue=mysql_result($query_run, 0,'totalrevenue');
				if(empty($totalrevenue)){$totalrevenue="Not Set";}

				$totalpaperspublished=mysql_result($query_run, 0,'totalpaperspublished');
				if(empty($totalpaperspublished)){$totalpaperspublished="Not Set";}

				$btechstudents=mysql_result($query_run, 0,'btechstudents');
				if(empty($btechstudents)){$btechstudents="Not Set";}

				$mtechstudents=mysql_result($query_run, 0,'mtechstudents');
				if(empty($mtechstudents)){$mtechstudents="Not Set";}

				$phdstudents=mysql_result($query_run, 0,'phdstudents');
				if(empty($phdstudents)){$phdstudents="Not Set";}

 			}
} else {
	echo mysql_error();
}


$query1 = "SELECT * FROM `diploma` WHERE `userid`='$a' ";
$query2 = "SELECT * FROM `graduation` WHERE `userid`='$a' ";
$query3 = "SELECT * FROM `postgraduation` WHERE `userid`='$a' ";
$query4 = "SELECT * FROM `doctoraldegree` WHERE `userid`='$a' ";

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
$area1="";
$nophdc="";
$docdate="";

if(($query_run1=mysql_query($query1)) && ($query_run2=mysql_query($query2)) && ($query_run3=mysql_query($query3)) && ($query_run4=mysql_query($query4))) {
			$query_num_rows1 = mysql_num_rows($query_run1);
			$query_num_rows2 = mysql_num_rows($query_run2);
			$query_num_rows3 = mysql_num_rows($query_run3);
			$query_num_rows4 = mysql_num_rows($query_run4);
			if($query_num_rows1==0&&$query_num_rows2==0&&$query_num_rows3==0&&$query_num_rows4==0) {
				
				$err="Invalid Data.";
			} else {
				$nodc=mysql_result($query_run1, 0,'noc');
				if(empty($nodc)){$nodc="Not Set";}

				$dipdiscipline=mysql_result($query_run1, 0,'nod');
				if(empty($dipdiscipline)){$dipdiscipline="Not Set";}

				$dippercentage=mysql_result($query_run1, 0,'percentage');
				if(empty($dippercentage)){$dippercentage="Not Set";}

				$dipdate=mysql_result($query_run1, 0,'dodc');
				if(empty($dipdate)){$dipdate="Not Set";}


				$graduation=mysql_result($query_run2, 0,'graduation');
				if(empty($graduation)){$graduation="Not Set";}

				$gradother=mysql_result($query_run2, 0,'other');
				if(empty($gradother)){$gradother="Not Set";}

				$graddiscipline=mysql_result($query_run2, 0,'discipline');
				if(empty($graddiscipline)){$graddiscipline="Not Set";}

				$nogc=mysql_result($query_run2, 0,'noc');
				if(empty($nogc)){$nogc="Not Set";}

				$graddate=mysql_result($query_run2, 0,'dog');
				if(empty($graddate)){$graddate="Not Set";}

				$gradpercentage=mysql_result($query_run2, 0,'percentage');
				if(empty($gradpercentage)){$gradpercentage="Not Set";}


				$postgraduation=mysql_result($query_run3, 0,'pg');
				if(empty($postgraduation)){$postgraduation="Not Set";}

				$postgradother=mysql_result($query_run3, 0,'other');
				if(empty($postgradother)){$postgradother="Not Set";}

				$postgraddiscipline=mysql_result($query_run3, 0,'discipline');
				if(empty($postgraddiscipline)){$postgraddiscipline="Not Set";}

				$nopgc=mysql_result($query_run3, 0,'noc');
				if(empty($nopgc)){$nopgc="Not Set";}

				$postgraddate=mysql_result($query_run3, 0,'dopg');
				if(empty($postgraddate)){$postgraddate="Not Set";}

				$postgradpercentage=mysql_result($query_run3, 0,'percentage');
				if(empty($postgradpercentage)){$postgradpercentage="Not Set";}


				$docdegree=mysql_result($query_run4, 0,'dg');
				if(empty($docdegree)){$docdegree="Not Set";}

				$area1=mysql_result($query_run4, 0,'area');
				if(empty($area1)){$area1="Not Set";}

				$nophdc=mysql_result($query_run4, 0,'noc');
				if(empty($nophdc)){$nophdc="Not Set";}

				$docdate=mysql_result($query_run4, 0,'dodd');
				if(empty($docdate)){$docdate="Not Set";}

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
	<title>Basic Details</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<style>
		.affix {
		  top: 0;
		  width: 100%;
	  }

	  .affix + .container-fluid {
		  padding-top: 70px;
	  }

	  .panel-heading {
	  	text-align: center;
	  }

	  body{
			font-family: 'Nunito', sans-serif;
	  }

	  #bod {
	  	margin-top: 5%;
	  }


	  @media screen and (max-width:1024px) {
			
			.poo {
				display: none;
			}
			
			.pooimg {
				float: center;
			}

		}


	</style>
	
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="10">
								  <div class="container-fluid">
								    <div class="navbar-header">
								      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>                        
								      </button>
								      <a class="navbar-brand" href="#">Welcome <?php echo ", $username!! "; ?></a>
								    </div>
								    <div class="collapse navbar-collapse" id="myNavbar">
								      <ul class="nav navbar-nav">
								        <li class="active"><a href="#">Home</a></li>
								        <li class="dropdown">
								          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigate<span class="caret"></span></a>
								          <ul class="dropdown-menu">
								            <li class="active"><a href="#bscdet">Basic Details</a></li>
												<li><a href="#edudet">Educational Details</a></li>
												<li><a href="#bkpub">Books Published</a></li>
												<li><a href="#evtorg">Event Organised</a></li>
												<li><a href="#gustlecdelv">Guest Lecture Delivered by Faculty</a></li>
												<li><a href="#guestlecorg">Guest Lecture Organised by faculty</a></li>
												<li><a href="#infradev">Infrastructural Development</a></li>
												<li><a href="#patent">Patents Filed/Awarded by Faculty and Student</a></li>
												<li><a href="#projgrant">Project Grants Received by Faculty</a></li>
												<li><a href="#mou">Memorandum of Understanding (MoU)</a></li>
												<li><a href="#foreigntrav">Foregin Travel</a></li>
								          </ul>
								        </li>
								        <!--<li><a href="#">Page 2</a></li>
								        <li><a href="#">Page 3</a></li>-->
								      </ul>
								      <ul class="nav navbar-nav navbar-right">
								        <li><a href="setque.php"><span class="glyphicon glyphicon-user"></span> Choose a security question</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
								        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
								      </ul>
								    </div>
								  </div>
							</nav>

	<div class="container-fluid" id="bod">
			<div class="header" style="margin: 3%;">
				<div class="row" style="padding-top: 2%;">
					<div class="col-xs-3 " padding-right="10%" height="10%">
						<br>
						<img src="../../bootstrap/img/Walchand_11.gif" class="img-responsive pooimg" alt="Responsive Image" align="right"  />
					</div>
					<div class="col-xs-9 poo">
						<h1 style="text-align: left;">Walchand College of Engineering, Sangli.</h1>
						<h5 style="text-align: right; padding-right: 30%; font-weight: bold; font-style: italic;">(An autonomous institute.)</h5>
						<h3 style="padding-left: 5%; font-weight: bold;">Department of Computer Science and Engineering.</h3>
						<h3 style="padding-left: 17%; text-decoration: underline; font-weight: bold;">Teacher's Information System.</h3>
					</div>	
				</div>
			</div>
		<!--</div>	-->
		
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="col-md-1 col-xs-0"></div>
				<div class="col-md-10 col-xs-12">
						<div class="row" align="center" style="padding-top: 1%;" id="bscdet">
							<div class="col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading">												
													<h3>Basic Details</h3>												
											</div>
											
											<div class="panel-body">
												<div class="row">
													<div class="col-xs-8"></div>
													<div class="col-xs-4"><button type="button" class="btn btn-default btn-md" 	style="float: right;"><a href="../../Forms/Form1/">Edit</a></button>
													</div>
												</div><br>
												
												<caption><strong>Basic Details</strong></caption>
												<table class="table">
														<tr>
															<th>Gender</th>
															<td><?php echo "$gender"; ?></td>
														</tr>
														<tr>
															<th>Name of father and husband</th>
															<td><?php echo "$namefathus"; ?></td>
														</tr>
														<tr>
															<th>Mother's Name</th>
															<td><?php echo "$mothername"; ?></td>
														</tr>
														<tr>
															<th>Academic Position</th>
															<td><?php echo "$academicpos"; ?></td>
														</tr>
														<tr>
															<th>Date of Birth</th>
															<td><?php echo "$dob"; ?></td>
														</tr>
														<tr>
															<th>Highest Qualification</th>
															<td><?php echo "$highestqual"; ?></td>
														</tr>
														<tr>
															<th>Highest Qualification (Other)</th>
															<td><?php echo "$extrahiqual"; ?></td>
														</tr>
														<tr>
															<th>Status of Highest Qualification</th>
															<td><?php echo "$statushiqual"; ?></td>
														</tr>
														<tr>
															<th>Type of Appointment</th>
															<td><?php echo "$toa"; ?></td>
														</tr>
														<tr>
															<th>Wing of Appointment</th>
															<td><?php echo "$woa"; ?></td>
														</tr>

												</table>

											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>

							<div class="col-md-1"></div>

							<div class="col-md-12 col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Educational Details</h3></div>
											
											<div class="panel-body">


												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo3">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form13/"><button type="button" class="btn btn-default btn-md" style="float: right;">Edit</button></a>
													</div>
													
												</div><hr><br><br><br>
												<div class="col-xs-12 collapse" id="demo3">
												<table class="table">

													<tr>
														<th>Name of Diploma college</th>
														<td><?php echo "$nodc"; ?></td>
													</tr>
													
													<tr>
														<th>Name of Diploma Discipline </th>
														<td><?php echo "$dipdiscipline"; ?></td>
													</tr>

													<tr>
														<th>Percentage of Diploma</th>
														<td><?php echo "$dippercentage"; ?></td>
													</tr>

													<tr>
														<th>Diploma Completed Date</th>
														<td><?php echo "$dipdate"; ?></td>
													</tr>

													<tr>
														<th>Graduation</th>
														<td><?php echo "$graduation"; ?></td>
													</tr>

													<tr>
														<th>Graduation (Other)</th>
														<td><?php echo "$gradother"; ?></td>
													</tr>

													<tr>
														<th>Graduated Discipline</th>
														<td><?php echo "$graddiscipline"; ?></td>
													</tr>

													<tr>
														<th>Name of Graduated College</th>
														<td><?php echo "$nogc"; ?></td>
													</tr>

													<tr>
														<th>Date of Graduation</th>
														<td><?php echo "$graddate"; ?></td>
													</tr>

													<tr>
														<th>Percentage of Graduation</th>
														<td><?php echo "$gradpercentage"; ?></td>
													</tr>

													<tr>
														<th>Post Graduation</th>
														<td><?php echo "$postgraduation"; ?></td>
													</tr>

													<tr>
														<th>Post Graduation (Info)</th>
														<td><?php echo "$postgradother"; ?></td>
													</tr>

													<tr>
														<th>Post-Graduated Discipline</th>
														<td><?php echo "$postgraddiscipline"; ?></td>
													</tr>

													<tr>
														<th>Post-Graduated College</th>
														<td><?php echo "$nopgc"; ?></td>
													</tr>

													<tr>
														<th>Date of Post Graduation</th>
														<td><?php echo "$postgraddate"; ?></td>
													</tr>

													<tr>
														<th>Percentage of Post-Graduation</th>
														<td><?php echo "$postgradpercentage"; ?></td>
													</tr>

													<tr>
														<th>Doctoral Degree</th>
														<td><?php echo "$docdegree"; ?></td>
													</tr>

													<tr>
														<th>Area of Research</th>
														<td><?php echo "$area1"; ?></td>
													</tr>

													<tr>
														<th>Name of College Where Ph.D. Registered</th>
														<td><?php echo "$nophdc"; ?></td>
													</tr>

													<tr>
														<th>Doctoral Degree Award Date</th>
														<td><?php echo "$docdate"; ?></td>
													</tr>
												</table>
											</div>

											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="bkpub">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Books Published</h3></div>
											
											<div class="panel-body">

												<div class="row">
													<div class="col-md-2 col-xs-3">
														<button data-toggle="collapse" class="btn btn-info" data-target="#demo1">Collapsible</button>				
													</div>

													<div class="col-md-1 col-xs-2">
														<a href="../../Forms/Form4/">
														<button type="button" class="btn btn-default btn-md" style="float: right;">Add Book</button></a>
													</div>
												</div><hr><br><br><br>

												<div class="col-xs-12 collapse" id="demo1">
														<?php 
																$query = "SELECT * FROM `bookpublished` WHERE `userid`='$a' ";
																/*$authorfrom="Not Set";
																$department="Not Set";
																$authorname="Not Set";
																$coauthorname="Not Set";
																$bookname="Not Set";
																/*$dobp="Not Set";
																$editionofbook="Not Set";
																$isbn="Not Set";
																$content="Not Set";*/

																if($query_run=mysql_query($query)) {
																			$query_num_rows=mysql_num_rows($query_run);
																			if($query_num_rows==0) {
																				
																				$err="Invalid Data.";
																			} else {
																				$book;

																				for($i=0;$i<$query_num_rows;$i++) {
																					$book[$i]=mysql_result($query_run, $i, 'bookname');
																				}
																				
																 			}
																} else {
																	echo mysql_error();
																}

																if($query_num_rows==0) {?>
																	<h3><span class="label label-info ">No Books Published</span></h3>
																<?php
																}
																else {?>
																	<div class="col-xs-6">
																	<?php 
																		for($i=0; $i<=$query_num_rows/2; $i++) {?>
																		<div class="row" align="center">
																			<a href="book.php?book=<?php echo $book[$i];?>"><button class="btn btn-info"><?php echo $book[$i] ?></button></a>
																		</div><br>
																			 
																	<?php }?>	
																	</div>
																	<div class="col-xs-6">
																		<?php
																			for($i=($query_num_rows/2)+1; $i<$query_num_rows; $i++) { ?>
																				<div class="row" align="center">
																					<a href="book.php?book=<?php echo $book[$i];?>"><button class="btn btn-info"><?php echo $book[$i] ?></button></a>	
																				</div><br>
																				
																		<?php	}?>
																	</div>
												</div>

																<?php
															} 
														 ?>

											</div>




											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>
						<div class="row" align="center" style="padding-top: 1%;" id="evtorg">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Event Organised</h3></div>
											



											<div class="panel-body">
												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo2">Collapsible</button>	
													
													</div>
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form6/">
													<button type="button" class="btn btn-default btn-md" style="float: right;">Add Event</button></a>
													</div>
												</div><hr><br>
												<br>
												<br>
											<div class="col-xs-12 collapse" id="demo2">
												 <h3><span style="margin-top: 1%;" class="label label-default md">Event organised by  <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Event Coordinator From</th>
														<td><?php echo "$eventcoordinatorfrom"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department2"; ?></td>
													</tr>
													<tr>
														<th>Type of Event</th>
														<td><?php echo "$typeofevent"; ?></td>
													</tr>
													<tr>
														<th>Duration of Event</th>
														<td><?php echo "$duration"; ?></td>
													</tr>
													<tr>
														<th>Name of Coordinator</th>
														<td><?php echo "$coordinatorname"; ?></td>
													</tr>
													<tr>
														<th>Name of Co-Coordinator</th>
														<td><?php echo "$cocoordinatorname"; ?></td>
													</tr>
													<tr>
														<th>Starting Date of Event</th>
														<td><?php echo "$dos"; ?></td>
													</tr>
													<tr>
														<th>End Date of Event</th>
														<td><?php echo "$doe"; ?></td>
													</tr>
													<tr>
														<th>Title of Event</th>
														<td><?php echo "$toe"; ?></td>
													</tr>
													<tr>
														<th>Name of Resourse Person1</th>
														<td><?php echo "$nameofresource1"; ?></td>
													</tr>
													<tr>
														<th>Name of Resourse Person2</th>
														<td><?php echo "$nameofresource2"; ?></td>
													</tr>
													<tr>
														<th>Name of Resourse Person 3</th>
														<td><?php echo "$nameofresource3"; ?></td>
													</tr>
													<tr>
														<th>Name of Resourse Person 4</th>
														<td><?php echo "$nameofresource4"; ?></td>
													</tr>
													<tr>
														<th>Details of Event</th>
														<td><?php echo "$details"; ?></td>
													</tr>
													<tr>
														<th>Total Number of Participant</th>
														<td><?php echo "$totalparticipants"; ?></td>
													</tr>
													<tr>
														<th>Total Number of WCE Participant</th>
														<td><?php echo "$wceparticipants"; ?></td>
													</tr>
													<tr>
														<th>Total Number of Non-WCE Participant</th>
														<td><?php echo "$nonwceparticipants"; ?></td>
													</tr>
													<tr>
														<th>Total Expenditure of Event (In Lakhs)</th>
														<td><?php echo "$expenditure"; ?></td>
													</tr>
													<tr>
														<th>Expenditure Through</th>
														<td><?php echo "$expenditurethrough"; ?></td>
													</tr>
													<tr>
														<th>If other, Please Specify</th>
														<td><?php echo "$otherthing"; ?></td>
													</tr>
													<tr>
														<th>Total IRG Generated (In Lakhs)</th>
														<td><?php echo "$irg"; ?></td>
													</tr>

												</table>
											</div>

											</div>
										
										
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>
						

						<div class="row" align="center" style="padding-top: 1%;" id="gustlecdelv">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Guest Lecture Delivered by Faculty</h3></div>
											
											<div class="panel-body">
												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo4">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form5/">
													<button type="button" class="btn btn-default btn-md" style="float: right;">Add Lecture</button></a>
													</div>

												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo4">
												 <h3><span style="margin-top: 1%;" class="label label-default md">Guest Lectures by <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Faculty From</th>
														<td><?php echo "$facultyfrom"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department1"; ?></td>
													</tr>
													<tr>
														<th>Name of Organization</th>
														<td><?php echo "$nameoforganization"; ?></td>
													</tr>
													<tr>
														<th>Place</th>
														<td><?php echo "$place"; ?></td>
													</tr>
													<tr>
														<th>Type of Lecture</th>
														<td><?php echo "$typeoflecture"; ?></td>
													</tr>
													<tr>
														<th>Title of Lecture</th>
														<td><?php echo "$titleoflecture"; ?></td>
													</tr>
													<tr>
														<th>Duration of Lecture</th>
														<td><?php echo "$durationoflecture"; ?></td>
													</tr>
													<tr>
														<th>Starting Date of the Lecture</th>
														<td><?php echo "$dol"; ?></td>
													</tr>
													<tr>
														<th>Number of Students Attended Lecture</th>
														<td><?php echo "$numberofstudents"; ?></td>
													</tr>
												</table>
											</div>
												
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="guestlecorg">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Guest Lecture Organised by faculty</h3></div>
											
											<div class="panel-body">

												<div class="row">
										
													<div class="col-md-2 col-xs-4">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo5">Collapsible</button>	
													
													</div>
													<div class="col-md-2 col-xs-3">
													<a href="../../Forms/Form7/">
													<button type="button" class="btn btn-default btn-md" style="float: right;">Add Lecture Org Info</button></a>
													</div>
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo5">
												 <h3><span style="margin-top: 1%;" class="label label-default md">Guest Lecture by  <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Faculty From</th>
														<td><?php echo "$facultyfrom1"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department3"; ?></td>
													</tr>
													<tr>
														<th>Name of the faculty</th>
														<td><?php echo "$nameofthefaculty1"; ?></td>
													</tr>
													<tr>
														<th>Name of Resource Person</th>
														<td><?php echo "$nameofresourceperson"; ?></td>
													</tr>
													<tr>
														<th>Name of Organization</th>
														<td><?php echo "$organization1"; ?></td>
													</tr>
													<tr>
														<th>Place</th>
														<td><?php echo "$place1"; ?></td>
													</tr>
													<tr>
														<th>Title of Lecture</th>
														<td><?php echo "$titleoflecture"; ?></td>
													</tr>
													<tr>
														<th>Starting Date and Time of Lecture</th>
														<td><?php echo "$startdate $starttime"; ?></td>
													</tr>
													<tr>
														<th>End Date and Time of Lecture</th>
														<td><?php echo "$enddate $endtime"; ?></td>
													</tr>
													<tr>
														<th>Number of Students Attended Lecture</th>
														<td><?php echo "$numberofstudents"; ?></td>
													</tr>
													<tr>
														<th>Total Expenditure</th>
														<td><?php echo "$totalexpenditure"; ?></td>
													</tr>
													<tr>
														<th>Expenditure Through</th>
														<td><?php echo "$expthrough"; ?></td>
													</tr>
												</table>
											</div>
												

											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>


						<div class="row" align="center" style="padding-top: 1%;" id="infradev">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Infrastructural Development</h3></div>
											
											<div class="panel-body">

												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo6">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form9/">
													<button type="button" class="btn btn-default btn-md" style="float: right;">Add I.D. Info</button></a>
													</div>
													
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo6">
												<h3><span style="margin-top: 1%;" class="label label-default md">Infrastructural Development by  <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Infrastructural Development in Wing</th>
														<td><?php echo "$wing1"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department5"; ?></td>
													</tr>
													<tr>
														<th>Other</th>
														<td><?php echo "$other1"; ?></td>
													</tr>
													<tr>
														<th>Name of Faculty (Under the guidance work carried)</th>
														<td><?php echo "$nof1"; ?></td>
													</tr>
													<tr>
														<th>Type of Development</th>
														<td><?php echo "$tod1"; ?></td>
													</tr>
													<tr>
														<th>Other</th>
														<td><?php echo "$other2"; ?></td>
													</tr>
													<tr>
														<th>Total Purchased Quantity</th>
														<td><?php echo "$quantity1"; ?></td>
													</tr>
													<tr>
														<th>Purcahsed Through</th>
														<td><?php echo "$purchased1"; ?></td>
													</tr>
													<tr>
														<th>Specification of Product</th>
														<td><?php echo "$specification1"; ?></td>
													</tr>
													<tr>
														<th>Total Expenditure (In Lakhs)</th>
														<td><?php echo "$expenditure1"; ?></td>
													</tr>
													<tr>
														<th>Date of Purchase</th>
														<td><?php echo "$dop1"; ?></td>
													</tr>
												</table>
											</div>

												
									
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>


						<div class="row" align="center" style="padding-top: 1%;" id="patent">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Patents Filed/Awarded by Faculty and Student</h3></div>
											
											<div class="panel-body">


												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo8">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form11/">
													<button type="button" class="btn btn-default btn-md" style="float: right;">Add a Patent</button></a>
													</div>
													
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo8">
												<h3><span style="margin-top: 1%;" class="label label-default md">Patents by  <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Faculty/Student From</th>
														<td><?php echo "$facultyfrom3"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department7"; ?></td>
													</tr>
													<tr>
														<th>Type of Patent</th>
														<td><?php echo "$typeofpatent"; ?></td>
													</tr>
													<tr>
														<th>Status of Patent</th>
														<td><?php echo "$statusofpatent"; ?></td>
													</tr>
													<tr>
														<th>Name of First Author/Filed by</th>
														<td><?php echo "$nameoffirstauthor"; ?></td>
													</tr>
													<tr>
														<th>Name of Co-Authors/Filed by</th>
														<td><?php echo "$nameofcoauthor"; ?></td>
													</tr>
													<tr>
														<th>Title of Patent</th>
														<td><?php echo "$title1"; ?></td>
													</tr>
													<tr>
														<th>Date Of Patent Filed</th>
														<td><?php echo "$dateofpatentfiled"; ?></td>
													</tr>
													<tr>
														<th>Date Of Patent Awardwed</th>
														<td><?php echo "$dateofpatentawarded"; ?></td>
													</tr>
													<tr>
														<th>Patent Number</th>
														<td><?php echo "$patentnumber"; ?></td>
													</tr>
													<tr>
														<th>Details of Patent</th>
														<td><?php echo "$detailsofpatent"; ?></td>
													</tr>
												</table>
											</div>
																							</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="projgrant">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Project Grants Received by Faculty</h3></div>
											
											<div class="panel-body">



												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo9">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form12/"><button type="button" class="btn btn-default btn-md" style="float: right;">Add Grant Info</button></a>
													</div>
													
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo9">
												 <h3><span style="margin-top: 1%;" class="label label-default md">Project Grants Received </span></h3>
												<table class="table">
													<tr>
														<th>Principal Investigator From</th>
														<td><?php echo "$investigatorfrom"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department8"; ?></td>
													</tr>
													<tr>
														<th>Name of Funding Agency</th>
														<td><?php echo "$nameofagency"; ?></td>
													</tr>
													<tr>
														<th>If Other Funding Agency, Please Specify Name</th>
														<td><?php echo "$otherfundingagency"; ?></td>
													</tr>
													<tr>
														<th>Status of Project</th>
														<td><?php echo "$statusofproject"; ?></td>
													</tr>
													<tr>
														<th>Name of Principal Investigator</th>
														<td><?php echo "$nameofprincipalinvestigator"; ?></td>
													</tr>
													<tr>
														<th>Name of Co-Investigator</th>
														<td><?php echo "$nameofcoinvestigator"; ?></td>
													</tr>
													<tr>
														<th>Title of Project</th>
														<td><?php echo "$titleofproject"; ?></td>
													</tr>
													<tr>
														<th>Total Amount Santioned for Project (In Lakhs)</th>
														<td><?php echo "$amountsantioned"; ?></td>
													</tr>
													<tr>
														<th>Date of Project Santioned</th>
														<td><?php echo "$dateofprojectsantioned"; ?></td>
													</tr>
													<tr>
														<th>Date of Project Completed (If Completed)</th>
														<td><?php echo "$dateofprojectcompleted"; ?></td>
													</tr>
													<tr>
														<th>Project Abstract</th>
														<td><?php echo "$projectabstract"; ?></td>
													</tr>
													<tr>
														<th>Equipment Details Purchased Under Project Grant</th>
														<td><?php echo "$equipmentdetails"; ?></td>
													</tr>
													<tr>
														<th>Revenue Generated Through Project(In Lakhs, If Any)</th>
														<td><?php echo "$totalrevenue"; ?></td>
													</tr>
													<tr>
														<th>Total Papers Published Related to Project Grants</th>
														<td><?php echo "$totalpaperspublished"; ?></td>
													</tr>
													<tr>
														<th>Number of B.Tech. Students Completed Dissertation</th>
														<td><?php echo "$btechstudents"; ?></td>
													</tr>
													<tr>
														<th>Number of M.Tech. Students Completed Dissertation</th>
														<td><?php echo "$mtechstudents"; ?></td>
													</tr>
													<tr>
														<th>Number of Ph.D. Students Completed Dissertation</th>
														<td><?php echo "$phdstudents"; ?></td>
													</tr>
												</table>
											</div>


												

											
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="mou">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
									
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Memorandum of Understanding (MoU)</h3></div>
											
											<div class="panel-body">
												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo10">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form10/"><button type="button" class="btn btn-default btn-md" style="float: right;">Add MOU Info</button></a>
													</div>
													
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo10">
												 <h3><span style="margin-top: 1%;" class="label label-default md">(MoU) with <?php echo "$facultyfrom5 $department6"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Type of MoU or MoU with</th>
														<td><?php echo "$typeofmou"; ?></td>
													</tr>
													<tr>
														<th>Faculty Coordinator from</th>
														<td><?php echo "$facultyfrom5"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department6"; ?></td>
													</tr>
													<tr>
														<th>Name of Place</th>
														<td><?php echo "$nameofindustry"; ?></td>
													</tr>
													<tr>
														<th>Date of MoU</th>
														<td><?php echo "$moudate"; ?></td>
													</tr>
													<tr>
														<th>Purpose of MoU</th>
														<td><?php echo "$purposeofmou"; ?></td>
													</tr>
													<tr>
														<th>Details of MoU</th>
														<td><?php echo "$detailsofmou"; ?></td>
													</tr>
												</table>
											</div>


																								
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="foreigntrav">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Foregin Travel</h3></div>
											
											<div class="panel-body">
												<div class="row">
										
													<div class="col-md-2 col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo12">Collapsible</button>	
													
													</div>
													
													<div class="col-md-1 col-xs-2">
													<a href="../../Forms/Form8/"><button type="button" class="btn btn-default btn-md" style="float: right;">Add a foreign travel</button></a>
													</div>
													
												</div><hr><br><br><br>
											<div class="col-xs-12 collapse" id="demo12">
												<h3><span style="margin-top: 1%;" class="label label-default md">Foreign Travels by  <?php echo "$title $fullname"; ?></span></h3>
												<table class="table">
													<tr>
														<th>Faculty From</th>
														<td><?php echo "$facultyfrom2"; ?></td>
													</tr>
													<tr>
														<th>Department</th>
														<td><?php echo "$department4"; ?></td>
													</tr>
													<tr>
														<th>Purpose of Visit</th>
														<td><?php echo "$pov"; ?></td>
													</tr>
													<tr>
														<th>Name of the faculty</th>
														<td><?php echo "$nof"; ?></td>
													</tr>
													<tr>
														<th>Details of Event</th>
														<td><?php echo "$details1"; ?></td>
													</tr>
													<tr>
														<th>Total Expenditure of Visit</th>
														<td><?php echo "$eov"; ?></td>
													</tr>
													<tr>
														<th>Visit Sponsored Under</th>
														<td><?php echo "$sponsor"; ?></td>
													</tr>
													<tr>
														<th>If other, Please Mention</th>
														<td><?php echo "$othera"; ?></td>
													</tr>

												</table>
											</div>

												
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>
				</div>
			</div>
			</div>
		</div>
		<div class="footer" style="text-align: center;">
			<hr>
			<p class="primary">TIS for the CSE Dept. WCE</p>
		</div>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		</body>
</html>
