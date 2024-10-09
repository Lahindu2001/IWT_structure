<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insurance Agent Meeting Form</title>
  <link rel="stylesheet" href="src/asserts/css/styleForm.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

</head>

<body>

<?php  include ('hedder.php') ;  ?>

  <div class="banner">
    <img src="src/asserts/images/consult1.jpg" alt="">
  </div>

  <div class="form-container">
    <h2>Insurance Agent Reservation Form</h2>
    <form id="meeting-form" action="insertHasaranga.php" method="POST">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" id="first-name" name="cusFirstName" required>
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" id="last-name" name="custLname" required>
      </div>
      <div class="form-group">
        <label>NIC Number</label>
        <input type="text" id="nic" name="custNIC" required>
      </div>
      <div class="form-group">
        <label>Date of Birth</label>
        <input type="date" id="dob" name="custDob" required>
      </div>
      <div class="form-group">
        <label>Gender</label>
        <select id="gender" name="custGen" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label>Marital Status</label>
        <select id="marital-status" name="custMartial" required>
          <option value="">Select</option>
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="divorced">Divorced</option>
          <option value="widowed">Widowed</option>
        </select>
      </div>
      <div class="form-group">
        <label>Contact Number</label>
        <input type="tel" id="contact-no" name="custContact" required placeholder="0712345678">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" id="address" name="custAddress" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" id="email" name="custmail" required placeholder="abc@gmail.com">
      </div>
      <div class="form-group">
        <label>Date of Meeting</label>
        <input type="date" id="meeting-date" name="custMeetDate" required>
      </div>
      <div class="form-group">
        <label>Time of Meeting</label>
        <input type="time" id="meeting-time" name="custMeetTime" required>
      </div>
      <div class="form-group">
        <label>Location of Meeting</label>
        <select id="location" name="custLocation" required>
          <option value="">Select</option>
          <option value="home">Home</option>
          <option value="branch">Nearest Branch</option>
        </select>
      </div>
      <div class="form-group">
        <label>Reason for Meeting</label>
        <input type="text" id="meeting-reason" name="custMeetReason" required>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
        <button type="reset">Reset Form</button>
        <script src="src/asserts/js files/inputFormJavaScript.js"></script>
      </div>
    </form>
  </div>

  <a href="newTry.php" id="resUpdate">Update My reservation</a>
  <?php  include ('footer.php') ;  ?>

</body>

</html>