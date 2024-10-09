//api call
function submitFormData() {
  var email = document.getElementById("email").value;
  var fullName = document.getElementById("full-name").value;
  var password = document.getElementById("password").value;
  var gender = document.getElementById("gender").value;
  var confirmPassword = document.getElementById("confirm-password").value;
  var address = document.getElementById("address").value;
  var nationalId = document.getElementById("national-id").value;
  var dob = document.getElementById("dob").value;
  var planType = document.getElementById("planType").value;
  var userType = document.getElementById("userType").value;
  var phone = document.getElementById("phone").value;
  var profilePicture = document.getElementById("profile-picture");

  var imgArray = [];
  var files = profilePicture.files;
  for (var x = 0; x < files.length; x++) {
    imgArray.push(files[x]);
  }

  const formData = new FormData();
  formData.append("email", email);
  formData.append("fullName", fullName);
  formData.append("password", password);
  formData.append("confirmPassword", confirmPassword);
  formData.append("address", address);
  formData.append("nationalId", nationalId);
  formData.append("dob", dob);
  formData.append("planType", planType);
  formData.append("userType", userType);
  formData.append("phone", phone);
  formData.append("gender", gender);

  for (var i = 0; i < imgArray.length; i++) {
    formData.append("images[]", imgArray[i]);
  }

  fetch("http://localhost/app/IWT-structure/src/logics/user/user_insert.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      alert("Form submitted: " + data);
      window.location.reload();
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}


//api call
function userDelete(id) {
  fetch("http://localhost/app/IWT-structure/src/logics/user/user_delete.php?id="+id, {
    method: "GET",
  })
    .then((response) => response.text())
    .then((data) => {
      alert("Deleted: " + data);
      window.location.reload();
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
