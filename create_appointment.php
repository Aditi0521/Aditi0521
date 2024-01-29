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

$sql = "INSERT INTO `appointment_details` 
(`id`, `common_symptoms`, `doctors`, `appointment_date`, 
`appointment_time`, `first_name`,`last_name`, `phone`, `email`, `address`,
 `patient_age`, `gender`, `created_at`)
  VALUES (NULL, '".$_POST['common_symptoms']."', 
  '".$_POST['doctor']."', '".$_POST['date']."',
   '".$_POST['time']."', '".$_POST['first_name']."','".$_POST['last_name']."',
   '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['message']."', 
   ".$_POST['age'].", '".$_POST['gender']."', null)";

if ($conn->query($sql) === TRUE) {
  $app_id= $conn->insert_id;
  echo "New record created successfully".$app_id;
  $url = 'checkout.php?app_id='.$app_id;
  header("Location: $url");
die();
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 