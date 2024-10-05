
    <title>Admin</title>
    <link rel="stylesheet" href="src\asserts\css\in.css">
    <script src="in.js"></script>

    <style>  
    .subbut {
        padding: 7px 25px;
        background-color: rgb(0, 179, 220);
        color: rgb(86, 86, 82);
        border: none;
        border-radius: 10px;
        font-size: 20px;
         cursor: pointer;
    } 
    .btn-logout{

        background-color: #dc3545;
        padding: 17px 30px;
        font-size: 22px;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        margin: 0;
    }
    .admin_name{
        float: right;
        margin-top: 95px;
        margin-right: 25px;
    }
    
    .admin_name p{
      color: white;
      font-size: 19px;

    }
    
    </style>
</head>


<body>


<div class = "admin_name">
<?php
        require 'config.php';
        session_start();
        if (isset($_SESSION['email']) && $_SESSION['usertype'] === 'ADMIN') {
           $na =  htmlspecialchars($_SESSION['name']) ;
            echo "<P> WELCOME , ADMIN : " .$na." </p>";
            echo "<p>" . htmlspecialchars($_SESSION['email']) ."</p>";
        } else {
            header('Location: login.php');
            exit();
        }        
        ?>
        </div>
        <div class="header">
          <img src="src/asserts/images/logo.png" alt="logo" width="100px" length="100px">
          <h1 >Admin Dashboard - Life Insurance Management System </h1>
          
        </div>
        
        
    </li>

        </head></body>
  