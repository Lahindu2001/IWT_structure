
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inet form data</title>
    <style>
        div{
            margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
        }
    .btn-back{
        background-color: #dc3545;
        padding: 10px 25px;
        font-size: 20px;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        
    }  
    </style>
</head>
<body>
<?php
    require 'config.php';
    
    $userName = $_POST["name"];
    $userDob  = $_POST["date"];
    $userGender = $_POST["gender"];
    $userphoneNo = $_POST["phone"];
    $userAdress  = $_POST["address"];
    $userGmail  = $_POST["email"];
    $userPassword  = $_POST["password"];
    $userplanetype  = $_POST["planetype"];

   $sql = "INSERT INTO userdetail VALUES ('','$userName','$userDob','$userGender' , '$userphoneNo' ,'$userAdress','$userGmail','$userPassword','$userplanetype')";

   if($con->query($sql)){
    
    echo "<script>
 alert('succesful done');
 </script>
<div>
 <center><a href='table1.php' ><button class='btn-back'>back to the home</button></a></center> 
</div>";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>
</body>
</html>

