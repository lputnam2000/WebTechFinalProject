<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$conn = mysqli_connect($db_host,$db_username,$db_password);
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
} 
else{
	//echo "Connected successfully";
}

?>