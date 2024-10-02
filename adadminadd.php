<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin add</title>
    <style>
            .class1 {
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
        input[type="date"],
        input[type="submit"],
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
   <div>
   <?php  include ('hedder.php') ;  
     session_start();
   ?></div>
    
    <div class="class1">
        <form action="Admininsert.php" method = "post">
            <h2>Add new admin</h2>


            <label >Name</label>
            <input type = "text" id = "Fname" name="name" required>

            <label >Date of birth</label>
            <input type = "date" id = "dob" name="dob" required>

            <label >Gender</label>
            <input type = "radio" id = "gender" name="gender" value = "Male" required>Male
            <input type = "radio" id = "gender" name="gender" value = "Female" required>Female
            <br><br>

            <label >Contact number</label>
            <input type = "tel" id = "contact" name="contact" required>

            <label >Adress</label>
            <input type = "text" id = "address" name="address" required>
            <br><br>

            <label >Email adress</label>
            <input type = "email" id = "email" name="email" required>


            <input type = "hidden" id = "password" name="password" value = "User@1234">
or
            <input type = "hidden" id = "confirmpasswd" name="confirmpassword" value = "User@1234">

            <input type = "hidden" id = "planetype" name="planetype" value = "none">

            <input type="hidden" id="usertype" name="usertype" value="ADMIN">

            <input type ="checkbox" name="term" id ="tearm" required> Iagree to the tream and condition.

            <input type ="submit" value ="ADD" class ="btn-add" >

        </form>   

    </div>


    <?php  include ('footer.php') ;  ?>

</body>
</html>