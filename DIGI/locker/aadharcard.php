<?php
session_start();
echo $_SESSION['username'];
include "db.php";
$userid  = $_SESSION['username'];





if (isset($_POST['submit'])) {
	
	$doc_name = $_POST['doc_name'];
	$name = $_FILES['myfile']['name'];
	$tmp_name = $_FILES['myfile']['tmp_name'];

	if ($name && $doc_name) {

		$Location =  "doc/$name";
		$move = move_uploaded_file($tmp_name, $Location);
		echo $move;
		$query = mysqli_query($conn, "INSERT INTO aadharcard (userid,name,path) VALUES ('$userid','$doc_name','$Location')") or die(mysqli_error($conn));
		if ($query) {
			echo "Done";
		}
		//header('Location:home.php');
		
	}else{
		die("Please select a file");
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
	<title>Aadhar Card</title>
</head>
<body>


<form action="aadharcard.php" method="post" enctype="multipart/form-data">

		<label>Doc Name</label>
		<input type="text" name="doc_name">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="Upload">
		
	</form>















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>