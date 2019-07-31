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

		$q = "SELECT * FROM birth where userid='$userid'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {

			$name = $row['name'];
			$gender = $row['gender'];
			$mobileno = $row['mobileno'];
			$mailid = $row['mailid'];
			$aadharno = $row['aadharno'];
			$panno = $row['panno'];
			$state = $row['state'];
			$district = $row['district'];
			$subdistrict = $row['subdistrict'];
			$circleoffice = $row['circleoffice'];
			$nameoffather = $row['nameoffather'];
			$nameofmother = $row['nameofmother'];
			$dateofbirth = $row['dateofbirth'];
			$sex = $row['sex'];
			$birthweight = $row['birthweight'];
			$placeofbirth = $row['placeofbirth'];
			$informantsname = $row['informantsname'];
			$houseaddress = $row['houseaddress'];
			$addressofparents =$row['addressofparents'];

			?>

				<form>
	<!-- <div class="container-fluid d-flex justify-text-center col-8" id="birthform123" style="background-color: red;"> -->
			<div class="container-fluid form-row">
			<div class="form-row">
				<label><b><u>Applicant's Details</u></b></label>
			</div>
			<div class="container mb-3">
			<div class="form-row">
				<div class="form-group col-10">
					<label>Applicant's Name :&nbsp&nbsp</label>
					<input type="text" name="name" placeholder=" Applicant's Name" readonly="readonly" value="<?php echo $name; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Applicant's Gender :&nbsp&nbsp</label>
					<input type="text"  readonly="readonly" name="gender" placeholder=" Applicant's Name" value="<?php echo $gender; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Mobile Number :&nbsp&nbsp</label>
					<input type="tel" name="mobileno" readonly="readonly" value="<?php echo $mobileno; ?>" class="form-control">
				</div>
				<div class="form-group col">
					<label>Mail ID :</label>
					<input type="email" name="mailid" readonly="readonly" value="<?php echo $mailid; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Aadhar Number :</label>
					<input type="text" name="aadharno" readonly="readonly" value="<?php echo $aadharno; ?>" class="form-control">
				</div>
				<div class="form-group col">
					<label>Pan Number :</label>
					<input type="text" name="panno" readonly="readonly" value="<?php echo $panno; ?>" class="form-control">
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
  						<input type="text" name="state" readonly="readonly" value="<?php echo $state; ?>" class="form-control">
					<!-- </div> -->
					</div>
				</div>
				<div class="form-row">
  					<div class="form-group col">
  						<label for="sel2">District :&nbsp&nbsp</label>
  						<input type="text" name="district" readonly="readonly" value="<?php echo $district; ?>" class="form-control">
    				</div>
					<div class="form-group col">
						<label for="sel3">Sub-District :&nbsp&nbsp</label>
						<input type="text" name="subdistrict" readonly="readonly" value="<?php echo $subdistrict; ?>" class="form-control">
					</div>
					<div class="form-group col">
						<label for="sel4">Circle Office : :&nbsp&nbsp</label>
						<input type="text" name="circleoffice" readonly="readonly" value="<?php echo $circleoffice; ?>" class="form-control">
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
							<input type="text" name="nameoffather" readonly="readonly" value="<?php echo $nameoffather; ?>" class="form-control">
						</div>
						<div class="form-group col">
							<label>Name of Mother :&nbsp&nbsp</label>
							<input type="text" name="nameofmother" readonly="readonly" value="<?php echo $nameofmother; ?>" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-4">
							<label>Date of Birth :</label>
							<input type="date" name="dateofbirth" readonly="readonly" value="<?php echo $dateofbirth; ?>" class="form-control">
						</div>
						<div class="form-group col-2">
							<!-- <label>Date of Birth :</label>
							<input type="Date" name="" class="form-control"> -->
						</div>
						<div class="form-group col ml-3">
							<div class="form-row">
								<label>Sex :&nbsp&nbsp</label>
								<input type="text" readonly="readonly" name="sex" value="<?php echo $sex; ?>" class="form-control">
							</div>
							<div class="form-row">
								<label class="form-group form-inline">Birth Weight <small class="text-muted">&nbsp(in kgs)&nbsp</small>:&nbsp&nbsp
								<input type="number" readonly="readonly" name="birthweight" value="<?php echo $birthweight; ?>" class="form-control col-3"></label>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col">
							<div class="form-row"><br></div>
							<label>Place of Birth :&nbsp&nbsp</label>
							<input type="text" name="placeofbirth" readonly="readonly" value="<?php echo $placeofbirth; ?>" class="form-control">													
						</div>
						<div class="form-group col">
							<label>If House Address :&nbsp&nbsp&nbsp&nbsp</label>
							<input type="text" cols=22 rows=2 name="houseaddress" readonly="readonly" value="<?php echo $houseaddress; ?>" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<!-- <div class="form-row"><br></div> -->
							<label>Informant's Name :&nbsp&nbsp</label>
							<input type="text" name="informantsname" readonly="readonly" value="<?php echo $informantsname; ?>" class="form-control">
						</div>
						<div class="form-group col">
							<label>Address of Parents at time of Birth :&nbsp&nbsp</label>
							<input type="text" cols=22 rows="2" name="addressofparents" readonly="readonly" value="<?php echo $addressofparents; ?>" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-row my-3">
			<!-- <input type="submit" class="btn btn-primary" name="submitb" style="border-radius: 10px;">
			<button class="btn-danger ml-3" style="border-radius: 10px;">Cancel</button> -->
		</div>
				<!-- <div class="form-row">
					<input type="submit" class="btn btn-primary" name="submitb" style="border-radius: 10px;">
						<button type="submit" class="btn btn-danger my-3">Cancel</button>	
				</div> -->
			</div>
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
<form action="newshowb.php" method="post">
<div class="row">
	<div class="col">
		
		<?php
		$q = "SELECT ucomments FROM birthverify where userid='$userid'";
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
		$q = "SELECT comments FROM birthverify where userid='$userid'";
		$res = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			$comments = $row['comments'];
			?>
			<!-- <form> -->
				<label>Old Your Comments:</label>
				<input type="textarea" class="form-group form-control" name="ucomments" readonly="readonly" value="<?php echo $comments; ?>">
			<!-- </form> -->
			<?php
		}

		?>
	</div>
</div>
<br>


<div class="row">
<div class="col-6">

	<label>Comments:</label><br>
	<textarea name="comments" class="form-control" rows="3" required></textarea>
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
    $mail->Subject = 'BirthCertificat';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE birthverify SET status='$status',comments='$comments' WHERE userid='$userid'";
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
    $mail->Subject = 'BirthCertificat';
    $mail->Body    = $comments;
    $mail->AltBody = $comments;

    $mail->send();
    echo "Email sent";
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


	$query = "UPDATE birthverify SET status='$status',comments='$comments' WHERE userid='$userid'";
				if (mysqli_query($conn,$query)) {
					echo "Data Update";
				}else{
					echo mysqli_error($conn);
				}
}




?>
<a href="adminb.php">Home</a>










<div style="margin-top:500px;"></div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>