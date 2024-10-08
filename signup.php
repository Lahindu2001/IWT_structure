<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <style>
       

/* Container styling */
.container {
    width: 50%;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
    border: 1px solid #e0e0e0;
}

/* Form heading */
h2 {
    color: #007BFF;
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Label styling */
label {
    font-size: 16px;
    color: #333;
    margin-top: 10px;
    display: block;
}

/* Input field styling */
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
input[type="date"],
select {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

/* Focus effect for inputs */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="password"]:focus,
input[type="date"]:focus,
select:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Button styling */
.button {
    background-color: #007BFF;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);
}

.button:hover {
    background-color: #0056b3;
}

/* Checkbox and terms */
input[type="checkbox"] {
    margin-right: 10px;
}

#terms {
    margin-bottom: 20px;
}

/* Link to login page */
p {
    text-align: center;
    color: #333;
}

p a {
    color: #007BFF;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        width: 80%;
    }
}

@media (max-width: 480px) {
    .container {
        width: 100%;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="date"],
    select {
        font-size: 14px;
        padding: 10px;
    }

    .button {
        font-size: 14px;
        padding: 10px 15px;
    }
}


 
    </style>

<script>
function validateForm() {
    // Get form elements
    var name = document.getElementById('name').value;
    var nic = document.getElementById('nic').value;
    var dob = document.getElementById('dob').value;
    var phoneNo = document.getElementById('phoneNo').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;
    var terms = document.getElementById('terms').checked;

    // Validate Name
    if (name.trim() === "") {
        alert("Name is required.");
        return false;
    }

    // Validate NIC
    if (nic.trim() === "") {
        alert("NIC is required.");
        return false;
    }

    // Validate Date of Birth
    if (dob === "") {
        alert("Date of Birth is required.");
        return false;
    }

    // Validate Phone Number
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phoneNo)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // Validate Email
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate Password
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    // Confirm Password Match
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    // Check if Terms and Conditions are agreed
    if (!terms) {
        alert("You must agree to the terms and conditions.");
        return false;
    }

    // If all validations pass, allow form submission
    return true;
}
</script>

    <script src="src/asserts/js/js1.js"></script>
</head>
<body>


    <div class="container">
        <form id="signup-form" action="signup.in.php" method="POST" onsubmit="return validateForm()">
            <h2>Register</h2>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="nic">NIC:</label>
            <input type="text" id="nic" name="nic" maxlength="20" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="date" name="date" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <h2>Account Information</h2>  


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



</body>
</html>
