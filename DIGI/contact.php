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
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Contact Us</title>
<body id="contact_body">
  <div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">Digi-Doc</a>
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
          <a href="contact.php" class="nav-link">Contact</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"  data-toggle="modal" data-target="#applicantlogin">Locker</a>
        </li>
         <li class="nav-item">
          <a href="logout.php" class="nav-link">LogOut</a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Login</a>
            <div class="dropdown-menu">
              <div class="text-center"><label style="font-size: 18px;"><u>Login Type</u></label></div>
              <div>
                <button class="btn btn-info mb-2 ml-3" data-toggle="modal" data-target="#supervisorlogin">&nbsp&nbspSupervisor&nbsp&nbsp</button>
                <button class="btn btn-success mb-2 ml-3" data-toggle="modal" data-target="#applicantlogin">&nbsp&nbsp&nbspApplicant&nbsp&nbsp&nbsp</button>
              </div>
            </div>
        </li> -->
      </ul>
      </div>
    </div>
    </nav>
  </div>


	<div id="contact" class="mt-5">
		<div class="container-fluid">
			<nav class="navbar justify-content-center">
				<h1 class="text-dark">Contact</h1>
			</nav>
		</div>
			<div class="container">
			<div class="p-1 d-flex row-hl"><h2>Feedback Form</h2></div>
				<div class="container">
				<form class="">
					<div class="form-group col-sm-8">
                		<label for="name">Name</label>
                		<input type="text" id="name" class="form-control" placeholder="Enter name">
           			 </div>
					<div class="form-group col-sm-8">
                		<label for="email">Email address</label>
                		<input type="email" id="email" class="form-control" placeholder="Enter email">
                		<small class="form-text text-muted">Your email will not be shared with anyone</small>
            		</div>
					<div class="form-group col-sm-6">
                		<label for="message">Message</label>
                		<textarea id="message" rows="10" class="form-control"></textarea>
           			</div>
					
					<div class="input-group">
						<button class="btn btn-secondary" type="button">Submit</button>
					</div>
				</form>
				</div>
			</div>
			</div>

      <section>

  <footer class="bg-dark mt-5">
    <div class="container-fluid p-5">
      <div class="container">
      <div class="form-row">  
          <div class="form-group col-3 text-light">
            <div style="font-family: Lato; border-color: #343a40;" class="text-muted card bg-dark">
              <div class="card-caption" style="background-color: #343a40; font-size: 22px;">What is Digi-Doc</div>
              <div class="card-body" style="background-color: #343a40;"><p>Digi-Doc is a web national level Platform where one can apply for
                  new Aadhar, Birth certificate or Marriage Certificate. The applicant can apply online and 
                  do the process of particular untill the final verification of documents.</p></div>
            </div>
         </div>  
         <div class="form-group col-3 bg-success">
            <div><a href="#enroll.html" class="text-muted">enroll</a></div>
            <div><a href="#update.html" class="text-muted">update</a></div>    
            <div><a href="#update.html" class="text-muted">update</a></div>    
         </div>
         <div class="form-group col-3 bg-primary">
            <div><a href="#enroll.html" class="text-muted">enroll</a></div>
            <div><a href="#update.html" class="text-muted">update</a></div>    
            <div><a href="#update.html" class="text-muted">update</a></div>    
         </div>
         <div class="form-group col-3 bg-danger">
            <div><a href="#enroll.html" class="text-muted">enroll</a></div>
            <div><a href="#update.html" class="text-muted">update</a></div>    
            <div><a href="#update.html" class="text-muted">update</a></div>    
         </div>
       </div>
      </div>
    </div>  
  </footer>

</section>
<!-- Supervisor login form starts from here -->

 <!-- <div class="modal" id="supervisorlogin">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Supervisor Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="username">User ID</label>
                <input type="text" placeholder="User ID" class="form-control">
              </div>
              <div class="container">
              <div class="form-group">
                <div class="form-row">
                  <input type="radio" name="supervisortype" required><label>&nbspAadhar Supervisor&nbsp&nbsp</label>
                </div>
                <div class="form-row">
                  <input type="radio" name="supervisortype" required><label>&nbspBirth Certificate Supervisor&nbsp&nbsp</label>
                </div>
                <div class="form-row">
                  <input type="radio" name="supervisortype" required><label>&nbspMarriage Certificate Supervisor</label>
                </div>
              </div>
             </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" class="form-control">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" data-dismiss="modal">Login</button>
          </div>
        </div>
      </div>
    </div> -->


    <!-- Applicant login form starts from here -->

 <!-- <div class="modal" id="applicantlogin">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Applicant Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="username">Application Number</label>
                <input type="text" placeholder="Username" class="form-control">
              </div>
              <div class="container">
              <div class="form-group">
                <div class="form-row">
                  <input type="radio" name="applicanttype" required><label>&nbsp&nbspAadhar Login</label>
                </div>
                <div class="form-row">
                  <input type="radio" name="applicanttype" required><label>&nbsp&nbspLogin for Birth Certificate</label>
                </div>
                <div class="form-row">
                  <input type="radio" name="applicanttype" required><label>&nbsp&nbspLogin for Marriage Certificate</label>
                </div>
              </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Mobile Number" class="form-control">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" data-dismiss="modal">Login</button>
          </div>
        </div>
      </div>
    </div> -->



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>