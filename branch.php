<!DOCTYPE html>
<html>

<head>
    <title>branch network</title>
    <link rel="stylesheet" href="src/asserts/css/branch.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style> 
nav {
  padding: 1.5rem 1rem;
  background-color: aliceblue;
  ;
}

nav .navlinks img {
  width: 100px;
  height: auto;
}

nav .navlinks {
  display: flex;
  align-items: center;
  justify-content: space-around;
}

nav .navlinks a {
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
  margin-left: 20px;
  color: black;
  transition: color 0.3s;
}

nav .navlinks a:hover {
  color: #007bff;
}

.plan-section button {
  border: none;
  background: transparent;
  font-size: 20px;
  font-weight: bold;
  margin-left: 20px;
  cursor: pointer;
  transition: color 0.3s;
}

.plan-category {
  padding-top: 50px;
  width: 270px;
  display: none;
  background-color: aliceblue;
  opacity: 0.9;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
}

.plan-section {
  position: relative;
}

.plan-section:hover .plan-category {
  display: block;
}

.plan-category a {
  display: block;
  margin: 5px 0;
  padding-bottom: 20px;
  color: black;
  text-decoration: none;
}

.plan-category a:hover {
  text-decoration: underline;
}


#signinBtn,
#loginBtn {
  margin-left: 20px;
  padding: 0.7rem 1.5rem;
  border: 1px solid #007bff;
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  font-size: 19px;
}

#signinBtn:hover,
#loginBtn:hover {
  background-color: #fff;
  color: #007bff;
}

/* footer css */

footer {
  margin-top: 7rem;
  display: flex;
  align-items: center;
  padding: 1.5rem 1rem;
  background-color: aliceblue;
  justify-content: space-evenly;
}

.leftImg img {
  width: 200px;
  height: auto;
}


.footNavLinks {
  margin-bottom: 20px;
  text-align: center;
}

.footNavLinks a {
  text-decoration: none;
  margin-left: 20px;
  font-size: 20px;
  color: #007bff;
}

.social {
  margin: 20px 0;
  text-align: center;
  font-size: 20px;
}

.rightCont p {
  text-align: center;
  width: 783px;
}

.lastcont {
  display: flex;
}

.lastcont p {
  text-align: right;
  width: 280px;
  margin-left: 80px;
  cursor: pointer;
}

</style>
</head>

<body>
<nav>
    <div class="navlinks">
      <img src="src/asserts/images/logo.png">
      <a href="#">Home</a>
      <div class="plan-section">
        <button id="planBtn">Insurance Plans</button>
        <div class="plan-category">
          <a href="#">Emergency Coverage</a>
          <a href="#">Complete Coverage</a>
          <a href="#">Family all-in-one</a>
          <a href="#">Elder Citizense</a>
        </div>

      </div>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
      <div class="sub-log-Btn">
        <button id="signinBtn">Sign In</button>
        <button id="loginBtn">Log In</button>
      </div>
    </div>
  </nav>

    <header>
        <h1>Explore Our Extensive Branch Network</h1>
        <p>We have branches across the country to make accessing our life insurance services convenient for
            you.</p>
    </header>

    

    <div class = "g1">
        <div class="d1">
            <div >
                <h1>Ambalanthota</h1>
                <p>No 143 Main Street, Ambalantota</p>
                <p>047 771 0200/047 771 0201/047 771 0202</p>
            </div>
            <div >
                <h1>Avissawella</h1>
                <p>No. 37, Kudagama Road, Awissawella.</p>
                <p>036 771 0200/036 771 0201/036 771 0202</p>
            </div>
            <div >
                <h1>Battaramulla</h1>
                <p>No. 1006/4A, Pannipitiya Road,Battaramulla.</p>
                <p>011 771 0400/011 771 0401/011 771 0402</p>
            </div>
            <div >
                <h1>Dambulla</h1>
                <p>No. 723/1, Anuradhapura Road, Dambulla.</p>
                <p>066 771 0200/066 771 0201/066 771 0202</p>
            </div>

            <div >
                <h1>Gampaha</h1>
                <p>No. 85, Bauddhaloka Mw, Gampaha.</p>
                <p>033 771 0200/033 771 0201/033 771 0202</p>
            </div>
            <div >
                <h1>Ja Ela</h1>
                <p>No. 112C, Negombo Road, Ja Ela.</p>
                <p>011 771 0450/011 771 0451/011 771 0452</p>
            </div>
            <div >
                <h1>Kalutara</h1>
                <p>No. 249C, Kahaduwa Watta,</p>
                <p>091 771 0250/091 771 0251/091 771 0252</p>
            </div>
            <div >
                <h1>Kilinochchi</h1>
                <p>No. 470/2, Kandy Road, Kilinochchi.</p>
                <p>021 771 0300/021 771 0301/021 771 0302</p>
            </div>
            <div >
                <h1>MATALE</h1>
                <p>No 181 ,Trincomali Street , Matale</p>
                <p>0667710275 / 0667710276 / 0667710277</p>
            </div>
        </div>
    </div>
    

   
    <footer>
    <div class="leftImg">
      <img src="src/asserts/images/logo.png" alt="">
    </div>
    <div class="rightCont">
      <div class="footNavLinks">
        <a href="#">Home</a>
        <a href="#">Insurance Plans</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
      </div>
      <p>Life insurance supports your family with money if you pass away. How Insurance Works You pay a small amount of
        money regularly, called a premium, to the insurance company. Many people do this, and the company collects a lot
        of money. Most of the time, nothing bad happens, so the company doesn't need to use all the money.</p>
      <div class="social">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-square-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-telegram"></i>
      </div>

      <div class="lastcont">
        <p>Copyrigh © 2024 Website All rights</p>
        <p><u>Team & Conditionas | Privacy Policy</u></p>
      </div>
    </div>
  </footer>

</body>

</html>