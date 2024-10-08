<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $qtype = $_POST["qtype"];
        $textq = $_POST["textq"];

        $sql = "INSERT INTO faqtab VALUES ('','$name','$email','$qtype' , '$textq')";

            if($con->query($sql))
            {
                echo "<script>
                alert('succesful done');
                </script>";

            $last_id = $con->insert_id;
            header("Location: viwemyfaq.php?id=" . $last_id);
            exit();

            }
            else
            {
                echo "Error".$con->error;
            }
    } 
    
    else {
        echo "No form submitted.";
    }

         $con->close();
    ?>

    <?php
    
    
    
    
    ?>








</body>
</html>