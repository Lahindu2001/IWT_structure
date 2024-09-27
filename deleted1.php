<?php
require 'config.php';

$nic =$_POST["delete"];

$sql ="DELETE from userdetail where User_ID ='$nic'";

if($con->query($sql)){
 
  
header("Location: table1.php");
exit(); 


}
else{
    echo "not sucess";
}

?>