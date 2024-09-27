<?php 

require 'config.php';

$userId = $_GET["userid"];
$userName = $_GET["name"];
$userEmail  = $_GET["email"];
$userphone  = $_GET["phone"];
$userAdress  = $_GET["address"];
$userplanetype  = $_GET["planetype"];

if(empty($userId)||empty($userName)||empty($userEmail)||empty($userphone)||empty($userAdress)||empty($userplanetype)){
    echo "all requried";
}
else{

$sql = "UPDATE userdetail set User_ID='$userId' , Name='$userName' , email ='$userEmail' ,Phone= '$userphone', Address= '$userAdress' , Plane_Type = '$userplanetype' WHERE User_ID='$userId'";

if($con->query($sql))
{
      
header("Location: table1.php");
exit();

/*echo "updated"; */
}
else{
    echo "not update";
}


}

?>