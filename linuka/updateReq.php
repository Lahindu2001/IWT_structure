<?php
require_once('../config.php');


    $email = $_POST['email'];
    $reason = $_POST['text'];




if(empty($email)||empty($reason)){
    echo "all requried";
}
else{
   
    $sql = "UPDATE password_requests SET reason ='$reason' WHERE email= '$email' ";

if($con->query($sql))
{ ?>   
    <script>
    alert("successfully updated.We Will Contact you within 24 hours");
    window.location.href = "reqprint.php?email=<?=$email?>";
    </script>
<?php
/*echo "updated"; */
}



}

?>
