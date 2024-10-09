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
    <li><a href="table3.php"  style="background-color: #cfcfcf;">Manage Employees</a></li>
    <li><a href="table4.php"  >Manage Meeting</a></li>
    <li><a href="table5.php" >Manage Customer Request</a></li>
    <li><a href="table6.php" >Manage forgrt password Request</a></li>
    <li><a href="table7.php ">Manage FAQ Request </a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    
    <div class="search-bar">
        <form action="search3.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search employee id / nic / email">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>
        
    <?php
    require 'config.php';

    echo "<table>";
    echo "<div class='table'>";

   
    if (isset($_POST['search']) && !empty(trim($_POST['search']))) {
        $Searchkey = trim($_POST['search']);  

        $Searchkey = $Searchkey . '%'; 
        $sql = $con->prepare("SELECT * FROM employee WHERE nic LIKE '$Searchkey' or employeeID LIKE '$Searchkey' or email LIKE '$Searchkey'");
       

        $sql->execute();
        $result = $sql->get_result();

       
        if ($result->num_rows > 0) {
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
        <center><a href='table3.php'><button class='btn-back'>Back to Dashboard</button></a></center>
    </div>
</body>
</html>
