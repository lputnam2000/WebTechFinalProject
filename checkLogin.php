<?php
        require("makeDatabase.php");
        $db_name="members";
        $db_selected = mysqli_select_db($conn, $db_name);
        if(!$db_selected){
            //die("Can not use that db".mysqli_error());
        }
        $sql = "SELECT 1 FROM users WHERE (user_name = '".$_POST["username_email"]."' AND password = '".$_POST["password"]."') OR (email = '".$_POST["username_email"]."' AND password = '".$_POST["password"]."' AND roll = 's')";
        $result = $conn->query($sql) or die($conn->error);
        if (mysqli_num_rows($result) == 1) {
            acceptedStudent();
        }
        $sql = "SELECT 1 FROM users WHERE (user_name = '".$_POST["username_email"]."' AND password = '".$_POST["password"]."') OR (email = '".$_POST["username_email"]."' AND password = '".$_POST["password"]."' AND roll = 't')";
        $result = $conn->query($sql) or die($conn->error);
        if (mysqli_num_rows($result) == 1) {
            acceptedTeacher();
        }
        $sql = "SELECT 1 FROM users WHERE (user_name = '".$_POST["username_email"]."')";
        $result = $conn->query($sql) or die($conn->error);
        if (mysqli_num_rows($result) == 1){
            rejected();
        }
        else{
            unavailable();
        }

        function acceptedTeacher(){
            echo "You have successfully signed in!";
            require("teacherPage.php");
        }
        function acceptedStudent(){
            echo "You have successfully signed in!";
        }
        function rejected(){
            echo "Your username and password are incorrect.";
        }
        function unavailable(){
            echo "Your username is not stored in the system. Please register before signing in.";
        }
        ?>