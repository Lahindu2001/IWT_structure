
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
   
   $userId  = $_POST["userId"];
   $clamamount  = $_POST["amount"];
   $clamdiscription  = $_POST["claimDescription"];
   $clamdate  = $_POST["date"];
   $clamstatus  = $_POST["status"];
   
  
   session_start();
   if (isset($_SESSION['email']) && $_SESSION['usertype'] === 'ADMIN') {
    $adminId  =   htmlspecialchars($_SESSION['name']) ;
    
   
   } else {
       header('Location: login.php');
       exit();
   }
 
   $sql = "INSERT INTO claim VALUES ('','$userId','$clamamount','$clamdiscription' , '$clamdate' ,'$clamstatus' , '$adminId')";

   if($con->query($sql)){
    echo "<script>
    alert('succesful done');
    </script>
    <div>
    <center><a href='table2.php' ><button class='btn-back'>back to the home</button></a></center> 
    </div>";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>

</body>
</html>