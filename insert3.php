<?php
    require 'config.php';
   
    
   $employId = $_POST["employeeID"];
   $employName  = $_POST["name"];
   $employEmail  = $_POST["email"];
   $employpassword  = $_POST["password"];
   $employdob  = $_POST["date"];
   $employAdress  = $_POST["address"];
   $employNIC  = $_POST["nic"];
   $employAdminId  = $_POST["adminId"];


   $sql = "INSERT INTO employee VALUES ('','$employName','$employEmail','$employpassword' , '$employdob' ,'$employAdress' , '$employNIC' ,'$employAdminId ' )";
   
   if($con->query($sql)){
    header("Location: table3.php");
    exit(); 
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>


