<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="finalProjectStyle.css">
    </head>
    <body>
        <div id="formdiv">
        <form id="loginform" action="signedInPage.php" method = "POST">
            <h1>Login Below</h1>
            <input type="button" value="Login with Facebook" id="fb">
            <input type="button" value="Login with Google" id="google">
            
            <p>Username/E-Mail: </p><input type="text" name="username_email">
            <p>Password: </p><input type="password" name="password">
            
            <input type="submit">
            <a href="registrationPage.php" id="registerlink">Don't have an account? Register here!</a>
        </form>
        </div>
    </body>
</html>