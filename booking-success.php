<?php
include 'db_conn.php';
$app_id=$_GET['$app_id'];
$sql = "SELECT * FROM appointment_details ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result) {
  $data = $result -> fetch_array(); 


?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>MedZone</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="logo_small.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="all.min.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="fa fa-envelope" style="font-size:15px"></i>support_medzone@gmail.com</a></li>
						<li class="list-inline-item"><i class="fas fa-map-marker-alt"></i> &nbsp; Mumbai, Maharashtra </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4"> 9823450815						</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="MedZone.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
          <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.html">Departments</a></li>
						<li><a class="dropdown-item" href="department-single.html">Common Symptoms</a></li>
					</ul>
			  	</li>
<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="search.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Registration</a></li>
						<li><a class="dropdown-item" href="main_dash.html">Doctor Dashboard</a></li>
                        <li><a class="dropdown-item" href="doc_prof_settings.html">Profile Settings</a></li>
                        <li><a class="dropdown-item" href="doc_login.html">Doctor Login</a></li>
					</ul>
			  	</li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patients <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="patient-list.html">Patient list</a></li>
						<li><a class="dropdown-item" href="pat_prof_set.html">Profile Settings</a></li>
                        <li><a class="dropdown-item" href="login.html">Patient login</a></li>
					</ul>
			  	</li>

			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Health and Nutrition</a></li>
					</ul>
			  	</li>
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="contact.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item" href="appointment.html">Appointment</a></li>
						<li><a class="dropdown-item" href="contact.html">Contact</a></li>
						<li><a class="dropdown-item" href="change-password.html">Change Password</a></li>
						<li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
						<li><a class="dropdown-item" href="logout.php">logout</a></li>
					</ul>
			  	</li>
			    
			</ul>
		  </div>
		</div>
	</nav>
</header>
<!-- /Header -->
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Booking</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content success-page-cont">
    <div class="container-fluid">
    
        <div class="row justify-content-center">
            <div class="col-lg-6">
            
                <!-- Success Card -->
                <div class="card success-card">
                    <div class="card-body">
                        <div class="success-cont">
                            <i class="fas fa-check"></i>
                            <h3>Appointment booked Successfully!</h3>
							
                            <p>Appointment booked for <strong> <?php echo $data['first_name']; ?></strong><strong> <?php echo $data['last_name']; ?></strong><br> on <strong><?php echo $data['appointment_date']; ?><br>
							 <?php echo $data['appointment_time']; ?></strong> <br> with <strong><?php echo $data['doctors']; ?><br></p>
							<h3>Check your registered email id in some time for confirmation</h3>
                            <a href="contact.html" class="btn btn-primary view-inv-btn">Contact Us </a> &nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <a href="invoice-view.html" class="btn btn-primary view-inv-btn">View Invoice</a> &nbsp;&nbsp;&nbsp;&nbsp; -->
							<a href="index.html" class = "btn btn-primary view-inv-btn">Back to home page</a>
							
                        </div>
                    </div>
                </div>
                <!-- /Success Card -->
                
            </div>
        </div>
        
    </div>
</div>		
<!-- /Page Content -->

<!-- Main jQuery -->
<script src="jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="popper.js"></script>
<script src="bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php  }?>