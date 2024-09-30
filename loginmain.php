<?php 

require 'config.php';


$useremail = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * from userdetail WHERE email  = '$useremail' AND password = '$password' AND usertype = 'CLIENT' ";
$sq2 = "SELECT * from userdetail WHERE email  = '$useremail' AND password = '$password' AND usertype = 'ADMIN' ";

$result1 = $con-> query($sql);
$result2 = $con-> query($sq2);

if($con->query($result1l)){
 
    header("Location: Famillyinone.php");
    exit();

}

if($con->query($result2)){
  
    header("Location: in.php");
    exit();

}
else {
    echo "<script>
    alert('Invalid usermal or pasword');
    </script>";
}

$con -> close();

?>