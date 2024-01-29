<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = 'userinfo';
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected <pre>"; print_r($_POST);  

$sql = "INSERT INTO `doc-further-details` 
(`id`, `gender`, `dob`, `about`, 
`clinic_name`, `clinic_address`, `clinic_image`,`address_1`, `address_2`,
 `city`, `state`, `country`,`code`,`services`,`specialization`, 
 `degree`,`college`,`year_passed`,`hospital`,`from_year`,`to_year`,`designation`,`registration`,`year`,`created_at`)
  VALUES (NULL, '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['about']."',
   '".$_POST['clinic_name']."', '".$_POST['clinic_address']."', '".$_POST['clinic_image']."',
   '".$_POST['address_1']."', '".$_POST['address_2']."', '".$_POST['city']."','".$_POST['state']."',
   '".$_POST['country']."','".$_POST['code']."','".$_POST['services']."',
   '".$_POST['specialization']."', '".$_POST['degree']."','".$_POST['college']."','".$_POST['year_passed']."',
   '".$_POST['hospital']."','".$_POST['from_year']."','".$_POST['to_year']."',
   '".$_POST['designation']."','".$_POST['registration']."','".$_POST['year']."', null)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: index.html');
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 