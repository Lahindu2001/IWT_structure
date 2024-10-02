
<?php
    session_start();

if(isset($_POST["Adminlogout"])){
    session_destroy();     
    header('Location:emargency.php'); 
}
?> 