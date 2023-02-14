<!DOCTYPE html>
<html lang="en">
<head>
<title>GoodFoood Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="./Oscar_external_file/CSS/about.css">
</head>
<body>
    
<!-- navbar -->
<?php include('./Oscar_external_file/view/navbar.php')?>

<!-- container start -->
<div class="about_container">
  <div class="aboutus">
    <h1>About Us</h1>
    <p>GoodFood has been publishing award-winning journalism about food, nutrition and 
       sustainability for more than 10 years. We are the number one destination for providing healthy meal plans and personal advice from our experts. The cookery team thoroughly tested all the cookbook recipes before publishing and selling them. The team is always willing to put in more time and afford to serve our customers with the best meal plan in the world.</p>
    <div class="aboutus_card">
      <div class="mission">
        <h4>Mission</h4>
        <p>Our company mission is to provide a healthy meal plan to all customers. I want to help people suffering from personal health issues stay healthy by controlling their daily meals. </p>
      </div>
      <div class="vision">
        <h4>Vision</h4>
        <p>We are looking forward to making our services worldwide to help them eat healthy while enjoying their lives simultaneously. </p>
      </div>
      <div class="achieve">
        <h4>Achievement</h4>
        <p>We have won several awards for preparing Malaysia's healthy meal plan. 80% of our customers are satisfied after taking our meal plan and maintain to stay healthy after a couple of months.</p>
      </div>
    </div>
  </div>
  
  
  
  <div><!-- Our Team -->
      <div class="about_title">
        <h1>Our Team</h1>
      </div>
      <div class="about_row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="./Oscar_external_file/img/profile.jpg" />
            </div>
            <h3>Jack</h3>
            <p>Leader</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="./Oscar_external_file/img/profile2.jpg" />
            </div>
            <h3>Shi Jie</h3>
            <p>Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="./Oscar_external_file/img/profile3.jpg" />
            </div>
            <h3>Ben</h3>
            <p>Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 4-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="./Oscar_external_file/img/profile4.jpg" />
            </div>
            <h3>Oscar</h3>
            <p>Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- container end -->

<!-- footer -->
<?php include('./Oscar_external_file/view/footer.php') ?>

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