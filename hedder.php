<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/asserts/css/hedderfoteer.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
          .user_name{
        float: right;
        margin-top: 10px;
        margin-right: 50px;
        border-radius: 5px;
        border: 1px solid #007bff;
        background-color: #007bff;
    }
    
    .user_name p{
   
        font-weight: bold;
        font-size: 19px;

    }

.ancor a{
  text-decoration: none;

}
</style>
</head>
<body>
<nav>
    <div class="navlinks">
      <img src="src/asserts/images/logo.png">
      <a href="#">Home</a>
      <div class="plan-section">
        <button id="planBtn">Insurance Plans</button>
        <div class="plan-category">
          <a href="#">Emergency Coverage</a>
          <a href="#">Complete Coverage</a>
          <a href="#">Family all-in-one</a>
          <a href="#">Elder Citizense</a>
        </div>

      </div>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
      <?php
              require 'config.php';
              if (isset($_SESSION['email'])) {
                echo "Logged in as: " .($_SESSION['name']) . "<br>";
            } else {
              echo "<form action='adminlogout.php' method='POST'>
               <button id='signinBtn' name='Adminlogout' type='submit' >Sign Out</button> </form>";
          }?>
      <?php  
             require 'config.php';
              session_start();
              if (isset($_SESSION['email']) && $_SESSION['usertype'] === 'CLIENT') {
                  echo "<P> WELCOME ,<br> ". htmlspecialchars($_SESSION['email']) ."</p>";
              } else {
                  header('Location: login.php');
                  exit();
              }        

          ?>     
      </div>
    </div>
  </nav>

  
</body>

</html>