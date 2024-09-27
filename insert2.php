<?php
    require 'config.php';
    
   $clamId = $_POST["claimId"];
   $userId  = $_POST["userId"];
   $clamamount  = $_POST["amount"];
   $clamdiscription  = $_POST["claimDescription"];
   $clamdate  = $_POST["date"];
   $clamstatus  = $_POST["status"];
   $adminId  = $_POST["adminId"];


   $sql = "INSERT INTO claim VALUES ('','$userId','$clamamount','$clamdiscription' , '$clamdate' ,'$clamstatus' , '$adminId')";

   if($con->query($sql)){
    header("Location: table2.php");
    exit(); 
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>


<!-- sg;sdnvlsnfdvlknlznvlkdnfvlsk -->