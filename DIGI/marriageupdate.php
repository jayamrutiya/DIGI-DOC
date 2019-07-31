<?php

session_start();
include "db.php";

//echo $_SESSION['username'];
$userid = $_SESSION['username'];
if (!$_SESSION['username']) {
 header("location:login.php");
}



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Update Details</title>
</head>
<body>
<h1 style="color: red; margin-bottom: 30px;" align="center"><u>!!! Always Upload your Both Documents Again !!!</u></h1>
	<?php
	$q = "SELECT * FROM marriage where userid='$userid'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {

			$hname  = $row['hname'];
	$hreligion = $row['hreligion'];
	$hcast = $row['hcast'];
	$hdateofbirth = $row['hdateofbirth'];
	$hmarritalstatus = $row['hmarritalstatus'];
	$hoccupation = $row['hoccupation'];
	$hpassportno = $row['hpassportno'];
	$haddress = $row['haddress'];
	$hfname = $row['hfname'];
	$hfcast = $row['hfcast'];
	$hfreligion =  $row['hfreligion'];
	$hfage = $row['hfage'];
	$hfcondition = $row['hfcondition'];
	$hfoccupation = $row['hfoccupation'];
	$hfaddress = $row['hfaddress'];
	$hmname = $row['hmname'];
	$hmcast = $row['hmcast'];
	$hmreligion = $row['hmreligion'];
	$hmage =  $row['hmage'];
	$hmcondition = $row['hmcondition'];
	$hmoccupation = $row['hmoccupation'];
	$hmaddress = $row['hmaddress'];
	$wname = $row['wname'];
	$wreligion = $row['wreligion'];
	$wcast = $row['wcast'];
	$wdateofbirth = $row['wdateofbirth'];
	$woccupation = $row['woccupation'];
	$wmarritalstatus = $row['wmarritalstatus'];
	$wpassportno = $row['wpassportno'];
	$waddress = $row['waddress'];
	$wfname = $row['wfname'];
	$wfcast = $row['wfcast'];
	$wfreligion = $row['wfreligion'];
	$wfage = $row['wfage'];
	$wfcondition = $row['wfcondition'];
	$wfoccupation = $row['wfoccupation'];
	$wfaddress = $row['wfaddress'];
	$wmname = $row['wmname'];
	$wmcast = $row['wmcast'];
	$wmreligion = $row['wmreligion'];
	$wmage = $row['wmage'];
	$wmcondition = $row['wmcondition'];
	$wmoccupation = $row['wmoccupation'];
	$wmaddress = $row['wmaddress'];
	$ahpassportno = $row['ahpassportno'];
	$ahvalid = $row['ahvalid'];
	$ahpassportissued = $row['ahpassportissued'];
	$ahvisa = $row['ahvisa'];
	$ahvisavalid  = $row['ahvisavalid'];
	$ahresident = $row['ahresident'];
	$ahsecurity  = $row['ahsecurity'];
	$awpassportno = $row['awpassportno'];
	$awvalid = $row['awvalid'];
	$awissued = $row['awissued'];
	$awvisa = $row['awvisa'];
	$awvisavalid = $row['awvisavalid'];
	$awresident = $row['awresident'];
	$awsecurity = $row['awsecurity'];
	$osolemnizedname = $row['osolemnizedname'];
	$oact = $row['oact'];
	$oacta = $row['oacta'];
	$ostreet = $row['ostreet'];
	$ovillage = $row['ovillage'];
	$otaluka = $row['otaluka'];
	$odistrict = $row['odistrict'];
	$osolemnizeddate = $row['osolemnizeddate'];
	$ostationdate = $row['ostationdate'];
	$oname = $row['oname'];
	$ofname = $row['ofname'];
	$oaadhar = $row['oaadhar'];
	$mailid = $row['mailid'];
	$mobileno = $row['mobileno'];

			?>
				<div class="container-fluid">
				<form action="marriageupdate.php" method="post">


		
       								<!-- Husband's details -->
		<div>
			<h3 class="d-flex justify-content-center bg-dark text-light p-3"><b>HUSBAND DETAILS</b></h3>
		</div>
		<div class="form-row">
				<div class="form-group">
					<label>(a) Full Name of the Husband <small>(as per records) :</small></label>
				</div>
				<div class="form-group col">
					<input type="text" name="hname"  value="<?php echo $hname; ?>" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group col-5">
					<label>(b) Religion :</label>				
					<label><input type="text" name="hreligion"  value="<?php echo $hreligion; ?>" class="form-control"></label>
									
			</div>
			<div class="form-group ml-5">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-2">
				<input type="text" name="hcast"  value="<?php echo $hcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group">
					<label>(d) Date of Birth <small> (Age) :&nbsp</small></label>
				</div>
				<div class="form-group input-append date" id="datepicker1">
					<input data-formate="dd/mm/yy" type="Date" name="hdateofbirth"  value="<?php echo $hdateofbirth; ?>" class="form-control">
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
				<label><input type="text" name="hmarritalstatus"  value="<?php echo $hmarritalstatus; ?>" class="form-control"></label>
				
			</div>			
		</div>
		<div class="form-row d-flex">
			<div class="form-group">
				<label>(f) Occupation :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hoccupation"  value="<?php echo $hoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mx-3">
				<label>(g) Passport Number :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="number" name="hpassportno"  value="<?php echo $hpassportno; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-3">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="haddress"  value="<?php echo $haddress; ?>" class="form-control">
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
				<input type="text" name="hfname"  value="<?php echo $hfname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hfcast"  value="<?php echo $hfcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hfreligion"  value="<?php echo $hfreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hfage"  value="<?php echo $hfage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="hfcondition"  value="<?php echo $hfcondition; ?>" class="form-control"></label>
			</div>
			<!-- <div class="form-group mr-3">
				<label><input type="radio" name="hfcondition" value="Died">&nbspDied</label>
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="hfoccupation"  value="<?php echo $hfoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hfaddress"  value="<?php echo $hfaddress; ?>" class="form-control">
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
				<input type="text" name="hmname"  value="<?php echo $hmname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hmcast"  value="<?php echo $hmcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hmreligion"  value="<?php echo $hmreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hmage"  value="<?php echo $hmage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="hmcondition"  value="<?php echo $hmcondition; ?>" class="form-control"></label>
			</div>
			<!-- <div class="form-group mr-3">
				<label><input type="radio" name="hmcondition" value="Died">&nbspDied</label>
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="hmoccupation"  value="<?php echo $hmoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hmaddress"  value="<?php echo $hmaddress; ?>" class="form-control">
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
					<input type="text" name="wname"  value="<?php echo $wname; ?>" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group">
					<label class="mr-1">(b) Religion :</label>				
					
					<label><input type="text" name="wreligion"  value="<?php echo $wreligion; ?>" class="form-control"></label>
								
			</div>
			<div class="form-group ml-5 mr-1">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wcast"  value="<?php echo $wcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group mr-1">
					<label>(d) Date of Birth<small>(Age)</small> :</label>
				</div>
				<div class="form-group col-3 mr-4">
					<input type="date" name="wdateofbirth"  value="<?php echo $wdateofbirth; ?>" class="form-control">
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
					<input type="text" name="woccupation"  value="<?php echo $woccupation; ?>" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-1">
				<label>(f) Marital status before the date of Marriage :</label>
			</div>
			<div class="form-group col">
				<label class="mr-3"><input type="text" name="wmarritalstatus" class="form-control"></label>
				
			</div>			
		</div>
		<div class="form-row">
			<div class="form-group mr-1">
				<label>(g) Passport Number :</label>
			</div>
			<div class="form-group col-3">
				<input type="number" name="wpassportno"  value="<?php echo $wpassportno; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-1">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col">
				<input type="text" name="waddress"  value="<?php echo $waddress; ?>" class="form-control">
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
				<input type="text" name="wfname"  value="<?php echo $wfname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wfcast"  value="<?php echo $wfcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wfreligion"  value="<?php echo $wfreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wfage"  value="<?php echo $wfage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="wfcondition"  value="<?php echo $wfcondition; ?>" class="form-control"></label>
			</div>
			<!-- <div class="form-group mr-3">
				<label><input type="radio" name="wfcondition" value="Died">&nbspDied</label>
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="wfoccupation"  value="<?php echo $wfoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wfaddress"  value="<?php echo $wfaddress; ?>" class="form-control">
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
				<input type="text" name="wmname"  value="<?php echo $wmname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wmcast"  value="<?php echo $wmcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wmreligion"  value="<?php echo $wmreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wmage"  value="<?php echo $wmage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="wmcondition"  value="<?php echo $wmcondition; ?>" class="form-control"></label>
			</div>
			<!-- <div class="form-group mr-3">
				<label><input type="radio" name="wmcondition" value="Died">&nbspDied</label>
			</div> -->
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>(e) Occupation :</label>
			</div>
			<div class="form-group mr-3">
				<input type="text" name="wmoccupation"  value="<?php echo $wmoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wmaddress"  value="<?php echo $wmaddress; ?>" class="form-control">
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
				<input type="text" name="ahpassportno"  value="<?php echo $ahpassportno; ?>" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvalid"  value="<?php echo $ahvalid; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="ahpassportissued"  value="<?php echo $ahpassportissued; ?>" class="form-control">
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
				<input type="text" name="ahvisa"  value="<?php echo $ahvisa; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvisavalid"  value="<?php echo $ahvisavalid; ?>" class="form-control">
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
				<Label><input type="text" name="ahresident"  value="<?php echo $ahresident; ?>" class="form-control"></Label>
			</div>
			<!-- <div class="form-group">
				<Label><input type="radio" name="ahresident" value="Temporary"> Temporary</Label>
			</div> -->
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
				<input type="text" name="ahsecurity"  value="<?php echo $ahsecurity; ?>" class="form-control">
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
				<input type="text" name="awpassportno"  value="<?php echo $awpassportno; ?>" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvalid"  value="<?php echo $awvalid; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="awissued"  value="<?php echo $awissued; ?>" class="form-control">
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
				<input type="text" name="awvisa"  value="<?php echo $awvisa; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvisavalid"  value="<?php echo $awvisavalid; ?>" class="form-control">
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
				<Label><input type="text" name="awresident"  value="<?php echo $awresident; ?>" class="form-control"></Label>
			</div>
			<!-- <div class="form-group">
				<Label><input type="radio" name="awresident" value="Temporary"> Temporary</Label>
			</div> -->
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
				<input type="text" name="awsecurity"  value="<?php echo $awsecurity; ?>" class="form-control">
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
				<input type="text" name="osolemnizedname"  value="<?php echo $osolemnizedname; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>6. Whether the Marriage was solemnized :</label>
			</div>
			<div class="container-fluid">
			<div class="form-row">
				<div class="form-group" style="display: inline;">
					<label>(a) In accordance with the customary rites and ceremonies of either party to the marriage as required by section 7 of the Hindu marriage Act.<input type="text" name="oact"  value="<?php echo $oact; ?>" class="form-control">
					<!-- <input type="radio" name="oact" value="No" class="ml-3">No --></label><label class="ml-5"><b>OR</b></label>
				</div>
				<!-- <div class="form-group">
					<label class="font-weight-bold ml-5">OR</label>
				</div> -->
				<div class="form-group" style="display: inline;">
					<label>(b) In accordance with Section 7-A of the Hindu Marriage Act.<input type="text" name="oacta"  value="<?php echo $oacta; ?>" class="form-control"><!-- <input type="radio" name="oacta" value="No" class="ml-3">No --></label>
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
				<label>Street</label><input type="text" name="ostreet"  value="<?php echo $ostreet; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Village</label><input type="text" name="ovillage"  value="<?php echo $ovillage; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Taluka</label><input type="text" name="otaluka"  value="<?php echo $otaluka; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>District</label><input type="text" name="odistrict"  value="<?php echo $odistrict; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>8. The data on which the marriage was solemnized :</label>
			</div>
			<div class="form-group">
				<input type="date" name="osolemnizeddate"  value="<?php echo $osolemnizeddate; ?>" class="form-control">
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
				<input type="date" name="ostationdate"  value="<?php echo $ostationdate; ?>" class="form-control">
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
				<label>Name :&nbsp</label><input type="text" name="oname"  value="<?php echo $oname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname"  value="<?php echo $ofname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar"  value="<?php echo $oaadhar; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>2.</label>
			</div>
			<div class="form-group mx-2">
				<label>Name :&nbsp</label><input type="text" name="oname"  value="<?php echo $oname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname"  value="<?php echo $ofname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar"  value="<?php echo $oaadhar; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>Enter email and mobileno of husbund of wife.</label>
			</div>
			<div class="form-group mx-2">
				<label>Email ID :&nbsp</label><input type="email" name="mailid"  value="<?php echo $mailid; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Mobileno :</label><input type="tel" name="mobileno"  value="<?php echo $mobileno; ?>" class="form-control">
			</div>
			<!-- <div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" class="form-control">
			</div> -->
		</div>
		<!-- <div class="form-row my-3">
			<input type="submit" class="btn btn-primary" name="submitm" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button>
		</div> -->

		

									<!-- </form> -->


		<?php
			
		}
