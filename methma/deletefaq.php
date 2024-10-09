<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My FAQs</title>
    <style>
       
        .btn-update, .btn-delete {
            padding: 5px 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
<?php
require '../config.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM faqtab WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";

    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close();
} else {
    echo "No ID provided to delete.";
}
?>

 </body>
</html>
