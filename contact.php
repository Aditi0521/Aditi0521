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

$sql = "INSERT INTO `queries` (`id`, `full_name`, `email`,
`query_topic`, `phone`, `message`, `created_at`)
 VALUES (NULL, '".$_POST['full_name']."', '".$_POST['email']."',
'".$_POST['query_topic']."', '".$_POST['phone']."',
  '".$_POST['message']."', null)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: contact.html');
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>