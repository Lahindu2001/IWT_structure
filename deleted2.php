<?php
require 'config.php';

$nic =$_POST["delete"];

$sql ="DELETE from claim where claimId ='$nic'";

if($con->query($sql)){
 
  
header("Location: table2.php");
exit(); 


}
else{
    echo "not sucess";
}

?>