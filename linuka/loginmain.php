<?php

require '../config.php';
  session_start();

  if(isset($_SESSION["email"])) { 
    header("Location: ../hasaranga/Index.php");
    }

$email = $_POST['email'];
$pswd = $_POST['password'];

$sql = "SELECT * FROM userdetail WHERE email = '$email' AND password = '$pswd' And userType='CLIENT'";

$sqli = "SELECT * FROM userdetail WHERE email = '$email' AND password = '$pswd' AND userType = 'ADMIN'";

$result1 = $con->query($sql);
$result2 = $con->query($sqli);


if ($result1->num_rows == 1) {
    $userData = $result1->fetch_assoc();  // Fetch user data
    $_SESSION["name"] = $userData['name'];  // Assuming 'name' is a column in your database
    $_SESSION['email'] = $userData['email'];
    $_SESSION['usertype'] = "CLIENT";
    $_SESSION['userid'] = $userData['id'];  // Assuming 'id' is the user ID column
    
    header('Location: ../hasaranga/Index.php');
    exit();
} 

if ($result2->num_rows == 1) {
    $userData = $result2->fetch_assoc(); // Fetch user data from result
    $_SESSION['name'] = $userData['name']; // Assuming 'name' is a column in your table
    $_SESSION['email'] = $email;
    $_SESSION['usertype'] = "ADMIN";
    $_SESSION['userid'] = $userData['id']; // Assuming 'id' is the user ID column

    header('Location: ../lahindu/in.php');
    exit();
} else {
    
    echo '<h1>Invalid email or password.</h1>';
}


$con   ->close();
?>