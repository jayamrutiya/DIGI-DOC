<?php
session_start();
//echo $_SESSION['user'];
$userid = $_SESSION['user'];
include "db.php";














?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Details</title>
</head>
<body>

	
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
					<input type="text" name="hname" readonly="readonly" value="<?php echo $hname; ?>" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group col-5">
					<label>(b) Religion :</label>				
					<label><input type="text" name="hreligion" readonly="readonly" value="<?php echo $hreligion; ?>" class="form-control"></label>
									
			</div>
			<div class="form-group ml-5">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-2">
				<input type="text" name="hcast" readonly="readonly" value="<?php echo $hcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group">
					<label>(d) Date of Birth <small> (Age) :&nbsp</small></label>
				</div>
				<div class="form-group input-append date" id="datepicker1">
					<input data-formate="dd/mm/yy" type="Date" name="hdateofbirth" readonly="readonly" value="<?php echo $hdateofbirth; ?>" class="form-control">
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
				<label><input type="text" name="hmarritalstatus" readonly="readonly" value="<?php echo $hmarritalstatus; ?>" class="form-control"></label>
				
			</div>			
		</div>
		<div class="form-row d-flex">
			<div class="form-group">
				<label>(f) Occupation :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hoccupation" readonly="readonly" value="<?php echo $hoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mx-3">
				<label>(g) Passport Number :&nbsp</label>
			</div>
			<div class="form-group col-3">
				<input type="number" name="hpassportno" readonly="readonly" value="<?php echo $hpassportno; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-3">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="haddress" readonly="readonly" value="<?php echo $haddress; ?>" class="form-control">
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
				<input type="text" name="hfname" readonly="readonly" value="<?php echo $hfname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hfcast" readonly="readonly" value="<?php echo $hfcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hfreligion" readonly="readonly" value="<?php echo $hfreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hfage" readonly="readonly" value="<?php echo $hfage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="hfcondition" readonly="readonly" value="<?php echo $hfcondition; ?>" class="form-control"></label>
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
				<input type="text" name="hfoccupation" readonly="readonly" value="<?php echo $hfoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hfaddress" readonly="readonly" value="<?php echo $hfaddress; ?>" class="form-control">
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
				<input type="text" name="hmname" readonly="readonly" value="<?php echo $hmname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="hmcast" readonly="readonly" value="<?php echo $hmcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="hmreligion" readonly="readonly" value="<?php echo $hmreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="hmage" readonly="readonly" value="<?php echo $hmage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="hmcondition" readonly="readonly" value="<?php echo $hmcondition; ?>" class="form-control"></label>
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
				<input type="text" name="hmoccupation" readonly="readonly" value="<?php echo $hmoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="hmaddress" readonly="readonly" value="<?php echo $hmaddress; ?>" class="form-control">
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
					<input type="text" name="wname" readonly="readonly" value="<?php echo $wname; ?>" class="form-control">
				</div>
		</div>
		<div class="form-row">
			<div class="form-group">
					<label class="mr-1">(b) Religion :</label>				
					
					<label><input type="text" name="wreligion" readonly="readonly" value="<?php echo $wreligion; ?>" class="form-control"></label>
								
			</div>
			<div class="form-group ml-5 mr-1">
				<label>(c) Caste : </label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wcast" readonly="readonly" value="<?php echo $wcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
				<div class="form-group mr-1">
					<label>(d) Date of Birth<small>(Age)</small> :</label>
				</div>
				<div class="form-group col-3 mr-4">
					<input type="date" name="wdateofbirth" readonly="readonly" value="<?php echo $wdateofbirth; ?>" class="form-control">
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
					<input type="text" name="woccupation" readonly="readonly" value="<?php echo $woccupation; ?>" class="form-control">
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
				<input type="number" name="wpassportno" readonly="readonly" value="<?php echo $wpassportno; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-1">
				<label>(h) Permanent Address </label>
			</div>
			<div class="form-group col">
				<input type="text" name="waddress" readonly="readonly" value="<?php echo $waddress; ?>" class="form-control">
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
				<input type="text" name="wfname" readonly="readonly" value="<?php echo $wfname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wfcast" readonly="readonly" value="<?php echo $wfcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wfreligion" readonly="readonly" value="<?php echo $wfreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wfage" readonly="readonly" value="<?php echo $wfage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="wfcondition" readonly="readonly" value="<?php echo $wfcondition; ?>" class="form-control"></label>
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
				<input type="text" name="wfoccupation" readonly="readonly" value="<?php echo $wfoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wfaddress" readonly="readonly" value="<?php echo $wfaddress; ?>" class="form-control">
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
				<input type="text" name="wmname" readonly="readonly" value="<?php echo $wmname; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(c) Caste :</label>
			</div>
			<div class="form-group col-3">
				<input type="text" name="wmcast" readonly="readonly" value="<?php echo $wmcast; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>(b) Raligion :</label>
			</div>
			<div class="form-group col-3 mx-3">
				<input type="text" name="wmreligion" readonly="readonly" value="<?php echo $wmreligion; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>(d) Age </label>
			</div>
			<div class="form-group col-1">
				<input type="number" name="wmage" readonly="readonly" value="<?php echo $wmage; ?>" class="form-control">
			</div>
			<div class="form-group ml-3 mr-2">
				<label>Years :</label>
			</div>
			<div class="form-group">
				<label><input type="text" name="wmcondition" readonly="readonly" value="<?php echo $wmcondition; ?>" class="form-control"></label>
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
				<input type="text" name="wmoccupation" readonly="readonly" value="<?php echo $wmoccupation; ?>" class="form-control">
			</div>
			<div class="form-group mr-1">
				<label>(f) Address :</label>
			</div>
			<div class="form-group col-4">
				<input type="text" name="wmaddress" readonly="readonly" value="<?php echo $wmaddress; ?>" class="form-control">
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
				<input type="text" name="ahpassportno" readonly="readonly" value="<?php echo $ahpassportno; ?>" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvalid" readonly="readonly" value="<?php echo $ahvalid; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="ahpassportissued" readonly="readonly" value="<?php echo $ahpassportissued; ?>" class="form-control">
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
				<input type="text" name="ahvisa" readonly="readonly" value="<?php echo $ahvisa; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="ahvisavalid" readonly="readonly" value="<?php echo $ahvisavalid; ?>" class="form-control">
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
				<Label><input type="text" name="ahresident" readonly="readonly" value="<?php echo $ahresident; ?>" class="form-control"></Label>
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
				<input type="text" name="ahsecurity" readonly="readonly" value="<?php echo $ahsecurity; ?>" class="form-control">
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
				<input type="text" name="awpassportno" readonly="readonly" value="<?php echo $awpassportno; ?>" class="form-control">
			</div>
			<div class="form-group mr-2">
				<label>(c) Passport valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvalid" readonly="readonly" value="<?php echo $awvalid; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group ml-3 mr-2">
				<label>(b) Passort Issued by :</label>
			</div>
			<div class="form-group">
				<input type="text" name="awissued" readonly="readonly" value="<?php echo $awissued; ?>" class="form-control">
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
				<input type="text" name="awvisa" readonly="readonly" value="<?php echo $awvisa; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2 ml-3">
				<label>(b) visa valid up to :</label>
			</div>
			<div class="form-group">
				<input type="date" name="awvisavalid" readonly="readonly" value="<?php echo $awvisavalid; ?>" class="form-control">
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
				<Label><input type="text" name="awresident" readonly="readonly" value="<?php echo $awresident; ?>" class="form-control"></Label>
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
				<input type="text" name="awsecurity" readonly="readonly" value="<?php echo $awsecurity; ?>" class="form-control">
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
				<input type="text" name="osolemnizedname" readonly="readonly" value="<?php echo $osolemnizedname; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>6. Whether the Marriage was solemnized :</label>
			</div>
			<div class="container-fluid">
			<div class="form-row">
				<div class="form-group" style="display: inline;">
					<label>(a) In accordance with the customary rites and ceremonies of either party to the marriage as required by section 7 of the Hindu marriage Act.<input type="text" name="oact" readonly="readonly" value="<?php echo $oact; ?>" class="form-control">
					<!-- <input type="radio" name="oact" value="No" class="ml-3">No --></label><label class="ml-5"><b>OR</b></label>
				</div>
				<!-- <div class="form-group">
					<label class="font-weight-bold ml-5">OR</label>
				</div> -->
				<div class="form-group" style="display: inline;">
					<label>(b) In accordance with Section 7-A of the Hindu Marriage Act.<input type="text" name="oacta" readonly="readonly" value="<?php echo $oacta; ?>" class="form-control"><!-- <input type="radio" name="oacta" value="No" class="ml-3">No --></label>
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
				<label>Street</label><input type="text" name="ostreet" readonly="readonly" value="<?php echo $ostreet; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Village</label><input type="text" name="ovillage" readonly="readonly" value="<?php echo $ovillage; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>Taluka</label><input type="text" name="otaluka" readonly="readonly" value="<?php echo $otaluka; ?>" class="form-control">
			</div>
			<div class="form-group col-3">
				<label>District</label><input type="text" name="odistrict" readonly="readonly" value="<?php echo $odistrict; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group mr-2">
				<label>8. The data on which the marriage was solemnized :</label>
			</div>
			<div class="form-group">
				<input type="date" name="osolemnizeddate" readonly="readonly" value="<?php echo $osolemnizeddate; ?>" class="form-control">
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
				<input type="date" name="ostationdate" readonly="readonly" value="<?php echo $ostationdate; ?>" class="form-control">
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
				<label>Name :&nbsp</label><input type="text" name="oname" readonly="readonly" value="<?php echo $oname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname" readonly="readonly" value="<?php echo $ofname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" readonly="readonly" value="<?php echo $oaadhar; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>2.</label>
			</div>
			<div class="form-group mx-2">
				<label>Name :&nbsp</label><input type="text" name="oname" readonly="readonly" value="<?php echo $oname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Father's Name :</label><input type="text" name="ofname" readonly="readonly" value="<?php echo $ofname; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" readonly="readonly" value="<?php echo $oaadhar; ?>" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label>Enter email and mobileno of husbund of wife.</label>
			</div>
			<div class="form-group mx-2">
				<label>Email ID :&nbsp</label><input type="email" name="mailid" readonly="readonly" value="<?php echo $mailid; ?>" class="form-control">
			</div>
			<div class="form-group mx-2">
				<label>Mobileno :</label><input type="tel" name="mobileno" readonly="readonly" value="<?php echo $mobileno; ?>" class="form-control">
			</div>
			<!-- <div class="form-group mx-2">
				<label>Aadhar Number :</label><input type="text" name="oaadhar" class="form-control">
			</div> -->
		</div>
		<!-- <div class="form-row my-3">
			<input type="submit" class="btn btn-primary" name="submitm" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button>
		</div> -->

		

									</form>
