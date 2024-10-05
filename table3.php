<!DOCTYPE html>
<html>

<head>
  
</head>

<body>

<?php  include ('admin_header.php') ;  ?>
<ul class="navi">
    <li><a href="in.php">Dashboard</a></li>
    <li><a href="table1.php" >Manage Users</a></li>
    <li><a href="table2.php" >Manage Claim</a></li>
    <li><a href="table3.php" style="background-color: #cfcfcf;">Manage Employees</a></li>
    <li><a href="table4.php">Manage Meeting</a></li>
    <li><a href="table5.php">Manage Customer Request</a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    <div class="main-content">

    <div class="search-bar">
        <form action="search3.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search employee id / nic / email">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>


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
    </div><
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>

</body>

</html>