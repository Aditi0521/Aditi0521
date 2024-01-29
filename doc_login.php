<?php
include 'db_conn.php';
echo "Connected <pre>"; print_r($_POST);


$query = "select * from signupdoc where userid = '". $_POST['userid'] ."' and password = '". $_POST['password'] ."'";
$result = $conn->query($query);

if ($result && mysqli_num_rows($result) > 0) {
	echo "Welcome Back ";
  header('Location: index.html');
}else{
	echo "Patient not found...Please signup";
    header('Location: doctor-single.html');
}

$conn->close();
?>