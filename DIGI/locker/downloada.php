<?php

include('db.php');

if (isset($_GET['dow'])) {
	$path = $_GET['dow'];

	$res = mysqli_query($conn, "SELECT * FROM aadharcard WHERE path='$path'");
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Length: ' . filesize($path));
	readfile($path);
	


}
?>