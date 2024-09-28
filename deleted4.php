<?php
require 'config.php';

$nic =$_POST["delete"];

$sql ="DELETE from agentreserve where NIC ='$nic'";

if($con->query($sql)){
 
  
header("Location: table4.php");
exit(); 


}
else{
    echo "not sucess";
}

?>