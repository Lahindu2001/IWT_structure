<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Request</title>
    <link rel="stylesheet" href="src/asserts/css/request.css">
</head>
<body>
    <div class="sqr">

        <img class="image" src="src/asserts/images/logo.png" width="60px" height="60px">

        <?php
require_once('config.php'); 


if (isset($_POST['email'])) {
    $email = $_POST['email'];


    $sql = "SELECT * FROM userdetail WHERE email = '$email'";


    $result = $con->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name']; 
        $phonenumber = $row['phoneNo']; 
    
    
} 
else {
    
    $name = 'Not a registered user';  
    
    
    ?> <script>
    function restrictuser(){
        
    
    alert('No account found for the provided email.');
    return false;
    window.location.href = "reset.php";
    }
    </script><?php 
}


}

?>

        <h2>Request Reset Password</h2>

        <p style="font-weight: bold;">Your Name : <?=$name?></p>
        <p style="font-weight: bold;">Your Email : <?=$email?></p>

    
        <label > Reason for Request </label> <br>

        <form action="request_insert.php" method="POST" onsubmit="return restrictuser()"> 
                <textarea placeholder="Enter your reason here..." name="text" rows="6" cols="70"></textarea>
                <input type = "hidden" name = "email" value="<?=$email?>">
                <input type = "hidden" name = "phone" value="<?=$phonenumber?>"><br>
                <input type="submit" name ="submit">
        </form>
        
    </div>
   
</body>
</html>