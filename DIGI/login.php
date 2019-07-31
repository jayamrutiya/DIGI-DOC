<?php
session_start();
$conn=mysqli_connect('localhost', 'root', '', 'digi');
  // $db=mysql_select_db('digi');
  if(!$conn)
  {
    die("Not ok");
  }
  else
  {
    echo "ok.";
  }

if (isset($_POST['login'])) {
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $q = mysqli_query($conn, "SELECT userid,password FROM login WHERE userid='$userid' AND password='$password'") or die(mysqli_error($conn));
  $data = mysqli_fetch_array($q,MYSQLI_BOTH);
  if ($data>0) {
    
    $_SESSION['username'] = $userid;
    header("location:home.php");
  }else{
    echo "Your data is wrong!";
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
    <link rel="stylesheet" type="text/css" href="style1.css">
  <title>Login</title>
</head>
<body>
  <div id="main">
  <div class="loginBox">
    <img src="user.png" class="user">
    <h2>Log In Here</h2>
    <form action="login.php" method="post">
      <p>User Id</p>
      <input type="text" name="userid" placeholder="Enter UserId">
      <p>Password</p>
      <input type="password" name="password" placeholder="**********">
      <input type="submit" name="login" value="Sign In">
      <a href="registration.php">Register User</a>
    </form>
  </div>
</div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>
</html>