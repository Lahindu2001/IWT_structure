<?php
    require 'config.php';
    
    $name = $_POST["name"];
    $userDob  = $_POST["date"];
    $NIC = $_POST["nic"];
    $userGender = $_POST["gender"];
    $userphoneNo = $_POST["phoneNo"];
    $userAdress  = $_POST["address"];
    $userGmail  = $_POST["email"];
    $userPassword  = $_POST["password"];
    $userconformPassword  = $_POST["confirmpassword"];
    $userplanetype  = $_POST["planeType"];
    $usertype = $_POST["usertype"];

    $sql = "INSERT INTO userdetail VALUES ('','$name' ,'$NIC','$userDob','$userGender' , '$userphoneNo' ,'$userAdress','$userGmail','$userPassword','$userconformPassword','$userplanetype' ,'$usertype')";

    if($con->query($sql)){
     
    
    echo "<script>
 alert('succesful done');
 </script>";

   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>