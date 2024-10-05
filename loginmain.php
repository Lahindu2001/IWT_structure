<?php

  require'config.php'; 
  session_start();

  if(isset($_SESSION["email"])) { 
    header("Location:payment.php");
    }

$email = $_POST['email'];
$pswd = $_POST['password'];

$sql = "SELECT * FROM userdetail WHERE email = '$email' AND password = '$pswd' And userType='CLIENT'";

$sqli = "SELECT * FROM userdetail WHERE email = '$email' AND password = '$pswd' AND userType = 'ADMIN'";

$result1 = $con->query($sql);
$result2 = $con->query($sqli);


if ($result1->num_rows == 1) {
    $_SESSION["name"] = $name;
    $_SESSION['email'] = $email;
    $userType = "CLIENT";
    $_SESSION['usertype'] = $userType;
    $_SESSION['userid'] = $userID;
  

    echo "$userID";

    header('Location: client.php');
    exit();
} 

if ($result2->num_rows == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $userData['name'];
    $userType = "ADMIN";
    $_SESSION['usertype'] = $userType;
    header('Location: in.php');
    exit();
} else {
    
    echo '<h1>Invalid email or password.</h1>';
}


$con   ->close();
?>