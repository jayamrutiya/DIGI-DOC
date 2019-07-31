<?php

session_start();
//echo $_SESSION['username'];
if (!$_SESSION['username']) {
  header("location:index.php");
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
	<title>Digi-Doc</title>

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
  </style>




</head>
<body id="home_body">
	
  <!-- navbar part -->
  <div>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<a href="#home" class="navbar-brand"><img src="img/logo.png" class="mb-2 mr-2" style="height: 30px; width: auto;">Digi-Doc</a>
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

	<div class="row">
        	<div>

        	<div id="slider" class="carousel slide mb-5" data-ride="carousel">
    	      	<ol class="carousel-indicators">
            		<li class="active" data-target="#slider3" data-slide-to="0"></li>
            		<li data-target="#slider" data-slide-to="1"></li>
            		<li data-target="#slider" data-slide-to="2"></li>
            		<li data-target="#slider" data-slide-to="3"></li>
            		<li data-target="#slider" data-slide-to="4"></li>
            		<li data-target="#slider" data-slide-to="5"></li>
          		</ol>

    	      	<div class="carousel-inner" role="listbox">
	    	    
	    	    <div class="carousel-item active">
            		  <a href="#"><img class="d-block" src="img/DigitalIndiaLogo.png" alt="First Slide" height="550" width="1370">
            			<div class="carousel-caption d-none d-md-block">
                			<h3>Coffee</h3>
                				<p>This is the First Slider with Coffee Picture</p>
              			</div></a>
            	</div>

            	<div class="carousel-item">
             	 	<a href="#"><img class="d-block" src="img/T2018100255179.jpg" alt="Second Slide" height="550px" width="1370px">
            			<div class="carousel-caption d-none d-md-block">
                			<h3>Art</h3>
                				<p>This is the Second Slider with the Picture of Art</p>
              			</div></a>
            	</div>

           		<div class="carousel-item">
              		<a href="#"><img class="d-block" src="img/T2018100255184.jpg" alt="Third Slide" height="550px" width="1370px">
              			<div class="carousel-caption d-none d-md-block">
                			<h3>Sofas</h3>
                				<p>This is the Third Slider with picture of two well places sofas</p>
              			</div></a>
            	</div>

            	<div class="carousel-item">
              		<a href="#"><img class="d-block" src="img/T2018100255175.jpg" alt="Fourth Slide" height="550px" width="1370px">
              			<div class="carousel-caption d-none d-md-block">
                			<h3>Color</h3>
                				<p>This is the Fourth Slider with picture of colors</p>
              			</div></a>
            	</div>

            	<div class="carousel-item">
              		<a><img class="d-block" src="img/aadhar-card-correction-form.png" alt="Fifth Slide" height="550px" width="1370px">
              			<div class="carousel-caption d-none d-md-block">
                				<h3 class="text-dark">book</h3>
                				<p class="text-dark">This is the Third Slider with picture of book</p>
              			</div></a>
            	</div>

            	<div class="carousel-item">
              		<a href="#"><img class="d-block" src="img/Government-schemes-in-india-min-1.jpg" alt="Sixth Slide" height="550px" width="1370px">
              			<div class="carousel-caption d-none d-md-block">
                			<h3 class="text-dark">Flower</h3>
                				<p class="text-dark">This is the Third Slider with beautiful flowers</p>
              			</div></a>
            	</div>
          </div>
          <a href="#slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>		
        	</div>
     	</div>
     </div>
   </div>


  <section id="sub"> 
	<div class="container col-9">
		<div style="padding-left: 20px;"><h3 class="pt-5"><u>Generate new Aadhar, Birth and marriage Certificate</u></h3></div>
		<div class="container-fluid mt-4 applydoc">
		<ul class="list-group">

			<div class="card mb-3">
			<div class=card-header style="background-image : linear-gradient(to right, orange, white);"><a href="enroll.php" class="text-white"><h4>Apply for New Aadhar</h4></a></div>
				<div class="pt-3 pb-3 pl-5"  style="background-image: linear-gradient(rgb(255,255,255), rgb(150,193,21)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p class="text-success">Fill the Aadhar Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="enroll.php" class="btn btn-success">Aadhar Form</a></div>
				</div>
			</div>

			<div class="card mb-3">
			<div class=card-header style="background-image: linear-gradient(to left, rgb(255,255,255), rgba(163,6,0,0.7));"><a href="enroll.php" class="text-white"><h4>Apply for New Birth Certificate</h4></a></div>
				<div class="pt-3 pb-3 pl-5" style="background-image: linear-gradient(rgb(255,255,255), rgba(251,127,125,0.77)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p class="text-danger">Fill the Birth Certificate Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="enroll.php" class="btn btn-danger">Birth Certificate Form</a></div>
				</div>
			</div>

			<div class="card mb-3">
			<div class=card-header style="background-image: linear-gradient(to left, rgb(255,255,255), rgba(2,79,139,0.9));"><a href="enroll.php"  class="text-white"><h4>Apply for Marriage Certificate</h4></a></div>
				<div class="pt-3 pb-3 pl-5"  style="background-image: linear-gradient(rgb(255,255,255), rgb(224,158,222)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p style="color: #C631DC;">Fill the Marriage Certificate Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="enroll.php" class="btn text-white" style="background-color: #C631DC">Marriage Certificate Form</a></div>
				</div>
			</div>
		</ul>
	</div>


	<h3 class="pt-5"><u>Edit new Aadhar, Birth and marriage Certificate</u></h3>
		<div class="container-fluid mt-4">
		<ul class="list-group">
			
			<div class="card mb-3">
			<div class=card-header style="background-image : linear-gradient(to right, orange, white);"><a href="update.php" class="text-white"><h4>Correction to Aadhar Application</h4></a></div>
				<div class="pt-3 pb-3 pl-5" style="background-image: linear-gradient(rgb(255,255,255), rgb(150,193,21)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p class="text-muted">Fill the Aadhar Correction Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="update.php" class="btn btn-success">Aadhar Correction Form</a></div>
				</div>
			</div>

			<div class="card mb-3">
			<div class=card-header style="background-image: linear-gradient(to left, rgb(255,255,255), rgba(163,6,0,0.7));"><a href="update.php" class="text-white"><h4>Correction to application of Birth certificate</h4></a></div>
				<div class="pt-3 pb-3 pl-5" style="background-image: linear-gradient(rgb(255,255,255), rgba(251,127,125,0.77)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p class="text-danger">Fill the Birth Certificate correction Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="update.php" class="btn btn-danger">Correction Form for birth Certificate</a></div>
				</div>
			</div>

			<div class="card mb-3">
			<div class=card-header style="background-image: linear-gradient(to left, rgb(255,255,255), rgba(2,79,139,0.9));"><a href="update.php"  class="text-white"><h4>Correction to application of Marriage Certificate</h4></a></div>
				<div class="pt-3 pb-3 pl-5" style="background-image: linear-gradient(rgb(255,255,255), rgb(224,158,222)); border-radius: 18px;">
					<div class="pt-1 pl-1 d-flex row-hl"><p style="color: #C631DC;">Fill the Marriage Certificate correction Form</p></div>
					<div class="pt-1 pl-1 d-flex row-hl"><a href="update.php" class="btn text-white" style="background-color: #C631DC">Correction Form for Marriage Certificate</a></div>
				</div>
			</div>
			</ul>
		</div>
		</div>
</section>

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
    <p>Email ID: docdigi9@gmail.com<br>
    Contact no: +91 94 093 30900, +91 94 265 91154</p>
  </div>


<!-- services -->


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



    <!-- contact us -->




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