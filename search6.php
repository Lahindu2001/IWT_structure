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
    <li><a href="table1.php" >Manage Users</a></li>
    <li><a href="table2.php">Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php">Manage Meeting</a></li>
    <li><a href="table5.php" >Manage Customer Request</a></li>
    <li><a href="table6.php" style="background-color: #cfcfcf;">Manage forgrt password Request </a></li>
    <li><a href="table7.php ">Manage FAQ Request </a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    <div class="search-bar">
        <form action="search6.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search custormer reqest email / phone number">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>
    <?php
    require 'config.php';

    echo "<table>";
    echo "<div class='table'>";

   
    if (isset($_POST['search']) && !empty(trim($_POST['search']))) {
        $Searchkey = trim($_POST['search']);  

        $Searchkey = $Searchkey . '%'; 
        $sql = $con->prepare("SELECT * FROM password_requests WHERE email LIKE '$Searchkey' or phone LIKE '$Searchkey'");
      
        $sql->execute();
        $result = $sql->get_result();

       
        if ($result->num_rows > 0) {
            echo "<table border='1'>";   
            echo "<tr><th>id</th><th>Email</th><th>phone</th><th>reason</th><th>status</th><th>created_at</th><th>Action</th>";
            while($row = $result->fetch_assoc()){
            echo"<tr>";
            echo "<td >".$row["id"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["phone"]."</td>". "<td>".$row["reason"]."</td>"."<td>".$row["status"]."</td>"."<td>".$row["created_at"]."</td>";
            echo "<td>
            <form action='deleted6.php' method='POST'>
                <input type='hidden' name='delete' value='" . $row["email"] . "'>
                <input type='submit' value='Delete'class='btn btn-delete'>

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
        <center><a href='table6.php'><button class='btn-back'>Back to Dashboard</button></a></center>
    </div>
</body>
</html>
