<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My FAQs</title>
    <style>
       
        /* Styling the FAQ container */
.faq-container {
    width: 60%;
    margin: 20px auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}

/* Styling the FAQ headings and paragraphs */
h1 {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

p strong {
    color: #333;
}

/* Styling the action buttons */
.faq-actions {
    text-align: center;
    margin-top: 20px;
}

.btn-update,
.btn-delete {
    padding: 10px 20px;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    color: white;
    margin: 0 10px;
    display: inline-block;
    cursor: pointer;
}

.btn-update {
    background-color: #28a745;
    border: none;
}

.btn-update:hover {
    background-color: #218838;
}

.btn-delete {
    background-color: #dc3545;
    border: none;
}

.btn-delete:hover {
    background-color: #c82333;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .faq-container {
        width: 90%;
    }

    p {
        font-size: 16px;
    }

    .btn-update,
    .btn-delete {
        font-size: 14px;
        padding: 8px 15px;
    }
}

    </style>
</head>
<body>
<?php
require 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM faqtab WHERE faqNo = '$id'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
        $fnum = $row['faqNo'];
        $fname = $row['Name'];
        $femail = $row['email'];
        $qtype = $row['Qtype'];
        $qtext = $row['Qtext'];

        echo "<div class='faq-container'>";
        echo "<h1>Your Question</h1>";
        echo "<p><strong>Name:</strong> $fname</p>";
        echo "<p><strong>Email:</strong> $femail</p>";
        echo "<p><strong>Question Type:</strong> $qtype</p>";
        echo "<p><strong>Question:</strong> $qtext</p>";
        echo "<div class='faq-actions'>";
        echo "<a href='faqupdate.php?id=$fnum' class='btn-update'>Update</a>";
        echo "<a href='?action=delete&id=$fnum' class='btn-delete' onclick='return confirm(\"Are you sure you want to delete this FAQ?\");'>Delete</a>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p>No FAQs found</p>";
    }
}

$con->close();
?>


<?php
// Handle delete action
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    require 'config.php'; // Ensure the database connection is included

    // Use this ID to delete the corresponding record
    $sql = "DELETE FROM faqtab WHERE faqNo = $id";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href = 'FAQ_PAGE.php';</script>";
    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close(); // Close the database connection
}
?>
</body>
</html>
