<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Assure Life Insurance</title>
    <link rel="stylesheet" href="src/asserts/css/user dashboard.css" />
  </head>
  <body>
    
    <?php  include ('hedder.php') ;  ?>


    <section class="dashboard-section">
      <div class="dashboard-menu">
        <div class="menu-item">
          <img src="src/asserts/images/dashboard.png" alt="Dashboard Icon" />
          <p>DASHBOARD</p>
        </div>
        <div class="menu-item">
          <img src="src/asserts/images/payment.png" alt="Payment Details Icon" />
          <p>PAYMENT DETAILS</p>
        </div>
        <div class="menu-item">
          <img src="src/asserts/images/my plan.png" alt="My Plan Icon" />
          <p>MY PLAN</p>
        </div>
        <div class="menu-item">
          <img src="src/asserts/images/accounts details.png" alt="Account Details Icon" />
          <p>ACCOUNT DETAILS</p>
        </div>
        <div class="menu-item">
          <img src="src/asserts/images/accounts details.png" alt="Account Details Icon" />
          <a href="manageuser.php"><p>User manage</p></a>
        </div>
      </div>

      <div class="calendar">
        <h3>December 2023</h3>
        <div class="calendar-grid">
          <div class="calendar-item">Sun</div>
          <div class="calendar-item">Mon</div>
          <div class="calendar-item">Tue</div>
          <div class="calendar-item">Wed</div>
          <div class="calendar-item">Thu</div>
          <div class="calendar-item">Fri</div>
          <div class="calendar-item">Sat</div>
          <!-- Calendar days here -->
        </div>
      </div>

      <div class="details-form">
        <div class="form-group">
          <label for="full-name">Full Name</label>
          <input type="text" id="full-name" placeholder="Your Full Name" />
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" placeholder="mail@example.com" />
        </div>
        <div class="form-group">
            <label for="phone">Contact number</label>
            <input type="number" id="phone" placeholder="mail@example.com" />
          </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" placeholder="Address" />
        </div>
        <div class="form-group">
          <label for="national-id">National ID number</label>
          <input
            type="text"
            id="national-id"
            placeholder="National ID number"
          />
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="planType">
              <option value="male">Male</option>
              <option value="female">Female</option>

            </select>
          </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input
            type="date"
            id="dob"
            name="dob"
            placeholder="Select your date of birth"
          />
        </div>
        <div class="form-group">
          <label for="profile-picture">Profile Picture</label>
          <input type="file" id="profile-picture" />
        </div>
        <div class="form-group">
          <label for="planType">Plan Type</label>
          <select id="planType" name="planType">
            <option value="emergency">Emergency Coverage</option>
            <option value="complete">Complete Coverage</option>
            <option value="family">Family All-in-One</option>
            <option value="elderly">Elder Citizens</option>
          </select>
        </div>
        <div class="form-group">
          <label for="userType">User Type</label>
          <select id="userType" name="userType">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="employer">Employer</option>
          </select>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            placeholder="Minimum of 8 characters"
          />
        </div>
        <div class="form-group">
          <label for="confirm-password">RE enter Password</label>
          <input
            type="password"
            id="confirm-password"
            placeholder="Confirm your password"
          />
        </div>
        <div class="form-actions">
          <button class="submit-btn" onclick="submitFormData()">Submit</button>
        </div>
      </div>
    </section>

    <?php  include ('footer.php') ;  ?>

    <script src="src/asserts/js/userdashboard.js"></script>
  </body>
</html>
