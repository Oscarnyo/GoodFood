<!-- Footer -->
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


/* footer */
.container{
	max-width: 1200px;
	
	margin: 0 auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.footer-col ul{
	list-style: none;
	display: flex;
	justify-content: space-between;
	width: 500px;
}
.footer{
	background-color: #24262b;
    padding: 40px 0;
	height: 25vh;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: var(--green);
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/* scroll */
.scrolltop{
	position: fixed;
 	bottom: 30px;
 	right: 20px;
 	padding: 6px 13px;
	background-color: var(--green);
 	color: #fff;
	border-radius: 10px;
 	cursor: pointer ;
	transition: all 0.5s ease 0s;
}
</style>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>GoodFood</h4>
  	 			<ul>
  	 				<li><a href="about_login.php">about us</a></li>
  	 				<li><a href="home_page_login.php#first_grid" onclick="scrolltop()">our services</a></li>
  	 				<li><a href="article_page_login.php">article</a></li>
  	 				<li><a href="shop_page1_login.php">shop</a></li>
  	 				<li><a href="sub_login.php">subscription</a></li>
  	 				<li><a href="prize.php">prize</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>