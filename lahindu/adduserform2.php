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
    <script src="src/asserts/js/js2.js"></script>

</head>
<body>

<?php 
    require '../config.php';
?>

<form  method ="post" action ="insert2.php" onsubmit="return validateForm()">
        <h1>User Information</h1>
<!-- 
        <label>Clam ID:</label>
        <input type="text" id="claimId" name="claimId" > -->

        <label >user Id:</label>
        <input type="text" id="userId" name="userId" >

        <label >clam amount:</label>
        <input type="number" id="amount" name="amount" min="0" step="0.01" placeholder="0.00">
     
        <label >claim Description:</label>
        <input type="text" id="claimDescription" name="claimDescription" >

        <label >date:</label>
        <input type="date" id="date" name="date" >
        
        <label for="status">status:</label>
        <select id="status" name="status" required>
        <option value="">--Select level--</option>
            <option value="LEVEL_1">LEVEL 1</option>
            <option value="LEVEL_2">LEVEL 2</option>
            <option value="LEVEL_3">LEVEL 3</option>
        </select>



        <input type="submit" value="Submit">
        <input type="reset" value="reset">
    </form>
</body>
</html>
    