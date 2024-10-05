<!DOCTYPE html>
<html>

<head>
    
</head>

<body>

<?php  include ('admin_header.php') ;  ?>

<ul class="navi">
    <li><a href="in.php">Dashboard</a></li>
    <li><a href="table1.php" >Manage Users</a></li>
    <li><a href="table2.php" style="background-color: #cfcfcf;">Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php">Manage Meeting</a></li>
    <li><a href="table5.php">Manage Customer Request</a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>


    <div class="main-content">

    
    <div class="search-bar">
        <form action="search2.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search user id / amount / claim id">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>


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
        </div><
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>
    </body>