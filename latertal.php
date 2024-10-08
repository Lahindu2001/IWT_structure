<!DOCTYPE html>
<html>

<head>
    <title>Talk to us later</title>
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f7fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('img.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.grid-container {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
    padding: 40px;
    width: 90%;
    max-width: 600px;
    transition: transform 0.3s ease;
}

.grid-container:hover {
    transform: translateY(-10px);
}

.card {
    margin-bottom: 20px;
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    font-family: inherit;
}

.card label {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 8px;
}

.card1,
.card2,
.card3 {
    width: 100%;
    padding: 12px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    font-family: inherit;
}

.card textarea {
    resize: none;
}

.but {
    background-color: #00ced1;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 20px;
    width: 100%;
    text-align: center;
    margin-top: 5px;

}

.but:hover {
    background-color: #008b8b;
    color: white;
}
</style>
</head>

<body>
<?php 
    require 'config.php';
?>

    <div class="grid-container">
        <form method ="post" action ="latertalkinsert.php">
            
        <div class="card">
            <label for="name">Name</label>
            <input class="card1"type="text" id="name" name="name" placeholder="Your name..">
        </div>

        <div class="card">
            <label for="email">Email</label>
            <input class="card2"type="email" id="email" name="email" placeholder="youremail@mail.com" required>
        </div>

        <div class="card">
        <label for="phone">phone number</label>
        <input class="card2" type="tel" id="phone" name="phone" placeholder="0712345678" pattern="[0-9]{10}" required>
        </div>

        <div class="card">
            <label for="subject">Subject</label>
            <textarea class="card3" id="subject" name="subject" placeholder="Write something.." style="height: 150px;"></textarea>
        </div>

        <div class="card">
        <input type="reset" value="reset" class="but">
        <input type="submit" value="Submit" class="but"> 
        </div>
</form>
    </div>

</body>

</html>

