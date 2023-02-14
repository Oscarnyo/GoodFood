<?php

include 'config.php';

if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($link, $_POST['name']);
   $email = mysqli_real_escape_string($link, $_POST['email']);
   $pass = mysqli_real_escape_string($link, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($link, md5($_POST['cpassword']));

   $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE name = '$username' OR email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) >= 1){
      $message[] = 'User already exist please change username or email'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }
      else{
         $insert = mysqli_query($link, "INSERT INTO `user_form`(name, email, password) VALUES('$username', '$email', '$pass')") or die('query failed');

         if($insert){
            //move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully! Please proceed to login';
            //header('location:login.php');
         }else{
            $message[] = 'Registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
    <h2>Sign Up</h2>


     <form action="" method="post" enctype="multipart/form-data">
     	<?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div><br>';
         }
      }
      ?>
     	
      	<input id="text" type="text" placeholder="Enter Username" name="name" required><br><br>

		<input id="text" type="email" placeholder="Enter Email" name="email" required><br><br>

		<input id="text" type="password" placeholder="Enter Password" name="password" required><br><br>

		<input id="text" type="password" placeholder="Confirm password" name="cpassword" required><br>
		<p>Already have an account? <a href="login.php"><u><b>Login now</b></u></a></p>
				<input type="submit" name="submit" value="register now" class="btn">
				<p><a href="home_page.php"><u><b>Continue as guest -></b></u></p></a>

			
    </form>
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