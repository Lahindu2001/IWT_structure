<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="src/asserts/css/user dashboard.css">
    <link rel="stylesheet" href="../hasaranga/src/asserts/css/headfoot.css">
</head>

<body>
<?php  include ('../hasaranga/hedder.php') ; ?>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Email</th>
                <th>Plane Type</th>
                <th>User Type</th>
                <th>Profile Picture</th>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'database.php';

            $result = Database::search("SELECT * FROM userdetail");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['userId']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['nic']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['phoneNo']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['planeType']; ?></td>
                        <td><?php echo $row['usertype']; ?></td>
                        <td>
                            <button class="log-in" onclick="userDelete('<?php echo $row['userId'] ?>')">delete</button>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='11'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="src/asserts/js/userdashboard.js"></script>

</body>

</html>