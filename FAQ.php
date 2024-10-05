
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ Page</title>
<link rel="stylesheet" href="src/asserts/css/FAQstyle.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
crossorigin="anonymous" referrerpolicy="no-referrer" />



  
</head>


<body>
<?php  include ('hedder.php') ;  ?>

<div class="coverimage">
    <img src="src/asserts/images/cover image.jpg" alt="">
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

  <script src="src/asserts/js/FAQscript.js"></script>

  <?php  include ('footer.php') ;  ?>
  
</body>


</html