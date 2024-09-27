<?php
    require 'config.php';
    
   $userName = $_POST["name"];
   $userEmail  = $_POST["email"];
   $userphone  = $_POST["phone"];
   $userAdress  = $_POST["address"];
   $userplanetype  = $_POST["planetype"];

   $sql = "INSERT INTO userdetail VALUES ('','$userName','$userEmail','$userphone' , '$userAdress' ,'$userplanetype')";

   if($con->query($sql)){
    header("Location: table1.php");
    exit(); 
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>


<!-- sg;sdnvlsnfdvlknlznvlkdnfvlsk -->