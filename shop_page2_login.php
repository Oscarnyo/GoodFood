<?php
  require_once "config.php"; 
  session_start();
  $checkName = trim($_SESSION['username']);
  $checkId = trim($_SESSION['user_id']);
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="./SJ_external_file/CSS_design/shop_style.css">
<!--<link rel="stylesheet" type="text/css" href="stop_style.css">-->
<script type="text/javascript" src="./SJ_external_file/JS_script/shop_script.js"></script>
</head>
<body>

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php') ?>


<!-- Header -->
<header class="w3-container w3-center" style="padding: 70px">
    <img src="./SJ_external_file/picture/shop.png" alt="" class="w3-right shop_picture">
        <h1 class="w3-jumbo w3-left w3-center title_position">Goodfood Shop</h1>
</header>


<!-- Shop section 1st grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
     <div class="w3-third w3-center"><!--Product picture-->
      <img class="w3-padding-right w3-margin-right" src="./SJ_external_file/picture/fruit-basket.png">
    </div>
    <div class="w3-twothird"> <!--Product detail-->
      <?php        
                    if(empty($checkId)&&empty($checkName)) {
                            //non user
                             $sql = "SELECT * FROM product where product_id = 4";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                         while($row = mysqli_fetch_array($result)){
                                            echo "<script>
                                                    function checkUser(){
                                                        alert('please log in an account to buy GoodFood product');
                                                        location.href = 'login.php';
                                                    }

                                                    </script>";
                                            echo "<h1>".$row['name']."</h1>";
                                            echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                            echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                            echo "<a href='#' onClick=checkUser() class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>"; 
                                    }
                                mysqli_free_result($result);
                        } 
                     }//non user end here

                     } else {
                        $sql = "SELECT * FROM product where product_id = 4";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<h1>".$row['name']."</h1>";
                                        echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                        echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                         echo "<a href="."checkout_page.php?get_product_id=". $row['product_id']." class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>";
                                    }
                            mysqli_free_result($result);
                        } else{
                            echo 'No records were found';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }




                     }
                       
                   
                    ?>
    </div>

  </div>
</div>

<!-- 2nd Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center"> <!--Product picture-->
      <img class="w3-padding-right w3-margin-right" src="./SJ_external_file/picture/vegetable-basket.png">
    </div>

    <div class="w3-twothird"> <!--Product detail-->
      
        <?php        
                    if(empty($checkId)&&empty($checkName)) {
                            //non user
                             $sql = "SELECT * FROM product where product_id = 5";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                         while($row = mysqli_fetch_array($result)){
                                            echo "<script>
                                                    function checkUser(){
                                                        alert('please log in an account to buy GoodFood product');
                                                        location.href = 'login.php';
                                                    }

                                                    </script>";
                                            echo "<h1>".$row['name']."</h1>";
                                            echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                            echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                            echo "<a href='#' onClick=checkUser() class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>"; 
                                    }
                                mysqli_free_result($result);
                        } 
                     }//non user end here

                     } else {
                        $sql = "SELECT * FROM product where product_id = 5";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<h1>".$row['name']."</h1>";
                                        echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                        echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                         echo "<a href="."checkout_page.php?get_product_id=". $row['product_id']." class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>";
                                    }
                            mysqli_free_result($result);
                        } else{
                            echo 'No records were found';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }




                     }
                       
                   
                    ?>

    </div>
  </div>
</div>

<!--3rd grid-->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center"> <!--Product picture-->
      <img class="w3-padding-right w3-margin-right" src="./SJ_external_file/picture/recipe-cook-book.png">
    </div>
    
    <div class="w3-twothird"> <!--Product detail-->
     <?php        
                    if(empty($checkId)&&empty($checkName)) {
                            //non user
                             $sql = "SELECT * FROM product where product_id = 6";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                         while($row = mysqli_fetch_array($result)){
                                            echo "<script>
                                                    function checkUser(){
                                                        alert('please log in an account to buy GoodFood product');
                                                        location.href = 'login.php';
                                                    }

                                                    </script>";
                                            echo "<h1>".$row['name']."</h1>";
                                            echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                            echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                            echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                            echo "<a href='#' onClick=checkUser() class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>"; 
                                    }
                                mysqli_free_result($result);
                        } 
                     }//non user end here

                     } else {
                        $sql = "SELECT * FROM product where product_id = 6";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<h1>".$row['name']."</h1>";
                                        echo "<h5 class='w3-padding-top'>Category : ".$row['category']."</h5>";
                                        echo "<h5 class='w3-padding-top'>Quantity : ".$row['quantity']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Price : RM".$row['price']."</h5>";
                                        echo  "<h5 class='w3-padding-top'>Description : ".$row['description']."</h5>"; 
                                         echo "<a href="."checkout_page.php?get_product_id=". $row['product_id']." class='w3-button w3-green w3-padding-large w3-large w3-hover-white w3-margin-button-sell'>Buy</a>";
                                    }
                            mysqli_free_result($result);
                        } else{
                            echo 'No records were found';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }




                     }
                       
                   
                    ?>

    </div>
  </div>
</div>


  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <p class="page">Page</p>
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="shop_page1_login.php" id="page1" onClick="page1Function()" class="w3-bar-item w3-hover-black w3-button page-button">1</a>
      <a href="shop_page2_login.php" id="page2" onClick="page2Function()" class="w3-bar-item w3-button w3-black page-button">2</a>
      <a href="shop_page3_login.php" id="page3" onClick="page3Function()" class="w3-bar-item w3-button w3-hover-black page-button">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>


<!-- Footer -->
<?php include('./Oscar_external_file/view/footer_shop_login.php') ?>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>

<!-- js -->
<script>

  
</script>

</body>
</html>