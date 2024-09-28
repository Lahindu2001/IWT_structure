<?php

$con = new mysqli("localhost","root","","assure_life_ms");
    if($con->connect_error){
        die("conction faild".$con->connect_error);
    }

?>