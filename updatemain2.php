
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

    $sql = "SELECT claimId,userId,amount,claimDescription,date,status,adminId from claim where claimId ='$nic'";

    $result =$con->query($sql);

            while($row = $result->fetch_assoc()){
            
            $claimId =  $row["claimId"];
           $userId = $row["userId"];
           $clamAmount = $row["amount"];
           $claimDis = $row["claimDescription"];
           $clamDate = $row["date"];
           $claimStatus = $row["status"];
           $adminId = $row["adminId"];
          
            }

            
     echo"      
    <fieldset>
        <legend>update claim Deatil</legend>
        <form  method ='get' action ='update_2.php'>

        <input type='hidden' id='claimId' name='claimId' value='$claimId' > 
        
        <label >user Id:</label>
        <input type='text' id='userId' name='userId' value='$userId'>

        <label >clam amount:</label>
        <input type='number' id='amount' name='amount' min='0' step='0.01' placeholder='0.00' value='$clamAmount'>

        <label >claim Description:</label>
        <input type='text' id='claimDescription' name='claimDescription' value='$claimDis ' >

         <label >date:</label>
        <input type='date' id='date' name='date' value='$clamDate'>
        

         <br>
        <label for='status'>status:</label>
        <select id='status' name='status' required value='$claimStatus'>
            <option value='LEVEL_1'>LEVEL 1</option>
            <option value='LEVEL_2'>LEVEL 2</option>
            <option value='LEVEL_3'>LEVEL 3</option>
        </select>

        <label for='adminId'>admin Id:</label>
        <select id='adminId' name='adminId' value='$adminId'>
            <option value='Admin 1'>ADMIN 1</option>
            <option value='Admin 2'>ADMIN 2</option>
            <option value='Admin 3'>ADMIN 3</option>
        </select>

        <input type='submit' value='Submit'>
        <input type='reset' value='reset'>
        </form>
     </fieldset>";
     
    
?>
    
        
</body>
</html>