<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src/asserts/css/in.css">
    <script src="src/assrets/js/in.js"></script>
</head>
<body>
<?php  include ('admin_header.php') ;  ?>

<ul class="navi">
    <li><a href="in.php">Dashboard</a></li>
    <li><a href="table1.php" >Manage Users</a></li>
    <li><a href="table2.php" style="background-color: #cfcfcf;">Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php"  >Manage Meeting</a></li>
    <li><a href="table5.php" >Manage Customer Request</a></li>
    <li><a href="table6.php" >Manage forgrt password Request</a></li>
    <li><a href="table7.php ">Manage FAQ Request </a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    <div class="search-bar">
        <form action="search2.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search user id / amount / claim id">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>

    <?php
    require '../config.php';

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
