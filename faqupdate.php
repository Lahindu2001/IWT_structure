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

/* Styling the overall form */
form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}
h2{
    text-align: center;
    font-size: 24px;
}
/* Styling the form heading */
h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Styling the labels */
label {
    display: block;
    font-size: 16px;
    margin-bottom: 8px;
    color: #555;
}

/* Styling the input fields */
input[type="text"],
input[type="email"],
select,
textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Hover effect for input fields */
input[type="text"]:hover,
input[type="email"]:hover,
select:hover,
textarea:hover {
    border-color: #888;
}

/* Styling the submit button */
input[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Hover effect for submit button */
input[type="submit"]:hover {
    background-color: #218838;
}

/* Styling the select dropdown */
select {
    appearance: none;
    background: url('data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMzMzIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4IDUiPjxwYXRoIGQ9Ik0wIDBoMmw0IDQgNEw4IDB6Ii8+PC9zdmc+') no-repeat right 10px center;
    background-size: 12px;
    background-color: white;
    padding-right: 30px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    form {
        width: 90%;
    }
}

@media (max-width: 480px) {
    form {
        width: 100%;
    }

    input[type="submit"] {
        font-size: 14px;
        padding: 20px;
    }
}
.text1{
    
padding :10px;

}

</style>

<?php 

require 'config.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT faqNo,Name,email,Qtype,Qtext from faqtab WHERE faqNo = '$id'";

    $result =$con->query($sql);
    while($row = $result->fetch_assoc()){
        
    $fano = $row["faqNo"];
    $name =  $row["Name"];
    $email =  $row["email"];
    $qtype =  $row["Qtype"];
    $textq = $row["Qtext"];
    
echo "
    <form action='updatefaq.php' method='POST'>
    
    <h1>Update Your Questions </h1>
    <h2> No: $fano </h2>
    
    <input type='hidden' name='qnum'  value = '$fano' ><br> 

    <label>Name</label>
    <input type='text' name='name' required value = '$name' ><br>
    
    <label>Email address</label>
    <input type='email' name='email' required value =  '$email'><br>
    
    <label>Questions type</label>
    <select id='qtype' name='qtype' required value = ' $qtype'>
        <option value='Billing and Payments'>Billing and Payments</option>
        <option value='Policy Information'>Policy Information</option>
        <option value='Claims Process'>Claims Process</option>
        <option value='Coverage option'>Coverage option</option>
        <option value='Technical Support'>Technical Support</option>
        <option value='Other'>Other</option>
    </select><br>
    <div class = 'text1'>
    <label>Your Question</label><br>
    <input type='text' name='textq' required value = '$textq' ><br>
    </div>
    <input type='submit' name='submit' value='Submit' class = 'btn-update'>
    </form>

    ";
}
}   $con->close();
?>