?>
<div class="container">
	<div class="row">
		<div class="col-2">
			<label>Documents:</label>
		</div>
		<div class="col-10">
<?php

	$q = "SELECT doc,doc1 FROM locker WHERE userid='$userid'";
	$result = mysqli_query($conn,$q);
	echo mysqli_error($conn);
	while ($row = mysqli_fetch_array($result)) {
		$doc = $row['doc'];
		$doc1 = $row['doc1'];
		?><h4>Proof Of Identity</h4><?php
		echo '
			<img src="data:image/jpeg;base64,'.base64_encode($doc).'"
		';
		?><br><br><h4>Proof of Address</h4><?php
		echo '<br><br>
			<img src="data:image/jpeg;base64,'.base64_encode($doc1).'"
		';
	}

	?>
</div>
</div>
<div class="row">
	<h4>1.Proof Of Identity</h4>
	<!-- <form action="aadharupdate.php.php" method="post" enctype="multipart/form-data"> -->
		<input type="file" name="image" id="image" /><br>
	<!-- </form> -->
	<h4>2.Proof of Address</h4>
	<input type="file" name="image1" id="image1" /><br>
</div>
<div class="row">
	<!-- <form action="aadharupdate.php.php" method="post" enctype="multipart/form-data"> -->
		<label>Comments:</label><br>
	<textarea name="ucomments" class="form-control" rows="3" required></textarea>
	<input type="submit" class="btn btn-primary" name="update" value="Update" style="border-radius: 10px;"><br>
	<!-- </form> -->
