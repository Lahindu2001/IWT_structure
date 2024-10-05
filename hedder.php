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
        margin-right: 5px;
      
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
    <a href="HomePage.php"><img src="src/asserts/images/logo.png"></a>
      <a href="HomePage.php">Home</a>
      <div class="plan-section">
        <button id="planBtn">Insurance Plans</button>
        <div class="plan-category">
          <a href="emargency.php">Emergency Coverage</a>
          <a href="completePlan.php">Complete Coverage</a>
          <a href="Famillyinone.php">Family all-in-one</a>
          <a href="ElderPlan.php">Elder Citizense</a>
        </div>

      </div>
      <a href="#">About Us</a>
      <a href="24assi.php">Contact Us</a>
      <a href="FAQ_PAGE.php">FAQ</a>
      <?php
            session_start();
            require 'config.php';

            // Check if the user is logged in
            if (isset($_SESSION['email']) && isset($_SESSION['name'])) {
              // Display the name and email
              echo "<div class='user_name'>
                      <p>WELCOME, <a href='#'>". htmlspecialchars($_SESSION['name']) ."<br>" .htmlspecialchars($_SESSION['email'])."</p</a>>
                    </div>";
              
              echo "<form action='adminlogout.php' method='POST'>
                      <button id='loginBtn' name='Adminlogout' type='submit'>Logout</button>
                    </form>";
          } else {
                echo "<form action='login.php' method='POST'>
                        <button id='loginBtn' type='submit'>Sign In</button>
                      </form>";

                echo "<form action='signup.php' method='GET'>
                        <button id='loginBtn' type='submit'>Sign Up</button>
                      </form>";
            }
            ?>
      </div>
    </div>
  </nav>

  
</body>

</html>