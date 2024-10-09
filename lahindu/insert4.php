
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


                 $adfName = $_POST["firstName"];
                $adlName  = $_POST["lastName"];
                $adNic  = $_POST["nic"];
                $adDob  = $_POST["date"];
                $adGender  = $_POST["gender"];
                $admStatus  = $_POST["mat_status"];
                $adcontact  = $_POST["phone"];
                $adAdress  = $_POST["address"];
                $adEmail  = $_POST["email"];
                $adDomeeting  = $_POST["datem"];
                $adTomeeting  = $_POST["time"];
                $adLocation  = $_POST["location"];
                $adReson  = $_POST["reson"];


   $sql = "INSERT INTO agentreserve VALUES ('$adfName','$adlName', '$adNic' ,'$adDob','$adGender' , '$admStatus' ,'$adcontact' , '$adAdress' ,'$adEmail' , '$adDomeeting' , '$adTomeeting','$adLocation', '$adReson')";
   
   if($con->query($sql)){
    echo "<script>
 alert('succesful done');
 </script>
<div>
 <center><a href='table4.php' ><button class='btn-back'>back to the home</button></a></center> 
</div>";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>

</body>
</html>

