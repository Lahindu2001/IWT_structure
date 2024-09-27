<?php
require 'config.php';

$nic =$_POST["delete"];

$sql ="DELETE from employee where employeeID ='$nic'";

if($con->query($sql)){
 
  
header("Location: table3.php");
exit(); 


}
else{
    echo "not sucess";
}

?>