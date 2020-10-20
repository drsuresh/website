<?php include("_header.php");?>
<!DOCTYPE PHP>
<html lang="en-US">
<title>Portfolio Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top">Home
	<link rel="stylesheet" href="/style.css" type="text/css">
	</header>
	<hr>
	<body style="background-color:lightgrey;">
		<nav>
		<ul>
			<li><a href="https://www.lenachiutw.com">Home</a></li>
			<li><a href="/practice/practice.php">Documentation</a></li>
			<li><a href="/pictures/pictures.php">Pictures</a></li>
		<li class="right"><a href="/practice/logout.php?cb=<?= microtime(true) ?>">Logout</a></li>
		<li class="right"><a href="/practice/loginSystem.php">Login</a></li>
		<li class="right"><a href="/practice/add_user.php">Register</a></li>
		</ul>
		</nav>
		<section>
			<article>
				<h2>Welcome to my website!</h2>
				<p>My name is Jimmy Nguyen and this website is currently under construction and is being used for documentation and lots of practice. I am very motivated to web develop in my free time as I hope the website is proof of my progress and results I can demonstrate.<br> Please be patient as it develops! Please check out the <a href="/practice/practice.php">Documentation</a> to see the progress I've been making.</p>
				<img src="pong2.jpg" style="max-width: 300px">

				<h2>What is the goal?</h2>
				<p> The goal is <b>develop and practice</b> many things as possible to showcase skills that I've developed on my own! I recently realized that I've always wanted to pursue the experiences I needed to be an effective collaborator and programmer to help others to realize their potential. I am driven to develop and showcase my devotion to learning coding and programming in<b> Web Development</b> during the hard times of pandemic. This website was created on July 22nd, 2020 and it was made from scartch, without the help of Wordpress, preset templates, or any website generator.</p> 

				<h2>Recent updates</h2>
				<p><em><b>10/14 - Learning Node.js</b></em></p>
				<p>9/15 - Learning ReactJS with Visual Studio Code</p>
				<p>9/14 - <a href="/practice/registeredArea.php">File upload with images to the server</a> is completed. The page can be accessed only if registered and logged in the database through the page <a href="/practice/loginSystem.php">here.</a></p>
				<p>9/11 - Login database setup is completed. You can now register <a href="/practice/loginSystem.php">here.</a></p>
				<p>9/10 - Converted index.html to index.php, modifying DirectoryIndex to establish prerequisites of login system. Working on the login system and database connection for validation and constant username system check-in</p>
				<p>8/27 - Fully rewrote my <a href="/pictures/pictures.php">pictures</a> gallery to be optimized and automated with the use of XML HttpRequest Object. I made it to automatically detect each category for total number of existing files on the server and not fixated to a number. Made it easy to throw whatever files into the folders on the server and easily real-time access any number of files available, without rewriting the codes to match the existing files every time. <a href="/pictures/before-after.jpg">Here is the before and after improvement.</a></p> 
				<p>8/23 - Successfully set up a database and accessible to fetch/modify/add/delete data. The database progress can be found <a href="/practice/phpPractice.php#database">here.</a></p>
			</article>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
			<br><a href="#top">Back to Top</a>
		</footer>
</body>
</html>
<?php include '_footer.php' ?>