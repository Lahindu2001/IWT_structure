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

if(empty($userName)||empty($userDob)||empty($userGender)||empty($userphoneNo)||empty($userAdress)||empty($userGmail)||empty($userplanetype)){
    echo "all requried";
}
else{

  
$sql = "UPDATE userdetail set userId='$userId' , name='$userName' , dob ='$userDob' ,gender= '$userGender', phoneNo= '$userphoneNo' , address = '$userAdress' , email='$userGmail' , password= '$userPassword' ,planeType='$userplanetype'    WHERE userId='$userId'";

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