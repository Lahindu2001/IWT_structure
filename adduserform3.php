<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #0056b3; 
        }

        form {
            background-color: #ffffff; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            color: #0056b3; 
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"],
        input[type="date"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #0056b3;
            box-sizing: border-box;
        }

        input[type="submit"] , input[type="reset"] {
            background-color: #0056b3;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover , nput[type="reset"]:hover{
            background-color: #004494; 
        }

        select {
            background-color: white;
            color: #0056b3;
        }
    </style>
</head>
<body>

<?php 
    require 'config.php';
?>

    <form  method ="post" action ="insert3.php">
        <h1>employee Information</h1>
        <!--
        <label>employee ID:</label>
        <input type="text" id="employeeID" name="employeeID" > -->

        <label >employee Name:</label>
        <input type="text" id="name" name="name" >

        <label >Email:</label>
        <input type="email" id="email" name="email">

        <label >password:</label>
        <input type="password" id="password" name="password">

        <label >dob:</label>
        <input type="date" id="date" name="date">
  
        <label >Adress:</label>
        <input type="text" id="address" name="address" >

        <label >NIC:</label>
        <input type="text" id="nic" name="nic" >

        <label for="adminId">admin Id:</label>
        <select id="adminId" name="adminId">
            <option value="Admin 1">ADMIN 1</option>
            <option value="Admin 2">ADMIN 2</option>
            <option value="Admin 3">ADMIN 3</option>
        </select>

    
        <input type="submit" value="Submit">
        <input type="reset" value="reset">
        </form>
</body>
</html>
    