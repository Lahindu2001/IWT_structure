<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="src\asserts\css\in.css">

</head>
<body>
<?php  include ('admin_header.php') ;  ?>

<ul class="navi">
    <li><a href="in.php">Dashboard</a></li>
    <li><a href="table1.php" style="background-color: #cfcfcf;">Manage Users</a></li>
    <li><a href="table2.php">Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php">Manage Meeting</a></li>
    <li><a href="table5.php">Manage Customer Request</a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    <div class="main-content">


        <div class="search-bar">
        <form action="search1.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search user name / userid / NIC">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>

        <div class="section">
            <br>
            <h3 >Manage Users </h3>
           
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	userId,name,nic,dob,gender,phoneNo,address,email,planeType,usertype from userdetail";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>User ID</th><th>Name</th><th>NIC</th><th>Date of Birth</th><th>Gender</th><th>Phone number</th><th>adress</th><th>gmail</th><th>plane Type</th><th>staus</th><th>user type</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo "<td >".$row["userId"]."</td>"."<td>".$row["name"]."<td>".$row["nic"]."</td>"."</td>"."<td>".$row["dob"]."</td>". "<td>".$row["gender"]."</td>"."<td>".$row["phoneNo"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["email"]."</td>"."</td>"."<td>".$row["planeType"]."</td>"."<td>".$row["usertype"]."</td>";
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
        </div>
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>
    </body>