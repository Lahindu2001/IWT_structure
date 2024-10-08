<?php

require 'configHasaranga.php';

$custFname = $_POST["cusFirstName"];
$custLname = $_POST["cusLastName"];
$custNIC = $_POST["cusNIC"];
$custDob = $_POST["cusDob"];
$custGen = $_POST["cusGender"];
$custMartial = $_POST["cusMaritalStatus"];
$custContact = $_POST["cusContactNo"];
$custAddress = $_POST["cusAddress"];
$custmail = $_POST["cusEmail"];
$custMeetDate = $_POST["cusMeetingDate"];
$custMeetTime = $_POST["cusMeetingTime"];
$custLocation = $_POST["cusLocation"];
$custMeetReason = $_POST["cusMeetingReason"];


if (
  empty($custFname) || empty($custLname) || empty($custNIC) || empty($custDob) || empty($custGen) || empty($custMartial) || empty($custContact) ||
  empty($custAddress) || empty($custmail) || empty($custMeetDate) || empty($custMeetTime) || empty($custLocation) || empty($custMeetReason)
) {

  echo "<script>
    alert('Check and Fill all data');
    window.location.href = 'newTryRead.php';
  ";
} else {
  $sql = "UPDATE agentreserve set firstName = '$custFname',lastName = '$custLname',dob = '$custDob',gender = '$custGen',
martialStatus = '$custMartial',contactNumber = '$custContact',address = '$custAddress',
email = '$custmail',doMeeting = '$custMeetDate',toMeeting = '$custMeetTime',location = '$custLocation',reason = '$custMeetReason' 
where NIC = '$custNIC'";


  if ($con->query($sql)) {
    echo "
  
  <script>
    alert ('Reservation Updated Succesfully');
    window.location.href = 'inputform.php';
  </script>";
  } else {
    echo "Reservation update unsuccessful: " . $con->error;
  }

}

?>