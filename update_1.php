<?php 

require 'config.php';

$userId = $_GET["userid"];
$userName = $_GET["name"];
$userDob  = $_GET["date"];
$userGender = $_GET["gender"];
$userphoneNo = $_GET["phone"];
$userAdress  = $_GET["address"];
$userGmail  = $_GET["email"];
$userPassword  = $_GET["password"];
$userplanetype  = $_GET["planetype"];
$usertype  = $_GET["usertype"];

if(empty($userName)||empty($userDob)||empty($userGender)||empty($userphoneNo)||empty($userAdress)||empty($userGmail)||empty($userplanetype)||empty($usertype)){
    echo "all requried";
}
else{

  
$sql = "UPDATE userdetail set userId='$userId' , name='$userName' , dob ='$userDob' ,gender= '$userGender', phoneNo= '$userphoneNo' , address = '$userAdress' , email='$userGmail' , planeType='$userplanetype' , usertype='$usertype'   WHERE userId='$userId'";

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