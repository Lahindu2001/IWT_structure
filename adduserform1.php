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
        input[type="email"],
        input[type="tel"],
        input[type="submit"],
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

        input[type="submit"]:hover , input[type="reset"]:hover{
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

<form  method ="post" action ="insert.php">
        <h1>User Information</h1>

        <!-- <label>User ID:</label>
        <input type="text" id="userid" name="userid" > -->

        <label >Name:</label>
        <input type="text" id="name" name="name" >

        <label >Email:</label>
        <input type="email" id="email" name="email" >

        <label >Phone:</label>
        <input type="tel" id="phone" name="phone" >

        <label >Address:</label>
        <input type="text" id="address" name="address" >

        <label for="planetype">Plan type:</label>
        <select id="planetype" name="planetype" required>
            <option value="Family_all">Family all in one plan</option>
            <option value="Emergency">Emergency coverage plan</option>
            <option value="Elder">Elder Critizen</option>
            <option value="complete">complete coverage</option>
        </select>

        <input type="submit" value="Submit">
        <input type="reset" value="reset">
    </form>
</body>
</html>
