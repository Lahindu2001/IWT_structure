<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src\asserts\css\in.css">
    <script src="in.js"></script>
</head>

<body>

    <div class="header">
        <center> <img src="profile.jpg" alt="logo" width="50px" length="50px"> </center>
        <h1 >Admin Dashboard - Life Insurance Management System </h1>
        <script>document.write(Date());</script>
        <h4>Welcome, Admin</h4>
    </div>


    <div class="scrollmenu" >
        <a href="in.php"> Dashboard</a>
        <a href="table1.php" > Manage Users</a>
        <a href="table2.php"> Manage Claim</a>
        <a href="table3.php"> Manage Employees</a>
        <a href="in.php"> Manage Policies</a>
        <a href="in.php"> Settings</a>
        <a href="#"> Logout</a>
    </div>


    <div class="main-content">

        <!-- Manage cliam Section -->
        <div class="section">
            <h3>Manage claim</h3>
            <table>
                <div class="table">
                <?php

                require 'config.php';

                $sql = "SELECT claimId,userId,amount,claimDescription,date,status,adminId from claim";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>claim Id</th><th>User ID</th><th>Amount</th><th>claim Description</th><th>Date</th><th>status</th><th>Admin ID</th><th>Action</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr >";
                        echo "<td >".$row["claimId"]."</td>"."<td>".$row["userId"]."</td>"."<td>".$row["amount"]."</td>". "<td>".$row["claimDescription"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["status"]."</td>"."<td>".$row["adminId"]."</td>";
                        echo "<td>
                        <form action='deleted2.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["claimId"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain2.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["claimId"] . "'>
                            <input type='submit' value='Update'class='btn btn-edit'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>
            </div>
            <center><a href="adduserform2.php" ><button class="btn btn-add">ADD New Claim</button></a></center>
        </div>
    </body>