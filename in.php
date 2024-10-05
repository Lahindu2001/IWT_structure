<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
<?php  include ('admin_header.php') ;  ?>
<ul class="navi">
    <li><a href="in.php" style="background-color: #cfcfcf;">Dashboard</a></li>
    <li><a href="table1.php">Manage Users</a></li>
    <li><a href="table2.php">Manage Claim</a></li>
    <li><a href="table3.php">Manage Employees</a></li>
    <li><a href="table4.php">Manage Meeting</a></li>
    <li><a href="table5.php">Manage Customer Request</a></li>
    <li style="float:right"><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>



    <div class="main-content1">
    
    
        <?php 
        require 'config.php';
        $sql = "SELECT count(name) AS total_users from userdetail";
        $result =$con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $totalUsers = $row['total_users'];
            echo "
            <a href = 'table1.php'> <div class = 'datail1'>
              <div><h1> $totalUsers</h1></div>
              <div><p>User Count</p></div>
            </div></a>
            ";
        } 
        else {
            echo "Error: " . $conn->error;
        }
        ?>

        <?php 
        require 'config.php';
        $sql = "SELECT sum(amount) AS total_Amount from claim";
        $result =$con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $totalclam = $row['total_Amount'];
            echo "
            <a href = 'table2.php'><div class = 'datail1'>
              <div><h1>RS.$totalclam</h1></div>
              <div><p>Total Claim</p></div>
            </div></a>
            ";
        } 
        else {
            echo "Error: " . $conn->error;
        }
        ?>
        <?php 
        require 'config.php';
        $sql = "SELECT count(name) AS total_Employee from employee";
        $result =$con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $totalEmploye= $row['total_Employee'];
            echo "
            <a href = 'table3.php'><div class = 'datail1'>
              <div><h1> $totalEmploye</h1></div>
              <div><p>Empoyee Count</p></div>
            </div></a>
            ";
        } 
        else {
            echo "Error: " . $conn->error;
        }
        ?>

        
<?php 
        require 'config.php';
        $sql = "SELECT count(nic) AS total_Agent_bokking from agentreserve";
        $result =$con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $totalAbooking = $row['total_Agent_bokking'];
            echo "
            <a href = 'table4.php'><div class = 'datail1'>
              <div><h1> $totalAbooking</h1></div>
              <div><p>Agent Booking</p></div>
            </div></a>
            ";
        } 
        else {
            echo "Error: " . $conn->error;
        }
        ?>

        
<?php 
        require 'config.php';
        $sql = "SELECT count(name) AS total_custormer_reqest from formformail";
        $result =$con->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $totalCusReq = $row['total_custormer_reqest'];
            echo "
            <a href = 'table5.php'><div class = 'datail1'>
              <div><h1> $totalCusReq</h1></div>
              <div><p>Custormer reqest Count</p></div>
            </div></a>
            ";
        } 
        else {
            echo "Error: " . $conn->error;
        }
        ?>
    </div>
    
    <div>
        <p></p>
    </div>

   
</body>

</html>