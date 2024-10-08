<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update faq</title>
</head>
<body>
<?php 

    require 'config.php';

    $nic =$_POST["update"];
    $sql = "SELECT faqNo,name,email,Qtype,Qtext FROM faqtab WHERE faqNo = '$nic'";
   

    $result =$con->query($sql);
    while($row = $result->fetch_assoc()){
    
    $faqno = $row["faqNo"];
   $faqname = $row["name"];
    $faqemail = $row["email"];
    $faqtype = $row["Qtype"];
    $faqQtext  = $row["Qtext"];
 

    }
            
echo "<form action='faqupdate.php' method='POST'>
    <h1>Add Your Questions</h1>

    <input type='hidden' id='faqNo' name='faqNo' value = '$faqno' ><br> 

    <label>Name</label>
    <input type='text' name='name' required value ="$faqname"><br>

    <label>Email address</label>
    <input type='email' name='email' required value ="$faqemail "><br>

    <label>Questions type</label>
    <select id='qtype' name='qtype' required value ="$faqtype">
        <option value='Billing and Payments'>Billing and Payments</option>
        <option value='Policy Information'>Policy Information</option>
        <option value='Claims Process'>Claims Process</option>
        <option value='Coverage option'>Coverage option</option>
        <option value='Technical Support'>Technical Support</option>
        <option value='Other'>Other</option>
    </select><br>

    <label>Your Question</label><br>
    <textarea name='textq' rows='4' cols='50' required value ="$faqQtext"></textarea><br>

    <input type='submit' name='submit' value='Submit'>
</form>";  ?>
</body>
</html>