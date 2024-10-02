<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src\asserts\css\in.css">
    <script src="in.js"></script>
    <style> .subbut {
        padding: 10px 20px;
        background-color: rgb(0, 179, 220);
        color: rgb(86, 86, 82);
        border: none;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
    } 
    .btn-logout{
        background-color: #dc3545;
        padding: 10px 25px;
        font-size: 20px;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        margin: 0;
    }  </style>
</head>

<body>

    <div class="header">
        <center> <img src="src/asserts/images/logo.png" alt="logo" width="100px" length="100px"> </center>
        <h1 >Admin Dashboard - Life Insurance Management System </h1>
        <script>document.write(Date());</script>
        <h4>Welcome, Admin</h4>
         
        <form action="adminlogout.php" method="POST">
	      <input name="Adminlogout" type="submit" value="Log Out" class='btn-logout'>
	    </form> 
       
    </div>


    <div class="scrollmenu" >
        <a href="in.php"> Dashboard</a>
        <a href="table1.php" > Manage Users</a>
        <a href="table2.php" style="background-color:#220676"> Manage Claim</a>
        <a href="table3.php"> Manage Employees</a>
        <a href="table4.php"> Manage meeting</a>
        <a href="table5.php"> Manage custormer reqest</a>
        <a href="in.php"> Settings</a>
        <a href="#"> Logout</a>
    </div>


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