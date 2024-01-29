<?php
include 'db_conn.php';
$app_id=$_GET['app_id'];
$sql = "SELECT * from appointment_details WHERE id= $app_id";
$result = $conn->query($sql);
if ($result) {
  $data = $result -> fetch_array(); 
    // print_r($row);
    //accessing particular column
    // echo $row['doctors']. $row['appointment_date']. $row['appointment_time'];
  
    // $app1_id= $conn->insert_id;
  // echo "New record created successfully".$app_id;
  

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
						
                        <li><a class="dropdown-item" href="doc_prof_settings.html">Profile Settings</a></li>
                        
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
<!-- /User Menu -->

</ul>
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
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Checkout</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">
    <form id="checkout-form" class="checkout-form" method="post" action="checkout1.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card">
                    <div class="card-body">
                    
                        <!-- Checkout Form -->
                        
                        
                            <!-- Personal Information -->
                            <div class="info-widget">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>First Name</label>
                                            <input name="f_name"  type="text" class="form-control" value="<?php echo $data['first_name']; ?> " readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Last Name</label>
                                            <input name="l_name"  type="text" class="form-control" value="<?php echo $data['last_name']; ?>"readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Email</label>
                                            <input name="email" type = "text" class="form-control" value="<?php echo $data['email']; ?>"readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Phone</label>
                                            <input name="mobile" type="tel" class="form-control" pattern="[0-9]{10}" value="<?php echo $data['phone']; ?>"readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="exist-customer">Existing Customer? <a href="login.html">Click here to login</a></div>
                            </div>
                            <!-- /Personal Information -->
                            
                            <div class="payment-widget">
                                <h4 class="card-title">Payment Method</h4>
                                
                                <!-- Credit Card Payment -->
                                <div class="payment-list">
                                    <label class="payment-radio credit-card-option">
                                        <input type="radio" name="radio" checked>
                                        <span class="checkmark"></span>
                                        Debit card / Credit Card
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_name">Name on Card</label>
                                                <input name="card_name"  type="text" class="form-control" placeholder="Full Name of card holder">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_number">Card Number</label>
                                                <input name="card_num"  type="text" class="form-control" placeholder="AAAA/AAAA/AAAA/AAAA">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group card-label">
                                                <label for="expiry_month">Expiry Month</label>
                                                <input name="exp_m"  type="text" class="form-control" placeholder="MM">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group card-label">
                                                <label for="expiry_year">Expiry Year</label>
                                                <input name="exp_y"  type="text" class="form-control" placeholder="YY">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group card-label">
                                                <label for="cvv">CVV</label>
                                                <input type="Password" id="password" name= "password" placeholder="CVV" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Card Payment -->
                                
                                <!-- UPI Payment -->
                                <div class="payment-list">
                                    <label class="payment-radio UPI-option">
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                        UPI
                                    </label>
                                </div>
                                <div class="payment-list">
                                    <label class="payment-radio UPI-option">
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                        Cash Payment
                                    </label>
                                </div>
                                <!-- /UPI Payment -->
                                
                                <!-- Terms Accept -->
                                <div class="terms-accept">
                                    <div class="custom-checkbox">
                                       <input type="checkbox" id="terms_accept">
                                       <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                    </div>
                                </div>
                                <!-- /Terms Accept -->
                                
                                <!-- Submit Section -->
                                <input type="submit" id="Submit" name="Login" class="btn btn-main btn-round-full">
                                <!-- /Submit Section -->
                                
                            </div>
                        </form>
                        <!-- /Checkout Form -->
                        
                    </div>
                </div>
                
            </div>
            
            <div class="col-md-5 col-lg-4 theiaStickySidebar">
            
                <!-- Booking Summary -->
                <div class="card booking-card">
                    <div class="card-header">
                        <h4 class="card-title">Booking Summary</h4>
                    </div>
                    <div class="card-body">
                    
                        <!-- Booking Doctor Info -->
                        <div class="booking-doc-info">
                            
                            <div class="booking-info">
                                <h4><a href="neha_doc_prof.html"> <?php echo $data['doctors']; ?> </a></h4>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">35</span>
                                </div>
                                <div class="clinic-details">
                                    <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</p>
                                </div>
                            </div>
                        </div>
                        <!-- Booking Doctor Info -->
                        
                        <div class="booking-summary">
                            <div class="booking-item-wrap">
                                <ul class="booking-date">
                                    <li>Date <span><?php echo $data['appointment_date']; ?></span></li>
                                    <li>Time <span><?php echo $data['appointment_time']; ?></span></li>
                                </ul>
                                <ul class="booking-fee">
                                    
                                    <li>Booking Fee <span>Rs. 100</span></li>
            
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Summary -->
                
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
<script src="javascripts/Sensor.js"></script>
<script src="javascripts/sidebar.js"></script>
</body>
</html>
<?php } ?>