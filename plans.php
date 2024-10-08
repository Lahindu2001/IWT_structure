<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assure Life Insurance</title>
    <link rel="stylesheet" href="src/asserts/css/plans.css">
</head>
<body>
<?php  include ('hedder.php') ;  ?>
    
    <section class="hero">
        <!-- Hero background image is set in CSS -->
    </section>
    
    <section class="plans">
        <h2>Our Plans</h2>
        <div class="plan-grid">


        <a href = "emargency.php" style =  "text-decoration: none;">
          <div class="plan">
                <h3>Emergency Coverage</h3>
                <p>Our life insurance system offers robust Emergency Coverage, ensuring that when unexpected events arise, your loved ones are financially protected without delay.</p>
            </div> </a>


            <a href = "CompletePlan.php" style =  "text-decoration: none;"> <div class="plan">
                <h3>Complete Coverage</h3>
                <p>With Complete Coverage, we ensure comprehensive protection that addresses all aspects of your life insurance needs.</p>
            </div></a>

            <a href = "Famillyinone.php" style =  "text-decoration: none;">
            <div class="plan">
                <h3>Family All-in-One</h3>
                <p>Our Family All-in-One plan simplifies coverage for your entire family under a single, cohesive policy. This approach makes it easy to manage everyone’s life insurance needs in one place, ensuring spouses, children, and even extended family members can all enjoy tailored protection.</p>
            </div></a>


            <a href = "ElderPlan.php" style =  "text-decoration: none;"><div class="plan">
                <h3>Elder Citizens</h3>
                <p>We recognize the unique needs of older adults, which is why we offer life insurance policies specifically designed for Elder Citizens.</p>
            </div></a>



        </div>
    </section>
   
    <section class="opportunities">
        <h2>Our Opportunities</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis purus at risus malesuada, nec congue justo facilisis.</p>
        <a href = "oppunite.php"><button class="cta-btn">Get Started</button></a>
    </section>

    <?php  include ('footer.php') ;  ?>

    <script src="src/asserts/js/plans.js"></script>
</body>
</html>
