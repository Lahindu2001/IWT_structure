
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

    
        return true;
}
