<?php
require '../config.php';

$nic =$_POST["delete"];

$sql ="DELETE from 	password_requests where email ='$nic'";

if($con->query($sql)){
 
  
header("Location: table6.php");
exit(); 


}
else{
    echo "not sucess";
}

?>