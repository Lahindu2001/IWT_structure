<?php
require '../config.php';

$nic =$_POST["delete"];

$sql ="DELETE from formformail where ID ='$nic'";

if($con->query($sql)){
 
  
header("Location: table5.php");
exit(); 


}
else{
    echo "not sucess";
}

?>