document.getElementById('updateForm').addEventListener('submit', function(event) {
  if (!updateMeetingValidate()) {
      event.preventDefault(); 
  }
});

function updateMeetingValidate() {
  const firstName = document.getElementById('first-name').value.trim();
  const lastName = document.getElementById('last-name').value.trim();
  const nic = document.getElementById('nic').value.trim();
  const dob = document.getElementById('dob').value;
  const gender = document.getElementById('gender').value;
  const maritalStatus = document.getElementById('marital-status').value;
  const contact = document.getElementById('contact-no').value.trim();
  const address = document.getElementById('address').value.trim();
  const email = document.getElementById('email').value.trim();
  const meetingDate = document.getElementById('meeting-date').value;
  const meetingTime = document.getElementById('meeting-time').value;
  const location = document.getElementById('location').value;
  const reason = document.getElementById('meeting-reason').value.trim();

  if (!firstName || !lastName || !dob || !gender || !maritalStatus ||
      !contact || !address || !email || !meetingDate || !meetingTime || !location || !reason) {
      alert('Please fill in all fields.');
      return false;
  }

  const namePattern = /^[A-Za-z\s]+$/;
  if (!namePattern.test(firstName)) {
      alert('First name should only contain letters and spaces.');
      return false;
  }

  if (!namePattern.test(lastName)) {
      alert('Last name should only contain letters and spaces.');
      return false;
  }

  const nicPattern = /^[0-9]{9}[vVxX]$|^[0-9]{12}$/;
  if (!nicPattern.test(nic)) {
    alert('Enter a valid NIC (e.g., 123456789V or 200215201626).');
    return false;
  }

  const contactPattern = /^0[0-9]{9}$/;
  if (!contactPattern.test(contact)) {
      alert('Enter a valid contact number (e.g., 0712345678).');
      return false;
  }

  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!emailPattern.test(email)) {
      alert('Enter a valid email address.');
      return false;
  }

  const today = new Date().toISOString().split('T')[0];
  if (new Date(dob) >= new Date(today)) {
      alert('Date of birth cannot be today or in the future.');
      return false;
  }

  if (new Date(meetingDate) < new Date(today)) {
      alert('Meeting date cannot be in the past.');
      return false;
  }

  if (meetingTime) {
      const meetingHour = parseInt(meetingTime.split(':')[0]);
      if (meetingHour < 8 || meetingHour >= 18) {
          alert('Meeting time must be between 8:00 AM and 6:00 PM.');
          return false;
      }
  } else {
      alert('Please enter a valid meeting time.');
      return false;
  }

  if (gender === '') {
      alert('Please select your gender.');
      return false;
  }

  if (maritalStatus === '') {
      alert('Please select your marital status.');
      return false;
  }

  if (location === '') {
      alert('Please select a meeting location.');
      return false;
  }

  return true;
}
