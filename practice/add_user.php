 <!DOCTYPE PHP>
<html lang="en-US">
<title>Work in progress</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("_header.php");?>
<header>Playground Practice
	<link rel="stylesheet" href="/style.css" type="text/css">
	</header>
	<hr>
	<body style="background-color:lightgrey;">
		<section>
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
				
			<h1>Register</h1>
				<?php 
				if (isset($_SESSION["uid"]) && $_SESSION["uid"] != ""){
					echo "if you're able to read this then that's because you're logged in! :)";
				}
				?>

			<form method="post" action='add_user_receive.php' class="inform">
			<ul>
			<li><label>Username:</label> <input type="text" name="username">
			<li><label>Password:</label> <input type="password" name="password">
			<li><input type=submit>
			</ul>
			</form>
		</article>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
		</footer>

<?php include("_footer.php");?>
</body>
</html>