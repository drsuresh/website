<?php include("_header.php");?>
<?php 
	if (checkAuth(true) != "") {
?>
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
				<h1>Welcome registered user!</h1>
				<p>You're now on a page where only registered users have access to!!</p>
				<img style='max-height:600px;max-width:600px;' src="/pictures/pong.jpg">
			</article>
			<h2>Upload a picture to the server!</h2>
			<form method="post" action="registeredArea.php"
			enctype="multipart/form-data">
			Choose file: <input type="file" name="myfile">
			<input type="submit" value="OK">
			</form>
			<?php include('fileUpload.php')?>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
			<br><a href="#top">Back to Top</a>
		</footer>
</body>
</html>
<?php } ?>
<?php include("_footer.php");?>
