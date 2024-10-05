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
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php"  style="background-color: #cfcfcf;">Manage Meeting</a></li>
    <li><a href="table5.php">Manage Customer Request</a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>
         
        
    </div>

    <div class="main-content">

    
    <div class="search-bar">
        <form action="search4.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search agent service / nic / locaion">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>

        <div class="section">
            <h3>Manage metting</h3>
            <table>
                <div class="table">
                <?php

                require 'config.php';
               
                $sql = "SELECT firstName,lastName,NIC,dob,gender,martialStatus,contactNumber,address,email,doMeeting,toMeeting,location,reason from agentreserve";

                $result =$con->query($sql);
                echo "<table border='1'>";


                    echo "<tr><th>First Name</th><th>Last name</th><th>NIC</th><th>date of birth</th><th>Gender</th><th>Martial Status</th><th>contact number</th><th>address</th><th>email</th><th>Date of meeting</th><th>Time to meeting</th><th>Location</th><th>Reason</th><th>Status</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr >";
                        echo "<td >".$row["firstName"]."</td>"."<td>".$row["lastName"]."</td>"."<td>".$row["NIC"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["martialStatus"]."</td>"."<td>".$row["contactNumber"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["doMeeting"]."</td>"."<td>".$row["toMeeting"]."</td>"."<td>".$row["location"]."</td>"."<td>".$row["reason"]."</td>";
                        echo "<td>
                        <form action='deleted4.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["NIC"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain4.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["NIC"] . "'>
                            <input type='submit' value='Update'class='btn btn-edit'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>
            </div>
            <center><a href="adduserform4.php" ><button class="btn btn-add">ADD New Meeting</button></a></center>
        </div>
    </div>
    </div><
        <div class = "backb">
 <center><a href='in.php' ><button class='btn-back'>back to Dashbord</button></a></center> 
</div>

</body>

</html>