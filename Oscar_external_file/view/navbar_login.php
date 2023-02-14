<style>
    /* navbar */

.w3-top{
	position: fixed;
	background-color: var(--lightgreen);
}

.logo{
	color: var(--green);
	margin-right: 2.2em;
	margin-left: 3em;
	margin-top: 0.1em;
	text-decoration: none;
	font-weight: bold;
	
}

#second_grid{
	height: 40vh;
}

.nav_link{
	font-size: 1.2rem;
	font-weight: bold;
	margin-top: 0.5em;
}

#nav_link:hover{
	background-color: var(--green)!important ;
	color: rgb(255, 255, 255)!important;
}

.profile_btn {
    height: 30px;
    width: 30px;
    margin-top: 0.3em;
    margin-left: 4em;
    margin-right: 8px;
    cursor: pointer;
}


.btn_nav{
	font-size: 1.2rem;
	font-weight: bolder;
	color: green;
	border-radius: 0.8rem;
	background-color: rgb(205, 230, 205);
	font-size: 1rem;
	text-align: center;
	margin-right: 1em;
	margin-top: 0.5em;
}

.btn_logout{
	font-size: 1.2rem;
	font-weight: bolder;
	color: green;
	border-radius: 0.8rem;
	background-color: rgb(205, 230, 205);
	font-size: 1rem;
	text-align: center;
	margin-left: 16px;
	margin-top: 0.5em;
}

.btn_nav:hover{
	background-color: var(--hovergreen) !important;
	color: white !important;
}
</style>




<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-xlarge" style="margin:auto;">
    <a href="home_page_login.php" class="w3-padding-large w3-padding-medium w3-left logo">GoodFood</a>
    <a href="home_page_login.php" class="w3-center-bar-item w3-button w3-padding-large nav_link" id="nav_link">Home</a>
    <a href="article_page_login.php" class="w3-button w3-padding-large nav_link" id="nav_link">Article</a>
    <a href="shop_page1_login.php" class="w3-button w3-padding-large nav_link" id="nav_link">Shop</a>
    <a href="sub_login.php" class="w3-button w3-padding-large nav_link" id="nav_link">Subscription</a>
    <a href="prize.php" class="w3-button w3-padding-large nav_link" id="nav_link">Prize</a>
    <a href="about_login.php" class="w3-button w3-padding-large nav_link" id="nav_link">About</a>
    
    <a href="profile.php"><img class="profile_btn" src="./Oscar_external_file/img/profile_icon.png" alt="profile"></a>
    <a href="checkout_page.php" class="fa fa-shopping-cart w3-button w3-padding-large">
    <a href="home_page.php" class="w3-button w3-padding-large btn_logout" id="signup">Logout</a>
  </div>
</div>

