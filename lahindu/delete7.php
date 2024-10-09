<?php
require '../config.php';

$nic =$_POST["delete"];

$sql ="DELETE from 	faqtab where faqNo ='$nic'";

if($con->query($sql)){
 
  
header("Location: table7.php");
exit(); 


}
else{
    echo "not sucess";
}

?>