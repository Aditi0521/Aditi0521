<?php
include 'db_conn.php';
// $app_id=$_GET['app_id'];
$sql = "SELECT * FROM appointment_details WHERE doctors ='Dr.Indarjeet Uppal' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result) {
  $data = $result -> fetch_array(); 
    // print_r($row);
    //accessing particular column
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
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="search.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Registration</a></li>
						<li><a class="dropdown-item" href="main_dash.html">Doctor Dashboard</a></li>
                        <li><a class="dropdown-item" href="doc_prof_settings.html">Profile Settings</a></li>
                        
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
						<li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="doc1.jpeg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Indarjeet Uppal</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">Dermatologist</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="doc_dash1.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="index.html">
													<i class="fas fa-calendar-check"></i>
													<span>HomePage</span>
												</a>
											</li>
										
											<li>
												<a href="doc_prof_settings.html">
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
												<a href="logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
<br><br>
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4"> Appoinment History</h4>
									<div class="appointment-tab">
									
										<!-- Appointment Tab -->
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
											<li class="nav-item">
												<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#previous-appointments" data-toggle="tab">Previous</a>
											</li> 
										</ul>
										<!-- /Appointment Tab -->
										
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appointment Date</th>
																		<th>Purpose</th>
																		
																		<th class="text-center">Paid Amount</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	
																
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<!-- <a href="agam.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="agam.jpeg" alt="User Image"></a> -->
																				<a href="agam.html"><?php echo $data['first_name']; ?>&nbsp<?php echo $data['last_name']; ?><span>#P107</span></a>
																			</h2>
																		</td>
																		<td><?php echo $data['appointment_date']; ?><span class="d-block text-info"><?php echo $data['appointment_time']; ?></span></td>
																		<td><?php echo $data['common_symptoms']; ?></td>
																		
																		<td class="text-center">Rs. 800</td>
																		<td class="text-right">
																			<div class="table-action">
																				<a href="agam.php" class="btn btn-sm bg-info-light">
																					<i class="far fa-eye"></i> View
																				</a>
																				
																				<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																					<i class="fas fa-check"></i> Accept
																				</a>
																				<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																					<i class="fas fa-times"></i> Cancel
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
											<!-- /Upcoming Appointment Tab -->
									   
											<!-- Today Appointment Tab -->
											<div class="tab-pane" id="previous-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Purpose</th>
																		<th>Paid Amount</th>
																		
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	
                                                                    <tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="agam.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="agam.jpeg" alt="User Image"></a>
																				<a href="agam.html">Agam Singh<span>#P107</span></a>
																			</h2>
																		</td>
																		<td>29 Sept 2022<span class="d-block text-info"></span></td>
																		<td>Skin Allergy</td>
																		
																		<td class="text-center">Rs. 900</td>
																		<td class="text-right">
																			
																		</td>
																	</tr>
                                  
										</div>
									</div>
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
<script src="script.js"></script>
<script src="javascripts/Sensor.js"></script>
<script src="javascripts/sidebar.js"></script>
</body>
</html>
<?php }?>