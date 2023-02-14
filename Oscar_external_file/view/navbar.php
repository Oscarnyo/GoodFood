<style>
  *{
	margin: 0;
	padding: 0;
}

html{
	scroll-behavior: smooth;
}


/* Colors */
:root{
	--lightgreen:#e3faec;
	--green:#06C167;
	--hovergreen:#04914d;
}

body{
	font-family: "Lato", sans-serif;
	background-color: var(--lightgreen);
}

.fa-anchor,.fa-coffee {
	font-size:200px
}

.w3-center-bar-item{
 	margin-left:150px;
}
  
  
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

nav{
	background-color: var(--lightgreen);
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

.btn_nav:hover{
	background-color: var(--hovergreen) !important;
	color: white !important;
}  
</style>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-xlarge" style="margin:auto">
    <a href="home_page.php" class="w3-padding-large w3-padding-medium w3-left logo">GoodFood</a>
    <a href="home_page.php" class="w3-center-bar-item w3-button w3-padding-large nav_link" id="nav_link">Home</a>
    <a href="article_page.php" class="w3-button w3-padding-large nav_link" id="nav_link">Article</a>
    <a href="shop_page1.php" class="w3-button w3-padding-large nav_link" id="nav_link">Shop</a>
    <a href="sub.php" class="w3-button w3-padding-large nav_link" id="nav_link">Subscription</a>
    <a href="prize_lock.php" class="w3-button w3-padding-large nav_link" id="nav_link">Prize</a>
    <a href="about.php" class="w3-button w3-padding-large nav_link" id="nav_link">About</a>
    <a href="login.php" class="w3-right w3-button w3-padding-large btn_nav" id="login">Login</a>
    <a href="sign_up.php" class="w3-right w3-button w3-padding-large btn_nav" id="signup">Sign up</a>
  </div>
</div>

