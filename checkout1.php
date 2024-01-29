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

$sql = "INSERT INTO `checkout` 
(`id`, `f_name`, `l_name`, `email`, 
`mobile`, `card_name`, `card_num`, `exp_m`,
 `exp_y`, `cvv`, `created_at`)
  VALUES (NULL, '".$_POST['f_name']."', 
  '".$_POST['l_name']."', '".$_POST['email']."',
   '".$_POST['mobile']."', '".$_POST['card_name']."', 
   '".$_POST['card_num']."', '".$_POST['exp_m']."', 
   ".$_POST['exp_y'].", '".$_POST['cvv']."', null)";

   if ($conn->query($sql) === TRUE) {
    $app_id= $conn->insert_id;
    echo "New record created successfully".$app_id;
    $url = 'booking-success.php?app_id='.$app_id;
    header("Location: $url");
  die();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
  $conn->close();
  
  ?>