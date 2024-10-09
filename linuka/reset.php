<!DOCTYPE html>
<head>
    
    <title>password Reset</title>
    <link rel="stylesheet" href="src/asserts/css/resert.css">
</head>
<body>

    <div class="reset">
        <h2>Reset Your Password</h2>
        <P>Please enter your email address to reset your password.</P>

        <form method="POST" action="request.php" onsubmit="return restrictuser()">
            <label for="email" > Enter Your Email </label> <br>

            <input type="email" name="email" id="email" required placeholder="abc@gmail.com" >  <br>

            <input type="submit" name="submit" value="Send request"><br>
    
            </form>
            <a href="login.php">Back to Login</a>

</body>
</html>