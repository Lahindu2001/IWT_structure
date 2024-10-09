<?php
require_once('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailA = $_POST['email'];
    $requesAt = $_POST['text'];
    $phoneA = $_POST['phone'];

    // Ensure values are inserted correctly in the query
    $sql = "INSERT INTO password_requests (id, email, reason, phone, status, created_at) 
            VALUES (NULL, '$emailA', '$requesAt', '$phoneA', 'Pending', NOW())";

    if ($con->query($sql)) {

        echo "Success";
        header("location:reqprint.php?email=$emailA");
        exit();


    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}

?>
<form action = "reqprint.php" method ="get">
    <input type="hidden" name="email">
    <input type="submit" name="submit">
</form>