
    function validateForm() {
 
        var name = document.getElementById("name").value.trim();
        var date = document.getElementById("date").value;
        var gender = document.getElementById("gender").value;
        var phone = document.getElementById("phone").value.trim();
        var address = document.getElementById("address").value.trim();
        var email = document.getElementById("email").value.trim();
        var planetype = document.getElementById("planetype").value;

       
        if (name === "") {
            alert("Please enter your name.");
            return false;
        }

       
        if (date === "") {
            alert("Please enter your date of birth.");
            return false;
        }

      
        if (gender === "") {
            alert("Please select a gender.");
            return false;
        }


        var phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            return false;
        }

     
        if (address === "") {
            alert("Please enter your address.");
            return false;
        }

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

    
        if (planetype === "") {
            alert("Please select a plan type.");
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

    
        return true;
}
