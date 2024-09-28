<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src\asserts\css\in.css">
    <script src="in.js"></script>
</head>

<body>

    <div class="header">
        <center> <img src="src/asserts/images/logo.png" alt="logo" width="100px" length="100px"> </center>
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
        <div class="section">
            <h3>Manage Employee</h3>
            <table>
                <div class="table">
                <?php

                require 'config.php';
                $sql = "SELECT employeeID,name,email,dob,address,nic,adminId from employee";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>Employee Id</th><th>Name</th><th>Email adress</th><th>date of birth</th><th>Adress</th><th>NIC</th><th>Admin Id</th><th>Action</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr >";
                        echo "<td >".$row["employeeID"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["nic"]."</td>"."<td>".$row["adminId"]."</td>";
                        echo "<td>
                        <form action='deleted3.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["employeeID"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain3.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["employeeID"] . "'>
                            <input type='submit' value='Update'class='btn btn-edit'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>
            </div>
            <center><a href="adduserform3.php" ><button class="btn btn-add">ADD New Employee</button></a></center>
        </div>
    </div>

</body>

</html>