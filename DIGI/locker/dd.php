<?php
session_start();
echo $_SESSION['username'];
include "db.php";
$userid = $_SESSION['username'];

?>


<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>DD</title>
</head>
<body>
<table border="1">
	<thead><tr>
<td><h1>Aadhar Card</h1></td>
</tr>
</thead>
<tbody>
	<tr>
		<td>
<?php
$sql = "SELECT * FROM aadharcard WHERE userid='$userid'";

$res = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			// $id = $row['id'];
			$name = $row['name'];
			$path = $row['path'];

			echo "Doc Name: " .$name . "<a href='downloada.php?dow=$path'><br>Download</a><br>";
		}
?>
</td>
</tr>
</tbody>
</table>
<br>

<table border="1">
	<thead><tr>
<td><h1>PAN Card</h1></td>
</tr>
</thead>
<tbody>
	<tr>
		<td>
<?php
$sql = "SELECT * FROM pancard WHERE userid='$userid'";

$res = mysqli_query($conn,$sql);







while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			// $id = $row['id'];
			$name = $row['name'];
			$path = $row['path'];

			echo "Doc Name: " .$name . "<a href='downloadp.php?dow=$path'> <br> Download</a><br>";
		}
?>
</td>
</tr>
</tbody>
</table>
<br>
<table border="1">
	<thead><tr>
<td><h1>Driving Licence</h1></td>
</tr>
</thead>
<tbody>
	<tr>
		<td>
<?php
$sql = "SELECT * FROM licence WHERE userid='$userid'";

$res = mysqli_query($conn,$sql);







while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			// $id = $row['id'];
			$name = $row['name'];
			$path = $row['path'];

			echo "Doc Name: " .$name . "<a href='downloadl.php?dow=$path'> <br> Download</a><br>";
		}
?>
</td>
</tr>
</tbody>
</table>
<br>


<table border="1">
	<thead><tr>
<td><h1>Voter Card</h1></td>
</tr>
</thead>
<tbody>
	<tr>
		<td>
<?php
$sql = "SELECT * FROM voter WHERE userid='$userid'";

$res = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
			// $id = $row['id'];
			$name = $row['name'];
			$path = $row['path'];

			echo "Doc Name: " .$name . "<a href='downloadv.php?dow=$path'><br>  Download</a><br>";
		}
?>

</td>
</tr>
</tbody>
</table>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>