<?php
// Check if form is submitted
if (isset($_POST['submit'])) {

    // Include database connection file
    require 'config.php';

    // Retrieve and sanitize user input
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phoneNo = mysqli_real_escape_string($con, $_POST['phoneNo']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $passwodr = ($_POST['password']);
    $confirm_password =($_POST['confirmpassword']);
    $planType = mysqli_real_escape_string($con, $_POST['planeType']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']); // Pre-defined as CLIENT

    // Password validation: Check if password and confirmation match
    if ($password !== $confirm_password) {
        header("Location: signup.php?error=passwordmismatch");
        exit();
        
    }

    // Check if email is already taken
    $sql = "SELECT * FROM userdetail WHERE email=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror");
        exit();
    }

    // Bind and execute the statement to check for existing email
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $emailExists = mysqli_stmt_num_rows($stmt);

    if ($emailExists > 0) {
        header("Location: signup.php?error=emailtaken");
        exit();
    }

    
    // Insert new user into the database
    $sql = "INSERT INTO userdetail (name, nic, dob, gender, phoneNo, address, email, password, planeType, usertype) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror");
        exit();
    }

    // Bind and execute the statement for inserting data
    mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $nic, $dob, $gender, $phoneNo, $address, $email, $passwodr, $planType, $usertype);
    mysqli_stmt_execute($stmt);

    // Redirect to a success page after signup
    header("Location: signup.php?signup=success");
    exit();

} else {
    // Redirect back to signup page if the form is not submitted
    header("Location: signup.php");
    exit();
}
?>
