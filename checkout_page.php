<?php
    // Include config file
    require_once "config.php";
    session_start();

    $take_name = $take_price = $take_quantity = $take_category = " ";
    // Prepare a select statement
    $sql = "SELECT * FROM product WHERE product_id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["get_product_id"]);
        $param_user_id = trim($_SESSION['user_id']);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                
                $take_name= $row['name'];
                $take_price= $row['price'];
                $take_quantity= 1;
                $take_category= $row['category'];
                

            //inserting data to checkout page
            if($param_id != 0){
             $sql1 = "INSERT INTO checkout (checkout_user_id,checkout_name, checkout_price, checkout_quantity, checkout_category) VALUES (?,?,?,?,?)";
            if($stmt1 = mysqli_prepare($link, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "isiis",$param_user_id, $param_name, $param_price, $param_quantity,$param_category); //sss string x3, sis string integer string
            
            // Set parameters
            $param_name = $take_name;
            $param_price = $take_price;
            $param_quantity = $take_quantity;
            $param_category = $take_category;
         

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt1)){
                // Records created successfully. Redirect to landing page
                //header("location: checkout_page.php");
                //exit();
                
                $param_name = " ";
                $param_price = " ";
                $param_quantity = " ";
                $param_description = " ";
        }
    
    
        } //inseting in here

            }
           

        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
  }
}  

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
<script type="text/javascript" src="./SJ_external_file/JS_script/shop_script.js"></script>
</head>
<body class="checkout-background">

<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php') ?>


<!-- Header -->
<header class="w3-container w3-center" style="padding:30px">
        <h1 class="w3-jumbo w3-left checkout-title-position">Checkout your product &#128178&#128178&#128178 &#128179</h1>
</header>


<!--Checkout grid-->
    <div class="w3-row-padding w3-padding-32 w3-container">
        <div class="w3-content">
            <div class="w3-center">
               <?php
                    // Attempt select query execution
               //session_start();
                    $take_user_id= trim($_SESSION['user_id']);
                    $totalPrice=0;
                    $sql = "SELECT * FROM checkout where checkout_user_id= $take_user_id";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            $row_counter = mysqli_num_rows($result);
                            echo "<table class='styled-table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Quantity</th>";
                                        echo "<th>Category</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    $totalPrice += $row['checkout_price'];
                                    echo "<tr>";
                                        echo "<td class = 'w3-center'>" . $row['checkout_name'] . "</td>";
                                        echo "<td class = 'w3-center'>RM" . $row['checkout_price'] . "</td>";
                                        echo "<td class = 'w3-center'>" . $row['checkout_quantity'] . "</td>";
                                        echo "<td class = 'w3-center'>" . $row['checkout_category'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                                echo "</table>";
                                echo "<p class='w3-left'>Total item count = ".$row_counter."</p>";
                            echo "<a href='delete_cart.php' class='w3-button w3-green w3-padding-large w3-large w3-hover-white calculate-button' onclick='calculateTotalPrice()'>Calculate</a>";
                            echo "<a href ='shop_page1_login.php' class='w3-button w3-green w3-padding-large w3-large w3-hover-white continue-button'>Continue Shopping</a>";
                            echo "<p class='w3-left checkout-description'>Total item price count =<b> RM".$totalPrice.".00</b></p>";
                            echo "<br><br><br>";

                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "No records were found<a href='shop_page1_login.php'><b> Back to shop</b></a>";
                            echo '<br><br><br><br><br><br><br><br><br><br>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    //mysqli_close($link);
                    ?>

        </div>
    </div>
</div>

        
<!-- Footer -->
<?php include('./Oscar_external_file/view/footer_login.php') ?>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>

<!-- js -->
<script>
  function calculateTotalPrice(){

    alert("Normal user price: RM"+<?php echo $totalPrice;?>+"\nPlan subscriber price (-10%): RM"+<?php echo $totalPrice*0.9;?>);
    alert("Thanks for purchasing");
}

 function scrolltop(){
    window.scrollTo({top: 0});

  }

  
</script>

</body>
</html>