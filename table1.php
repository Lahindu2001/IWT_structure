<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src\asserts\css\in.css">
    <script src="in.js"></script>
    <style> .subbut {
        padding: 10px 20px;
        background-color: rgb(0, 179, 220);
        color: rgb(86, 86, 82);
        border: none;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
    } </style>
</head>
        <div class="header">
        <center> <img src="src/asserts/images/logo.png" alt="logo" width="100px" length="100px"> </center>
        <h1 >Admin Dashboard - Life Insurance Management System </h1>
        <script>document.write(Date());</script>
        <h4>Welcome, Admin</h4>
    </div>


    <div class="scrollmenu" >
        <a href="in.php"> Dashboard</a>
        <a href="table1.php" style="background-color:#220676"> Manage Users</a>
        <a href="table2.php"> Manage Claim</a>
        <a href="table3.php"> Manage Employees</a>
        <a href="table4.php"> Manage meeting</a>
        <a href="table5.php"> Manage custormer reqest</a>
        <a href="in.php"> Settings</a>
        <a href="#"> Logout</a>
    </div>

    <div class="main-content">


        <div class="search-bar">
        <form action="search1.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search user name / userid">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>





        <div class="section">
            <br>
            <h3 >Manage Users </h3>
           
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	userId,name,dob,gender,phoneNo,address,email,username,planeType,usertype from userdetail";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>User ID</th><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Phone number</th><th>adress</th><th>gmail</th><th>user name</th><th>plane Type</th><th>staus</th><th>user type</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo "<td >".$row["userId"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["dob"]."</td>". "<td>".$row["gender"]."</td>"."<td>".$row["phoneNo"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["planeType"]."</td>"."<td>".$row["usertype"]."</td>";
                        echo "<td>
                        <form action='deleted1.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["userId"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain1.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["userId"] . "'>
                            <input type='submit' value='Update'class='btn btn-edit'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>
            </div>
            <center><a href="adduserform1.php" ><button class="btn btn-add">ADD new User</button></a></center>
        </div><
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>
    </body>