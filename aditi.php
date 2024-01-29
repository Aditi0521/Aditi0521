<?php
include 'db_conn.php';
// $app_id=$_GET['app_id'];
$sql = "SELECT * FROM appointment_details WHERE last_name ='Sambrekar' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result) {
  $data = $result -> fetch_array(); 
    // print_r($row);
    // accessing particular column
    // echo $row['doctors']. $row['appointment_date']. $row['appointment_time'];
  


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
						<li><a class="dropdown-item" href="login.html">Logout</a></li>
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            
            <!-- Profile Sidebar -->
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                <div class="profile-sidebar">
                    <div class="widget-profile pro-widget-content">
                        <div class="profile-info-widget">
                            <a href="#" class="booking-doc-img">
                                <img src="img/pat/sania.jpeg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3>Aditi Sambrekar</h3>
                                <div class="patient-details">
                                    <h5><i class="fas fa-birthday-cake"></i> 25 June 2003, 19 years</h5>
                                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <nav class="dashboard-menu">
                            <ul>
                                <li class="active">
                                    <a href="mrudula.html">
                                        <i class="fas fa-columns"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="pat_prof_set.html">
                                        <i class="fas fa-user-cog"></i>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="change-password.html">
                                        <i class="fas fa-lock"></i>
                                        <span>Change Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- / Profile Sidebar -->
            
            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body pt-0">
                    
                        <!-- Tab Menu -->
                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Prescriptions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Medical Records</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pat_billing" data-toggle="tab">Payment History</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Tab Menu -->
                        
                        <!-- Tab Content -->
                        <div class="tab-content pt-0">
                            
                            <!-- Appointment Tab -->
                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Doctor</th>
                                                        <th>Appointment Date</th>
                                                        <th>Booking Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <h2 class="table-avatar">
                                                                
                                                                <a href="doctor-profile.html"><?php echo $data['doctors']; ?><span><?php echo $data['common_symptoms']; ?></span></a>
                                                            </h2>
                                                        </td>
                                                        <td><?php echo $data['appointment_date']; ?> <span class="d-block text-info"><?php echo $data['appointment_time']; ?></span></td>
                                                        <td>3 May 2023</td>
                                                        <td>Rs. 3000</td>
                                        
                                                        <td><span class="badge badge-pill bg-success-light">Confirm</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                
                                                                <a href="doctor-profile.html">Dr. Sanjay Patel <span>Physician</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>3 May 2023 <span class="d-block text-info">7:00 PM</span></td>
                                                        <td>3 May 2023</td>
                                                        <td>Rs. 500</td>
                                        
                                                        <td><span class="badge badge-pill bg-success-light">Confirm</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Appointment Tab -->
                            
                            <!-- Prescription Tab -->
                            <div class="tab-pane fade" id="pat_prescriptions">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Date </th>
                                                        <th>Name</th>									
                                                        <th>Created by </th>
                                                        <th></th>
                                                    </tr>     
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>23 Feb 2023</td>
                                                        <td>Prescription 1</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc14.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Ruchi Verma <span>Orthopedic</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>24 Dec 2022</td>
                                                        <td>Prescription 2</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="2.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Neha Singh <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>3 Nov 2022</td>
                                                        <td>Prescription 3</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Rajesh Gupta<span>Physician</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7 Oct 2022</td>
                                                        <td>Prescription 4</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Pooja Shah <span>Gynecology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>	
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Prescription Tab -->
                                
                            <!-- Medical Records Tab -->
                            <div id="pat_medical_records" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date </th>
                                                        <th>Description</th>
                                                        <th>Attachment</th>
                                                        <th>Created</th>
                                                        <th></th>
                                                    </tr>     
                                                </thead>
                                                <tbody>
                                                
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-101</a></td>
                                                        <td>23 Feb 2023</td>
                                                        <td>Hand Fracture</td>
                                                        <td><a href="#">ortho-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc14.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Ruchi Verma <span>Orthopaedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-102</a></td>
                                                        <td>24 Dec 2022</td>
                                                        <td>Teeth Cleaning</td>
                                                        <td><a href="#">dental-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="2.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Neha Singh <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-103</a></td>
                                                        <td>3 Nov 2022</td>
                                                        <td>Fever</td>
                                                        <td><a href="#">fever-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Rajesh Gupta<span>Physician</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-104</a></td>
                                                        <td>7 Oct 2022</td>
                                                        <td>Period issues</td>
                                                        <td><a href="#">gynac-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Pooja Shah <span>Gynecology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>  	
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Medical Records Tab -->
                            
                            <!-- Billing Tab -->
                            <div id="pat_billing" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Doctor</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">101</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc14.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Ruchi Verma <span>Orthopedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>Rs. 5000</td>
                                                        <td>23 Feb 2023</td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">102</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="2.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Neha Singh <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>Rs. 1500</td>
                                                        <td>24 Dec 2022</td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                       
                                                
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">103</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="doc3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Rajesh Gupta <span>Physician</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>Rs. 400</td>
                                                        <td>3 Nov 2022</td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">104</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="3.jpg" alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Pooja Shah  <span>Gynecology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>Rs. 2000</td>
                                                        <td>3 Oct 2022</td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Billing Tab -->
                            
                        </div>
                        <!-- Tab Content -->
                        
                    </div>
                </div>
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
<script src="javascripts/Sensor.js"></script>
<script src="javascripts/sidebar.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php } ?>