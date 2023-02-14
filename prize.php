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
<link rel="stylesheet" type="text/css" href="./Jack_externel_file/CSS/prize.css">
</head>
<body>
<!-- Navbar -->
<?php include('./Oscar_external_file/view/navbar_login.php') ?>

<!-- Header -->
<header class="w3-container w3-center" style="padding:128px 16px">
<div class="header_content">
    <img src="./Jack_externel_file/bingo1.jpg" alt="" class="bg_img">
      <div class="front_text">
        <h1>Sweeptakes</h1>
        <p>A sweepstake is a type of contest where a prize or prizes may be awarded to a winner or winners. Sweepstakes began as a form of lottery that were tied to products sold. In response, the FCC and FTC refined U.S. broadcasting laws.</p>
        <h3>Join Us Now!</h3>
        <div>
			<a href="shop_page3_login.php"><button id="prize_btn">BUY TICKET!</button></a>
			<button id="prize_btn">CHECK RESULT HERE</button>
		</div>
    </div>
  </div>
</header>

<!-- Countdown -->
<div class="w3-container">
  <div class="w3-content">
      <h1>COUNTDOWN TO NEXT DRAW</h1>
      <div class="line"></div>
      <div class="d-date"><p>Draw Date: <p id="date">Date</p></div>
	      <div class="c_box">
	       	<div id="c_box1"><p class="cd_font" id="cd_days">00</p></div>
	        <p class="font">:</p>
	        <div id="c_box2"><p class="cd_font" id="cd_hrs">00</p></div>
	        <p class="font">:</p>
	        <div id="c_box3"><p class="cd_font" id="cd_mins">00</p></div>
	        <p class="font">:</p>
	        <div id="c_box4"><p class="cd_font" id="cd_secs">00</p></div>
	        <button id="remind_btn">Remind Me!</button>
      </div>
    </div>
  </div>

<!--Prize-->
<div class="w3-container">
	<div class="w3-content">
		<div class="w-class">
			<h1>PRIZES</h1>
			<div class="line"></div>
			<div class="p-block">
				<div class="p-box">
					<img src="../asg2/Jack_externel_file/1st.jpg" style="width: 250px;	height: 250px;">
					<h4>First Prize x1</h4>
				</div>
				<div class="p-box">
					<img src="../asg2/Jack_externel_file/2nd.jpg" style="width: 250px;	height: 250px;">
					<h4>Second Prize x2</h4>
				</div>
				<div class="p-box">
					<img src="../asg2/Jack_externel_file/3rd.jpg" style="width: 250px;	height: 250px;">
					<h4>Third Prize x4</h4>
				</div>
				<div class="p-box">
					<img src="../asg2/Jack_externel_file/4th.jpg" style="width: 250px;	height: 250px;">
					<h4>Fourth Prize x10</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include('./Oscar_external_file/view/footer_login.php') ?>

<!-- scroll -->
<div onclick="scrolltop()" class="scrolltop">&#8593</div>

<!-- js -->
<script>
  function scrolltop(){
    window.scrollTo({top: 0});
  }
  
</script>
<script>
			// Set the date we're counting down to
			var date = new Date("Dec 25, 2022 23:59:59");
			var countDownDate = date.getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get today's date and time
			  var now = new Date().getTime();
			    
			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;
			    
			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			    
			  // Output the result in an element with id="demo"
			  document.getElementById("cd_days").innerHTML = days + "d ";
			  document.getElementById("cd_hrs").innerHTML = hours + "h ";
			  document.getElementById("cd_mins").innerHTML = minutes + "m ";
			  document.getElementById("cd_secs").innerHTML = seconds + "s ";
			  document.getElementById("date").innerHTML = date;
			    
			  // If the count down is over, write some text 
			  if (distance < 0) {
			    clearInterval(x);
			    document.getElementById("cd_days").innerHTML = "EXPIRED";
			    document.getElementById("cd_hrs").innerHTML = "EXPIRED";
			    document.getElementById("cd_mins").innerHTML = "EXPIRED";
			    document.getElementById("cd_secs").innerHTML = "EXPIRED";
			  }
			}, 1000);
			</script>
</body>
</html>