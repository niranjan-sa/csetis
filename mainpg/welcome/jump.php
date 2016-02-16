<!-- Form 1 Basic details -->
<?php
include 'core.inc.php';
include 'connect.inc.php';
//error_reporting(E_ERROR | E_PARSE);
if(!isset($_GET['user_id']))
{
	header("Location: commander2.php");
}
$a = $_GET['user_id'];

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

$query = "SELECT * FROM `bookpublished` WHERE `userid`='$a' ";
$authorfrom="Not Set";
$department="Not Set";
$authorname="Not Set";
$coauthorname="Not Set";
$bookname="Not Set";
$dobp="Not Set";
$editionofbook="Not Set";
$isbn="Not Set";
$content="Not Set";

if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				
				$err="Invalid Data.";
			} else {
				$authorfrom=mysql_result($query_run, 0,'authorfrom');
				if(empty($authorfrom)){$authorfrom="Not Set";}

				$department=mysql_result($query_run, 0,'department');
				if(empty($department)){$department="Not Set";}

				$authorname=mysql_result($query_run, 0,'authorname');
				if(empty($authorname)){$authorname="Not Set";}

				$coauthorname=mysql_result($query_run, 0,'coauthorname');
				if(empty($coauthorname)){$coauthorname="Not Set";}

				$bookname=mysql_result($query_run, 0,'bookname');
				if(empty($bookname)){$bookname="Not Set";}

				$dobp=mysql_result($query_run, 0,'dobp');
				if(empty($dobp)){$dobp="Not Set";}

				$editionofbook=mysql_result($query_run, 0,'editionofbook');
				if(empty($editionofbook)){$editionofbook="Not Set";}

				$isbn=mysql_result($query_run, 0,'isbn');
				if(empty($isbn)){$isbn="Not Set";}

				$content=mysql_result($query_run, 0,'content');
				if(empty($content)){$content="Not Set";}


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
	<style>
		.affix {
      		top: 20px;
  		}
	</style>
	
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
		<div class="row" align="center">
			<div class="col-xs-1"></div>
			<div class="col-xs-10">
				
					
						<div class="col-xs-4"></div>
						<div class="col-xs-8" style="margin-left: 43%;">
							<div class="btn-grp" style="float: right;">
								<span>
									<button type="button" class="btn btn-link btn-lg" ><?php echo "$username"; ?></button>
									<a href="commander2.php"><button type="button" class="btn btn-info">Back to control panel</button></a>
									<a href="logout.php"><button type="button"  class="btn btn-danger" >Logout</button></a>
								</span>	
							</div>
						</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9">
						<div class="row" align="center" style="padding-top: 1%;" id="bscdet">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading">												
													<h3>Basic Details</h3>												
											</div>
											
											<div class="panel-body">
												<div class="row">
													<div class="col-xs-10"></div>
													<div class="col-xs-2">
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form1/">Edit</a></button>-->
													</div>
												</div><br>
												<div class="col-xs-6">
													<div class="panel panel-primary">

														<div class="well" style="margin: 2%; font-weight: uppercase;">
															<h3><span style="margin-top: 1%;" class="label label-default md">Welcome <?php echo "$title $fullname"; ?></span></h3> 
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Gender -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$gender"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of father and husband -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$namefathus"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Mother's Name -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$mothername"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Academic Position -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$academicpos"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Birth -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dob"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Highest Qualification -</strong></h5 style="color: #663300;"></div>
																<div class="col-xs-6"><h5><strong><?php echo "$highestqual"; ?></strong></h5></div>
															</div>
															<br>
															<br>
															
														</div>
													</div>
												</div>
												<div class="col-xs-6">
													<!--<div class="row" id="photo">
														<div class="panel panel-info"></div>
													</div> -->
													<div class="row">
														<div class="panel panel-primary">
															<div class="well" style="margin: 2%; font-weight: uppercase;">
															
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Highest Qualification (Other) -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$extrahiqual"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Status of Highest Qualification -</strong</h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$statushiqual"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of Appointment -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$toa"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Wing of Appointment -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$woa"; ?></strong></h5></div>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>

						</div>

						<div class="row" align="center" style="padding-top: 1%;" id="edudet">

							<div class="col-xs-12" style="margin-left: 1%" align="left">
										<div class="panel panel-primary">
											<div class="panel-heading"><h3>Educational Details</h3></div>
											
											<div class="panel-body">

												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo3">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form13/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo3">
													<!--Copy code below -->
													<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															<h3><span style="margin-top: 1%;" class="label label-default md">Educational Details of <?php echo "$title $fullname"; ?></span></h3> 
															

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Diploma college -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nodc"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Diploma Discipline -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dipdiscipline"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Percentage of Diploma -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dippercentage"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Diploma Completed Date -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dipdate"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Graduation  -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$graduation"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Graduation (Other) -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$gradother"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Graduated Discipline -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$graddiscipline"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Graduated College  -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nogc"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Graduation -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$graddate"; ?></strong></h5></div>
															</div>

															<br>
															<br>
															
														</div>
													</div>
												</div>
												<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															 
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Percentage of Graduation -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$gradpercentage"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Post Graduation -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$postgraduation"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Post Graduation (Info) -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$postgradother"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Post-Graduated Discipline -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$postgraddiscipline"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Post-Graduated College -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nopgc"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Post Graduation -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$postgraddate"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Percentage of Post-Graduation -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$postgradpercentage"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Doctoral Degree -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$docdegree"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Area of Research -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$area1"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of College Where Ph.D. Registered -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nophdc"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Doctoral Degree Award Date -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$docdate"; ?></strong></h5></div>
															</div>

															<br>
															<br>
															
														</div>
													</div>
												</div>


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
													<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo1">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form4/">Edit</a></button>-->
													</div>
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo1" >

												<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															<h3><span style="margin-top: 1%;" class="label label-default md">Books published by  <?php echo "$title $fullname"; ?></span></h3> 
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Author from -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$authorfrom"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of First Author -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$authorname"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Co-Authors -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$coauthorname"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$bookname"; ?></strong></h5></div>
															</div>

															<br>
															<br>
															
														</div>
													</div>
												</div>
												<div class="col-xs-6">
													<div class="panel panel-primary">
														<div class="well" style="margin: 2%; font-weight: uppercase;">
															 
															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Book Publication -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dobp"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Edition of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$editionofbook"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>ISBN Number of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$isbn"; ?></strong></h5></div>
															</div>

															<div class="row">
																<div class="col-xs-6"><h5 style="color: purple;"><strong>Abstract/Content of Book -</strong></h5></div>
																<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$content"; ?></strong></h5></div>
															</div>

										

															<br><br><br>
															<br>
															
														</div>
													</div>
												</div>
												</div>
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

												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo2">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form6/">Edit</a></button>-->
												</div><br><br>

												<br>
		

												<div class="col-xs-12 collapse" id="demo2">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Event organised by  <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Event Coordinator From  </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$eventcoordinatorfrom"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department2"; ?></strong></h5></div>
																	</div>

																	

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$typeofevent"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Duration of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$duration"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Coordinator -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$coordinatorname"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Co-Coordinator -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$cocoordinatorname"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Starting Date of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dos"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>End Date of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$doe"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$toe"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Resourse Person1 -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofresource1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Resourse Person2 -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofresource2"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Resourse Person 3 -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofresource3"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Resourse Person 4 -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofresource4"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Details of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$details"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Number of Participant -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$totalparticipants"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Number of WCE Participant -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$wceparticipants"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Number of Non-WCE Participant -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nonwceparticipants"; ?></strong></h5></div>
																	</div>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Expenditure of Event (In Lakhs) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$expenditure"; ?></strong></h5></div>
																	</div>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Expenditure Through -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$expenditurethrough"; ?></strong></h5></div>
																	</div>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>If other, Please Specify -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$otherthing"; ?></strong></h5></div>
																	</div>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total IRG Generated (In Lakhs) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$irg"; ?></strong></h5></div>
																	</div>
																	



																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
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

												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo4">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form5/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo4">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Guest Lectures by <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Faculty From -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$facultyfrom"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department1"; ?></strong></h5></div>
																	</div>

																	

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Organization -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameoforganization"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Place -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$place"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$typeoflecture"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$titleoflecture"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Duration of Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$durationoflecture"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Starting Date of the Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dol"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Number of Students Attended Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$numberofstudents"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo5">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form7/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo5">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Guest Lecture by  <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Faculty From -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$facultyfrom1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department3"; ?></strong></h5></div>
																	</div>

																	
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of the faculty -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofthefaculty1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Resource Person -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofresourceperson"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Organization -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$organization1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Place -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$place1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$titleoflecture"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Starting Date and Time of Lecture </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$startdate $starttime"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>End Date and Time of Lecture -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$enddate $endtime"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Number of Students Attended Lecture-</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$numberofstudents"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Expenditure -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$totalexpenditure"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Expenditure Through -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$expthrough"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo6">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form9/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo6">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Infrastructural Development by  <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Infrastructural Development in Wing -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$wing1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department5"; ?></strong></h5></div>
																	</div>

																	
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Other -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$other1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Faculty (Under the guidance work carried) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nof1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of Development -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$tod1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Other -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$other2"; ?></strong></h5></div>
																	</div>
																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Purchased Quantity </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$quantity1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Purcahsed Through -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$purchased1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Specification of Product </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$specification1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Expenditure (In Lakhs) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$expenditure1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Purchase -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dop1"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo8">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form11/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo8">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Patents by  <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Faculty/Student From -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$facultyfrom3"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department7"; ?></strong></h5></div>
																	</div>

																	
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of Patent -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$typeofpatent"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Status of Patent -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$statusofpatent"; ?></strong></h5></div>
																	</div>

																	<br><br><br>
																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of First Author/Filed by - </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameoffirstauthor"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Co-Authors/Filed by -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofcoauthor"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Patent -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$title1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date Of Patent Filed - </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dateofpatentfiled"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date Of Patent Awardwed - </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dateofpatentawarded"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Patent Number -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$patentnumber"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Details of Patent -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$detailsofpatent"; ?></strong></h5></div>
																	</div>

																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo9">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form12/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo9">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Project Grants Received </span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Principal Investigator From -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$investigatorfrom"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department8"; ?></strong></h5></div>
																	</div>

																	
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Funding Agency -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofagency"; ?></strong></h5></div>
																	</div>


																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>If Other Funding Agency, Please Specify Name -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$otherfundingagency"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Status of Project -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$statusofproject"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Principal Investigator -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofprincipalinvestigator"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Co-Investigator -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofcoinvestigator"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Title of Project -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$titleofproject"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Amount Santioned for Project (In Lakhs) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$amountsantioned"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Project Santioned </strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dateofprojectsantioned"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of Project Completed (If Completed) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$dateofprojectcompleted"; ?></strong></h5></div>
																	</div>



																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	

																		<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Project Abstract -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$projectabstract"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Equipment Details Purchased Under Project Grant -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$equipmentdetails"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Revenue Generated Through Project(In Lakhs, If Any) -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$totalrevenue"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Papers Published Related to Project Grants -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$totalpaperspublished"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Number of B.Tech. Students Completed Dissertation -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$btechstudents"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Number of M.Tech. Students Completed Dissertation -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$mtechstudents"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Number of Ph.D. Students Completed Dissertation -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$phdstudents"; ?></strong></h5></div>
																	</div>




																	<br><br>
																	<br>
																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo10">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form10/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo10">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">(MoU) with <?php echo "$facultyfrom5 $department6"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Type of MoU or MoU with -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$typeofmou"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Faculty Coordinator from -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$facultyfrom5"; ?></strong></h5></div>
																	</div>

																	
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department6"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of Place -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nameofindustry"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-default">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Date of MoU -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$moudate"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Purpose of MoU -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$purposeofmou"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Details of MoU -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$detailsofmou"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
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
												<div class="col-xs-9"></div>
													<div class="col-xs-3">
													<button data-toggle="collapse" class="btn btn-info" data-target="#demo12">Collapsible</button>	
													<!--<button type="button" class="btn btn-default btn-md" style="float: right;"><a href="../../Forms/Form8/">Edit</a></button>-->
												</div><br><br><br>

												<div class="col-xs-12 collapse" id="demo12">
														<div class="col-xs-6">

															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 <h3><span style="margin-top: 1%;" class="label label-default md">Foreign Travels by  <?php echo "$title $fullname"; ?></span></h3>
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Faculty From -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$facultyfrom2"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Department -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$department4"; ?></strong></h5></div>
																	</div>

																	

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Purpose of Visit -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$pov"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Name of the faculty -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$nof"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-6">
															<div class="panel panel-primary">
																<div class="well" style="margin: 2%; font-weight: uppercase;">
																	 
																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Details of Event -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$details1"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Total Expenditure of Visit -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$eov"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>Visit Sponsored Under -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$sponsor"; ?></strong></h5></div>
																	</div>

																	<div class="row">
																		<div class="col-xs-6"><h5 style="color: purple;"><strong>If other, Please Mention -</strong></h5></div>
																		<div class="col-xs-6"><h5 style="color: #663300;"><strong><?php echo "$othera"; ?></strong></h5></div>
																	</div>

																	<br>
																	<br>
																	
																</div>
															</div>
														</div>
													</div>


											</div>
											
											<div class="panel-footer">
											</div>
										</div>
									
							</div>
							
						</div>
				</div>

				<div class="col-xs-3" style="padding-top: 1%;">
					<div>
							<ul class="nav nav-pills nav-stacked" role="tablist" data-spy="affix" data-offset-top="400"align="left">
								<li class="active"><a href="#bscdet">Basic Details</li>
								<li><a href="#edudet">Educational Details</li>
								<li><a href="#bkpub">Books Published</li>
								<li class="dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">More<span class="caret"></span></a>
									<ul class="dropdown-menu">
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
							</ul>
						</div>
				</div>
			</div>
	</div>

<script src="../../bootstrap/js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>










<!--

<div class="row" align="center" style="padding-top: 7%;">
			<div class="col-xs-10" style="margin-left: 8%">
					<form action="#" role="form">
						<div class="panel panel-primary">
							<div class="panel-heading"><h3>Basic Details</h3></div>
							
							<div class="panel-body">
								
								<div class="col-xs-6" >
									<div class="panel panel-default">
												
									</div>
								</div>
								<div class="col-xs-6" >
									<div class="panel panel-default">
										
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<button type="button" class="btn btn-default btn-md" value="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			
		</div>





		<div class="col-xs-2" align="right">
						<div>
							<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="10" role="tablist" align="left">
								<li class="active"><a href="#">Basic Details</li>
								<li><a href="#">Educational Details</li>
								<li><a href="#">Books Published</li>
								<li><a href="#">Guest Lectures Delivered</a></li>
								<li><a href="#">Event Organised</a></li>
								<li><a href="#">Bugs Bunny</a></li>
							</ul>
						</div>		
			</div>

-->