<?php
require("config.php");
$db_name="members";
$sql = "CREATE DATABASE IF NOT EXISTS ".$db_name;
if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$db_selected = mysqli_select_db($conn, $db_name);
if(!$db_selected){
	die("Can not use that db".mysqli_error());
}
include("makeTables.php");
?>