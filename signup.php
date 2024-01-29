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

$sql = "INSERT INTO `signup` 
(`id`, `name`, `email`, `password`, 
`mobile`, `created_at`)
  VALUES (NULL, '".$_POST['name']."', 
  '".$_POST['email']."', '".$_POST['password']."',
   '".$_POST['mobile']."', null)";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: login.html');
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 