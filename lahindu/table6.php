<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="src\asserts\css\in.css">

</head>
<?php  include ('admin_header.php') ;  ?>

<ul class="navi">
    <li><a href="in.php">Dashboard</a></li>
    <li><a href="table1.php" >Manage Users</a></li>
    <li><a href="table2.php" >Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php"  >Manage Meeting</a></li>
    <li><a href="table5.php" >Manage Customer Request</a></li>
    <li><a href="table6.php" style="background-color: #cfcfcf;">Manage forgrt password Request</a></li>
    <li><a href="table7.php ">Manage FAQ Request </a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    
    <div class="main-content">
    <div class="search-bar">
        <form action="search6.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search custormer reqest  email / phone number">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>
        <div class="section">
            <br>
            <h3 >Manage FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require '../config.php';
                $sql = "SELECT 	id,email,phone,reason,status,created_at from  password_requests";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>id</th><th>Email</th><th>phone</th><th>reson</th><th>status</th><th>created_at</th><th>Action</th>";
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
                 
                ?>
            </table>
            </div>
        </div>
        </div><
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>

    </body>