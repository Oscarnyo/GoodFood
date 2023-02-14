<?php
// Process delete operation after confirmation
    // Include config file
    require_once "config.php";

    session_start();
          $checkId = trim($_SESSION["user_id"]);
          $checkName = trim($_SESSION["username"]);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>GoodFoood Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="./Oscar_external_file/CSS/homepage_login.css">
</head>
<body>

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php') ?>


<!-- Header -->

<header class="w3-container w3-center" style="padding:128px 16px">
<div class="header_content">
    <img src="./Oscar_external_file/img/main.jpg" alt="" class="front_img">
      <div class="front_text">
        <h1>Goodfood</h1>
        <p id="main_title">GoodFood your best food advisor</p>
        <p id="side_title">We serve our customers with the best meal plan and cookbook </p>
        <a href="#first_grid"class="w3-button w3-white w3-padding-large w3-large w3-margin-top" id="getstart">Learn More</a>
        <h1 class="w3-center w3-jumbo"><b><?php echo "Welcome back, ".$checkName."";?></b></h1>
    </div>
  </div>
</header>

<!-- First Grid -->
<div class="w3-container" id="first_grid">
  <div class="w3-content">
    <div class="first_content">
      <h1>Our Services</h1>
      <div class="sub_box">
        <div id="box1">
          <img class="service_img" src="./Oscar_external_file/img/first_icon.svg" alt="icon">
          <h4>Food Business Services</h4>
          <p class="service_text">We give you complete reliable delivery for your company.  We will take full responsibility of the deliveries. Besides we also provide professional food expert on guilding you to prepare a healthy meal for your customers. </p>
        </div>
        <div id="box2">
          <img class="service_img" src="./Oscar_external_file/img/Icon2.svg" alt="">
           <h4>Statewide Services</h4>
          <p class="service_text">Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours. All products will be well-packaged for extra protection and delivered to your location.</p>
        </div>
        <div id="box3">
          <img class="service_img" src="./Oscar_external_file/img/Icon3.svg" alt="">
          <h4>Personal Services</h4>
          <p class="service_text">You can trust us to prepare a personalized meal plan for your daily meal. We have experts with over five years of experience creating healthy meal plans for every customer.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="second_container" id="second_grid">
  <div class="w3-content">
    <div class="award">
        <div id="award_1">
          <img src="./Oscar_external_file/img/award1.png" alt="award1">
          <p id="num">5+</p>
          <p>Awards won</p>
        </div>
        <div id="award_2">
          <img src="./Oscar_external_file/img/award2.png" alt="award2">
          <p id="num">12+</p>
          <p>States covered</p>
        </div>
        <div id="award_3">
          <img src="./Oscar_external_file/img/award3.png" alt="award3">
          <p id="num">5K+</p>
          <p>Happy clients</p>
        </div>
        <div id="award_4">
          <img src="./Oscar_external_file/img/award4.png" alt="award4">
          <p id="num">400K+</p>
          <p>Books delivered</p>
        </div>
        <div id="award_5">
          <img src="./Oscar_external_file/img/award5.png" alt="award5">
          <p id="num">130M+</p>
          Business hours
        </div>
      </div>
  </div>
</div>

<!-- Third Grid -->
<div class="third_container">
<div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="./Oscar_external_file/img/p1.png" alt="">
              <div class="name">Jane</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                FASTEST DELIVERY. You can get your valuable item in the fastest period of
                time with safety. Because your emergency is our first priority.</p>

            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="./Oscar_external_file/img/p2.png" alt="">
              <div class="name">Jessica</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                Outstanding Meal plan! I maintained a balanced diet for a couple of months by following the meal plan. I wish there were more personalization on the meal plan.</p>

            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="./Oscar_external_file/img/p3.png" alt="">
              <div class="name">Selina</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                I love the cookbook very much. I learned a lot of new dishes and was able to cook them by following the recipe and guide in the cook book.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Fourth Grid -->
<div class="fourth_grid">
<div class="newsletter-form">
    <h2>Join Our Newsletter</h2>
    <p>
       We will inform you when there's a promotion for you to grab the best deals! 
    </p>
    <form action="#">
      <input type="email" class="email-input" placeholder="Enter your email">
      <input type="submit" class="btn" value="submit">
    </form>
  </div>
</div>


<!-- Footer -->
<footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>GoodFood</h4>
          <ul>
            <li><a href="about_login.php">about us</a></li>
            <li><a href="#first_grid" onclick="scrolltop()">our services</a></li>
            <li><a href="article_page_login.php">article</a></li>
            <li><a href="shop_page1_login.php">shop</a></li>
            <li><a href="sub_login.php">subscription</a></li>
            <li><a href="prize.php">prize</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>

<!-- js -->
<script>
  function scrolltop(){
    window.scrollTo({top: 0});
  }
  
</script>

</body>
</html>