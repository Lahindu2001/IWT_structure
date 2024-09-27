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

        <!-- Manage Users Section -->
        <div class="section">
            <br>
            <h3 >Manage Users</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT User_ID,Name,email,Phone,Address,Plane_Type from userdetail";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Adress</th><th>plane type</th><th>Action</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo "<td >".$row["User_ID"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>". "<td>".$row["Phone"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Plane_Type"]."</td>";
                        echo "<td>
                        <form action='deleted1.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["User_ID"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain1.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["User_ID"] . "'>
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

    </body>