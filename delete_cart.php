<?php
// Process delete operation after confirmation
    // Include config file
    require_once "config.php";

    session_start();
    $retrieve_user_id=trim($_SESSION['user_id']);
    
    // Prepare a delete statement
 

    $sql = "DELETE FROM checkout where checkout_user_id = $retrieve_user_id";
    
    if($stmt = mysqli_prepare($link, $sql)){
       
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: home_page_login.php");
            //exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
    
?>