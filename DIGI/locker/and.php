<?php
session_start();
echo $_SESSION['username'];
include "db.php";
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Documents</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col">
			<a href="aadharcard.php"><button class="btn btn-primary btn-lg" type="button"> Aadhar Card</button></a>
		</div>
		<div class="col">
			<a href="pancard.php"><button class="btn btn-primary btn-lg" type="button"> PAN Card</button></a>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col">
			<a href="licence.php"><button class="btn btn-primary btn-lg" type="button"> Driving Licence</button></a>
		</div>
		<div class="col">
			<a href="voter.php"><button class="btn btn-primary btn-lg" type="button"> Voter ID Card</button></a>
		</div>
	</div>
</div>





















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>