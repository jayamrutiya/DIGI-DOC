<?php
session_start();
if (!$_SESSION['username']) {
  header("location:index.php");
}
//echo $_SESSION['username'];
$mailid = $_SESSION['mailid'];
$mobileno = $_SESSION['mobileno'];
$userid = $_SESSION['username'];
$conn = mysqli_connect('localhost', 'root', '', 'digi');
if ($conn) {
	echo "ok";
}
if (isset($_POST['insert'])) {
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
	$doctype = "aadhar";
	$query = "INSERT INTO locker(userid,mailid,mobileno,doc,doc1,doctype) VALUES ('$userid', '$mailid', '$mobileno', '$file', '$file1', '$doctype')";
	if (mysqli_query($conn, $query)) {
		echo '<script>alert("Image insert into db")</script>';
	}else{
		echo mysqli_error($conn);
	}
	$type = "aadhar";
	$status = "new";
	$q = "INSERT INTO aadharverify(userid,type,mobileno,mailid,status,comments,ucomments) VALUES ('$userid', '$type', '$mobileno', '$mailid', '$status', '', '')";
	$re = mysqli_query($conn, $q);
	if ($re) {
		echo  "Save in admin";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>FileUpload</title>
</head>
<body>
<div class="container">
	<h1 class="bg-info text-center">Upload Your Documents For Verification</h1>
		<br>
	<form action="doc.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col">
				<h3>1.Proof Of Identity</h3>
		<input type="file" name="image" id="image" /><br><br>
		<!-- <input type="submit" name="insert" id="insert" value="Upload" class="form-group form-control btn btn-info"> -->
	</div>
	<div class="col">
		<h3>2.Proof of Address</h3>
		<input type="file" name="image1" id="image1" /><br><br>
		<!-- <input type="submit"  value="Upload" class="form-group form-control btn btn-info"> -->
	</div>

		</div>
		<br>
		<div class="row">
		<input type="submit" name="insert" id="insert" value="Done" class="form-group form-control btn btn-info">
		</div>
	</form>
	<br>
	
	
</div>



	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>

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