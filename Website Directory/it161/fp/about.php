<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Agnt0012 - About</title>
		<meta name="robots" content="noindex,nofollow" />
		<meta name="viewport" content="width=device-width" />
		<meta charset="utf-8" />

		<!-- ◀ Stylesheets ▶ -->
		<link rel="stylesheet" href="css/index.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/forms.css"/>
		<link rel="stylesheet" href="css/footernav.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<!-- ◀ Mailing List ▶ -->
			<a href="mailinglist.php" class="announcement-banner"><p>&#x2605;Join my mailing list!&#x2605;</p></a>
			
			<!-- ◀ Site Logo ▶ -->
			<h1>
				<br>
				<a href="index.php">
					<img src="https://via.placeholder.com/300x150.png?text=Agent0012+Art+Logo" alt="Agent0012 Art Website Logo">
				</a>
			</h1>

			<!-- ◀ Top Nav ▶ -->
			<nav class="topnav" id="myTopnav">
				<b>
					<a href="index.php">Home</a>
					<a href="collab.php">Work with Robin</a>
					<a href="about.php" class="active">About</a>
					<a href="products.php">Products</a>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
				</b>
			</nav>

		</header>

		<div class="wrapper">
			<!-- ◀ Back to Top ▶ -->
			<a class="scroll-to-top" href="#"><i class="fa fa-chevron-up"></i><br>Top</a>

			<!-- ◀ Page Title ▶ -->
			<h2 class="subheader">About Robin</h2>

			<!-- ◀ Biography ▶ -->
			<div class="about">
				<img src="../images/placeholder400x600.png" alt="Image of Robin">
				<h3>Biography</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<!-- ◀ Artist Statement ▶ -->
				<h3>Artist Statement</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<!-- ◀ Proficiencies ▶ -->
				<h3>Proficiencies</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<footer>
				<div class="footer-nav">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="collab.php">Work with Robin</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="products.php">Products</a>
						</li>
					</ul>
				</div>
				
				<?php
					/*
					* Below are 2 different forms to be re-used       
					* 
					* Only use one at a time, comment out the other!       
					*
					*/

					include 'includes/contact_include.php'; #site keys & code here

					$toAddress = "truongle6952@gmail.com";  //place your/your client's email address here
					$toName = "Robin Flynn"; //place your client's name here
					$website = "Agent 0012 Art";  //place NAME of your client's website

					echo loadContact('simple.php');#demonstrates a simple contact form
					//echo loadContact('multiple.php');#demonstrates multiple form elements

				?>
				<p>
					<small>
						&copy; 2022 by 
						<a href="contact.php">
							Eric Le
						</a>
						, All Rights Reserved ~ 
						<a id="html-checker" href="#">Check HTML</a> ~ 
						<a id="css-checker" href="#">
							Check CSS
						</a>
					</small>
				</p>
			</footer>
		</div>
		<!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
		<script>
			//https://tinyurl.com/dynamic-html-checker
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			  
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
			
			//manages mobile nav 
			function myFunction() {
			    var x = document.getElementById("myTopnav");
			    if (x.className === "topnav") {
			        x.className += " responsive";
			    } else {
			        x.className = "topnav";
			    }
			}   
		</script>
	</body>
</html>
