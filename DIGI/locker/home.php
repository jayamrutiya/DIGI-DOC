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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Documents</title>

	<style type="text/css">
		
	*{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    a{
      text-decoration: none;
      outline: none;
    }
    .local{
    	position: fixed;
    	bottom: 0;
    	width: 100%;
    }
    .footer-main-div{
      width: 100%;
      height: auto;
      margin: auto;
      background: #272727;
      padding: 20px 0px;
    }
    .footer-social-icons{
      width: 100%
      height auto;
      margin: auto;
    }
    .footer-social-icons ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-social-icons ul li{
      display: inline-block;
      width: 50px;
      height: 50px;
      margin: 0px 10px;
      border-radius: 100%;
      /*background-color: #32CD32;*/
      background-color: #f76b37;
    }
    .footer-social-icons ul li a{
      color: #272727;
      font-size: 25px;
      display: block;
    }
    .footer-social-icons ul li a i{
      line-height: 50px;
    }
    .footer-menu-one{
      width: 100%;
      height: auto;
      margin: auto;
    }
    .footer-menu-one{
      margin: 0px;
      padding: 0px;
      text-align: center;
      margin-top: 20px;
    }
    .footer-menu-one ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-menu-one ul li{
      display: inline-block;
      margin: 0px 20px;
    }
    .footer-menu-one ul li a{
      font-family: arial;
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
    }
    .footer-bottom{
      width: 100%;
      height: auto;
      margin: auto;
      background: #32CD32;
      padding: 5px;
    }
    .footer-bottom p{
      font-family: arial;
      font-size: 14px;
      text-align: center;
      color: #fff;
      font-weight: 600; 
      letter-spacing: 1px;
    }
    /*a{
      margin-bottom: 10px;
      font-weight: 500;
    }*/
    
	.footer-social-icons ul li:hover{
      display: inline-block;
      width: 50px;
      height: 50px;
      margin: 0px 10px;
      border-radius: 100%;
      /*background-color: #32CD32;*/
      /*background-color: #f76b37;*/
      background-color: #3b5998;
    }
    .footer-social-icons ul li a:hover{
      color: #fff;
    }
    .locallocal a{
    	position: relative;
    	font-size: 20px;
    	color: white;
    	top: 170;
    	left: 300;
    	margin-left: 100;
    	background-color: #0000ff8c;
    	padding: 10px 20px;
    	border-radius: 10px;
    	text-decoration: none;
    }
    .locallocal a:hover{
    	background-color: blue;
    }

	</style>
</head>
<body>

<div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="img/logo.png" class="mb-2 mr-2" style="height: 30px; width: auto;">Digi-Doc</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a href="../home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="../enroll.php" class="nav-link">Enroll</a>
        </li>
        <li class="nav-item">
          <a href="../update.php" class="nav-link">Update</a>
        </li>
        <li class="nav-item">
          <a href="../about.php" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="home.php" class="nav-link">Locker</a>
        </li>
         <li class="nav-item">
          <a href="../logout.php" class="nav-link">LogOut</a>
        </li>
        	
      </ul>
      </div>
    </div>
    </nav>
  </div>


	<div class="locallocal">
		
				<a href="and.php"><b>Add New Documents</b></a>
			
				<a href="dd.php"><b>Download Documents</b></a>
			
	</div>










<div class="local">
<div class="footer-main-div">
    
    <div class="footer-social-icons">
      <ul>
        <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/login" target="blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://vimeo.com/log_in?ssl=0&iframe=0&popup=0&player=0&product_id=0&redirect=%2Fupgrade&upload_iframe=0&activate=0" target="blank"><i class="fa fa-vimeo"></i></a></li>
        <li><a href="https://www.linkedin.com/uas/login?trk=guest_homepage-basic_nav-header-signin" target="blank"><i class="fa fa-linkedin"></i></a></li>
      </ul>

    </div>

    <div class="footer-menu-one">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
         <li><a data-toggle="modal" data-target="#footer_services" href="">Services</a></li>
        <li><a data-toggle="modal" data-target="#footer_contact" href="">Contact us</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <p>Email ID: docdigi9@gmail.com<br>Contact no: +91 94 093 30900, +91 94 265 91154</p>
  </div>
</div>

<div class="modal" id="footer_services">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Services</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" style="padding: 30px 30px 5px 30px;" align="justify">
            <p>User can apply for new aadhar, birth certificate and marriage certiicate
	application to Update in certifiates like name, contact number, address, email address etc can be applied to this platform</p>
	<p>Digi-locker provides the online storage to keep soft copy of the documents of a particular user.</p>
          </div>
          <div align="center" class="mb-4">
          	<button class="btn btn-warning text-light" data-dismiss="modal">Okay</button>
          </div>
          
        </div>
      </div>
    </div>

 <div class="modal" id="footer_contact">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contact</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body pr-4" style="padding: 30px 30px 5px 30px;" align="justify">
           <p>Email ID: docdigi9@gmail.com</p>
		   <p>Contact Number: +91 94 093 30900, +91 94 265 91154 (Timings: 8:00 AM to 6:00 PM)</p>
		  </div>
          <div align="center" class="mb-4">
          	<button class="btn btn-danger text-light" data-dismiss="modal">Okay</button>
          </div>
          
        </div>
      </div>
    </div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>