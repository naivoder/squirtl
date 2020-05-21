<html>
<head>
	<title>Zzz...(-.-) shhh!</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
		  margin: 0;
		  font-size: 28px;
		  font-family: "Roboto", Helvetica, sans-serif;
		}
		.header {
		  background-color: black;
		  padding: 30px;
		  text-align: center;
		  height: 100vh;
		  color: white;
		}
/* 		#jump_key a:hover {
			background-image: -webkit-gradient( linear, left top, right top,
			  color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff),
			  color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
		  	background-image: gradient( linear, left top, right top,
			  color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff),
			  color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
		  	color:transparent;
		  	-webkit-background-clip: text;
		  	background-clip: text;
		  	font-family: 'Roboto', sans-serif;
		} */
		.disabled {
			pointer-events: none;
		}
		#navbar {
		  	overflow: hidden;
		  	background-color: #333;
		}
		#navbar a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 16px 18px;
			text-decoration: none;
			font-size: 30px;
		}
		#navbar a:hover {
			background-color: #ddd;
			color: black;
		}
		#navbar a.active {
			background-color: #4CAF50;
			color: white;
		}
		.content {
			padding: 16px;
		}
		.sticky {
		  position: fixed;
		  top: 0;
		  width: 100%;
		}
		.sticky + .content {
		  padding-top: 60px;
		}
		#bubbles { height: 100% }
		#bubbles { padding: 100px 0 }
		.bubble {
			width: 60px;
			height: 60px;
			background: #ffFFFF;
			border-radius: 200px;
			-moz-border-radius: 200px;
			-webkit-border-radius: 200px;
			position: absolute;
		}
		.x1 {
			-webkit-transform: scale(0.9);
			-moz-transform: scale(0.9);
			transform: scale(0.9);
			opacity: 0.2;
			-webkit-animation: moveclouds 15s linear infinite, sideWays 4s ease-in-out infinite alternate;
			-moz-animation: moveclouds 15s linear infinite;
			-o-animation: moveclouds 15s linear infinite;
		}
		.x2 {
			left: 80%;
			-webkit-transform: scale(0.6);
			-moz-transform: scale(0.6);
			transform: scale(0.6);
			opacity: 0.5;
			-webkit-animation: moveclouds 25s linear infinite, sideWays 5s ease-in-out infinite alternate;
			-moz-animation: moveclouds 25s linear infinite;
			-o-animation: moveclouds 25s linear infinite;
		}
		.x3 {
			left: 35%;
			-webkit-transform: scale(0.8);
			-moz-transform: scale(0.8);
			transform: scale(0.8);
			opacity: 0.3;
			-webkit-animation: moveclouds 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
			-moz-animation: moveclouds 20s linear infinite;
			-o-animation: moveclouds 20s linear infinite;
		}
		.x4 {
			left: 47%;
			-webkit-transform: scale(0.75);
			-moz-transform: scale(0.75);
			transform: scale(0.75);
			opacity: 0.35;
			-webkit-animation: moveclouds 18s linear infinite, sideWays 2s ease-in-out infinite alternate;
			-moz-animation: moveclouds 18s linear infinite;
			-o-animation: moveclouds 18s linear infinite;
		}
		.x5 {
			left: 15%;
			-webkit-transform: scale(0.8);
			-moz-transform: scale(0.8);
			transform: scale(0.8);
			opacity: 0.3;
			-webkit-animation: moveclouds 7s linear infinite, sideWays 1s ease-in-out infinite alternate;
			-moz-animation: moveclouds 7s linear infinite;
			-o-animation: moveclouds 7s linear infinite;
		}
		.x6 {
			left: 95%;
			-webkit-transform: scale(0.8);
			-moz-transform: scale(0.8);
			transform: scale(0.8);
			opacity: 0.3;
			-webkit-animation: moveclouds 7s linear infinite, sideWays 1s ease-in-out infinite alternate;
			-moz-animation: moveclouds 7s linear infinite;
			-o-animation: moveclouds 7s linear infinite;
		}
		@-webkit-keyframes moveclouds {
			0% {
				top: 500px;
			}
			100% {
				top: -500px;
			}
		}
		@-webkit-keyframes sideWays {
			0% {
				margin-left:0px;
			}
			100% {
				margin-left:50px;
			}
		}
		@-moz-keyframes moveclouds {
			0% {
				top: 500px;
			}
			100% {
				top: -500px;
			}
		}
		@-o-keyframes moveclouds {
			0% {
				top: 500px;
			}
			100% {
				top: -500px;
			}
		}
		 /* Style inputs with type="text", select elements and textareas */
		input[type=text], select, textarea {
		  width: 100%; /* Full width */
		  padding: 12px; /* Some padding */
		  border: 1px solid #ccc; /* Gray border */
		  border-radius: 4px; /* Rounded borders */
		  box-sizing: border-box; /* Make sure that padding and width stays in place */
		  margin-top: 6px; /* Add a top margin */
		  margin-bottom: 16px; /* Bottom margin */
		  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
		}

		/* Style the submit button with a specific background color etc */
		input[type=submit] {
		  background-color: #4CAF50;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		/* When moving the mouse over the submit button, add a darker green color */
		input[type=submit]:hover {
		  background-color: #45a049;
		}

		/* Add a background color and some padding around the form */
		.w3-container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
		h1 {
			font-weight: bolder;
			font-size: 100px;
		}
		h2 {
			font-weight: bolder;
			font-size: 60px;
		}
		h3 {
			font-weight: bolder;
			font-size: 30px;
		}
		.w3-content {
			max-width: 100%;
		}
		p, li {
			font-size: 12pt;
		}
		hr {
			border-top: 1px dotted black;
		}
	</style>
</head>
<body>
	<div id="bubbles" align="center" class="header w3-center w3-row w3-mobile">
		<div class="bubble x1"></div>
		<div class="bubble x2"></div>
		<div class="bubble x3"></div>
		<div class="bubble x4"></div>
		<div class="bubble x5"></div>
		<div class="bubble x6"></div>
		<div class="w3-padding-16 w3-hide-small"></div>
		<div id="jump_key" class="w3-hide-small">
			<a href="#content">
				<img class="w3-image w3-hide-medium w3-hide-small" src="http://www.squirtl.com/wp-content/uploads/2020/02/Squirtl_2_White.png" style="width:90%">
			</a>
		</div>
		<br>
		<div id="jump_key" class="w3-container w3-right w3-margin-right w3-hide-medium w3-hide-small" style="position:relative;
																											 bottom:80px;
																											 font-size:40px;
																											 width:45%;
																											 background-color:black;">
			<a href="#content" style="text-decoration:none;">intelligent pest control.&nbsp;&nbsp;</a>
		</div>
		<div id="jump_key" class="w3-hide-large" >
			<a href="#content" style="text-decoration:none;"><img class="w3-image" src="http://www.squirtl.com/wp-content/uploads/2020/02/Squirtl_Logo_White-01.png" style="width:90%"></a>
		</div>
	</div>
	<div id="navbar">
		<a href="#home" class="w3-hover-red">Home</a>
		<a href="#news" class="w3-hover-green">News</a>
		<a href="#contact" class="w3-hover-blue">Contact</a>
		<div id="jump_key">
			<a href="#bubbles" class="w3-right w3-hide-medium w3-hide-small w3-hover-none">
				<img class="w3-image" src="http://www.squirtl.com/wp-content/uploads/2020/02/Squirtl_White.png" style="height:45px">
			</a>
		</div>
	</div>
	<div class="content" id="content" name="content">
		<div id="home">
			<br><br>
			<h2 align="center">
				Squirtl Protects Your Birdfeeder
			</h2>
			<div class="w3-content w3-light-gray" style="width:75%">
				<div class="w3-row-padding">
					<div class="w3-container w3-half w3-padding-large w3-mobile">
						<h3 class="w3-text-green">
							<i class="fa fa-lightbulb-o w3-text-black" aria-hidden="true"></i> Intelligent
						</h3>
						<p>
							Using cutting edge computer vision algorithms, Squirtl is trained to identify and target unwanted guests,
							unleashing a burst of water that leaves an unforgettable impression!
						</p>
						<h3 class="w3-text-green">
							<i class="fa fa-ambulance w3-text-black" aria-hidden="true"></i> Safe
						</h3>
						<p>
							Squirtl only squirts squirrels... keeping the furry pests away while your family, pets and the local birds stay nice and dry!
						</p>
						<h3 class="w3-text-green">
							<i class="fa fa-heart w3-text-black" aria-hidden="true"></i> Humane
						</h3>
						<p>
							Squirtl is non-lethal, delivering a powerful and accurate deterrant without causing any actual harm to the squirrels.
							The results are amusing, and ethical!
						</p>
						<h3 class="w3-text-green">
							<i class="fa fa-usd w3-text-black" aria-hidden="true"></i> Cost Effective
						</h3>
						<p>
							Squirtl keeps a watchful eye over your birdfeeder, allowing birds to return
							and saving <span class="w3-text-green" style="font-weight:bold;">YOU</span> a fortune on birdseed.
							Enjoy your yard again!
						</p>
					</div>
					<div class="w3-container w3-padding w3-half w3-mobile w3-center w3-hide-small w3-hide-medium">
						<br><br><br>
						<iframe width="560" height="315"
								src="https://www.youtube.com/embed/o7LMY71nOSA?start=10" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
						</iframe>
					</div>
				</div>
				<div class="w3-center w3-hide-large w3-text-black">
					<a href="https://youtu.be/o7LMY71nOSA?t=10" target="_blank" style="font-weight:bold">Watch Demo >></a>
				</div>
			</div>
			<br><br>
			<hr>
		</div>
		<div id="news">
			<br><br>
			<h2 align="center">
				News, Updates &amp; Information
			</h2>
			<div class="w3-content w3-light-gray w3-padding-large" style="width:75%">
				<h3 class="w3-text-green">
					Spring 2020 - Preparing for Production!
				</h3>
				<p>
					The Squirtl team is currently refining the Squirtl prototype to improve performance, appearance, and manufacturability.<br>
					Some of the improvements we plan to implement in version 2.0 include:
				</p>
				<ul>
					<li>Aesthetic appeal - a new, sleek exterior design.</li>
					<li>Improved performance - faster, more accurate targeting means more successful strikes.</li>
					<li>Modular assembly - allowing the consumer to customize the installation to fit their specific needs.</li>
					<li>Cordless power - rechargable batteries for maximum versatility.</li>
					<li>Mobile application - save video clips of strikes and compete for high scores in your area.</li>
				</ul>
				<p>
					We are currently seeking licensing and manufacturing opportunities! If you are interested in investing or partnering with us
					please <span class="w3-text-green" style="font-weight:bold"><a href="#contact" style="text-decoration:none;">contact us</a></span>!
				</p>
			</div>
			<br><br>
			<hr>
		</div>
		<div id="contact">
			<br><br>
			<h2 align="center">
				Interested? Let's get in touch!
			</h2>
			<div class="w3-content" style="width:75%">
				<div class="w3-container">
				  <form action="index.php" method="POST">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="First Name" required="True">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Last Name" required="True">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="Email" required="True">
					<label for="msg">Message</label>
					<textarea id="msg" name="message" placeholder="Write something.." style="height:100px" required="True"></textarea>
					<input type="submit" value="Submit">
				  </form>
				</div>
			</div>
		</div>
	</div>
	<div class="w3-padding-16"></div>
	<footer class="w3-container w3-black" style="height:100px;border-radius:0px"></footer>
	<script>
		window.onscroll = function() {catchBar()};
		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;
		function catchBar() {
		  if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		  } else {
			navbar.classList.remove("sticky");
		  }
		}
			$('a').click(function(){
				$('html, body').animate({
					scrollTop: $( $(this).attr('href') ).offset().top
				}, 500);
				return false;
			});
	</script>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $firstname $lastname \n Message: $message";
	$recipient = "cameron.redovian@squirtl.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo '<script type="text/javascript">
				window.alert("Message Sent! Talk to you soon!")
		  </script>';
	}

?>
