<!DOCTYPE html>
<head>
    <title>User Login</title>

    <link rel="stylesheet" href="src/asserts/css/loginstyle.css">

    <style> 
        

    </style>
</head>
<body>
<?php  include ('hedder.php') ; ?> 
    <div class="sqr">

        <img class="image" src="src/asserts/images/logo.png" width = "60px" height="60px">

        <h2 >Welcome to Your Portal</h2>

        <form action = "loginmain.php" method ="post">

            <label > Enter Your Email </label> <br>

              <input type="email" name = "email" required placeholder="abc@gmail.com" >  <br>

              <label > Enter Your password </label> <br>

              <input type="password" name = "password" required placeholder="Enter your password" > <br>

              <input type="submit" value="Login">
              <button type="submit" >Login</button>

              <a href="reset.html">Forgot your password</a>

        </form>

    </div>
<?php include('footer.php')
</body>
</html>