<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Work with Agnt0012</title>
		<meta name="robots" content="noindex,nofollow" />
		<meta name="viewport" content="width=device-width" />
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/index.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/forms.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<a href="mailinglist.html" class="announcement-banner">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
				</p>
			</a>
			<h1>
				<br>
				<a href="template.php">
					<img src="https://via.placeholder.com/300x150.png?text=Agent0012+Art+Logo" alt="Agent0012 Art Website Logo">
				</a>
			</h1>
			<nav class="topnav" id="myTopnav">
				<b>
					<a href="template.php">Home</a>
					<a href="secondarytemplate.php" class="active">Work with Me</a>
					<a href="about.html">About Me</a>
					<a href="products.html">Products</a>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
				</b>
			</nav>
		</header>
		<div class="wrapper">
			<a class="scroll-to-top" href="#"><i class="fa fa-chevron-up" style="font-size:3em"></i><br>Top</a>

			<h2 class="subheader">Work With Me</h2>
			<ul class="past-works">
				<li>
					<h3>Character Concepts</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="https://via.placeholder.com/1400x300.png?text=Game+Concept" alt="Past Game Art">
				</li>
				<li>
					<h3>Environment Concepts</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="https://via.placeholder.com/1400x300.png?text=Game+Concept" alt="Past Game Art">
				</li>
				<li>
					<h3>Pixel Art Assets</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="https://via.placeholder.com/1400x300.png?text=Game+Concept" alt="Past Game Art">
				</li>
				<li>
					<h3>Game Illustrations</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="https://via.placeholder.com/1400x300.png?text=Game+Concept" alt="Past Game Art">
				</li>
			</ul>


			<footer>
				<div class="secondary_nav">
					<ul>
						<li>
							<a href="template.php">Home</a>
						</li>
						<li>
							<a href="worktogether.html">Work with Me</a>
						</li>
						<li>
							<a href="about.html">About Me</a>
						</li>
						<li>
							<a href="products.html">Products</a>
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
