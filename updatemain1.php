
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

        body {
            font-family: Arial, sans-serif;
            background-color: #3de2e2; 
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
            background-color: #d57272 ; 
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
            background-color:#9c4444;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover , nput[type="reset"]:hover{
            background-color: #004494; 
        }

        select {
            background-color: white;
            color: #5b3c3c;
        }
    </style>
    <title>Update user detail</title>
</head>
<body>
    
<?php 
    require 'config.php';

    $nic =$_POST["update"];

    $sql = "SELECT User_ID,Name,email,Phone,Address,Plane_Type from userdetail where User_ID ='$nic'";

    $result =$con->query($sql);
            while($row = $result->fetch_assoc()){
            
            $uid =  $row["User_ID"];
           $uname = $row["Name"];
           $uemail = $row["email"];
           $uphone = $row["Phone"];
           $address = $row["Address"];
           $planeT = $row["Plane_Type"];

            }

            
     echo"      
    <fieldset>
        <legend>update customer Deatil</legend>
        <form  method ='get' action ='update_1.php'>

        <input type='hidden' id='userid' name='userid' value = '$uid' > 

        <label >Name:</label>
        <input type='text' id='name' name='name' value='$uname'>

        <label >Email:</label>
        <input type='email' id='email' name='email' value='$uemail'>

        <label >Phone:</label>
        <input type='tel' id='phone' name='phone' value='$uphone'>

        <label >Address:</label>
        <input type='text' id='address' name='address' value='$address'>

        <label for='planetype'>Plan type:</label>
        <select id='planetype' name='planetype' required value='$planeT'>
            <option value='Family_all'>Family all in one plan</option>
            <option value='Emergency'>Emergency coverage plan</option>
            <option value='Elder'>Elder Critizen</option>
            <option value='complete'>complete coverage</option>
        </select>

        <input type='submit' value='Submit'>
        <input type='reset' value='reset'>
        </form>
     </fieldset>";

?>


        
</body>
</html>