<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="src/asserts/css/loginstyle.css">
</head>
<body>
    <div class="sqr">
        <img class="image" src="src/asserts/images/logo.png" width="60px" height="60px">
        <h2>Welcome to Your Portal</h2>
        <form action="loginmain.php" method="post">
            <label>Enter Your Email</label> <br>
            <input type="email" name="email" required placeholder="abc@gmail.com"><br>
            <label>Enter Your Password</label> <br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <input type="submit" name="submit" value="Login">
            <a href="reset.php">Forgot your password?</a>
        </form>
    </div>
</body>
</html>

