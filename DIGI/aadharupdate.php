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

		$q = "SELECT * FROM aadhar where userid='$userid'";
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

				<form action="aadharupdate.php" method="post" enctype="multipart/form-data">
		<div class="container">
		<div class="form-row">
			<div class="form-group col">
				<label>Pre-Enrollment ID:</label>
				<input type="text"  value="<?php echo $preenrollmentid; ?>" name="preenrollmentid" class="form-control">
			</div>
			<div class="form-group col">
				<label>NPR Receipt/TIN Number</label>
				<input type="text" name="nprreceipttinnumber"  value="<?php echo $nprreceipttinnumber; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control"  value="<?php echo $firstname; ?>" required>
			</div>
			<div class="form-group col">
				<label>Middle Name</label>
				<input type="text" name="middlename" class="form-control"  value="<?php echo $middlename;?>" required>
			</div>
			<div class="form-group col">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control"  value="<?php echo $lastname;?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">	
				<label>Gender :&nbsp&nbsp</label>
				<input type="text" name="gender" class="form-control"  value="<?php echo $gender;?>" required>
			</div>
			<div class="form-group col">
				<label>Date of Birth :&nbsp</label>
				<input type="date" name="dateofbirth" required class="form-control"  value="<?php echo $dateofbirth;?>">	
			</div>
			<div class="form-group col">
				<label>&nbsp&nbspAge :</label>
				<input type="number" name="age" min="5" max="105"  value="<?php echo $age; ?>" required class="form-control">
			</div>		
		</div>
			
		<div class="form-row">	
			<label>Address :&nbsp&nbsp&nbsp</label>
			<input type="text" name="address" class="form-control"  value="<?php echo $address;?>" required>	
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>House No/Bldg/Apt. :&nbsp</label>
				<input type="text" name="houseno" class="form-control"  value="<?php echo $houseno; ?>" required>
			</div>
			<div class="form-group col">
				<label>Street/Road/lane :</label>
				<input type="text" name="street"  value="<?php echo $street; ?>" class="form-control">
			</div>
			<div class="form-group col">	
				<label>landmark :</label>
				<input type="text" name="landmark"  value="<?php echo $landmark; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col"> 	
				<label>Area/Locallity/Sector :</label>			
				<input type="text" name="area" class="form-control"  value="<?php echo $area; ?>" required>
			</div>
			<div class="form-group col">
				<label>Village/Town/City :</label>
				<input type="text" name="city" class="form-control"  value="<?php echo $city; ?>" required>
			</div>
			<div class="form-group col">
				<label>Post Office :</label>
				<input type="text" name="postoffice"  value="<?php echo $postoffice; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label>Districrt :</label>
				<input type="text" name="districrt"  value="<?php echo $districrt; ?>" class="form-control" required>
			</div>
			<div class="form-group col">
				<label>SubDistrict :</label>
				<input type="text" name="subdistrict"  value="<?php echo $subdistrict; ?>" class="form-control">
			</div>
			<div class="form-group col">	
				<label>State :</label>
				<input type="text" name="state" class="form-control"  value="<?php echo $state; ?>" required>
			</div>
		</div>	

		<div class="form-row">
			<div class="form-group col">
				<label>E-Mail :</label>
				<input type="email" name="mailid" class="form-control"  value="<?php echo $mailid; ?>" required>
			</div>
			<div class="form-group col">
				<label>Mobile No :</label>	
				<input type="number" name="mobileno" class="form-control"  value="<?php echo $mobileno; ?>" required>
			</div>
			<div class="form-group col">
				<label>PIN CODE :</label>
				<input type="text" name="pincode" class="form-control"  value="<?php echo $pincode; ?>" required>
			</div>
		</div>

		<div class="form-row">
			<label>Details of :</label>
			<div class="form-group col-4.5">
				<input type="text" name="reference" class="form-control"  value="<?php echo $reference; ?>" required>
			</div>
			<div class="form-group col">
				<label>Name :</label>
				<input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" required>
			</div>
			<div class="form-group col">
				<label>EID/Aadhar No :</label>
				<input type="text" name="eidaadharno" class="form-control"  value="<?php echo $eidaadharno; ?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group">
				<label>Verification Type :</label>
				<input type="text" name="varification" class="form-control"  value="<?php echo $varification; ?>" required>
				
				<p class="text-danger">Select only one of the above. Select Introducer or Head of Family only if you do not posses any documentry proof of identity and/or address. Introducer and head of family details are not required in case of document based verification.</p>
			</div>
		</div>

		<div class="form-row">
			<label>For Document Based :&nbsp&nbsp</label>
			<div class="form-group col">
				<label>a. POI</label>
				<input type="text" name="poi"  value="<?php echo $poi; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>b. POA</label>
				<input type="text" name="poa"  value="<?php echo $poa; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>c. DOB</label>
				<input type="text" name="dob"  value="<?php echo $dob; ?>" class="form-control">
			</div>
			<div class="form-group col">
				<label>d. POR</label>
				<input type="text" name="por"  value="<?php echo $por; ?>" class="form-control">
			</div>
		</div>

		<div class="form-row">
			<div class="ml-2 form-group col-6">
				<label>For Introducer Based - Introducer's Aadhar no :&nbsp</label>
				<input type="text" name="introducersaadharno"  value="<?php echo $introducersaadharno; ?>" class="form-control">
			</div>
			<div>
				<div class="form-row ml-2">
				<label>For HoF Based - Details of &nbsp&nbsp</label>
				<input type="text" name="reference1"  value="<?php echo $reference1; ?>" class="form-control">
				</div>
				<br>
				<div class="ml-2 form-row form-inline">
					<label>Hof's Eid/Aadhar No :</label>
					<input type="tel" name="hofseidaadharno"  value="<?php echo $hofseidaadharno; ?>" class="form-control ml-2">
				</div>
			</div>
		</div>

		<div class="form-row">
			<label>I hereby confirm the identity and address of</label><input type="text" name="owner"  value="<?php echo $owner; ?>" class="ml-2 mr-2 form-control" required><label>as being true, correct and accurate.</label>
		</div>

		<div class="form-row">
			<div class="col-6 form-inline">
				<label>Introducer/HoF's Name :&nbsp</label>
				<input type="text" name="introname" class="form-control"  value="<?php echo $introname; ?>" required>
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
<!-- </form>
 -->

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
		//$sing=$_POST['sing'];
		$mobileno=$_POST['mobileno'];
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
		$ucomments = $_POST['ucomments'];

		$q = "UPDATE aadhar SET preenrollmentid='$preenrollmentid', nprreceipttinnumber='$nprreceipttinnumber', firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender', dateofbirth='$dateofbirth', age='$age', address='$address', houseno='$houseno', street='$street', landmark='$landmark', area='$area', city='$city', postoffice='$postoffice', districrt='$districrt', subdistrict='$subdistrict', state='$state', mailid='$mailid', pincode='$pincode', reference='$reference', name='$name', eidaadharno='$eidaadharno', varification='$varification', poi='$poi', poa='$poa', dob='$dob', por='$por', introducersaadharno='$introducersaadharno', reference1='$reference1', hofseidaadharno='hofseidaadharno', owner='$owner', introname='$introname', mobileno='$mobileno' WHERE userid='$userid'";
		if (mysqli_query($conn,$q)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}


		if(!empty($file)&&!empty($file1)){

		$query = "UPDATE locker SET doc='$file', doc1='$file1', mobileno='$mobileno', mailid='$mailid' WHERE userid='$userid' AND doctype='aadhar'";
		if (mysqli_query($conn,$query)) {
			echo "Data Update";
		}else{
			echo mysqli_error($conn);
		}
	}else{
		echo '<script>alert("Pls upload your both documents again")</script>';
	}





		$qu = "UPDATE aadharverify SET ucomments='$ucomments', mobileno='$mobileno', mailid='$mailid' WHERE userid='$userid'";
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
				return  false;
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

<!-- <div style="margin-top:500px;"></div> -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>