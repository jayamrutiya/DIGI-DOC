<?php
session_start();
//echo $_SESSION['user'];
$user = $_SESSION['user'];
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

		$q = "SELECT * FROM aadhar where userid='$user'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {

			$userid = $row['userid'];
			$preenrollmentid=$row['preenrollmentid'];
			$nprreceipttinnumber=$row['nprreceipttinnumber'];
			$firstname=$row['firstname'];
			$middlename=$row['middlename'];
			$lastname=$row['lastname'];
			$gender=$row['gender'];
			$dateofbirth=$row['dateofbirth'];
			$age=$row['age'];
			$address=$row['address'];
			$houseno=$row['houseno'];
			$street=$row['street'];
			$landmark=$row['landmark'];
			$area=$row['area'];
			$city=$row['city'];
			$postoffice=$row['postoffice'];
			$districrt=$row['districrt'];
			$subdistrict=$row['subdistrict'];
			$state=$row['state'];
			$mailid=$row['mailid'];
			$pincode=$row['pincode'];
			$reference=$row['reference'];
			$name=$row['name'];
			$eidaadharno=$row['eidaadharno'];
			$varification=$row['varification'];
			$poi=$row['poi'];
			$poa=$row['poa'];
			$dob=$row['dob'];
			$por=$row['por'];
			$introducersaadharno=$row['introducersaadharno'];
			$reference1=$row['reference1'];
			$hofseidaadharno=$row['hofseidaadharno'];
			$owner=$row['owner'];
			$introname=$row['introname'];
			//$sing=$row['sing'];
			$mobileno=$row['mobileno'];

			?>

				<form>
		<div class="container">
		<div class="form-row">
			<div class="form-group col">
				<label>Pre-Enrollment ID:</label>
				<input type="text" readonly="readonly" value="<?php echo $preenrollmentid; ?>" name="preenrollmentid" class="form-control">
			</div>
			<div class="form-group col">
				<label>NPR Receipt/TIN Number</label>
				<input type="text" name="nprreceipttinnumber" readonly="readonly" value="<?php echo $nprreceipttinnumber; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control" readonly="readonly" value="<?php echo $firstname; ?>" required>
			</div>
			<div class="form-group col">
				<label>Middle Name</label>
				<input type="text" name="middlename" class="form-control" readonly="readonly" value="<?php echo $middlename;?>" required>
			</div>
			<div class="form-group col">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control" readonly="readonly" value="<?php echo $lastname;?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">	
				<label>Gender :&nbsp&nbsp</label>
				<input type="text" name="gender" class="form-control" readonly="readonly" value="<?php echo $gender;?>" required>
			</div>
			<div class="form-group col">
				<label>Date of Birth :&nbsp</label>
				<input type="date" name="dateofbirth" required class="form-control" readonly="readonly" value="<?php echo $dateofbirth;?>">	
			</div>
			<div class="form-group col">
				<label>&nbsp&nbspAge :</label>
				<input type="number" name="age" min="5" max="105" readonly="readonly" value="<?php echo $age; ?>" required class="form-control">
			</div>		
		</div>
			
		<div class="form-row">	
			<label>Address :&nbsp&nbsp&nbsp</label>
			<input type="text" name="address" class="form-control" readonly="readonly" value="<?php echo $address;?>" required>	
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>House No/Bldg/Apt. :&nbsp</label>
				<input type="text" name="houseno" class="form-control" readonly="readonly" value="<?php echo $houseno; ?>" required>
			</div>
			<div class="form-group col">
				<label>Street/Road/lane :</label>
				<input type="text" name="street" readonly="readonly" value="<?php echo $street; ?>" class="form-control">
			</div>
			<div class="form-group col">	
				<label>landmark :</label>
				<input type="text" name="landmark" readonly="readonly" value="<?php echo $landmark; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col"> 	
				<label>Area/Locallity/Sector :</label>			
				<input type="text" name="area" class="form-control" readonly="readonly" value="<?php echo $area; ?>" required>
			</div>
			<div class="form-group col">
				<label>Village/Town/City :</label>
				<input type="text" name="city" class="form-control" readonly="readonly" value="<?php echo $city; ?>" required>
			</div>
			<div class="form-group col">
				<label>Post Office :</label>
				<input type="text" name="postoffice" readonly="readonly" value="<?php echo $postoffice; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>Districrt :</label>
				<input type="text" name="districrt" readonly="readonly" value="<?php echo $districrt; ?>" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>SubDistrict :</label>
				<input type="text" name="subdistrict" readonly="readonly" value="<?php echo $subdistrict; ?>" class="form-control">
			</div>
			<div class="form-group col">	
				<label>State :</label>
				<input type="text" name="state" class="form-control" readonly="readonly" value="<?php echo $state; ?>" required>
			</div>
		</div>	

		<div class="form-row">
			<div class="form-group col">
				<label>E-Mail :</label>
				<input type="email" name="mailid" class="form-control" readonly="readonly" value="<?php echo $mailid; ?>" required>
			</div>
			<div class="form-group col">
				<label>Mobile No :</label>	
				<input type="number" name="mobileno" class="form-control" readonly="readonly" value="<?php echo $mobileno; ?>" required>
			</div>
			<div class="form-group col">
				<label>PIN CODE :</label>
				<input type="text" name="pincode" class="form-control" readonly="readonly" value="<?php echo $pincode; ?>" required>
			</div>
		</div>

		<div class="form-row">
			<label>Details of :</label>
			<div class="form-group col-4.5">
				<input type="text" name="reference" class="form-control" readonly="readonly" value="<?php echo $reference; ?>" required>
			</div>
			<div class="form-group col">
				<label>Name :</label>
				<input type="text" name="name" class="form-control" readonly="readonly" value="<?php echo $name; ?>" required>
			</div>
			<div class="form-group col">
				<label>EID/Aadhar No :</label>
				<input type="text" name="eidaadharno" class="form-control" readonly="readonly" value="<?php echo $eidaadharno; ?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group">
				<label>Verification Type :</label>
				<input type="text" name="varification" class="form-control" readonly="readonly" value="<?php echo $varification; ?>" required>
				
				<p class="text-danger">Select only one of the above. Select Introducer or Head of Family only if you do not posses any documentry proof of identity and/or address. Introducer and head of family details are not required in case of document based verification.</p>
			</div>
		</div>

		<div class="form-row">
			<label>For Document Based :&nbsp&nbsp</label>
			<div class="form-group col">
				<label>a. POI</label>
				<input type="text" name="poi" readonly="readonly" value="<?php echo $poi; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>b. POA</label>
				<input type="text" name="poa" readonly="readonly" value="<?php echo $poa; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>c. DOB</label>
				<input type="text" name="dob" readonly="readonly" value="<?php echo $dob; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>d. POR</label>
				<input type="text" name="por" readonly="readonly" value="<?php echo $por; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="ml-2 form-group col-6">
				<label>For Introducer Based - Introducer's Aadhar no :&nbsp</label>
				<input type="text" name="introducersaadharno" readonly="readonly" value="<?php echo $introducersaadharno; ?>" class="form-control">
			</div>
			<div>
				<div class="form-row ml-2">
				<label>For HoF Based - Details of &nbsp&nbsp</label>
				<input type="text" name="reference1" readonly="readonly" value="<?php echo $reference1; ?>" class="form-control">
				</div>
				<br>
				<div class="ml-2 form-row form-inline">
					<label>Hof's Eid/Aadhar No :</label>
					<input type="tel" name="hofseidaadharno" readonly="readonly" value="<?php echo $hofseidaadharno; ?>" class="form-control ml-2">
				</div>
			</div>
		</div>

		<div class="form-row">
			<label>I hereby confirm the identity and address of</label><input type="text" name="owner" readonly="readonly" value="<?php echo $owner; ?>" class="ml-2 mr-2 form-control" required><label>as being true, correct and accurate.</label>
		</div>

		<div class="form-row">
			<div class="col-6 form-inline">
				<label>Introducer/HoF's Name :&nbsp</label>
				<input type="text" name="introname" class="form-control" readonly="readonly" value="<?php echo $introname; ?>" required>
			</div>
			<!-- <div class="col-6 form-inline">
				<label>Signature of introducer/HOF :&nbsp</label>
				<input type="file" name="sing">
			</div> -->
		</div>
		<!-- <div class="form-row mb-3">
			<input type="submit" class="btn btn-primary" name="submita"  style="border-radius: 10px;">
		</div> -->
	</div>
