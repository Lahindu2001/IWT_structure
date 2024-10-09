<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="src/asserts/css/homestyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
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


  <div class="productCat">
    <h1>Our Product Categories</h1>
    <p id="headPara">Assure Life Insurance offers four comprehensive products designed to meet the diverse needs of its
      customers. The Elder Citizens Plan provides tailored coverage for senior individuals, ensuring they have financial
      security and access to essential healthcare services in their later years. The Family All-in-One Plan offers
      holistic protection for the entire family, combining life, health, and accidental coverage into one convenient
      package. The Complete Coverage Plan is an all-encompassing option that includes life insurance, critical illness
      coverage, and accidental death benefits, ideal for individuals seeking full-spectrum security. </p>

    <div class="catSection">

      <div class="section">

        <img src="src/asserts/images/sec3.jpg" alt="">
        <h3>FAMILY ALL-IN-ONE</h3>
        <p>The Family All-in-One Plan is a comprehensive insurance package that protects your entire family under one
          plan. It covers life insurance, health insurance, and accidental coverage, ensuring financial security for
          every family member in case of illness, accident, or loss of life. This plan simplifies managing your family's
          insurance needs by combining multiple coverages into one convenient and affordable option . <a href=""><b>See
              more...</b></a>
        </p>
      </div>

      <div class="section">

        <img src="src/asserts/images/sec2.webp" alt="">
        <h3>ELDER CITIZENS</h3>
        <P>The Elder Citizens Plan is a life insurance plan designed specifically for senior citizens. It provides
          financial security for older individuals, covering healthcare expenses, life insurance, and critical illness
          benefits. This plan ensures that seniors have peace of mind and support for medical needs and emergencies
          during their later years . <a href=""><b>See more...</b></a>
        </P>
      </div>

      <div class="section">

        <img src="src/asserts/images/sec5.jpg" alt="">
        <h3>EMERGENCY COVERAGE</h3>
        <P>The Emergency Coverage Plan is designed to provide quick financial assistance during unexpected medical
          emergencies. It covers urgent hospital expenses, treatments, and related costs, ensuring that you can handle
          sudden health crises without about finances. This plan offers immediate support when you need it
          most . <a href=""><b>See more...</b></a>
      </div>

      <div class="section">

        <img src="src/asserts/images/sec4.jpg" alt="">
        <h3>COMPLETE COVERAGE</h3>
        <P>The Complete Coverage Plan offers full protection by combining life insurance, critical illness coverage, and
          accidental death benefits. It ensures financial security for you and your family by covering a wide range of
          risks, including serious health conditions and unexpected accidents, providing peace of mind with all-in-one,
          comprehensive protection . <a href=""><b>See more...</b></a>
        </P>
      </div>

    </div>
  

    <!-- mekata adala script eka home ekema yata thiyenawa balanna -->
    <button id="seeMoreBtn" onclick="LoadAllplanPage()">See More Details</button>
  </div>

  <h1 class="headerTestimonials">Our testimonials</h1>

  <div class="testimonials">
    <div class="review">
      <img src="src/asserts/images/img3.jpg" alt="">
      <h4>Helena Queen</h4>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <p>"The Assure Life Insurance website is user-friendly and easy to navigate. I found all the information I needed
        about their plans quickly, and the design is clean and professional. It made comparing different insurance
        options simple!"</p>
    </div>


    <div class="review">
      <img src="src/asserts/images/img2.jpg" alt="">
      <h4>Dr.Samaraweera</h4>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <p>"I was impressed with how straightforward the website is. The descriptions of each insurance plan are clear,
        and the layout makes it easy to understand the benefits. Signing up for a plan was hassle-free, and I felt
        confident in my decision."</p>
    </div>

    <div class="review">
      <img src="src/asserts/images/img1.jpg" alt="">
      <h4>Jonathan B.Hard </h4>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <i class="fa-regular fa-star"></i>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quas, laudantium aut nostrum veniam hic
        itaque quaerat fugit tenetur saepe non, cupiditate eligendi esse ad recusandae debitis perferendis doloremque
        odio!</p>
    </div>


    <div class="review">
      <img src="src/asserts/images/img4.jpg" alt="">
      <h4>Thea Queen</h4>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <p>"The Assure Life Insurance website provides all the essential details in one place. I especially liked the
        section on elder citizen coverage, which gave me peace of mind about my parents' future. It’s great to see such
        thoughtful insurance plans laid out clearly."</p>
    </div>

  </div>



  <div class="joinUs">

    <div class="sec1">
      <img src="src/asserts/images/signin.jpg" alt="">
    </div>

    <div class="sec2">
      <h1>Do you need reliable life insurance?</h1>
      <p>"Navigating the website was smooth, and I appreciated the well-organized product pages. The variety of plans,
        especially the family and emergency coverage, were explained clearly. I felt reassured knowing I could find the
        right coverage quickly."</p>

        <!-- mekata adala script ekath pahala thiyenawa path eka danna balala -->
      <button onclick="redirectToSignInpage()">Join With Assure Life</button>


      <a href="inputform.php" id="MeetAgentBtn">Meet Your Assure Agent</a>
    </div>

  </div>


  <h1 class="galleryHead">Assure Life Gallery</h1>

  <div class="GalleryCont">

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery1.jpg" style="width:100%" class="item-1">
    </div>

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery2.jpg" style="width:100%" class="item-2">
    </div>

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery3.jpg" style="width:100%" class="item-3">
    </div>

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery4.jpg" style="width:100%" class="item-4">
    </div>

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery5.jpg" style="width:100%" class="item-5">
    </div>

    <div class="mySlides">
      <img src="src/asserts/images/galleryimg/gallery6.jpg" style="width:100%" class="item-6">
    </div>

  </div>


  
  <?php  include ('footer.php') ;  ?>


  <!-- lahidu see more button eka ebuwama load wenna one page eke path eka denna histhenata  e kiyanne plan okkoma thiyen thena -->
  <script>
    function LoadAllplanPage()
    {
      window.location.href = ' ';
    }

    // lahidu join with assure life button eka ebuwama load wenna one page eke path eka denna histhenata  e kiyanne plan okkoma thiyen thena
    function redirectToSignInpage()
    {
      window.location.href = ' ';
    }
  </script>
</body>

</html>