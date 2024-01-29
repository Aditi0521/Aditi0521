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

$sql = "INSERT INTO `signupdoc` 
(`id`, `f_name`,`l_name`, `email`,`userid`,`password` , 
`mobile`,`medid`, `created_at`)
  VALUES (NULL,'".$_POST['f_name']."','".$_POST['l_name']."', '".$_POST['email']."',
  '".$_POST['userid']."', '".$_POST['password']."','".$_POST['mobile']."',
   '".$_POST['medid']."', null)";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: doc_prof_settings.html');
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 