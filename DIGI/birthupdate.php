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

				<form action="birthupdate.php" method="post" enctype="multipart/form-data">
	<!-- <div class="container-fluid d-flex justify-text-center col-8" id="birthform123" style="background-color: red;"> -->
			<div class="container-fluid form-row">
			<div class="form-row">
				<label><b><u>Applicant's Details</u></b></label>
			</div>
			<div class="container mb-3">
			<div class="form-row">
				<div class="form-group col-10">
					<label>Applicant's Name :&nbsp&nbsp</label>
					<input type="text" name="name" placeholder=" Applicant's Name" value="<?php echo $name; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Applicant's Gender :&nbsp&nbsp</label>
					<input type="text"  name="gender" placeholder=" Applicant's Name" value="<?php echo $gender; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Mobile Number :&nbsp&nbsp</label>
					<input type="tel" name="mobileno" value="<?php echo $mobileno; ?>" class="form-control">
				</div>
				<div class="form-group col">
					<label>Mail ID :</label>
					<input type="email" name="mailid" value="<?php echo $mailid; ?>" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label>Aadhar Number :</label>
					<input type="text" name="aadharno" value="<?php echo $aadharno; ?>" class="form-control">
				</div>
				<div class="form-group col">
					<label>Pan Number :</label>
					<input type="text" name="panno" value="<?php echo $panno; ?>" class="form-control">
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
 						<input type="text" name="state" value="<?php echo $state; ?>" class="form-control">
					<!-- </div> -->
					</div>
				</div>
				<div class="form-row">
 					<div class="form-group col">
 						<label for="sel2">District :&nbsp&nbsp</label>
 						<input type="text" name="district" value="<?php echo $district; ?>" class="form-control">
  				</div>
					<div class="form-group col">
						<label for="sel3">Sub-District :&nbsp&nbsp</label>
						<input type="text" name="subdistrict" value="<?php echo $subdistrict; ?>" class="form-control">
					</div>
					<div class="form-group col">
						<label for="sel4">Circle Office : :&nbsp&nbsp</label>
						<input type="text" name="circleoffice" value="<?php echo $circleoffice; ?>" class="form-control">
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
							<input type="text" name="nameoffather" value="<?php echo $nameoffather; ?>" class="form-control">
						</div>
						<div class="form-group col">
							<label>Name of Mother :&nbsp&nbsp</label>
							<input type="text" name="nameofmother" value="<?php echo $nameofmother; ?>" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-4">
							<label>Date of Birth :</label>
							<input type="date" name="dateofbirth" value="<?php echo $dateofbirth; ?>" class="form-control">
						</div>
						<div class="form-group col-2">
							<!-- <label>Date of Birth :</label>
							<input type="Date" name="" class="form-control"> -->
						</div>
						<div class="form-group col ml-3">
							<div class="form-row">
								<label>Sex :&nbsp&nbsp</label>
								<input type="text" name="sex" value="<?php echo $sex; ?>" class="form-control">
							</div>
							<div class="form-row">
								<label class="form-group form-inline">Birth Weight <small class="text-muted">&nbsp(in kgs)&nbsp</small>:&nbsp&nbsp
								<input type="number" name="birthweight" value="<?php echo $birthweight; ?>" class="form-control col-3"></label>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col">
							<div class="form-row"><br></div>
							<label>Place of Birth :&nbsp&nbsp</label>
							<input type="text" name="placeofbirth" value="<?php echo $placeofbirth; ?>" class="form-control">													
						</div>
						<div class="form-group col">
							<label>If House Address :&nbsp&nbsp&nbsp&nbsp</label>
							<input type="text" cols=22 rows=2 name="houseaddress" value="<?php echo $houseaddress; ?>" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<!-- <div class="form-row"><br></div> -->
							<label>Informant's Name :&nbsp&nbsp</label>
							<input type="text" name="informantsname" value="<?php echo $informantsname; ?>" class="form-control">
						</div>
						<div class="form-group col">
							<label>Address of Parents at time of Birth :&nbsp&nbsp</label>
							<input type="text" cols=22 rows="2" name="addressofparents" value="<?php echo $addressofparents; ?>" class="form-control">
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
<?php

if (isset($_POST['update'])) {
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
			//
			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
			$file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
			$ucomments = $_POST['ucomments'];

		$q = "UPDATE birth SET name='$name', gender='$gender', mobileno='$mobileno', mailid='$mailid', aadharno='$aadharno', panno='$panno', state='$state', district='$district', subdistrict='$subdistrict', circleoffice='$circleoffice', nameoffather='$nameoffather', nameofmother='$nameofmother', dateofbirth='$dateofbirth', sex='$sex', birthweight='$birthweight', placeofbirth='$placeofbirth', informantsname='$informantsname', houseaddress='$houseaddress', addressofparents='$addressofparents' WHERE userid='$userid'";
		if (mysqli_query($conn,$q)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}


		if(!empty($file)&&!empty($file1)){
		$query = "UPDATE locker SET doc='$file', doc1='$file1', mobileno='$mobileno', mailid='$mailid' WHERE userid='$userid' AND doctype='birth'";
		if (mysqli_query($conn,$query)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}
	}else{
		echo '<script>alert("Pls upload your both documents again")</script>';
	}

		$qu = "UPDATE birthverify SET ucomments='$ucomments', mobileno='$mobileno', mailid='$mailid' WHERE userid='$userid'";
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
			if(image_name == ''){
				alert("Pls select image");
				return false;
			}else{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
					alert('Invalid image file');
					$('#image').val('');
					return false;
				}
			}
		});
	});
</script>

<div style="margin-top:500px;"></div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>