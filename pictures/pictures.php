 <!DOCTYPE html>
<html lang="en-US">
<title>Work in progress</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top" >Pictures
	<link rel="stylesheet" href="/style.css" type="text/css">
	</header>
	<hr>
	<body style="background-color:lightgrey" onload="lengthCheck()">
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
				<div class="dropdown">
				  <button class="btn">Gallery</button>
				  <div class="dropdown-content">
				    <a href="javascript:galSelect(x=1)">Intro</a>
				    <a href="javascript:galSelect(x=2)">Adventure</a>
				    <a href="javascript:galSelect(x=3)">Family</a>
				    <a href="javascript:galSelect(x=4)">Friends</a>
				  </div>
				</div>
				<button class ="btn" type="button" value="0" onclick="btn(this.value)">Previous</button>
				<button class ="btn" type="button" value="1" onclick="btn(this.value)">Next</button>
				<br>
				<p id="description"></p>
				<img src='intro/1.jpg' id="picChange" style="max-height: 500px;max-width: 500px">
			</article>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
			<br><a href="#top">Back to Top</a>
		</footer>
</body>
</html>
<script src="/pictures/jsPictures.js"></script>
