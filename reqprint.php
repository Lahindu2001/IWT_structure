<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset password</title>
    <link rel="stylesheet" href="src/asserts/css/reqprint.css">
</head>
<script>
    function colorchange() {
        var userMessage = document.getElementById('userntfnd');
        if (userMessage.innerHTML === 'not a registered user') {
            userMessage.style.color = 'red';
        }
    }
</script>
<body onload="colorchange()">
    <?php
    require_once('config.php');
    $email=$_GET['email'];

        $sql = "SELECT * FROM password_requests WHERE email = '$email'";
        $sql2 = "SELECT * FROM userdetail WHERE email = '$email'";  

    $result = $con->query($sql);
    $result2 = $con->query($sql2);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $reason = $row['reason']; 
        
    }

    if ($result2->num_rows > 0) {
        $row = $result2->fetch_assoc();
        $name = $row['name']; 
        
    }
    

?>



    <div class="sqr">
        <img class="image" src="src/asserts/images/logo.png" width="60px" height="60px">
        <h2>Your request has been submitted.<br> We’ll get back to you soon.</h2> <br>

        <h4>If you want to update or delete your request, you can do it here</h4>

        <p id="userntfnd" style="font-weight: bold;">Your Name : <?=$name?></p>
        
        <p style="font-weight: bold;">Your Email : <?=$email?></p>
    
        <label > Reason for Request </label> <br>
        <form method="POST" action="updateReq.php">
        <textarea placeholder="Enter your reason here..." name="text" rows="6" cols="70">
                <?=$reason?>
                </textarea><br><br>
                <div>

                 <input type="hidden" name="email" value="<?=$email?>">
                <button class="up" type="submit"> Update </button>
                </form>

                <form method="POST" action="dltReq.php">
                 <input type="hidden" name="email" value="<?=$email?>">

                <button class="dlt" type="submit"> Delete </button>

                </form>

                </div>

    </div>
    


</body>
</html>