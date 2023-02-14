

<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['profile'])){
   
   // update name and email
   // $old_name = $_POST['old_name'];
   // $old_email = $_POST['old_email'];
   $update_name = mysqli_real_escape_string($link, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($link, $_POST['update_email']);
   
   mysqli_query($link, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');
   
   // if($old_name == $update_name){
   //    echo '<script>alert("Username is the same")</script>';
   // } else{
   //    mysqli_query($link, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');
   //    echo '<script>alert("Profile Updated")</script>';
   // }
   
   // update password
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($link, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($link, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($link, md5($_POST['confirm_pass']));
   
    //if((!empty($update_pass) && !empty($new_pass) && !empty($confirm_pass))){
    if(isset($update_pass)&&isset($new_pass)&&isset($confirm_pass)){    
      if($new_pass != $confirm_pass){
         echo '<script>alert("Confirm Password Not Matched!")</script>';
      }else if($update_pass != $old_pass){
        echo '<script>alert("Old Password Not Matched!")</script>';
      }else{
         mysqli_query($link, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         echo '<script>alert("Profile Updated")</script>';
      }
   }
}

?>

<script>
   
   
</script>



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
<link rel="stylesheet" type="text/css" href="./Oscar_external_file/CSS/profile.css">
</head>
<body>
<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php') ?>

<div class="update-profile"></div>
<?php
      // $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      // if(mysqli_num_rows($select) > 0){
      //    $fetch = mysqli_fetch_assoc($select);
      // }
      
      $row = mysqli_query($link, "SELECT * FROM `subscription` INNER JOIN user_form ON subscription.subscription_id = user_form.subscription_id where user_form.id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($row) >= 0){
         $row = mysqli_fetch_assoc($row);
      }
      
      
   ?>
<!-- container -->
<form action="#" method="post">
<div class="profile_container">
    <div class="profile_box">
        <h1>Profile</h1>
        <div class="profile_inputBox">
            <div class="inputBox_1">
                <input type="hidden" name="old_name" value="<?php echo $row['name']; ?>">
                <span>Username :</span>
                <input type="text" name="update_name" value="<?php echo $row['name']; ?>" class="box">
                <input type="hidden" name="old_email" value="<?php echo $row['email']; ?>">
                <span>Your email :</span>
                <input type="email" name="update_email" value="<?php echo $row['email']; ?>" class="box" required>
                <span>Current subscription plan :</span>
                <?php
                  $planId = $row['subscription_id'];
                  $planName = $row['plan_name'];
                  $empty = " ";
                  $no_subs = 0;
                  if ($planId == $no_subs){
                     echo "<div class='box'>No subscribe yet.</div>";;
                  } else{
                     echo "<div class='box'> $planName </div>";
                  }
                ?>
            </div>
            <div class="inputBox_2">
                <input type="hidden" name="old_pass" value="<?php echo $row['password']; ?>">
                <span>Old password :</span>
                <input type="password" name="update_pass" placeholder="Enter old password" class="box" >
                <span>New password :</span>
                <input type="password" name="new_pass" placeholder="Enter new password" class="box">
                <span>Confirm password :</span>
                <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box">
            </div>
        </div>
        <input type="submit" value="Update Profile" name="profile" class="btn">
    </div>
</div>
</form>
</div>

<!-- footer -->
<?php include('./Oscar_external_file/view/footer_login.php') ?>

</body>
</html>