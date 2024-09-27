
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
        input[type="password"],
        input[type="email"],
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

    $sql = "SELECT employeeID,name,email,password,dob,address,nic,adminId from employee where employeeID ='$nic'";
 
    $result =$con->query($sql);

            while($row = $result->fetch_assoc()){
            
                $employId = $row["employeeID"];
                $employName  = $row["name"];
                $employEmail  = $row["email"];
                $employpassword  = $row["password"];
                $employdob  = $row["dob"];
                $employAdress  = $row["address"];
                $employNIC  = $row["nic"];
                $employAdminId  = $row["adminId"];
            }

            
     echo"      
    <fieldset>
        <legend>update customer Deatil</legend>
        <form  method ='get' action ='update_3.php'>

        <input type='hidden' id='employeeID' name='employeeID' value='$employId'> 
        
        <label >employee Name:</label>
        <input type='text' id='name' name='name' value='$employName'>

         <label >Email:</label>
        <input type='email' id='email' name='email' value='$employEmail'>


        <input type='hidden' id='password' name='password' value = '$employpassword'>

         <label >dob:</label>
        <input type='date' id='date' name='date' value='$employdob'>
      
        <label >Adress:</label>
        <input type='text' id='address' name='address'value='$employAdress' >

         <label >NIC:</label>
        <input type='text' id='nic' name='nic' value = '$employNIC' >


        <label for='adminId'>admin Id:</label>
        <select id='adminId' name='adminId' value='$employAdminId'>
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