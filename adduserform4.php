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
            margin: 20px;
            padding: 0;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        h1 {
            text-align: center;
            color: #0056b3; 
        }

        form {
         
            background-color: #ffffff; 
            border-radius: 10px;
            padding: 10px;
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
        input[type="tel"],
        input[type="time"],
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
        <script src="src/asserts/js/js1.js"></script>
</head>
<body>

<?php 
    require 'config.php';
?>

        <form  method ="post" action ="insert4.php">
        <h1>meeting Information</h1>
        
        <label>First Name:</label>
        <input type="text" id="firstName" name="firstName" > 

        <label>Last Name:</label>
        <input type="text" id="lastName" name="lastName" > 

        <label >NIC:</label>
        <input type="text" id="nic" name="nic" >

        <label >Date of Birth:</label>
        <input type="date" id="date" name="date" >

        <label >Gender:</label>
        <select id = "gender" name ="gender" required >
        <option value = "" >select</option>
        <option value = "Male" >Male</option>
        <option value = "Female" >Female</option>
        <option value = "Other" >Other</option>
        </select>

        <label >Marital Status:</label>
        <select id = "mat_status" name ="mat_status" required >
        <option value = "" >select</option>
        <option value = "Single" >Single</option>
        <option value = "Married" >Married</option>
        <option value = "Divorced" >Divorced</option>
        <option value = "Windowd" >Windowd</option>
        </select>

        <label >Contact Number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">

        <label >Address:</label>
        <input type="text" id="address" name="address">

        <label >Email:</label>
        <input type="email" id="email" name="email" >

        <label >Date to meeting:</label>
        <input type="date" id="datem" name="datem" >

        <label >Time to meeting:</label>
        <input type="time" id="time" name="time" >

        <label>Location of Meeting</label>
        <select id="location" name="location" required>
          <option value="">Select</option>
          <option value="home">Home</option>
          <option value="branch">Nearest Branch</option>
        </select>

        <label >Reson:</label>
        <input type="text" id="reson" name="reson" >

        <input type="submit" value="Submit">
        <input type="reset" value="reset">
        </form>
</body>
</html>
    