</div>
</div>
</form>
</div>
<?php

if (isset($_POST['update'])) {
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

	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
	$ucomments = $_POST['ucomments'];

		$q = "UPDATE marriage SET hname='$hname', hreligion='$hreligion', hcast='$hcast', hdateofbirth='$hdateofbirth', hmarritalstatus='$hmarritalstatus', hoccupation='$hoccupation', hpassportno='$hpassportno', haddress='$haddress', hfname='$hfname', hfcast='$hfcast', hfreligion='$hfreligion', hfage='$hfage', hfcondition='$hfcondition', hfoccupation='$hfoccupation', hfaddress='$hfaddress', hmname='$hmname', hmcast='$hmcast', hmreligion='$hmreligion', hmage='$hmage', hmcondition='$hmcondition', hmoccupation='$hmoccupation', hmaddress='$hmaddress', wname='$wname', wreligion='$wreligion', wcast='$wcast', wdateofbirth='$wdateofbirth', woccupation='$woccupation', wmarritalstatus='$wmarritalstatus', wpassportno='$wpassportno', waddress='$waddress', wfname='$wfname', wfcast='$wfcast', wfreligion='$wfreligion', wfage='$wfage', wfcondition='$wfcondition', wfoccupation='$wfoccupation', wfaddress='$wfaddress', wmname='$wmname', wmcast='$wmcast', wmreligion='$wmreligion', wmage='$wmage', wmcondition='$wmcondition', wmoccupation='$wmoccupation', wmaddress='$wmaddress', ahpassportno='$ahpassportno', ahvalid='$ahvalid', ahpassportissued='$ahpassportissued', ahvisa='$ahvisa', ahvisavalid='$ahvisavalid', ahresident='$ahresident', ahsecurity='$ahsecurity', awpassportno='$awpassportno', awvalid='$awvalid', awissued='$awissued', awvisa='$awvisa', awvisavalid='$awvisavalid', awresident='$awresident', awsecurity='$awsecurity', osolemnizedname='$osolemnizedname', oact='$oact', oacta='$oacta', ostreet='$ostreet', ovillage='$ovillage', otaluka='$otaluka', odistrict='$odistrict', osolemnizeddate='$osolemnizeddate', ostationdate='$ostationdate', oname='$oname', ofname='$ofname', oaadhar='$oaadhar', mailid='$mailid', mobileno='$mobileno' WHERE userid='$userid'";
		if (mysqli_query($conn,$q)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}
		if(!empty($file)&&!empty($file1)){
		$query = "UPDATE locker SET doc='$file', doc1='$file1', mobileno='$mobileno', mailid='$mailid' WHERE userid='$userid' AND doctype='marriage'";
		if (mysqli_query($conn,$query)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}}else{
		echo '<script>alert("Pls upload your both documents again")</script>';
	}
		$status = "unverify";
		$qu = "UPDATE marriageverify SET ucomments='$ucomments', mobileno='$mobileno', mailid='$mailid', status='$status' WHERE userid='$userid'";
		if (mysqli_query($conn,$qu)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}
		
}



?>










<script>
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name = $('#image').val();
			// if(image_name == ''){
			// 	alert("Pls select image");
			// 	return false;
			// }
			// else{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
					alert('Invalid image file');
					$('#image').val('');
					return false;
				}
			// }
		});
	});
</script>

<div style="margin-top:500px;"></div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>