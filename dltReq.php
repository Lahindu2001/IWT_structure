<?php
require_once('config.php');


    $email = $_POST['email'];


   
    $sql = "DELETE FROM password_requests WHERE email = '$email'";

if($con->query($sql))
{ ?>   
    <script>
    alert("Successfully Deleted");
    window.location.href = "login.php";    
    </script>
<?php
/*echo "updated"; */
}





?>
