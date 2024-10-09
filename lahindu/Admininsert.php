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
require '../config.php';


$first_name = $_POST["name"];
$Dateofbirt = $_POST["dob"];
$Gender = $_POST["gender"];
$contact = $_POST["contact"];
$Adress = $_POST["address"];
$email = $_POST["email"];
$Password = $_POST["password"];
$ConPassword = $_POST["confirmpassword"];
$usertype = $_POST["usertype"];
$userplanetype  = $_POST["planetype"];
$usertype = $_POST["usertype"];



$sql = "INSERT INTO userdetail VALUES ('','$first_name','$Dateofbirt','$Gender' , '$contact' ,'$Adress ','$email','$Password','$ConPassword','$userplanetype','$usertype ')";

if($con->query($sql)){
    
    echo "<script>
 alert('succesful done');
 </script>
<div>
 <center><a href='in.php' ><button class='btn-back'>back to the home</button></a></center> 
</div>";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();

?>

</body>