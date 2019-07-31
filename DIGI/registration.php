<?php
include "db.php";

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $mailid = $_POST['mailid'];
  $mobileno = $_POST['mobileno'];

  $query = "SELECT userid,password FROM login WHERE userid='$userid' AND password='$password'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_num_rows($result);
  if ($data > 0) {
    echo '<script>alert("Pls enter another Userid & Password")</script>';
  }else{
    $qu = "INSERT INTO login VALUES ('$name', '$userid', '$password', '$mailid', '$mobileno')";
    $re = mysqli_query($conn,$qu);
    if ($re) {
      header("location:index.php");
    }else{
      echo mysqli_error($conn);
    }
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
    <link href="https://fonts.googleapis.com/css?family=Bitter|Bree+Serif|Lobster|Roboto+Slab|Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <title>Registration</title>
</head>
<body>
<div class="container">
  

      
        
          <div class="modal-header">
            <h5 class="modal-title"><b>Registration Form</b><small><br>(Remeber Your Userid & Password For Login)</small></h5>
            
          </div>
          <div class="modal-body">
            <form action="registration.php" method="post">
              <div class="form-group">
                <label for="username">Your Name</label>
                <input type="text" name="name" placeholder="Your Name" class="form-control">
              </div>
              
              <div class="form-group">
                 <label for="username">User ID</label>
                <input type="text" name="userid" placeholder="User ID" class="form-control">
              </div>
             
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Email ID</label>
                <input type="email" name="mailid" placeholder="Email ID" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Mobile No</label>
                <input type="tel" name="mobileno" placeholder="Mobile No" class="form-control">
              </div>

              <div>
            <input type="submit" name="register" class="btn btn-primary" value="Register">
            
          </div>
            </form>
          </div>
          
      
      
    



</div>





















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>