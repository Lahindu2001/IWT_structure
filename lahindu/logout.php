<?php
session_start();
session_destroy();  // Destroy all session data
header("Location: ../hasaranga/Index.php");
exit();
?>
