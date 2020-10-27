<!DOCTYPE html>
<html>
	<!-- CSE 154 Homework 4 (NerdLuv) -->
	<!-- shared page top HTML -->
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="images/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="nerdluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="bannerarea">
			<img src="images/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
		
		<!-- your HTML output follows -->
		
		<h1>Thank you!</h1>
		<?php
			// echo 'DEBUG: ' . $_POST['name'] . '+' . $_POST['gender'] . '+' . $_POST['os'];
			echo '<p>Welcome to NerdLuv, ' . $_POST['name'] . '!</p>';

			$file = fopen("singles.txt", "a+");

			$personalInfo = $_POST['name'] . ','. $_POST['gender'] . ',' . $_POST['age'] . ',' . $_POST['type'] . ',' . $_POST['os'] . ',' . $_POST['min'] . ','  . $_POST['max'];
			echo $personalInfo;
			fwrite($file, $personalInfo);
			fclose($file);
		?>
		
		<p>Now <a href="matches.php">log in to see your matches!</a></p>
		
		<!-- shared page bottom HTML -->
		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="signup.php">
						<img src="images/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="images/image1.png" alt="Valid HTML" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="images/image2.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>