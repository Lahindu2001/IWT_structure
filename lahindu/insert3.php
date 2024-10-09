
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
   

   $employName  = $_POST["name"];
   $employEmail  = $_POST["email"];
   $employpassword  = $_POST["password"];
   $employdob  = $_POST["date"];
   $employAdress  = $_POST["address"];
   $employNIC  = $_POST["nic"];

 
   session_start();
   if (isset($_SESSION['email']) && $_SESSION['usertype'] === 'ADMIN') {
      $na =  htmlspecialchars($_SESSION['name']) ;
      
      
   } else {
       header('Location: ../linuka/login.php');
       exit();
   }

   $sql = "INSERT INTO employee VALUES ('','$employName','$employEmail','$employpassword' , '$employdob' ,'$employAdress' , '$employNIC' ,'$na' )";
   
   if($con->query($sql)){
    echo "<script>
 alert('succesful done');
 </script>
<div>
 <center><a href='table3.php' ><button class='btn-back'>back to the home</button></a></center> 
</div>";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>

</body>
</html>

