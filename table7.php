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
    <li><a href="table6.php">Manage forgrt password Request</a></li>
    <li><a href="table7.php" style="background-color: #cfcfcf;">Manage FAQ Request </a></li>
    <li><form action="adminlogout.php" method="POST">
     <input name="Adminlogout" type="submit" value="Log Out" class="btn-logout">
    </form></li></ul>

    
    <div class="main-content">
    <div class="search-bar">
        <form action="search7.php" method="POST">
        <input type="text" name='search' value = "" placeholder = "search custormer reqest email / FAQ type">
        <button class = "subbut" input type='submit' value='search'>search</button>
        </form></div>
        <div class="section">
            <br>
            <h3 >Manage Billing and Payments Type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Billing and Payments' ";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>

            <br>
            <h3 >Manage Policy Information type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Policy Information'";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>


            <br>
            <h3 >Manage Claims Process type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Claims Process'";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>


            <br>
            <h3 >Manage Coverage option type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Coverage option'";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>

            <br>
            <h3 >Manage Technical Support type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Technical Support'";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>


            <br>
            <h3 >Manage Other type FAQ reqest</h3>
            <table>
                <div class="table" >
                <?php

                require 'config.php';
                $sql = "SELECT 	faqNo,Name,email,Qtype,Qtext from  faqtab Where Qtype = 'Other'";

                $result =$con->query($sql);
                echo "<table border='1'>";


                echo "<table border='1'>";   
                echo "<tr><th>quicition no</th><th>Name</th><th>Email</th><th>coustomer quiction</th><th>Action</th>";
                while($row = $result->fetch_assoc()){
                echo"<tr>";
                echo "<td >".$row["faqNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Qtext"]."</td>";
                echo "<td>

                        <form action='deleted6.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["faqNo"] . "'>
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