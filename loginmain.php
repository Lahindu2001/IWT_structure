
<?php
  require'config.php'; 
  session_start();

  if(isset($_SESSION["email"])) { 
    header("Location:client.php");
    }

$useremail = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM userdetail WHERE email = '$useremail' AND password = '$password' And usertype='CLIENT'";

$sqli = "SELECT * FROM userdetail WHERE email = '$useremail' AND password = '$password' AND usertype = 'ADMIN'";

$result1 = $con->query($sql);
$result2 = $con->query($sqli);


if ($result1->num_rows == 1) {
    $_SESSION['email'] = $useremail;
    $utype = "CLIENT";
    $_SESSION['usertype'] = $utype;
    header('Location: client.php');
    exit();
} 

if ($result2->num_rows == 1) {
    $_SESSION['email'] = $useremail;
    $utype = "admin";
    $_SESSION['usertype'] = $utype;
    header('Location: in.php');
    exit();
} else {
    
    echo '<h1>Invalid username or password.</h1>';
}


$con->close();
?>