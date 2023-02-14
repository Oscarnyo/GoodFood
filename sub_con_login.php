<?php
    require_once "config.php";
?>
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
<link rel="stylesheet" type="text/css" href="./Jack_externel_file/CSS/sub_con.css">
</head>
<body>

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php'); ?>

<!-- Subscription Confirm-->
<div class="blur_container">
    <div class="blur">
        <div class="blur_card">
          <h3>Subscription Confirmation to</h3>
            <?php
                // Prepare a select statement
                $sql = "SELECT * FROM subscription WHERE subscription_id = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "i", $param_id);
                    
                    // Set parameters
                    $param_id = trim($_GET["sub_id"]);
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        $result = mysqli_stmt_get_result($stmt);
                
                        if(mysqli_num_rows($result) == 1){
                            /* Fetch result row as an associative array. Since the result set
                            contains only one row, we don't need to use while loop */
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            
                            // Retrieve individual field value
                            //$sub_name = $row["subscription_name"];
                            echo "<h3><b>" . $row['plan_name'] . " Plan</b></h3>";
                            echo "<p>Are you sure to subscribe?</p>";
                            echo "<br>";
                            session_start();
                            if(!empty($_SESSION['username'])&&!empty($_SESSION['user_id'])){
                                $user_id = trim($_SESSION['user_id']);
                                $user_name = trim($_SESSION['username']);
                                $sql = "SELECT * FROM subscription where subscription_id = $param_id";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                        $i_sql = "UPDATE user_form SET subscription_id = $param_id WHERE id = $user_id";
                                        if(mysqli_query($link, $i_sql)){
                                            echo "<script>
                                                function checkUser(){
                                                    alert('You have Subscribed to the ".$row['plan_name']." Plan. Thank You and have a nice day :D ');
                                                    location.href = 'home_page_login.php';
                                                }
                                                </script>";
                                        echo "<a href='home_page_login.php' onClick=checkUser()><button id='sub_btn'>Subscribe</button></a>"; 
                                        }else{
                                            echo "Oops! Something went wrong. Please try again later.";
                                        }
                                    }
                                }
                            }
                        } else{
                            // URL doesn't contain valid id parameter. Redirect to error page
                            header("location: error.php");
                            exit();
                        }
                        
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                }
                 
                // Close statement
                mysqli_stmt_close($stmt);
                
                // Close connection
                mysqli_close($link);
              ?>
              <a href="sub_login.php" class="return_sub"><- Back to subscription page</a> 
          </div>
    </div>
</div>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>
<script>
  function scrolltop(){
    window.scrollTo({top: 0});
  }
</script>
</body>
</html>
