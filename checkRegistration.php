<?php
require("config.php");
$db_name="members";
$db_selected = mysqli_select_db($conn, $db_name);
if(!$db_selected){
    //die("Can not use that db".mysqli_error());
}
include("makeTables.php");

if($_POST["password_1"] != $_POST["password_2"]){
	noMatch();
}
else{
    $sql = "SELECT 1 FROM users WHERE user_name = '".$_POST["user_name"]."' OR email = '".$_POST["email"]."'";
    $result = $conn->query($sql) or die($conn->error);
    if (mysqli_num_rows($result) == 1) {
        exists();
    }
    else
    {
        $sql = "INSERT INTO users(first_name, last_name, user_name, email, gender, roll, password, birth_date, register_date) VALUES ([".$_POST["first_name"]."],[".$_POST["last_name"]."],[".$_POST["user_name"]."],[".$_POST["email"]."],[".$_POST["gender"]."],[".$_POST["role"]."],[".md5($_POST["password_1"])."],[".$_POST["birth_date"]."],[".date("Y-m-d")."])";
        $result = $conn->query($sql)or die($conn->error);
        if ($result != false) {
            redirect();
        }   
    }
}

function exists(){
	echo "Username or e-mail is already taken.";
}

function noMatch(){
	echo "The passwords that you entered do not match.";
}

function redirect(){
	echo "Your account has been registered!";
}

?>