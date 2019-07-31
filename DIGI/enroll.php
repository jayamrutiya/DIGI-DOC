<?php
session_start();
if (!$_SESSION['username']) {
  header("location:index.php");
}
include "db.php";
//	echo $_SESSION['username'];
$userid = $_SESSION['username'];
if (!$_SESSION['username']) {
  header("location:index.php");
}
if(isset($_POST['submita'])){
 	// if(isset($_POST['firstname'])&&isset($_POST['middlename'])&&isset($_POST['lastname'])&&isset($_POST['gender'])&&isset($_POST['dateofbirth'])&&isset($_POST['age'])&&isset($_POST['address'])&&isset($_POST['houseno'])&&isset($_POST['city'])&&isset($_POST['districrt'])&&isset($_POST['state'])&&isset($_POST['mailid'])&&isset($_POST['pincode'])&&isset($_POST['reference'])&&isset($_POST['name'])&&isset($_POST['eidaadharno'])&&isset($_POST['owner'])&&isset($_POST['introname'])&&isset($_POST['mobileno']))
	 // {	
		
		$preenrollmentid=$_POST['preenrollmentid'];
		$nprreceipttinnumber=$_POST['nprreceipttinnumber'];
		$firstname=$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$dateofbirth=$_POST['dateofbirth'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$houseno=$_POST['houseno'];
		$street=$_POST['street'];
		$landmark=$_POST['landmark'];
		$area=$_POST['area'];
		$city=$_POST['city'];
		$postoffice=$_POST['postoffice'];
		$districrt=$_POST['districrt'];
		$subdistrict=$_POST['subdistrict'];
		$state=$_POST['state'];
		$mailid=$_POST['mailid'];
		$pincode=$_POST['pincode'];
		$reference=$_POST['reference'];
		$name=$_POST['name'];
		$eidaadharno=$_POST['eidaadharno'];
		$varification=$_POST['varification'];
		$poi=$_POST['poi'];
		$poa=$_POST['poa'];
		$dob=$_POST['dob'];
		$por=$_POST['por'];
		$introducersaadharno=$_POST['introducersaadharno'];
		$reference1=$_POST['reference1'];
		$hofseidaadharno=$_POST['hofseidaadharno'];
		$owner=$_POST['owner'];
		$introname=$_POST['introname'];
		$mobileno=$_POST['mobileno'];

		$q = "INSERT INTO aadhar VALUES ('$userid', '$preenrollmentid', '$nprreceipttinnumber', '$firstname', '$middlename', '$lastname', '$gender', '$dateofbirth', '$age', '$address', '$houseno', '$street', '$landmark', '$area', '$city', '$postoffice', '$districrt', '$subdistrict', '$state', '$mailid', '$pincode', '$reference', '$name', '$eidaadharno', '$varification', '$poi', '$poa', '$dob', '$por', '$introducersaadharno', '$reference1', '$hofseidaadharno', '$owner', '$introname', '$mobileno')";
		$result = mysqli_query($conn, $q);
		echo mysqli_error($conn);
		if ($result) {
			$_SESSION['mailid'] = $mailid;
			$_SESSION['mobileno'] = $mobileno;
			
			header("location:doc.php");
			// echo "Save";
		}else{
			echo mysqli_error($conn);
		}

			// $query1 ="SELECT $userid FROM aadhar WHERE userid='$userid'";
			// $run = mysqli_query($conn, $query1);
			// if (mysqli_num_rows($run) == true) {
			// 	echo "data alredy exists";
			// 		}else{
						
					//}
	
			

	// $result = mysql_query($query);
	
	// if(!$result)
	// {
	// 	die('Query FAILED' . mysql_error());
	// }
	// else{
	// 	header("Location:doc.php");

	// }
		
	

	
	
	
// }

}
if (isset($_POST['submitb'])) {

	// if(isset($_POST['name'])&&isset($_POST['gender'])&&isset($_POST['mobileno'])&&isset($_POST['mailid'])&&isset($_POST['aadharno'])&&isset($_POST['panno'])&&isset($_POST['state'])&&isset($_POST['district'])&&isset($_POST['subdistrict'])&&isset($_POST['circleoffice'])&&isset($_POST['nameoffather'])&&isset($_POST['nameofmother'])&&isset($_POST['dateofbirth'])&&isset($_POST['sex'])&&isset($_POST['birthweight'])&&isset($_POST['placeofbirth'])&&isset($_POST['informantsname'])&&isset($_POST['houseaddress'])&&isset($_POST['addressofparents'])){

			$name = $_POST['name'];
			$gender = $_POST['gender'];
			$mobileno = $_POST['mobileno'];
			$mailid = $_POST['mailid'];
			$aadharno = $_POST['aadharno'];
			$panno = $_POST['panno'];
			$state = $_POST['state'];
			$district = $_POST['district'];
			$subdistrict = $_POST['subdistrict'];
			$circleoffice = $_POST['circleoffice'];
			$nameoffather = $_POST['nameoffather'];
			$nameofmother = $_POST['nameofmother'];
			$dateofbirth = $_POST['dateofbirth'];
			$sex = $_POST['sex'];
			$birthweight = $_POST['birthweight'];
			$placeofbirth = $_POST['placeofbirth'];
			$informantsname = $_POST['informantsname'];
			$houseaddress = $_POST['houseaddress'];
			$addressofparents =$_POST['addressofparents'];

				
			$qu = "INSERT INTO birth VALUES ('$userid', '$name', '$gender', '$mobileno', '$mailid', '$aadharno', '$panno', '$state', '$district', '$subdistrict', '$circleoffice', '$nameoffather', '$nameofmother', '$dateofbirth', '$sex', '$birthweight', '$placeofbirth', '$informantsname', '$houseaddress', '$addressofparents')";
					$result = mysqli_query($conn, $qu);
					echo mysqli_error($conn);
					if ($result) {
					$_SESSION['mailid'] = $mailid;
					$_SESSION['mobileno'] = $mobileno;
			
					header("location:docb.php");
			// echo "Save";
					}else{
						echo mysqli_error($conn);
					}

	
}
if (isset($_POST['submitm'])) {
	
	$hname  = $_POST['hname'];
	$hreligion = $_POST['hreligion'];
	$hcast = $_POST['hcast'];
	$hdateofbirth = $_POST['hdateofbirth'];
	$hmarritalstatus = $_POST['hmarritalstatus'];
	$hoccupation = $_POST['hoccupation'];
	$hpassportno = $_POST['hpassportno'];
	$haddress = $_POST['haddress'];
	$hfname = $_POST['hfname'];
	$hfcast = $_POST['hfcast'];
	$hfreligion =  $_POST['hfreligion'];
	$hfage = $_POST['hfage'];
	$hfcondition = $_POST['hfcondition'];
	$hfoccupation = $_POST['hfoccupation'];
	$hfaddress = $_POST['hfaddress'];
	$hmname = $_POST['hmname'];
	$hmcast = $_POST['hmcast'];
	$hmreligion = $_POST['hmreligion'];
	$hmage =  $_POST['hmage'];
	$hmcondition = $_POST['hmcondition'];
	$hmoccupation = $_POST['hmoccupation'];
	$hmaddress = $_POST['hmaddress'];
	$wname = $_POST['wname'];
	$wreligion = $_POST['wreligion'];
	$wcast = $_POST['wcast'];
	$wdateofbirth = $_POST['wdateofbirth'];
	$woccupation = $_POST['woccupation'];
	$wmarritalstatus = $_POST['wmarritalstatus'];
	$wpassportno = $_POST['wpassportno'];
	$waddress = $_POST['waddress'];
	$wfname = $_POST['wfname'];
	$wfcast = $_POST['wfcast'];
	$wfreligion = $_POST['wfreligion'];
	$wfage = $_POST['wfage'];
	$wfcondition = $_POST['wfcondition'];
	$wfoccupation = $_POST['wfoccupation'];
	$wfaddress = $_POST['wfaddress'];
	$wmname = $_POST['wmname'];
	$wmcast = $_POST['wmcast'];
	$wmreligion = $_POST['wmreligion'];
	$wmage = $_POST['wmage'];
	$wmcondition = $_POST['wmcondition'];
	$wmoccupation = $_POST['wmoccupation'];
	$wmaddress = $_POST['wmaddress'];
	$ahpassportno = $_POST['ahpassportno'];
	$ahvalid = $_POST['ahvalid'];
	$ahpassportissued = $_POST['ahpassportissued'];
	$ahvisa = $_POST['ahvisa'];
	$ahvisavalid  = $_POST['ahvisavalid'];
	$ahresident = $_POST['ahresident'];
	$ahsecurity  = $_POST['ahsecurity'];
	$awpassportno = $_POST['awpassportno'];
	$awvalid = $_POST['awvalid'];
	$awissued = $_POST['awissued'];
	$awvisa = $_POST['awvisa'];
	$awvisavalid = $_POST['awvisavalid'];
	$awresident = $_POST['awresident'];
	$awsecurity = $_POST['awsecurity'];
	$osolemnizedname = $_POST['osolemnizedname'];
	$oact = $_POST['oact'];
	$oacta = $_POST['oacta'];
	$ostreet = $_POST['ostreet'];
	$ovillage = $_POST['ovillage'];
	$otaluka = $_POST['otaluka'];
	$odistrict = $_POST['odistrict'];
	$osolemnizeddate = $_POST['osolemnizeddate'];
	$ostationdate = $_POST['ostationdate'];
	$oname = $_POST['oname'];
	$ofname = $_POST['ofname'];
	$oaadhar = $_POST['oaadhar'];
	$mailid = $_POST['mailid'];
	$mobileno = $_POST['mobileno'];

	$qu = "INSERT INTO marriage VALUES ('$userid', '$hname', '$hreligion', '$hcast', '$hdateofbirth', '$hmarritalstatus', '$hoccupation', '$hpassportno', '$haddress', '$hfname', '$hfcast', '$hfreligion', '$hfage', '$hfcondition', '$hfoccupation', '$hfaddress', '$hmname', '$hmcast', '$hmreligion', '$hmage', '$hmcondition', '$hmoccupation', '$hmaddress', '$wname', '$wreligion', '$wcast', '$wdateofbirth', '$woccupation', '$wmarritalstatus', '$wpassportno', '$waddress', '$wfname', '$wfcast', '$wfreligion', '$wfage', '$wfcondition', '$wfoccupation', '$wfaddress', '$wmname', '$wmcast', '$wmreligion', '$wmage', '$wmcondition', '$wmoccupation', '$wmaddress', '$ahpassportno', '$ahvalid', '$ahpassportissued', '$ahvisa', '$ahvisavalid', '$ahresident', '$ahsecurity', '$awpassportno', '$awvalid', '$awissued', '$awvisa', '$awvisavalid', '$awresident', '$awsecurity', '$osolemnizedname', '$oact', '$oacta', '$ostreet', '$ovillage', '$otaluka', '$odistrict', '$osolemnizeddate', '$ostationdate', '$oname', '$ofname', '$oaadhar', '$mailid', '$mobileno')";

			$result = mysqli_query($conn, $qu);
					echo mysqli_error($conn);
					if ($result) {
					$_SESSION['mailid'] = $mailid;
					$_SESSION['mobileno'] = $mobileno;
			
					header("location:docm.php");
			// echo "Save";
					}else{
						echo mysqli_error($conn);
					}
}

?>




















<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Enroll</title>




	<style type="text/css">
    
    *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    a{
      text-decoration: none;
      outline: none;
    }
    .footer-main-div{
      width: 100%;
      height: auto;
      margin: auto;
      background: #272727;
      padding: 20px 0px;
    }
    .footer-social-icons{
      width: 100%
      height auto;
      margin: auto;
    }
    .footer-social-icons ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-social-icons ul li{
      display: inline-block;
      width: 50px;
      height: 50px;
      margin: 0px 10px;
      border-radius: 100%;
      /*background-color: #32CD32;*/
      background-color: #f76b37;
    }
    .footer-social-icons ul li a{
      color: #272727;
      font-size: 25px;
      display: block;
    }
    .footer-social-icons ul li a i{
      line-height: 50px;
    }
    .footer-menu-one{
      width: 100%;
      height: auto;
      margin: auto;
    }
    .footer-menu-one{
      margin: 0px;
      padding: 0px;
      text-align: center;
      margin-top: 20px;
    }
    .footer-menu-one ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-menu-one ul li{
      display: inline-block;
      margin: 0px 20px;
    }
    .footer-menu-one ul li a{
      font-family: arial;
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
    }
    .footer-bottom{
      width: 100%;
      height: auto;
      margin: auto;
      background: #32CD32;
      padding: 5px;
    }
    .footer-bottom p{
      font-family: arial;
      font-size: 14px;
      text-align: center;
      color: #fff;
      font-weight: 600; 
      letter-spacing: 1px;
    }
    .footer-social-icons ul li:hover{
      display: inline-block;
      width: 50px;
      height: 50px;
      margin: 0px 10px;
      border-radius: 100%;
      /*background-color: #32CD32;*/
      /*background-color: #f76b37;*/
      background-color: #3b5998;
    }
    .footer-social-icons ul li a:hover{
      color: #fff;
    }
  </style>
</head>
<body id="enroll_body">

	<section id="sub-enroll">
	<div>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<a href="index.html" class="navbar-brand"><img src="img/logo.png" class="mb-2 mr-2" style="height: 30px; width: auto;">Digi-Doc</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item">
					<a href="home.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="enroll.php" class="nav-link">Enroll</a>
				</li>
				<li class="nav-item">
					<a href="update.php" class="nav-link">Update</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="locker/home.php" class="nav-link">Locker</a>
				</li>
				<li class="nav-item">
          			<a href="logout.php" class="nav-link">LogOut</a>
        		</li>
			</ul>
			</div>
		</div>
		</nav>
	</div>


 <!-- enroll part -->
	<div id="enroll">
		<div class="container-fluid">
			<nav class="navbar mb-1 justify-content-center">
				<h2 class="text-dark" style="margin-top: 15px; color: #FFFFFF;"><b><u>Enroll</u></b></h2>
			</nav>
		</div>	
		  <div style="margin-top: 10px;"></div>
		

		<div class="container px-5">
			<!-- <div class="card mb-3" id="aadharform" style="background-color: #FEF9C7"> -->
			<div class="card mb-3" id="aadharform" style="background-image: linear-gradient(rgb(255,255,255),rgb(253,247,182));">
			<div class="card-header aadharformheader"><h5 class="text-white">Aadhar</h5></div>
			<div class="container">
		<div id="accordion" role="tablist" class="aadharform pt-3 pb-3">
      <!-- <div class="card" style="background-color: /*#FEEDC9*/;"> -->
      	<div class="card mx-3" style="background-image: linear-gradient(rgb(254,237,201), rgb(255,255,255));">
        <div class="card-header" role="tab" id="heading">
          <h6 class="mb-0">Aadhar Form&nbsp&nbsp&nbsp<a href="#collapse1" data-parent="#accordion" data-toggle="collapse" class="text-dark" style="font-size: 12px;">Click <b>here</b> to open <b>Aadhar Form</b></a></h6>
        </div>

        <div id="collapse1" class="collapse">
          <div class="card-body">
            <div class="container">
		<h1 class="my-3 py-2 text-center mb-5" style="font-size: 35px; color: #333"><u>Aadhar Enrolment</u></h1>
	<form action="enroll.php" method="post">
		<div class="container">
		<div class="form-row">
			<div class="form-group col">
				<label>Pre-Enrollment ID:</label>
				<input type="text" name="preenrollmentid" class="form-control">
			</div>
			<div class="form-group col">
				<label>NPR Receipt/TIN Number</label>
				<input type="text" name="nprreceipttinnumber" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Middle Name</label>
				<input type="text" name="middlename" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">	
				<label>Gender :&nbsp&nbsp</label>
				<input type="radio" name="gender" value="male" required>
				<label>Male&nbsp</label>
				<input type="radio" name="gender" value="female" required>
				<label>female&nbsp</label>
				<input type="radio" name="gender" value="other" required>
				<label>Other&nbsp</label>
			</div>
			<div class="form-group col">
				<label>Date of Birth :&nbsp</label>
				<input type="date" name="dateofbirth" required class="form-control">	
			</div>
			<div class="form-group col">
				<label>&nbsp&nbspAge :</label>
				<input type="number" name="age" min="5" max="105" required class="form-control">
			</div>		
		</div>
			
		<div class="form-row">	
			<label>Address :&nbsp&nbsp&nbsp</label>
			<input type="radio" name="address" value="c/o" required>
			<label>C/o&nbsp&nbsp&nbsp</label>
			<input type="radio" name="address" value="d/o" required>
			<label>&nbspD/o&nbsp&nbsp&nbsp</label>
			<input type="radio" name="address" value="s/o" required>
			<label>&nbspS/o&nbsp&nbsp&nbsp</label>			
			<input type="radio" name="address" value="w/o" required>
			<label>&nbspW/o&nbsp&nbsp&nbsp</label>			
			<input type="radio" name="address" value="h/o" required>
			<label>&nbspH/o</label>			
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>House No/Bldg/Apt. :&nbsp</label>
				<input type="text" name="houseno" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Street/Road/lane :</label>
				<input type="text" name="street" class="form-control">
			</div>
			<div class="form-group col">	
				<label>landmark :</label>
				<input type="text" name="landmark" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col"> 	
				<label>Area/Locallity/Sector :</label>			
				<input type="text" name="area" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Village/Town/City :</label>
				<input type="text" name="city" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Post Office :</label>
				<input type="text" name="postoffice" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>Districrt :</label>
				<input type="text" name="districrt" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>SubDistrict :</label>
				<input type="text" name="subdistrict" class="form-control">
			</div>
			<div class="form-group col">	
				<label>State :</label>
				<input type="text" name="state" class="form-control" required>
			</div>
		</div>	

		<div class="form-row">
			<div class="form-group col">
				<label>E-Mail :</label>
				<input type="email" name="mailid" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>Mobile No :</label>	
				<input type="tel" name="mobileno" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>PIN CODE :</label>
				<input type="text" name="pincode" class="form-control" required>
			</div>
		</div>

		<div class="form-row">
			<label>Details of :</label>
			<div class="form-group col-4.5">
				<input type="radio" name="reference" value="father" required>
				<label>Father&nbsp&nbsp</label>
				<input type="radio" name="reference" value="mother" required>
				<label>Mother&nbsp&nbsp</label>
				<input type="radio" name="reference" value="wife" required>
				<label>Wife&nbsp&nbsp</label>
				<input type="radio" name="reference" value="husband" required>
				<label>Husband&nbsp&nbsp</label>
			</div>
			<div class="form-group col">
				<label>Name :</label>
				<input type="text" name="name" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>EID/Aadhar No :</label>
				<input type="text" name="eidaadharno" class="form-control" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group">
				<label>Verification Type :</label>
				<label>Document Based&nbsp</label>
				<input type="radio" name="varification">
				<label>Introducer Based&nbsp</label>
				<input type="radio" name="varification">
				<label>Head of Family</label>
				<input type="radio" name="varification">
				<p class="text-danger">Select only one of the above. Select Introducer or Head of Family only if you do not posses any documentry proof of identity and/or address. Introducer and head of family details are not required in case of document based verification.</p>
			</div>
		</div>

		<div class="form-row">
			<label>For Document Based :&nbsp&nbsp</label>
			<div class="form-group col">
				<label>a. POI</label>
				<input type="text" name="poi" class="form-control">
			</div>
			<div class="form-group col">
				<label>b. POA</label>
				<input type="text" name="poa" class="form-control">
			</div>
			<div class="form-group col">
				<label>c. DOB</label>
				<input type="text" name="dob" class="form-control">
			</div>
			<div class="form-group col">
				<label>d. POR</label>
				<input type="text" name="por" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="ml-2 form-group col-6">
				<label>For Introducer Based - Introducer's Aadhar no :&nbsp</label>
				<input type="text" name="introducersaadharno" class="form-control">
			</div>
			<div>
				<div class="form-row ml-2">
				<label>For HoF Based - Details of &nbsp&nbsp</label>
				
				<label><input type="radio" name="reference1" class="mr-1 ml-2">Father</label>
				
				<label><input type="radio" name="reference1" class="mr-1 ml-2">Mother</label>
				
				<label><input type="radio" name="reference1" class="mr-1 ml-2">Husband</label>
				
				<label><input type="radio" name="reference1" class="mr-1 ml-2">Wife</label>
				</div>
				<div class="ml-2 form-row form-inline">
					<label>Hof's Eid/Aadhar No :</label>
					<input type="tel" name="hofseidaadharno" class="form-control ml-2">
				</div>
			</div>
		</div>

		<div class="form-row">
			<label>I hereby confirm the identity and address of</label><input type="text" name="owner" class="ml-2 mr-2 form-control" required><label>as being true, correct and accurate.</label>
		</div>

		<div class="form-row">
			<div class="col-6 form-inline">
				<label>Introducer/HoF's Name :&nbsp</label>
				<input type="text" name="introname" class="form-control" required>
			</div>
			<!-- <div class="col-6 form-inline">
				<label>Signature of introducer/HOF :&nbsp</label>
				<input type="file" name="sing">
			</div> -->
		</div>
		<div class="form-row my-3">
			<input type="submit" class="btn btn-primary" name="submita" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button>
		</div>
		<!-- <div class="form-row mb-3">
			<input type="submit" class="btn btn-primary" name="submita" style="border-radius: 10px;">
		</div> -->
	</div>
</form>
</div>
          </div>
        </div>
      </div>

      <!-- <div class="card" style="background-color: #FEEDC9;"> -->
      	<div class="card mx-3 my-2 " style="background-image: linear-gradient(rgba(255,234,195,0.95), rgb(255,245,245));">
        <div class="card-header" role="tab" id="heading">
           <h6 class="mb-0">Process to get Aadhar&nbsp&nbsp&nbsp<a href="#collapse2" data-parent="#accordion" data-toggle="collapse" class="text-dark" style="font-size: 12px;">Click <b>here</b> to open <b>Aadhar Process</b>
          </a></h6>
        </div>

        <div id="collapse2" class="collapse show">
          <div class="card-body mx-5">
            <div>
            	<ul>
            		<li>Collect all required Documents mentioned here in Required Documents to get Aadhar</li>
            		<li>Fill the Aadhar form</li
>            		<li>Submit the application.</li>
					<li>Go to nearest Aadhar form center when Application applied by applicant is verified by authorised government supervisor.</li>
					<li>E-mail or message will be sent to given contact number in application as application is verified by supervisor.</li>
					<li>Applicant is supposed to correct every correction mentioined in comment box by supervisor to complete aadhar application process in correct way.</li>
					<li>Once application is verified for further process, Applicant is supposed to verify all attached documents to application to respected Aadhar centers. </li>
					<li>After document verification, Applicant will get receipt to their mail.</li>
					<li>Applicants will get their Aadhar by showing this receipt to respected aadhar center.</li>
            	</ul>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="card" style="background-color: #FEEDC9;"> -->
      	<div class="card mx-3" style="background-image: linear-gradient(rgb(254,237,201), rgb(255,250,250));">
        <div class="card-header" role="tab" id="heading">
           <h6 class="mb-0">Required Documents to get Aadhar&nbsp&nbsp&nbsp<a href="#collapse3" data-parent="#accordion" data-toggle="collapse" class="text-dark" style="font-size: 12px;">Click <b>here</b> to open <b>Document list</b>
          </a></h6>
        </div>


        <div id="collapse3" class="collapse">
          <div class="card-body">
           <div class="container">            
           	<table class="table table-bordered">
    			<thead>	 
      					<th class="left-curve">Proof of Identity</th>
        				<th class="right-curve">Proof of Address</th>
    			</thead>
    			<tbody>
      				<tr>
        				<td>Passport</td>        
        				<td>Passport</td>
      				</tr>
      				<tr>
        				<td>PAN card</td>
        				<td>Electricity Bill</td>
      				</tr>
      				<tr>
        				<td>Ration card</td>
        				<td>Ration card</td>
      				</tr>
      				<tr>
        				<td>Voter ID</td>
				        <td>Votre ID</td>
      				</tr>
      				<tr>
        				<td>Driving Licence</td>
        				<td>Telephone Landline Bill</td>
      				</tr>
    			</tbody>
  				</table>
			</div>
      </div>
        </div>
      </div>
    </div>
   </div>
		</div> 


	<div>
			<div class="card mb-3" id="birthform">
			<div class="card-header birthformheader"><h5 class="text-white">Birth Certificate</h5></div>
			<div class="container mt-3">
				<div id="accordion1" role="tablist" class="mb-3">
    
      				<div class="card mx-3 birthformcollapse">
       					 <div class="card-header birthformbody" role="tab" id="heading">
         						 <h6 class="mb-0">Application Form for Birth Certifiacte&nbsp&nbsp&nbsp<a href="#collapse4" data-parent="#accordion1" data-toggle="collapse" class="text-dark" style="font-size: 12px;">Click <b>here</b> to open <b>Birth Certificate Form</b></a></h6>
       					 </div>      		       

       		       		 <div id="collapse4" class="collapse">
       						<div class="card-body">

       							<label class="d-flex justify-content-center mt-3" style="font-size: 30px;"><b><u>APPLICATION FOR BIRTH CERTIFICATE</u></b></label><br><br>
	<form action="enroll.php" method="post">
	<!-- <div class="container-fluid d-flex justify-text-center col-8" id="birthform123" style="background-color: red;"> -->
			<div class="container-fluid form-row">
			<div class="form-row">
				<label><b><u>Applicant's Details</u></b></label>
			</div>
			<div class="container mb-3">
			<div class="form-row">
				<div class="form-group col-10">
					<label>Applicant's Name :&nbsp&nbsp</label>
					<input type="text" name="name" placeholder=" Applicant's Name" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Applicant's Gender :&nbsp&nbsp</label>
					<label class="form-check-lable"><input type="radio" name="gender" value="male" required>&nbspMale&nbsp&nbsp</label>
					<label class="form-check-lable"><input type="radio" name="gender" value="femal" required>&nbspFemale&nbsp&nbsp</label>
					<label class="form-check-lable"><input type="radio" name="gender" value="other" required>&nbspOther</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Mobile Number :&nbsp&nbsp</label>
					<input type="tel" name="mobileno" class="form-control">
				</div>
				<div class="form-group col">
					<label>Mail ID :</label>
					<input type="email" name="mailid" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Aadhar Number :</label>
					<input type="text" name="aadharno" class="form-control">
				</div>
				<div class="form-group col">
					<label>Pan Number :</label>
					<input type="text" name="panno" class="form-control">
				</div>
			</div>
		

		
			<div class="form-row mt-3">
				<label><b><u>Address Details</u></b></label>
			</div>
			<div class="container">
				<div class="form-row">
					<div class="form-group col-6">
						<label>State :&nbsp&nbsp</label>
					<!-- <div class="form-check-inline"> -->
  						<select class="form-control" id="sel1" class="form-control" name="state">
    						<optgroup label="-- States --">
    							<option>Andra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option>
    							<option>Chhattisgarh</option><option>Goa</option><option>Gujarat</option><option>Haryana</option>
    							<option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option>
    							<option>Karnataka</option><option>Kerala</option><option>Madya Pradesh</option>
    							<option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option>
    							<option>Nagaland</option><option>Orissa</option><option>Punjab</option><option>Rajasthan</option>
    							<option>Sikkim</option><option>Tamil Nadu</option><option>Telagana</option><option>Tripura</option>
    							<option>Uttaranchal</option><option>Uttar Pradesh</option><option>West Bengal</option>
    						</optgroup>
    						<optgroup label="-- Union Territories --">
    							<option>Andaman and Nicobar Islands</option>
    							<option>Chandigarh</option>
    							<option>Dadar and Nagar Haveli</option>
    							<option>Daman and Diu</option>
    							<option>Delhi</option>
    							<option>Lakshadeep</option>
    							<option>Pondicherry</option>
    						</optgroup>
    					</select>
					<!-- </div> -->
					</div>
				</div>
				<div class="form-row">
  					<div class="form-group col">
  						<label for="sel2">District :&nbsp&nbsp</label>
  						<select class="form-control" id="sel2" class="form-control" name="district">
    						<optgroup label="-- District --">
    							<option>Andra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option>
    							<option>Chhattisgarh</option><option>Goa</option><option>Gujarat</option><option>Haryana</option>
    							<option>Himachal Pradesh</option><option>Jammu and Kashmir</option>
    						</optgroup>
    					</select>
    				</div>
					<div class="form-group col">
						<label for="sel3">Sub-District :&nbsp&nbsp</label>
						<select class="form-control" name="subdistrict" id="sel3">
							<optgroup label="-- Sub-District --">
    							<option>Andra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option>
    							<option>Chhattisgarh</option><option>Goa</option><option>Gujarat</option><option>Haryana</option>
    							<option>Himachal Pradesh</option><option>Jammu and Kashmir</option>
    						</optgroup>
						</select>
					</div>
					<div class="form-group col">
						<label for="sel4">Circle Office : :&nbsp&nbsp</label>
						<select class="form-control" name="circleoffice" id="sel4">
							<optgroup label="-- Circle Offices --">
    							<option>Andra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option>
    							<option>Chhattisgarh</option><option>Goa</option><option>Gujarat</option><option>Haryana</option>
    							<option>Himachal Pradesh</option><option>Jammu and Kashmir</option>
    						</optgroup>
						</select>
					</div>
				</div>
			</div>
				<!-- </div> -->

				<div class="form-row mt-3">
					<label><b><u>New Born's Details</u></b></label>	
				</div>
				<div class="container">
					<div class="form-row">
						<div class="form-group col">
							<label>Name of Father :&nbsp&nbsp&nbsp&nbsp</label>
							<input type="text" name="nameoffather" class="form-control">
						</div>
						<div class="form-group col">
							<label>Name of Mother :&nbsp&nbsp</label>
							<input type="text" name="nameofmother" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-4">
							<label>Date of Birth :</label>
							<input type="date" name="dateofbirth" class="form-control">
						</div>
						<div class="form-group col-2">
							<!-- <label>Date of Birth :</label>
							<input type="Date" name="" class="form-control"> -->
						</div>
						<div class="form-group col ml-3">
							<div class="form-row">
								<label>Sex :&nbsp&nbsp</label>
								<lable><input type="radio" name="sex" value="male" required>&nbspMale&nbsp&nbsp
								<input type="radio" name="sex" value="female" required>&nbspFemale&nbsp&nbsp
								<input type="radio" name="sex" value="other" required>&nbspOther</lable>
							</div>
							<div class="form-row">
								<label class="form-group form-inline">Birth Weight <small class="text-muted">&nbsp(in kgs)&nbsp</small>:&nbsp&nbsp
								<input type="number" name="birthweight" class="form-control col-3"></label>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col">
							<div class="form-row"><br></div>
							<label>Place of Birth :&nbsp&nbsp</label>
							<input type="radio" name="placeofbirth" value="Hospital" required>&nbspHospital&nbsp&nbsp
							<input type="radio" name="placeofbirth" value="House" required>&nbspHouse&nbsp&nbsp							
						</div>
						<div class="form-group col">
							<label>If House Address :&nbsp&nbsp&nbsp&nbsp</label>
							<input type="text" cols=22 rows=2 name="houseaddress" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<!-- <div class="form-row"><br></div> -->
							<label>Informant's Name :&nbsp&nbsp</label>
							<input type="text" name="informantsname" class="form-control">
						</div>
						<div class="form-group col">
							<label>Address of Parents at time of Birth :&nbsp&nbsp</label>
							<input type="text" cols=22 rows="2" name="addressofparents" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-row my-3">
			<input type="submit" class="btn btn-primary" name="submitb" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button>
		</div>
				<!-- <div class="form-row">
					<input type="submit" class="btn btn-primary" name="submitb" style="border-radius: 10px;">
						<button type="submit" class="btn btn-danger my-3">Cancel</button>	
				</div> -->
			</div>
	</div>
	</form>

        </div>
      </div>
      </div>
       		      

      <div class="card mx-3 my-1 birthformcollapse">
        <div class="card-header birthformbody" role="tab" id="heading">
           <h6 class="mb-0">Process to get Birth Certificate&nbsp&nbsp&nbsp<a href="#collapse5" data-parent="#accordion1" data-toggle="collapse" class="text-dark" style="font-size: 12px;">
           Click <b>here</b> to open <b>Birth Certificate Process</b>
          </a></h6>
        </div>
        <div id="collapse5" class="collapse show">
       		  <div class="card-body mx-5">
       		  	<div style="color: #058423;">
       		  		<ul>
            		<li>Collect all required Documents mentioned here in Required Documents to get Birth Certificate</li>
            		<li>Fill the Birth Certificate form given above</li>
	           		<li>Submit the application within 21 days to birth.</li>
					<li>Go to municipal office when Application applied by applicant is verified by authorised government supervisor.</li>
					<li>E-mail or message will be sent to given contact number in application as application is verified by supervisor.</li>
					<li>Applicant is supposed to correct every correction mentioined in comment box by supervisor to complete Birth ceritificate application process in correct way.</li>
					<li>Once application is verified for further process, Applicant is supposed to verify all attached documents to application at municipal office. </li>
					<li>After document verification is completed, Applicant will get receipt to their mail.</li>
					<li>Applicants will get Birth Certificate by showing this receipt at municipal office.</li>
	        	</ul>
       		  	</div>
       		  </div>
        </div>
    </div>

      <div class="card mx-3 mb-3 birthformcollapse">
        <div class="card-header birthformbody" role="tab" id="heading">
           <h6 class="mb-0">Required Documents to get Birth Certificate&nbsp&nbsp&nbsp<a href="#collapse6" data-parent="#accordion1" data-toggle="collapse" class="text-dark" style="font-size: 12px;">
           Click <b>here</b> to open <b>Document list</b>
          </a></h6>
        </div>
        <div id="collapse6" class="collapse">
       		<div class="card-body">
       			<div class="container" style="color: #058423;">           
           			<ul>
           				<li>Parents' Birth Certificates</li>
           				<li>Marriage Certificate</li>
           				<li>Proof of birth letter where child’s birth in hospital</li>
           				<li>Parent’s identity proofs for verification</li>
					</ul>
				</div>
       		</div>
        </div>
      </div>

   			</div>
		</div> 
	</div>
</div>

	<div>
			<div class="card mb-3" id="marriagecertificateform">
			<div class="card-header" style="background-color: #024f8bd4;"><h5 class="text-white">Marriage Certificate</h5></div>
			<div class="container mt-3">
				<div id="accordion2" role="tablist" class="mb-3">
      				<div class="card mx-3 marriagecertificatebody">
       					 <div class="card-header marriagecertificateheader" role="tab" id="heading">
         						 <h6 class="mb-0">Application Form for Marriage Certifiacte&nbsp&nbsp&nbsp<a href="#collapse7" data-parent="#accordion2" data-toggle="collapse" class="text-dark" style="font-size: 12px;">Click <b>here</b> to open <b>Marriage Certificate Form</b></a></h6>
       					 </div>

       					<div id="collapse7" class="collapse">
       						<div class="card-body">
       							<div class="container-fluid">
       								
       								<form action="enroll.php" method="post">


		
       								<!-- Husband's details -->
		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>HUSBAND DETAILS</b></h3>
		</div>
		<div class="form-row">
				<div class="form-group">
					<label>(a) Full Name of the Husband <small>(as per records) :</small></label>
				</div>
				<div class="form-group col">
					<input type="text" name="hname" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group col-5">
					<label>(b) Religion :</label>				
					<label><input type="radio" name="hreligion" value="hindu">&nbspHindu</label>
					<label><input type="radio" name="hreligion" value="jain">&nbspJain</label>
					<label><input type="radio" name="hreligion" value="sikh">&nbspSikh</label>
					<label><input type="radio" name="hreligion" value="buddhist">&nbspBuddhist</label>				
			</div>
			<div class="form-group ml-5">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-2">
				<input type="text" name="hcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group">
					<label>(d) Date of Birth <small> (Age) :&nbsp</small></label>
				</div>
				<div class="form-group input-append date" id="datepicker1">
					<input data-formate="dd/mm/yy" type="Date" name="hdateofbirth" class="form-control">
					<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calender"></i>
					</span>
				</div>
				<!-- <div class="form-group ml-3 col-1">					
					<input type="number" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>&nbspYears</label>
				</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-1">
				<label>(e) Marital status before the date of Marriage :</label>
			</div>
			<div class="form-group">
				<label><input type="radio" name="hmarritalstatus" value="Bachelor" required> Bachelor</label>
				<label><input type="radio" name="hmarritalstatus" value="Married" required> Married</label>
				<label><input type="radio" name="hmarritalstatus" value="Divorsee" required> Divorsee</label>
				<label><input type="radio" name="hmarritalstatus" value="Widower" required> Widower</label>
			</div>			
		</div>
		<div class="form-row d-flex">
			<div class="form-group">
				<label>(f) Occupation :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hoccupation" class="form-control">
			</div>
			<div class="form-group mx-3">
				<label>(g) Passport Number :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="number" name="hpassportno" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-3">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="haddress" class="form-control">
			</div>
		</div>

		<div>
			<h3 class="d-flex justify-content-center"><b>DETAILS OF PARENTS</b></h3>
		</div>
		<div class="mb-3">
			<h5><b>1A. </b><u>Husband's Father</u></h5>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(a) Full Name :</label>
			</div>
			<div class="form-group mx-3 col-5">
				<input type="text" name="hfname" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hfcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hfreligion" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hfage" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="radio" name="hfcondition" value="Alive">&nbspAlive</label>
			</div>
			<div class="form-group mr-3">
				<label><input type="radio" name="hfcondition" value="Died">&nbspDied</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="hfoccupation" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hfaddress" class="form-control">
			</div>
		</div>

		<div class="mb-3">
			<h5><b>1B. </b><u>Husband's Mother</u></h5>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(a) Full Name :</label>
			</div>
			<div class="form-group mx-3 col-5">
				<input type="text" name="hmname" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hmcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hmreligion" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hmage" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="radio" name="hmcondition" value="Alive">&nbspAlive</label>
			</div>
			<div class="form-group mr-3">
				<label><input type="radio" name="hmcondition" value="Died">&nbspDied</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="hmoccupation" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hmaddress" class="form-control">
			</div>
		</div>

		<!-- End of husband's details -->


		<!-- Wife's Details -->
		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>WIFE'S DETAILS</b></h3>
		</div>
		<div class="form-row">
				<div class="form-group mr-1">
					<label>(a) Full Name of the Wife <small>(as per records) :</small></label>
				</div>
				<div class="form-group col">
					<input type="text" name="wname" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group">
					<label class="mr-1">(b) Religion :</label>				
					<label><input type="radio" name="wreligion" value="hindu" required>&nbspHindu</label>
					<label><input type="radio" name="wreligion" value="jain" required>&nbspJain</label>
					<label><input type="radio" name="wreligion" value="sikh" required>&nbspSikh</label>
					<label><input type="radio" name="wreligion" value="buddhist" required>&nbspBuddhist</label>				
			</div>
			<div class="form-group ml-5 mr-1">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group mr-1">
					<label>(d) Date of Birth<small>(Age)</small> :</label>
				</div>
				<div class="form-group col-3 mr-4">
					<input type="date" name="wdateofbirth" class="form-control">
				</div>
				<!-- <div class="form-group">
					<label>Years :</label>
				</div>
				<div class="form-grouo col-1 ml-1 mr-3">					
					<input type="number" name="" class="form-control">
				</div> -->
				<div class="form-group mr-1">
					<label>(e) Occupation :</label>
				</div>
				<div class="form-group col">
					<input type="text" name="woccupation" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-1">
				<label>(f) Marital status before the date of Marriage :</label>
			</div>
			<div class="form-group col">
				<label class="mr-3"><input type="radio" name="" class="checkbox-inline" name="wmarritalstatus" value="Spinster"> Spinster</label>
				<label class="mr-3"><input type="radio" name="" class="checkbox-inline" name="wmarritalstatus" value="Married"> Married</label>
				<label class="mr-3"><input type="radio" name="" class="checkbox-inline" name="wmarritalstatus" value="Divorsee"> Divorsee</label>
				<label><input type="radio" name="" class="checkbox-inline" name="wmarritalstatus" value="Widow"> Widow</label>
			</div>			
		</div>
		<div class="form-row">
			<div class="form-group mr-1">
				<label>(g) Passport Number :</label>
			</div>
			<div class="form-group col-3">
				<input type="number" name="wpassportno" class="form-control">
			</div>
			<div class="form-group ml-3 mr-1">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col">
				<input type="text" name="waddress" class="form-control">
			</div>
		</div>
		<div>
			<h3 class="d-flex justify-content-center"><b>DETAILS OF PARENTS</b></h3>
		</div>

		<div class="mb-3">
			<h5><b>1A. </b><u>Wife's Father</u></h5>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(a) Full Name :</label>
			</div>
			<div class="form-group mx-3 col-5">
				<input type="text" name="wfname" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wfcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wfreligion" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wfage" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="radio" name="wfcondition" value="Alive">&nbspAlive</label>
			</div>
			<div class="form-group mr-3">
				<label><input type="radio" name="wfcondition" value="Died">&nbspDied</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="wfoccupation" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wfaddress" class="form-control">
			</div>
		</div>

		<div class="mb-3">
			<h5><b>1A. </b><u>Wife's Mother</u></h5>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(a) Full Name :</label>
			</div>
			<div class="form-group mx-3 col-5">
				<input type="text" name="wmname" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wmcast" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wmreligion" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wmage" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="radio" name="wmcondition" value="Alive">&nbspAlive</label>
			</div>
			<div class="form-group mr-3">
				<label><input type="radio" name="wmcondition" value="Died">&nbspDied</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="wmoccupation" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wmaddress" class="form-control">
			</div>
		</div>


		<!-- NRI details of husband -->
		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>NRI - ADDITIONAL DETAILS OF HUSBAND</b></h3>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>&nbspi.</label>
			</div>
			<div class="form-group mr-1">
				<label>&nbsp(a) Passport Number :</label>
			</div>
			<div class="form-group col mr-3">
				<input type="text" name="ahpassportno" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvalid" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="ahpassportissued" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-1">
				<label>ii.</label>
			</div>
			<div class="form-group mr-2">
				<label>(a) Visa issued to the country at the time of registration :</label>
			</div>
			<div class="form-group">
				<input type="text" name="ahvisa" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvisavalid" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>&nbspiii.</label>
			</div>
			<div class="form-group mr-3">
				<label>(a) Type of Resident :</label>
			</div>
			<div class="form-group mr-3">
				<Label><input type="radio" name="ahresident" value="Permanent"> Permanent</Label>
			</div>
			<div class="form-group">
				<Label><input type="radio" name="ahresident" value="Temporary"> Temporary</Label>
			</div>
			<!-- <div class="form-group ml-5 mr-2">
				<label>(b) Permanent :</label>
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control">
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>&nbspiv. (a) Social Security No. <small class="text-muted">(If any) :</small></label>
			</div>
			<div class="form-group">
				<input type="text" name="ahsecurity" class="form-control">
			</div>
		</div>


		<!-- NRI details of wife -->
		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>NRI - ADDITIONAL DETAILS OF WIFE</b></h3>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>&nbspi.</label>
			</div>
			<div class="form-group mr-1">
				<label>&nbsp(a) Passport Number :</label>
			</div>
			<div class="form-group col mr-3">
				<input type="text" name="awpassportno" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvalid" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="awissued" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-1">
				<label>ii.</label>
			</div>
			<div class="form-group mr-2">
				<label>(a) Visa issued to the country at the time of registration :</label>
			</div>
			<div class="form-group">
				<input type="text" name="awvisa" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvisavalid" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>&nbspiii.</label>
			</div>
			<div class="form-group mr-3">
				<label>(a) Type of Resident :</label>
			</div>
			<div class="form-group mr-3">
				<Label><input type="radio" name="awresident" value="Permanent"> Permanent</Label>
			</div>
			<div class="form-group">
				<Label><input type="radio" name="awresident" value="Temporary"> Temporary</Label>
			</div>
			<!-- <div class="form-group ml-5 mr-2">
				<label>(b) Permanent :</label>
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control">
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>&nbspiv. (a) Social Security No. <small class="text-muted">(If any) :</small></label>
			</div>
			<div class="form-group">
				<input type="text" name="awsecurity" class="form-control">
			</div>
		</div>



		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>OTHER DETAILS</b></h3>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>5. Name and Address of the person who solemnized the Marriage :<br><small class="text-muted text-right">(to be furnished if available)</small></label>
			</div>			
			<div class="form-group">
				<input type="text" name="osolemnizedname" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>6. Whether the Marriage was solemnized :</label>
			</div>
			<div class="container-fluid">
			<div class="form-row">
				<div class="form-group" style="display: inline;">
					<label>(a) In accordance with the customary rites and ceremonies of either party to the marriage as required by section 7 of the Hindu marriage Act.<input type="radio" name="oact" value="Yes" class="ml-3 mr-1">Yes
					<input type="radio" name="oact" value="No" class="ml-3">No</label><label class="ml-5"><b>OR</b></label>
				</div>
				<!-- <div class="form-group">
					<label class="font-weight-bold ml-5">OR</label>
				</div> -->
				<div class="form-group" style="display: inline;">
					<label>(b) In accordance with Section 7-A of the Hindu Marriage Act.<input type="radio" name="oacta" value="Yes" class="ml-3 mr-1">Yes<input type="radio" name="oacta" value="No" class="ml-3">No</label>
				</div>
			</div>
			</div>
		</div>
		<div class="container-row">
			<div class="form-group">
				<label><br>7. Place, namely the Village, Taluka, and District where the marriage was solemnized, with full address.</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-3">
				<label>Street</label><input type="text" name="ostreet" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Village</label><input type="text" name="ovillage" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Taluka</label><input type="text" name="otaluka" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>District</label><input type="text" name="odistrict" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>8. The data on which the marriage was solemnized :</label>
			</div>
			<div class="form-group">
				<input type="date" name="osolemnizeddate" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>9. We hereby declare :</label>
			</div>
			<div class="container-fluid">
				<label>(i) that a valid marriage was solemnized between us and that the marriage is capable of being registered under Section 8 of the Hindu Marriage Act, 1955 (Central Act 25 of 1955);</label><br>
				<label>(ii) that have been satisfied; </label><br>
				<label>(iii) that the particulars given in this application are true to the best of our knowledge and belief; </label><br>
				<label>(iv) that the three witnesses who have signed below were present at the time of the solemnization of the marriage;</label><br>
				<label>(v) no dowry was demanded, given and taken.</label>
			</div>
		</div>
		<div class="form-row d-flex">			
			<div class="form-group mr-1 ml-2 justify-content-start">
				<label>Station Date :</label>
			</div>
			<div class="form-group justify-content-start">
				<input type="date" name="ostationdate" class="form-control">
			</div>
			<!-- <div class="form-group justify-content-end ml-auto">
				<label class="mr-2">Signature of the Husband :</label>
				<input type="file" name=""><br>
				<label class="mr-4">Signature of the Wife :</label>
				<input type="file" name="" style="margin-left: 18px;">
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>10. Name and address of Witnesess:</label>
			</div>			
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>1.</label>
			</div>
			<div class="form-group mx-2">
				<label>Name :&nbsp</label><input type="text" name="oname" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>2.</label>
			</div>
			<div class="form-group mx-2">
				<label>Name :&nbsp</label><input type="text" name="oname" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>Enter email and mobileno of husbund of wife.</label>
			</div>
			<div class="form-group mx-2">
				<label>Email ID :&nbsp</label><input type="email" name="mailid" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Mobileno :</label><input type="tel" name="mobileno" class="form-control">
			</div>
			<!-- <div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" class="form-control">
			</div> -->
		</div>
		<div class="form-row my-3">
			<input type="submit" class="btn btn-primary" name="submitm" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button>
		</div>

		

									</form>

       							</div>
       						</div>
       					</div>
       				</div>

      <div class="card mx-3 my-1 marriagecertificatebody">
        <div class="card-header marriagecertificateheader" role="tab" id="heading">
           <h6 class="mb-0">Process to get Marriage Certificate&nbsp&nbsp&nbsp<a href="#collapse8" data-parent="#accordion2" data-toggle="collapse" class="text-dark" style="font-size: 12px;">
           Click <b>here</b> to open <b>Marriage Certificate Process</b>
          </a></h6>
        </div>
        <div id="collapse8" class="collapse show">
       		<div class="card-body mx-5">
       			<div style="color: #ca1490;">
       		  		<ul>
            		<li>Collect all required Documents mentioned here in Required Documents to get Marriage Certificate</li>
            		<li>Fill the Birth Certificate form given above</li>
	           		<li>Submit the application</li>
					<li>Go to municipal office when Application applied by applicant is verified by authorised government supervisor.</li>
					<li>E-mail or message will be sent to given contact number in application as application is verified by supervisor.</li>
					<li>Applicant is supposed to correct every correction mentioined in comment box by supervisor to complete Marriage ceritificate application process in correct way</li>
					<li>Once application is verified for further process, Applicant is supposed to verify all attached documents to application at municipal office. </li>
					<li>After document verification is completed, Applicant will get receipt to their mail.</li>
					<li>Applicants will get Marriage Certificate by showing this receipt at municipal office.</li>
	        		</ul>
       		  	</div>
       		</div>
        </div>
      </div>

      <div class="card mb-3 mx-3 marriagecertificatebody">
        <div class="card-header marriagecertificateheader" role="tab" id="heading">
           <h6 class="mb-0">Required Documents to get Marriage Certificate&nbsp&nbsp&nbsp<a href="#collapse9" data-parent="#accordion2" data-toggle="collapse" class="text-dark" style="font-size: 12px;">
           Click <b>here</b> to open <b>Document list</b>
          </a></h6>
    	</div>
        <div id="collapse9" class="collapse">
       		<div class="card-body">
       			<table class="table table-hover">
       				<thead  style="color: #ca1490;">
       					<tr>
       						<th>Marriage Proof</th>
       						<th>Identity & Address proof</th>
       						<th>Age Proof</th>
       					</tr>
       				</thead>
       				<tbody style="color: #e253b5;">
       					<tr>
       						<td>Wedding Invitation <small class="text-muted">(or)</small></td>
       						<td>Employee ID Card <small class="text-muted">(or)</small></td>
       						<td>Birth Certificate <small class="text-muted">(or)</small></td>
       					</tr>
       					<tr>
       						<td>Temple Marriage Receipt <small class="text-muted">(or)</small></td>
       						<td>Ration Card <small class="text-muted">(or)</small></td>
       						<td>Driving Licence <small class="text-muted">(or)</small></td>
       					</tr>
       					<tr>
       						<td>Any proof of Mmarriage solemnization <small class="text-muted">(or)</small></td>
       						<td>Ration Card <small class="text-muted">(or)</small></td>
       						<td>Passport/Visa</td>
       					</tr>
       					<tr>
       						<td></td>
       						<td>Passport/visa</td>
       						<td></td>
       					</tr>
       				</tbody>
       			</table>
       		</div>
       	</div>
    </div>
    </div>
   </div>
		</div> 
	</div>
	<br>	
</div>
</div>


<div class="footer-main-div">
		
		<div class="footer-social-icons">
			<ul>
        <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/login" target="blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://vimeo.com/log_in?ssl=0&iframe=0&popup=0&player=0&product_id=0&redirect=%2Fupgrade&upload_iframe=0&activate=0" target="blank"><i class="fa fa-vimeo"></i></a></li>
        <li><a href="https://www.linkedin.com/uas/login?trk=guest_homepage-basic_nav-header-signin" target="blank"><i class="fa fa-linkedin"></i></a></li>
      </ul>

		</div>

		<div class="footer-menu-one">
			<ul>
				<li><a href="home.php">Home</a></li>
        		<li><a href="about.php">About Us</a></li>
				 <li><a data-toggle="modal" data-target="#footer_services" href="">Services</a></li>
        <li><a data-toggle="modal" data-target="#footer_contact" href="">Contact us</a></li>
			</ul>
		</div>

	</div>

	<div class="footer-bottom">
		<p>Email ID: docdigi9@gmail.com<br>
		Contact no: +91 94 093 30900, +91 94 265 91154</p>
	</div>
	
<div class="modal" id="footer_services">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Services</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" style="padding: 30px 30px 5px 30px;" align="justify">
            <p>User can apply for new aadhar, birth certificate and marriage certiicate
	application to Update in certifiates like name, contact number, address, email address etc can be applied to this platform</p>
	<p>Digi-locker provides the online storage to keep soft copy of the documents of a particular user.</p>
          </div>
          <div align="center" class="mb-4">
          	<button class="btn btn-warning text-light" data-dismiss="modal">Okay</button>
          </div>
          
        </div>
      </div>
    </div>

 <div class="modal" id="footer_contact">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contact</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body pr-4" style="padding: 30px 30px 5px 30px;" align="justify">
           <p>Email ID: docdigi9@gmail.com</p>
		   <p>Contact Number: +91 94 093 30900, +91 94 265 91154 (Timings: 8:00 AM to 6:00 PM)</p>
		  </div>
          <div align="center" class="mb-4">
          	<button class="btn btn-danger text-light" data-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>



</section>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>