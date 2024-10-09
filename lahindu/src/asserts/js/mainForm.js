function validateForm() {
  var phone = document.getElementById("contact-no").value.trim();
  var email = document.getElementById("email").value.trim();

  if (!/^[0-9]{10}$/.test(phone)) {
    alert("Invalid phone number. Enter 10 digits.");
    return false;
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert("Invalid email address.");
    return false;
  }

  return true;
}
