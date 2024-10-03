<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src/asserts/css/in.css">
    <script src="in.js"></script>
</head>
<body>
    <div class="header">
        <center><img src="src/asserts/images/logo.png" alt="logo" width="100px" length="100px"></center>
        <h1>Admin Dashboard - Life Insurance Management System</h1>
        <script>document.write(Date());</script>
        <h4>Welcome, Admin</h4>
    </div>

    <div class="scrollmenu">
        <a href="in.php">Dashboard</a>
        <a href="table1.php" style="background-color:#220676">Manage Users</a>
        <a href="table2.php">Manage Claim</a>
        <a href="table3.php">Manage Employees</a>
        <a href="table4.php">Manage meeting</a>
        <a href="table5.php" >Manage customer request</a>
        <a href="in.php">Settings</a>
        <a href="#">Logout</a>
    </div>

    <?php
    require 'config.php';

    echo "<table>";
    echo "<div class='table'>";

   
    if (isset($_POST['search']) && !empty(trim($_POST['search']))) {
        $Searchkey = trim($_POST['search']);  

        $Searchkey = $Searchkey . '%'; 
        $sql = $con->prepare("SELECT * FROM userdetail WHERE nic LIKE '$Searchkey' or userId LIKE '$Searchkey'");
       
        $sql->execute();
        $result = $sql->get_result();

       
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>User ID</th><th>Name</th><th>NIC</th><th>Date of Birth</th><th>Gender</th><th>Phone Number</th><th>Address</th><th>Email</th><th>Plan Type</th><th>Status</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["userId"]."</td><td>".$row["name"]."</td><td>".$row["nic"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["phoneNo"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["planeType"]."</td>";
                echo "<td>
                        <form action='deleted1.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["userId"] . "'>
                            <input type='submit' value='Delete' class='btn btn-delete'>
                        </form>
                        <form action='updatemain1.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["userId"] . "'>
                            <input type='submit' value='Update' class='btn btn-edit'>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<script>
                alert('no Data found');
                </script>";
        }
    } else {
        echo "<script>
        alert('enter the search key');
        </script>";
    }

    echo "</table>";
    ?>

    <div class="backb">
        <center><a href='table1.php'><button class='btn-back'>Back to Dashboard</button></a></center>
    </div>
</body>
</html>