</form>


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
<form action="newshow.php" method="post">
<div class="row">
	<div class="col">
		
		<?php
		$q = "SELECT ucomments FROM aadharverify where userid='$userid'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			$ucomments = $row['ucomments'];
			?>
			<!-- <form> -->
				<label>User Comments:</label>
				<input type="textarea" class="form-group form-control" name="ucomments" readonly="readonly" value="<?php echo $ucomments; ?>">
			<!-- </form> -->
			<?php
		}

		?>
	</div>
</div>
	<br>
	<div class="row">
	<div class="col">
		
		<?php
		$q = "SELECT comments FROM aadharverify where userid='$userid'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			$comments = $row['comments'];
			?>
			<!-- <form> -->
				<label>Your Old Comments:</label>
				<input type="textarea" class="form-group form-control" name="ucomments" readonly="readonly" value="<?php echo $comments; ?>">
			<!-- </form> -->
			<?php
		}

		?>
	</div>
</div>
<br>
	<div class="row">
<div class="col">

	<label>Comments:</label><br>
	<textarea name="comments" class="form-control" rows="3" required></textarea>
	</div>
<div class="col">

<!-- <form action="newshow.php" method="post"> -->
	<input type="submit" class="btn btn-primary" name="verify" value="verify" style="border-radius: 10px;">
	<br>
	<input type="submit" class="btn btn-primary" name="unverify" value="unverify" style="border-radius: 10px;">

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
    $mail->Subject = 'AadharCard';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE aadharverify SET status='$status',comments='$comments' WHERE userid='$userid'";
				if (mysqli_query($conn,$query)) {
					echo "Data Update";
				}else{
					echo mysqli_error($conn);
				}


}
 if(isset($_POST['verify'])){
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
    $mail->Subject = 'AadharCard';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE aadharverify SET status='$status',comments='$comments' WHERE userid='$userid'";
				if (mysqli_query($conn,$query)) {
					echo "Data Update";
				}else{
					echo mysqli_error($conn);
				}
}




?>
<a href="admin.php">Home</a>










<!-- <div style="margin-top:500px;"></div> -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>