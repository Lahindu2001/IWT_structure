<?php 

require '../config.php';
  
$clamId = $_GET["claimId"];
$userId  = $_GET["userId"];
$clamamount  = $_GET["amount"];
$clamdiscription  = $_GET["claimDescription"];
$clamdate  = $_GET["date"];
$clamstatus  = $_GET["status"];

session_start();
if (isset($_SESSION['email']) && $_SESSION['usertype'] === 'ADMIN') {
 $adminId  =   htmlspecialchars($_SESSION['name']) ;
 

} else {
    header('Location: ../linuka/login.php');
    exit();
}

if(empty($clamId)||empty($userId)||empty($clamamount)||empty($clamdiscription)||empty($clamdate)||empty($clamstatus)||empty($adminId)){
    echo "all requried";
}
else{
   
$sql = "UPDATE claim set claimId='$clamId' , userId='$userId' , amount ='$clamamount' , claimDescription= '$clamdiscription' , date = '$clamdate',status= '$clamstatus' , adminId = '$adminId' WHERE claimId='$clamId'";

if($con->query($sql))
{
      
header("Location: table2.php");
exit();

/*echo "updated"; */
}
else{
    echo "not update";
}


}

?>