<?php
session_start();

include "db.php";

?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Admin</title>
</head>
<body>

	<!-- <div class="container"> -->
		<div class="row">
			<div class="col-4">
				<h2 class="text-center">New</h2>


				<?php

				$q = "SELECT userid,mailid,mobileno FROM aadharverify WHERE status='new'";
 				$res = mysqli_query($conn, $q);

 				while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 					
 					$userid = $row['userid'];
 					$mailid = $row['mailid'];
 					$mobileno = $row['mobileno'];

 				?>
 					
 					<table class="table">
 						<tbody>
 							<tr>
 								<form action="admin.php" method="post">
 							<td><input type="text" name="mailid" readonly="readonly" value="<?php echo $mailid; ?>"></td>
 							<td><input type="text" name="mobileno" readonly="readonly" value="<?php echo $mobileno; ?>"></td>
 							<td><input type="submit" name="show" value="Show"></td>
 							</form>
 							</tr>

 						</tbody>
 					</table>

 				

					
					<?php
				

 				


 				}




 				// echo $mailid;

					// if (isset($_POST['show'])) {
					// 	$q = "SELECT userid FROM aadharverify WHERE mailid='$mailid' AND mobileno='$mobileno'";
 				// $res = mysqli_query($conn, $q);

 				// while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 				// 	$userid = $row['userid'];
 				// 	$_SESSION['user'] = $userid;
 				// 	header("location:show.php");

 				// 	}


					// }


				?>

				
							<?php
 							if (isset($_POST['show'])) {
 								$mailid = $_POST['mailid'];
 								$mobileno = $_POST['mobileno'];
 								echo $mailid;
 								echo $mobileno;
 								$q = "SELECT userid FROM aadharverify WHERE mailid='$mailid' AND mobileno='$mobileno'";
 								$res = mysqli_query($conn, $q);

 				 				while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 				 						$userid = $row['userid'];
 				 							$_SESSION['user'] = $userid;
 				 							header("location:show.php");
 							}}
 							?>







			</div>
			<div class="col-4">
				<h2 class="text-center">Unverified</h2>
				<?php

				$q = "SELECT userid,mailid,mobileno FROM aadharverify WHERE status='unverify'";
 				$res = mysqli_query($conn, $q);

 				while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 					$_SESSION['username'] = $row['userid'];
 					$mailid = $row['mailid'];
 					$mobileno = $row['mobileno'];

 				?>

 					<table class="table">
 						<tbody>
 							<tr>
 								<form action="admin.php" method="post">
 								<td><input type="text" name="mailid" readonly="readonly" value="<?php echo $mailid; ?>"></td>
 								<td><input type="text" name="mobileno" readonly="readonly" value="<?php echo $mobileno; ?>"></td>
 								<td><input type="submit" name="newshow" value="Show"></td>
 								</form>
 							</tr>
 						</tbody>
 					</table>

 				<?php





 				}



				?>

				<?php
 							if (isset($_POST['newshow'])) {
 								$mailid = $_POST['mailid'];
 								$mobileno = $_POST['mobileno'];
 								echo $mailid;
 								echo $mobileno;
 								$q = "SELECT userid FROM aadharverify WHERE mailid='$mailid' AND mobileno='$mobileno'";
 								$res = mysqli_query($conn, $q);

 				 				while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 				 						$userid = $row['userid'];
 				 							$_SESSION['user'] = $userid;
 				 							header("location:newshow.php");
 							}}
 							


				?>





			</div>
			<div class="col-4">
				<h2 class="text-center">Verified</h2>
				<?php

				$q = "SELECT userid,mailid,mobileno FROM aadharverify WHERE status='verify'";
 				$res = mysqli_query($conn, $q);

 				while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
 					$_SESSION['username'] = $row['userid'];
 					$mailid = $row['mailid'];
 					$mobileno = $row['mobileno'];

 				?>

 					<table class="table">
 						<tbody>
 							<tr>
 								
 								<td><input type="text" name="mailid" readonly="readonly" value="<?php echo $mailid; ?>"></td>
 								<td><input type="text" name="mobileno" readonly="readonly" value="<?php echo $mobileno; ?>"></td>
 								<!-- <td><a href="show.php"><button>Show</button></a></td> -->
 							</tr>
 						</tbody>
 					</table>

 				<?php





 				}



				?>
			</div>
		</div>
	<!-- </div>
 -->




















	 <!-- <div style="margin-top:500px;"></div> -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>