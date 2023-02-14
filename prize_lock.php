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
<link rel="stylesheet" href="./Oscar_external_file/CSS/prize_lock.css">
</head>
<body>

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar.php')?>

<!-- prize lock -->
<div class="blur_container">
    <div class="blur">
        <div class="blur_card">
          <h3>Sorry, you need be a GoodFood registered user to access this page</h3>
          <a href="home_page.php" class="return_sub"><i class="fa-solid fa-arrow-left"></i>Back to home page</a>  
        </div>
    </div>
</div>



<!-- footer -->
<?php include('./Oscar_external_file/view/footer.php')?>


</body>
</html>