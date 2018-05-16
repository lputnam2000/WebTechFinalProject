<?php
$sql = "CREATE TABLE IF NOT EXISTS Users (
id INT(11) UNSIGNED AUTO_INCREMENT KEY,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(20) NOT NULL,
user_name VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
gender ENUM('M','F'),
roll ENUM('s','t'),
password VARCHAR (20) NOT NULL,
birth_date DATE,
register_date DATE
)";

if ($conn->query($sql) === TRUE) {
    //echo "Table created successfully";
} else {
    //echo "Error creating Table: " . $conn->error;
}