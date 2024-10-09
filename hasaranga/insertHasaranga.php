<?php

require 'configHasaranga.php';

$custFname = $_POST["cusFirstName"];
$custLname = $_POST["custLname"];
$custNIC = $_POST["custNIC"];
$custDob = $_POST["custDob"];
$custGen = $_POST["custGen"];
$custMartial = $_POST["custMartial"];
$custContact = $_POST["custContact"];
$custAddress = $_POST["custAddress"];
$custmail = $_POST["custmail"];
$custMeetDate = $_POST["custMeetDate"];
$custMeetTime = $_POST["custMeetTime"];
$custLocation = $_POST["custLocation"];
$custMeetReason = $_POST["custMeetReason"];

$sql = "INSERT into agentreserve values ('$custFname','$custLname','$custNIC','$custDob','$custGen','$custMartial',
'$custContact','$custAddress','$custmail','$custMeetDate','$custMeetTime','$custLocation','$custMeetReason')";

if ($con->query($sql)) {
  echo "<script>
  alert('Reservation completed Succesfully');
  </script>";

  echo "<script>
    window.location.href = 'inputform.php';;
  </script>";
} else {
  echo "<script>
  alert('Reservation Error ')
  </script>";
  echo "Reservation process Unsuccesfully" . $con->error;
}

$con->close();

?>