</div>

		<?php
			
		}
?>

<div class="container">
<div class="row">
	<div class="col-2">
		<label>Documents:</label><br>
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
<form action="showm.php" method="post">
<div class="row">
<div class="col-6">

	<label>Comments:</label><br>
	<input type="text" name="comments" class="form-control" rows="3" required>
	</div>
<div class="col-6">


	<input type="submit" class="btn btn-primary" name="verify" value="verify" style="border-radius: 10px;"><br>
	<input type="submit" class="btn btn-primary" name="unverify" value="unverify" style="border-radius: 10px;">
	<?php echo $mailid; ?>
</div>
</div>

</form>
</div>


<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['unverify'])) {

	$comments = $_POST['comments'];
	$status = "unverify";

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'docdigi9@gmail.com';                 // SMTP username
    $mail->Password = 'digi@12345';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('docdigi9@gmail.com', 'DIGI-DOC');
    $mail->addAddress($mailid, $userid);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MarriageCertificat';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE marriageverify SET status='$status',comments='$comments' WHERE userid='$userid'";
				if (mysqli_query($conn,$query)) {
					echo "Data Update";
				}else{
					echo mysqli_error($conn);
				}


}
else if(isset($_POST['verify'])){
	$comments = $_POST['comments'];
	$status = "verify";

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'docdigi9@gmail.com';                 // SMTP username
    $mail->Password = 'digi@12345';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('docdigi9@gmail.com', 'DIGI-DOC');
    $mail->addAddress($mailid, $userid);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MarriageCertificat';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE marriageverify SET status='$status',comments='$comments' WHERE userid='$userid'";
				if (mysqli_query($conn,$query)) {
					echo "Data Update";
				}else{
					echo mysqli_error($conn);
				}
}




?>
<a href="adminm.php">Home</a>









<div style="margin-top:500px;"></div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>