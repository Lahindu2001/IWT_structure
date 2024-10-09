<?php
require '../config.php';

$nic =$_POST["delete"];

$sql ="DELETE from userdetail where userid ='$nic'";

if($con->query($sql)){
 
  
header("Location: table1.php");
exit(); 


}
else{
    echo "not sucess";
}

?>