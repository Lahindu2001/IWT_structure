<?php

$con = new mysqli("localhost","root","","database1");
    if($con->connect_error){
        die("conction faild".$con->connect_error);
    }

?>