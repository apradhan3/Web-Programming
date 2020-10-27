<!DOCTYPE html>
<html>
	<!--
	CSE 154, Homework 4 (NerdLuv)
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->
	
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="images/nerdluv.png" type="image/gif" rel="shortcut icon" />
		<link href="nerdluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="bannerarea">
			<img src="images/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>

		<div> <!-- Matches Form -->
			<form action="matches-submit.php" method="get">
			<fieldset>
				
				<ul>
					<strong>Name:</strong>
				</ul>
				<input type="text" name="name"/> <!-- It will affect the url. -->
				
				<p></p>
				
				<input type="submit" value="View My Matches" />
				
			</fieldset>
			</form>
		</div> <!-- Matches Form -->

		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="nerdluv.php">
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
