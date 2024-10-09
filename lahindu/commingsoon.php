<!DOCTYPE html>
<html>
<head>
    <title>comming soon</title>
    <link rel="stylesheet" href="src/asserts/css/commingsoon.css">
    <link rel="stylesheet" href="../hasaranga/src/asserts/css/headfoot.css">
    <style>
       .return {
            margin: 0;
  position: absolute;
  top: 45%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
        }
    .btn-back{
        background-color: #dc3545;
        padding: 10px 25px;
        font-size: 20px;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        
    }  
    </style>
</head>
<body>
<div class= "heder">
<?php  include ('../hasaranga/hedder.php') ;  ?>
 </div>

<div class="bgimg">
  
  <div class="middle">
  <hr>
    <h1>COMING SOON</h1>
    <script>
 alert('comming soon.');
 </script>
<div class = "return">
 <center><a href='payment.php' ><button class='btn-back'>back to the home</button></a></center> 

</div>
    <hr>
  </div>
  </div>
  <?php  include ('../hasaranga/footer.php') ;  ?>
</body>
</html>
