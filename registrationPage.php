<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="finalProjectStyle.css">
    </head>
    <body>
        <div id="formdiv">
        <form id="style-13" id="registerform" action="registeredPage.php" method = "POST">
            <h1>Register Below</h1>
            <input type="button" value="Register with Facebook" id="fb">
            <input type="button" value="Register with Google" id="google">
            
            <p>First Name: </p><input type="text" name="first_name">
            <p>Last Name: </p><input type="text" name="last_name">
            <p>Username: </p><input type="text" name="user_name">
            <p>E-Mail: </p><input type="email" name="email">
            <p>Gender: </p><input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female
            <p>Role: </p><input type="radio" name="role" value="s">Student<input type="radio" name="role" value="t">Teacher
            <p>Date of Birth: </p><input type="date" name="birth_date">
            <p>Password: </p><input type="password" name="password_1">
            <p>Enter your password again: </p><input type="password" name="password_2">
            
            <input type="submit">
            <a href="index.php" id="registerlink">Already have an account? Login here!</a>
        </form>
        <div class="force-overflow"></div>
        </div>
    </body>
</html>