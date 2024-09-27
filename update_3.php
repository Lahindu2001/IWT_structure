<?php 

require 'config.php';
  
$employId = $_GET["employeeID"];
   $employName  = $_GET["name"];
   $employEmail  = $_GET["email"];
   $employpassword  = $_GET["password"];
   $employdob  = $_GET["date"];
   $employAdress  = $_GET["address"];
   $employNIC  = $_GET["nic"];
   $employAdminId  = $_GET["adminId"];

if(empty($employId)||empty($employName)||empty($employEmail)||empty($employpassword)||empty($employdob)||empty($employAdress)||empty($employNIC)|empty($employAdminId)){
    echo "all requried";
}
else{

$sql = "UPDATE employee set employeeID='$employId' , name='$employName' , email = '$employEmail' , password ='$employpassword' , dob= '$employdob' , address = '$employAdress',nic= '$employNIC' , adminId = '$employAdminId'  WHERE employeeID='$employId'";

if($con->query($sql))
{
      
header("Location: table3.php");
exit();

/*echo "updated"; */
}
else{
    echo "not update";
}


}

?>