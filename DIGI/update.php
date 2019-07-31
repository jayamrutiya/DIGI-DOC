<?php

session_start();
//echo $_SESSION['username'];
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
	  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Update</title>




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

    a{
      margin-bottom: 10px;
      font-weight: 500;
    }
    #Aadharupdation a{
      display: inline-block;
    }
    #update_aadhar:hover{
      background-color: #f76b37;
      color: white;
      border: none;
    }
    #aadhar_how_to:hover{
      background-color: #32CD32;
      color: white;
      border: none;
      cursor: pointer;
    }
    #update_birth:hover{
      background-color: #a30600b3;
      color: white;
      border: none;
    }
    #birth_how_to:hover{
      background-color: #26a4d4;
      color: white;
      border: none;
      cursor: pointer;
    }
    #update_mrg:hover{
      background-color: #024f8b;
      color: white;
      border: none;
    }
    #mrg_how_to:hover{
      background-color:  #f38585;
      color: white;
      border: none;
      cursor: pointer;
    }
    #Aadharupdation a{
  position: relative;
  margin: 20 20 20;
  padding: 10px 10px;
  text-decoration: none;
  border: 1px solid #000;
  /*border-radius: 15px;*/
  display: inline-block;
  color: #000;
  transition: 0.25s;
  transform: translateY(-40px);
  opacity: 0;
  visibility: hidden;
}
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
#Aadharupdation:hover a{
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}
  </style>
</head>
<body id="update_body">
	
	 <div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="img/logo.png" class="mb-2 mr-2" style="height: 30px; width: auto;">Digi-Doc</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a href="home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="enroll.php" class="nav-link">Enroll</a>
        </li>
        <li class="nav-item">
          <a href="update.php" class="nav-link">Update</a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="locker/home.php" class="nav-link">Locker</a>
        </li>
         <li class="nav-item">
          <a href="logout.php" class="nav-link">LogOut</a>
        </li>
        
      </ul>
      </div>
    </div>
    </nav>
  </div>
  <br>
  <br>
<div id="update">
    <div class="container-fluid">
      <nav class="navbar mt-3 justify-content-center" id="update">    
        <h2 class="text-dark"><b><u>Update</u></b></h2>
      </nav>
    </div>

  <div style="margin-top:40px;"></div>

    <div class="container mt-3 col-10">


      <div class="form-row" id="Aadharupdation">
        <div class="form-group" >
          <!-- <h2>Updation of Aadhar</h2> -->
          <img src="img/a3.png" class="card-img-top" style="width: auto; height: 300px; border: 1px solid #000;">
        </div> 
        <div class="form-group col m-5">
          <h2>Updation of Aadhar</h2>
          <ul style="margin-left: 10px;" class="mt-3">
            <p>User can update his/her application</p>
            <p>User is given the informative mail for application correction</p>
            <a href="aadharupdate.php" id="update_aadhar" class="mt-3">Update Aadhar</a>
           <a data-toggle="modal" data-target="#aadahrupdateinfo" id="aadhar_how_to" class="ml-3">How to ...</a>
          </ul>
        </div>
      </div>

      <div class="form-row" id="Aadharupdation">
        <div class="form-group col m-5">
          <h2>Updation of Birth Certificate</h2>
          <ul style="margin-left: 10px;" class="mt-3">
            <p>User can update his/her application of Birth Certificate.</p>
            <p>User is given the informative mail for application correction.</p>
            <a href="birthupdate.php" id="update_birth" class="mt-3">Update Birth Certificate</a>
           <a data-toggle="modal" data-target="#birthupdateinfo" id="birth_how_to" class="ml-3">How to ...</a>
          </ul>
        </div>
        <div class="form-group" >
          <img src="img/Baby.png" class="card-img-top" style="width: auto; height: 300px; border: 1px solid #000;">
        </div> 
      </div>

     

      <div class="form-row" id="Aadharupdation">
        <div class="form-group">
          <img src="img/mrg.png" class="card-img-top" style="width: auto; height: 300px; border: 1px solid #000; margin: 5px;">
        </div> 
        <div class="form-group col m-5">
          <h2>Updation of Marriage Certificate</h2>
          <ul style="margin-left: 10px;"  class="mt-3">
            <p>User can update his/her application of Marriage Certificate.</p>
            <p>User is given the informative mail for application correction.</p>
            <a href="marriageupdate.php" id="update_mrg" class="mt-3">Update Marriage Cerificate</a>
           <a  data-toggle="modal" data-target="#marriageupdateinfo" id="mrg_how_to" class="ml-3">How to ...</a>
          </ul>
        </div>
        
      </div>
    </div>
  </div>




<!-- Aadhar update info starts from here -->

 <div class="modal" id="aadahrupdateinfo">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">How to Update Aadhar Certificate</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body pr-4" style="padding: 30px 30px 5px 30px;" align="justify">
            <p>Open the filled Form.</p>
            <p>Correct the details as metioned in the comment box</p>
            <p>User can ask or comment if he/she faces any trouble during correction of appliation</P>
            <p>Once the application is submitted after correction, same process of application veriication and alert mail to the given email address will go</p>
          </div>
          <div align="center" class="mb-4">
            <button class="btn btn-secondary text-light" data-dismiss="modal">Okay</button>
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal" id="birthupdateinfo">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">How to Update Birth Certificate</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body pr-4" style="padding: 30px 30px 5px 30px;" align="justify">
            <p>Open the filled Form.</p>
<p>Correct the details as metioned in the comment box</p>
<p>User can ask or comment if he/she faces any trouble during correction of appliation</P>
<p>Once the application is submitted after correction, same process of application veriication and alert mail to the given email address will go</p>
          </div>
          <div align="center" class="mb-4">
            <button class="btn btn-secondary text-light" data-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="marriageupdateinfo">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">How to Update Marriage Certificate</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body pr-4" style="padding: 30px 30px 5px 30px;" align="justify">
            <p>Open the filled Form.</p>
<p>Correct the details as metioned in the comment box</p>
<p>User can ask or comment if he/she faces any trouble during correction of appliation</P>
<p>Once the application is submitted after correction, same process of application veriication and alert mail to the given email address will go</p>
          </div>
          <div align="center" class="mb-4">
            <button class="btn btn-secondary text-light" data-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>

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
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
         <li><a data-toggle="modal" data-target="#footer_services" href="">Services</a></li>
        <li><a data-toggle="modal" data-target="#footer_contact" href="">Contact us</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <p>Email ID: docdigi9@gmail.com<br>Contact no: +91 94 093 30900, +91 94 265 91154</p>
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