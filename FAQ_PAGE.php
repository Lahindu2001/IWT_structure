
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ Page</title>
<link rel="stylesheet" href="src\asserts\css\FAQ_S.css">

<style>

/* Styling the overall form */
form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}

/* Styling the form heading */
h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Styling the labels */
label {
    display: block;
    font-size: 16px;
    margin-bottom: 8px;
    color: #555;
}

/* Styling the input fields */
input[type="text"],
input[type="email"],
select,
textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Hover effect for input fields */
input[type="text"]:hover,
input[type="email"]:hover,
select:hover,
textarea:hover {
    border-color: #888;
}

/* Styling the submit button */
input[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Hover effect for submit button */
input[type="submit"]:hover {
    background-color: #218838;
}

/* Styling the select dropdown */
select {
    appearance: none;
    background: url('data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMzMzIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4IDUiPjxwYXRoIGQ9Ik0wIDBoMmw0IDQgNEw4IDB6Ii8+PC9zdmc+') no-repeat right 10px center;
    background-size: 12px;
    background-color: white;
    padding-right: 30px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    form {
        width: 90%;
    }
}

@media (max-width: 480px) {
    form {
        width: 100%;
    }

    input[type="submit"] {
        font-size: 14px;
    }
}


</style>


</head>


<body>
    <div class="heder">
    <center><a href="Index.php"><img src="src/asserts/images/logo.png" width = "200px" height = "150px"></a><center>
    </div>


  <div class="container">
      <h1>Frequently Asked Questions</h1>
      <div class="faq">
        <div class="faq-item">
            <h2 class="faq-question">What is life insurance?</h2>
            <div class="faq-answer">Life insurance is a contract between an individual and an insurance company that provides financial protection to beneficiaries upon the insured's death.</div>
        </div>
          
          <div class="faq-item">
              <h2 class="faq-question">What are the different types of life insurance?</h2>
              <div class="faq-answer">The main types of life insurance include term life insurance, whole life insurance, and universal life insurance. Each has its own features and benefits.</div>
          </div>
          <div class="faq-item">
              <h2 class="faq-question">How does term life insurance work?</h2>
              <div class="faq-answer">Term life insurance provides coverage for a specific period (the "term"). If the insured dies during this term, the beneficiaries receive the death benefit. If not, the policy expires without value.</div>
          </div>
          
          <div class="faq-item">
              <h2 class="faq-question">Can I change my policy later?</h2>
              <div class="faq-answer">Yes, many policies allow you to make changes, such as increasing or decreasing coverage or converting from term to whole life insurance. Check with your insurer for specific terms.</div>
          </div>
          <div class="faq-item">
              <h2 class="faq-question">What factors affect life insurance premiums?</h2>
              <div class="faq-answer">Premiums are influenced by age, health status, lifestyle choices (like smoking), and the type and amount of coverage selected.</div>
          </div>
          <div class="faq-item">
              <h2 class="faq-question">How do I file a claim?</h2>
              <div class="faq-answer">To file a claim, contact your insurance company directly. They will guide you through the required documentation and process.</div>
          </div>
          <div class="faq-item">
              <h2 class="faq-question">Is life insurance taxable?</h2>
              <div class="faq-answer">Generally, the death benefit is not subject to income tax. However, there may be tax implications on any interest or earnings if the policy has a cash value component.</div>
          </div>
      </div>
  </div>

<br>
  <form action="faqinsert.php" method="POST">
    <h1>Add Your Questions</h1>

    <label>Name</label>
    <input type="text" name="name" required><br>

    <label>Email address</label>
    <input type="email" name="email" required><br>

    <label>Questions type</label>
    <select id="qtype" name="qtype" required>
        <option value="">--Select--</option><br>
        <option value="Billing and Payments">Billing and Payments</option>
        <option value="Policy Information">Policy Information</option>
        <option value="Claims Process">Claims Process</option>
        <option value="Coverage option">Coverage option</option>
        <option value="Technical Support">Technical Support</option>
        <option value="Other">Other</option>
    </select><br>

    <label>Your Question</label><br>
    <textarea name="textq" rows="4" cols="50" required></textarea><br>

    <input type="submit" name="submit" value="Submit">
</form>


  <script src="src/asserts/js/faq_style.js"></script>



  <?php  include ('footer.php') ;  ?>

    
  
</body>

</html