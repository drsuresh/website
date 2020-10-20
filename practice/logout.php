<?php include("_header.php");?>
<!DOCTYPE html>
<html>
<title>HTML Documentation</title>
<meta name="description" content="HTML Documentation">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top">HTML Documentation
	<link rel="stylesheet" href="/style.css" type="text/css">
</header>
<hr>
<body>
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
		<article>
		<h1>Logout</h1>
		<?php
		$_SESSION["uid"] = "";
		?>
		<p>You are logged out.</p>
</article>
</section>
</body>
<footer>
	<a href="mailto:jimmywc3@gmail.com">Email me</a>
	<a href="mailto:mchiu1596@gmail.com">Email her</a>
	<br><a href="#top">Back to Top</a>
</footer>
</html>
<script src="myscript.js"></script>
<?php include '_footer.php' ?>