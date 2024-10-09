<?php

$con = new mysqli("localhost", "root", "", "assure_life_ms");

if ($con->connect_error) {
  die("Connection failed" . $con->connect_error);
}


?>