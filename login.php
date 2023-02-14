<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($link, $_POST['email']);
   $pass = mysqli_real_escape_string($link, md5($_POST['password']));

   $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['username'] = $row['name'];
      header('location:home_page_login.php');
   }else{
      echo '<script>window.alert("invalid email or password!")</script>';
   }

}

?>

<!DOCTYPE html>
 <html lang="en">
<head>

   <title>Login</title>
   <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="./Oscar_external_file/CSS/homepage.css">
</head>
<body>

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar.php')?>

<!-- Header -->
<header class="w3-container w3-center" style="padding:100px">
<div class="w3-center">
<div class="newsletter-form" style="margin:auto;">
    <h2>Log In</h2>


      <form action="" method="post" enctype="multipart/form-data">
      
         <input id="text" type="email" placeholder="Enter Email" name="email" required><br><br>

      <input id="text" type="password" placeholder="Enter Password" name="password" required><br>
      <p>Don't have an account? <a href="sign_up.php"><u><b>Register now</b></u></a></p>
      <input type="submit" name="submit" value="login now" class="btn">    
      <p><a href="home_page.php"><u><b>Continue as guest -></b></u></p></a>

    </form>
  </div>
</div>
    </div>
  </div>
</header>

   <style type="text/css">
   
   #text{

      height: 25px;
      border-radius: 10px;
      padding: 4px;
      border: solid thin #aaa;
      width: 100%;
   }

   #button{

      padding: 10px;
      width: 100px;
      color: white;
      background-color: #04914d;
      border: none;
   }

   #box{

      background-color:#06C167;
      margin-bottom: 150px;
      margin-left: 250px;
      width: 300px;
      padding: 20px ;
   }

   </style>

</body>
</html>