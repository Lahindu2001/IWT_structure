<html>


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="src/asserts/css files/newTryReadCss.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php

    require 'configHasaranga.php';

    $custNIC = $_POST["cusNIC"];

    $sql = "SELECT firstName,lastName,NIC,dob,gender,martialStatus,contactNumber,address,email,doMeeting,toMeeting,location,reason from agentreserve";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $found = false;

        while ($row = $result->fetch_assoc()) {
            if ($custNIC == $row["NIC"]) {

                $custFname = $row["firstName"];
                $custLname = $row["lastName"];
                $custNIC = $row["NIC"];
                $custDob = $row["dob"];
                $custGen = $row["gender"];
                $custMartial = $row["martialStatus"];
                $custContact = $row["contactNumber"];
                $custAddress = $row["address"];
                $custEmail = $row["email"];
                $custMeetDate = $row["doMeeting"];
                $custMeetTime = $row["toMeeting"];
                $custLocation = $row["location"];
                $custMeetReason = $row["reason"];
                $found = true;
                break;
            }
        }

        if (!$found) {

            echo "
            <script>
            window.location.href = 'newTry.php';
            alert('Invalid NIC has Entered');
            </script>";
        }
    }
    echo "<h1 class='TopicHead'>Update Your Reservation</h1>";

    echo "

        
        <form action = 'updateHasaranga.php' method = 'POST' id='updateForm'> 

            <div class='form-group'>
                  <label >NIC</label> 
                  <input type='text' name='cusNIC' value='$custNIC'   readonly>
              </div>
            <div class='form-group'>
                  <label for='first-name'>First Name</label> 
                  <input type='text' id='first-name' name='cusFirstName' required value=' $custFname'>
              </div>

              <div class='form-group'>
                  <label>Last Name</label> 
                  <input type='text' id='last-name' name='cusLastName' required value='$custLname'>
              </div>

              <div class='form-group'>
                  <label>Date of Birth</label> 
                  <input type='date' id='dob' name='cusDob' required value='$custDob'>
              </div>

              <div class='form-group'>
                  <label >Gender</label> 
                  <select id='gender' name='cusGender' required value='$custGen'>
                      <option value='male'>Male</option>
                      <option value='female'>Female</option>
                      <option value='other'>Other</option>
                  </select>
              </div>

              <div class='form-group'>
                  <label>Marital Status</label> 
                  <select id='marital-status' name='cusMaritalStatus' required value='$custMartial'>
                      <option value='single'>Single</option>
                      <option value='married'>Married</option>
                      <option value='divorced'>Divorced</option>
                      <option value='widowed'>Widowed</option>
                  </select>
              </div>

              <div class='form-group'>
                  <label >Contact Number</label> 
                  <input type='tel' id='contact-no' name='cusContactNo' required value='$custContact'>
              </div>

              <div class='form-group'>
                  <label>Address</label> 
                  <input type='text' id='address' name='cusAddress' required value='$custAddress'>
              </div>

              <div class='form-group'>
                  <label>Email</label> 
                  <input type='email' id='email' name='cusEmail' required value='$custEmail'>
              </div>

              <div class='form-group'>
                  <label>Date of Meeting</label> 
                  <input type='date' id='meeting-date' name='cusMeetingDate' required value='$custMeetDate'>
              </div>

              <div class='form-group'>
                  <label>Time of Meeting</label> 
                  <input type='time' id='meeting-time' name='cusMeetingTime' required value='$custMeetTime'>
              </div>

              <div class='form-group'>
                  <label >Location of Meeting</label> 
                  <select id='location' name='cusLocation' required value='$custLocation'>
                      <option value='home'>Home</option>
                      <option value='branch'>Nearest Branch</option>
                  </select>
              </div>

              <div class='form-group'>
                  <label>Reason for Meeting</label> 
                  <input type='text' id='meeting-reason' name='cusMeetingReason' required value='$custMeetReason'>
              </div>

              <div class='form-group'>
                  <button type='submit'>Update New Details</button>
                  <script src='src/asserts/js files/UpdateMeetingValidate.js'></script>
              </div>
        </form>
    ";
    ?>

    <button onclick="PostUpdate()" id="PostUpdateBtn" style="display:none">Update Reservation << </button>
            <div class="deleteBtn">
                <button type="submit" onclick="showCansel()">Click to Cansel Your Reservation</button>
            </div>
            </div>

            <div class="deleteSection" style="display:none" id="form2">
                <fieldset class="fieldset2">
                    <legend>Delete The Reservation</legend>
                    <div class="cont">

                        <form action="deleteHasaranga.php" method="POST">
                            <div class="formGrp">
                                <label>First Name</label><br><br>
                                <input type="text" id="first-name" name="cuFirstName" required>
                            </div>
                            <div class="formGrp">
                                <label>NIC Number</label><br><br>
                                <input type="text" id="last-name" name="cusNIC" required>
                            </div>
                            <div class="formGrp">
                                <label>Contact Number</label><br><br>
                                <input type="tel" id="contact-no" name="cusContactNo" required>
                            </div>

                            <button type="Submit" onclick="canselMeeting()" id="canselRes">Cansel Rservation</button>
                        </form>
                    </div>
                </fieldset>

                <div class="canselImg">
                    <img src="src/asserts/images/cansel.jpg" alt="">
                </div>
            </div>


         <script src="src/asserts/js files/newTryReadjs.js"></script>
</body>

</html>