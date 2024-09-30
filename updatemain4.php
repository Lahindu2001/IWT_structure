
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

        body {
            font-family: Arial, sans-serif;
            background-color: #3de2e2; 
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
    require 'config.php';

    $nic =$_POST["update"];

    $sql = "SELECT firstName,lastName,NIC,dob,gender,martialStatus,contactNumber,address,email,doMeeting,toMeeting,location,reason from agentreserve where NIC ='$nic'";

 
    $result =$con->query($sql);

            while($row = $result->fetch_assoc()){


                $adfName = $row["firstName"];
                $adlName  = $row["lastName"];
                $adNic  = $row["NIC"];
                $adDob  = $row["dob"];
                $adGender  = $row["gender"];
                $admStatus  = $row["martialStatus"];
                $adcontact  = $row["contactNumber"];
                $adAdress  = $row["address"];
                $adEmail  = $row["email"];
                $adDomeeting  = $row["doMeeting"];
                $adTomeeting  = $row["toMeeting"];
                $adLocation  = $row["location"];
                $adReson  = $row["reason"];

            }
           
     echo"      
    <fieldset>
        <legend>update meeting Deatil</legend>
        <form  method ='get' action ='update_4.php'>
        
        <label>First Name:</label>
        <input type='text' id='firstName' name='firstName' value='$adfName'> 

        <label>Last Name:</label>
        <input type='text' id='lastName' name='lastName' value='$adlName'> 

        <label >NIC:</label>
        <input type='text' id='nic' name='nic' value='$adNic'>

        <label >Date of Birth:</label>
        <input type='date' id='date' name='date' value='$adDob'>

        <label >Gender:</label>
        <select id = 'gender' name ='gender' required value='$adGender'>
        <option value = 'Male' >Male</option>
        <option value = 'Female' >Female</option>
        <option value = 'Other' >Other</option>
        </select>

        <label >Marital Status:</label>
        <select id = 'mat_status' name ='mat_status' required value='$admStatus'>
        <option value = 'Single' >Single</option>
        <option value = 'Married' >Married</option>
        <option value = 'Divorced' >Divorced</option>
        <option value = 'Windowd' >Windowd</option>
        </select>

        <label >Contact Number:</label>
        <input type='tel' id='phone' name='phone' pattern='[0-9]{10}' value='$adcontact'>

        <label >Address:</label>
        <input type='text' id='address' name='address' value='$adAdress'>

        <label >Email:</label>
        <input type='email' id='email' name='email' value='$adEmail'>

        <label >Date to meeting:</label>
        <input type='date' id='datem' name='datem' value='$adDomeeting'>

        <label >Time to meeting:</label>
        <input type='time' id='time' name='time' value='$adTomeeting'>

        <label >Location:</label>
        <input type='text' id='location' name='location' value='$adLocation'>

        <label >Reson:</label>
        <input type='text' id='reson' name='reson' value='$adReson'>

        <input type='submit' value='Submit' >
        <input type='reset' value='reset'>

        
        </form>
     </fieldset>";
     
?>
   
        
</body>
</html>