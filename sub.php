<!DOCTYPE html>
<html lang="en">
<head>
<title>GoodFood Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="../asg2/Jack_externel_file/CSS/sub1.css">
</head>
<body>

<!-- Navbar -->
<?php include('../asg2/Oscar_external_file/view/navbar.php'); ?>

<!-- Subscription -->
<main class="w3-container">
  <div class="w3-content">
    <div class="first_content">
      <h1>Subscription Plan</h1>
      <div class="sub_box">
        <div id="box1">
          <img class="service_img" src="./Jack_externel_file/pic.jpg" width="350" height="350">
          <div class="service_text"> <?php
                require_once "config.php";
                  $sql = "SELECT * FROM subscription WHERE subscription_id = 8001";
                  if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                        echo "<h3>" . $row['plan_name'] . " Plan </h3>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<br>";
                        echo "<br><h4><b> RM " . $row['price'] . " PER " . $row['duration'] . " </b></h4>";
                        echo "<a href="."sub_con.php?sub_id=" . $row['subscription_id'] . "><button id='sub_btn'>Subscribe now</button></a>";
                      }
                      mysqli_free_result($result);
                    }
                  }
              ?>
          </div>
        </div>
        <div id="box2">
          <img class="service_img" src="./Jack_externel_file/pic1.jpg" width="350" height="350">
          <div class="service_text"> <?php
                require_once "config.php";
                  $sql = "SELECT * FROM subscription WHERE subscription_id = 8002";
                  if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                        echo "<h3>" . $row['plan_name'] . " Plan </h3>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<br><br><br>";
                        echo "<h4><b> RM " . $row['price'] . " PER " . $row['duration'] . " </b></h4>";
                        echo "<a href="."sub_con.php?sub_id=" . $row['subscription_id'] . "><button id='sub_btn'>Subscribe now</button></a>";
                      }
                      mysqli_free_result($result);
                    }
                  }
              ?>
          </div>
        </div>
        <div id="box3">
          <img class="service_img" src="./Jack_externel_file/pic2.jpg" width="350" height="350">
          <div class="service_text"> <?php
                require_once "config.php";
                  $sql = "SELECT * FROM subscription WHERE subscription_id = 8003";
                  if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                        echo "<h3>" . $row['plan_name'] . " Plan </h3>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<h4><b> RM " . $row['price'] . " PER " . $row['duration'] . " </b></h4>";
                        echo "<a href="."sub_con.php?sub_id=" . $row['subscription_id'] . "><button id='sub_btn'>Subscribe now</button></a>"; 
                      }
                      mysqli_free_result($result);
                    }
                  }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<?php include('./Oscar_external_file/view/footer.php') ?>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>

<!-- js -->
<script>
  function confirmFunc(){
    var x = "Do you want to Subscribe the plan?";
    if(confirm(x) == true){
      alert("You Subscribe to the Plan");
    }else{
      alert("Hope to see you soon!");
    }
  }
</script>
<script>
  function scrolltop(){
    window.scrollTo({top: 0});
  }
</script>
</body>
</html>
