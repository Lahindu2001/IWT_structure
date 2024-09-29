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
        <a href="table1.php">Manage Users</a>
        <a href="table2.php" style="background-color:#220676">Manage Claim</a>
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
        $sql = $con->prepare("SELECT * FROM claim WHERE userId LIKE '$Searchkey' or amount LIKE '$Searchkey' or claimId LIKE '$Searchkey'");
       

        $sql->execute();
        $result = $sql->get_result();

       
        if ($result->num_rows > 0) {
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
        <center><a href='table2.php'><button class='btn-back'>Back to Dashboard</button></a></center>
    </div>
</body>
</html>
