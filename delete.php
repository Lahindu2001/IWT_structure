<?php

require 'config.php';

$custFname = $_POST["cuFirstName"];
$custNIC = $_POST["cusNIC"];
$custContact = $_POST["cusContactNo"];

$sql = "DELETE from agentreserve where NIC = '$custNIC'";

if ($con->query($sql)) {
  echo "
  <script>
        alert('Rservation cansel is Successfully');
        window.location.href = 'inputform.php';
  </script>";
} else {
  echo "Rservation cansel is Unsuccessfully" . $con->error;
}

$con->close();

?>