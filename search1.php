<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src/asserts/css/in.css">
    <script src="in.js"></script>
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

    <div class="search-bar">
        <form action="search1.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search user name / userid / NIC">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>

        
    <?php
    require 'config.php';

    echo "<table>";
    echo "<div class='table'>";

   
    if (isset($_POST['search']) && !empty(trim($_POST['search']))) {
        $Searchkey = trim($_POST['search']);  

        $Searchkey = $Searchkey . '%'; 
        $sql = $con->prepare("SELECT * FROM userdetail WHERE nic LIKE '$Searchkey' or userId LIKE '$Searchkey' or name LIKE '$Searchkey'");
       
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
