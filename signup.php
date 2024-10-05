<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            text-align: left;
        }
        label, input, select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: auto;
            padding: 10px;
        }
    </style>
    <script src="src/asserts/js/js1.js"></script>
</head>
<body>

    <?php include('hedder.php'); ?>

    <div class="container">
        <form id="signup-form" action="signup.in.php" method="POST" onsubmit="return validateForm()">
            <h2>Register</h2>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="nic">NIC:</label>
            <input type="text" id="nic" name="nic" maxlength="20" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="phoneNo">Phone Number:</label>
            <input type="tel" id="phoneNo" name="phoneNo" pattern="[0-9]{10}" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" maxlength="100" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="30" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" maxlength="20" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirmpassword" maxlength="20" required>

            <label for="planeType">Plan Type:</label>
            <select id="planeType" name="planeType" required>
                <option value="Family_all">Family All-in-One Plan</option>
                <option value="Emergency">Emergency Coverage Plan</option>
                <option value="Elder">Elder Citizen Plan</option>
                <option value="Complete">Complete Coverage</option>
            </select>

            <input type="hidden" id="usertype" name="usertype" value="CLIENT">

            <input type="checkbox" id="terms" name="terms"> I agree to the terms and conditionss.

            <input type="submit" name="submit" value="Register" class="button" id="submitBtn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>
