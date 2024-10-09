
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
        input[type="date"],
        input[type="submit"],
        input[type="tel"],
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
    <script src="src/asserts/js/js1.js"></script>
</head>
<body>
    
<?php 

    require '../config.php';

    $nic =$_POST["update"];

    $sql = "SELECT userId,name,nic,dob,gender,phoneNo,address,email,password,planeType,usertype from userdetail where userId ='$nic'";
   

    $result =$con->query($sql);
            while($row = $result->fetch_assoc()){
            
           $userId = $row["userId"];
            $userName = $row["name"];
            $userNIC = $row["nic"];
            $userDob  = $row["dob"];
            $userGender = $row["gender"];
            $userphoneNo = $row["phoneNo"];
            $userAdress  = $row["address"];
            $userGmail  = $row["email"];
            $userplanetype  = $row["planeType"];
            $usertype  = $row["usertype"];

            }

            
     echo"      
   <fieldset>
        <legend>update customer Deatil</legend>
        <form  method ='get' action ='update_1.php' onsubmit='return validateForm()'>

        <input type='hidden' id='userid' name='userid' value = '$userId' > 

        <label >Name:</label>
        <input type='text' id='name' name='name' value='$userName'>

        
        <label >NIC:</label>
        <input type='text' id='nic' name='nic' value='$userNIC'>

        <label >Date of Birth:</label>
        <input type='date' id='date' name='date' value='$userDob'>
        

        <label for='gender'>Gender:</label>
        <select id='gender' name='gender' required value='$userGender'>
            <option value='Male'>Male</option>
            <option value='Female'>Female</option>
             <option value='other'>Other</option>
        </select>

        <label >Phone:</label>
        <input type='tel' id='phone' name='phone' value='$userphoneNo' pattern='[0-9]{10}'>
        
        <label >Address:</label>
        <input type='text' id='address' name='address' value='$userAdress'>

        <label >Eamil:</label>
        <input type='email' id='email' name='email' value='$userGmail'>

    
        <label for='planetype'>Plan type:</label>
        <select id='planetype' name='planetype' required value='$userplanetype'>
            <option value='Family_all'>Family all in one plan</option>
            <option value='Emergency'>Emergency coverage plan</option>
            <option value='Elder'>Elder Critizen</option>
            <option value='complete'>complete coverage</option>
            <option value='none'>none</option>
        </select>

             <label for = 'usertype' >user type:</label>
        <select id='usertype'  name='usertype' required value='$usertype'>
        <option value='ADMIN'>ADMIN</option>
        <option value='CLIENT'>CLIENT</option>


        <input type='submit' value='Submit'>
        <input type='reset' value='reset'>
        </form>
     </fieldset>";

?>


        
</body>
</html>