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


<?PHP
require 'config.php';

    $row =  $_POST["qnum"];
    $name =  $_POST["name"];
    $email =  $_POST["email"];
    $qtype =  $_POST["qtype"];
    $textq = $_POST["textq"];
    
    if(empty($name)||empty($email)||empty($qtype )||empty($textq)||empty($row)){
    
        echo "all requried";
    
    }
    else{
    
        $sql = "UPDATE faqtab 
        SET Name = '$name', 
            email = '$email', 
            Qtype = '$qtype', 
            Qtext = '$textq' 
        WHERE faqNo = '$row'"; 
    
    if($con->query($sql))
    {
            echo "update succesful done";
            $last_id = $con->insert_id;

            header("Location: viwemyfaq.php?id=$row");
            exit();


    }else{
        echo "not update";
    }
}
    

$con->close();
?>
