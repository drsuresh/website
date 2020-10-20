<?php include '_header.php' ?>
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
				<li><a href="/practice/practice.html">Documentation</a></li>
				<li><a href="/pictures/pictures.html">Pictures</a></li>
				<li class="right"><a href="/practice/logout.php?cb=<?= microtime(true) ?>">Logout</a></li>
				<li class="right"><a href="/practice/loginSystem.php">Login</a></li>
				<li class="right"><a href="/practice/add_user.php">Register</a></li>
			</ul>
		</nav>
		<article>
			<h2>tabling</h2>
			<table>
				<tr><td class="person">row1,col1</td>
					<td>row1,col2</td></tr>
				<tr><td class="person">row2,col1</td>
					<td>row2,col2</td></tr>
				<tr><td class="person">row3,col1</td>
					<td>row3,col2</td></tr>
			</table>
			<form action="/practice/bestfriend.php" method="POST">
				<h2>Pick your best friend</h2>
			<table>
				<tr><th>Friends</th><th>Favorite things</th><th>Favorite Food</th></tr>
				<tr><td id="t01"><input type="radio" name="friend" value="Jimmy">Jimmy </td><td>
					<ul>
					<li>Coding</li>
					<li>Reading books</li>
					<li>Talking to friends</li>
					</ul></td>
					<td>Pho</td>
				</tr>
				<tr><td id="t01"><input type="radio" name="friend" value="Asa">Asa</td><td>
					<ul>
					<li>Helping people</li>
					<li>Going out with Friends</li>
					<li>Hiking</li>
					</ul></td>
					<td>Hamburger</td>
				</tr>
				<tr><td id="t01"><input type="radio" name="friend" value="Andy">Andy</td><td>
					<ul>
					<li>Working</li>
					<li>Hanging out with friends</li>
					<li>Discovering new things</li>
					</ul></td>
					<td>Pad Thai</td>
				</tr>
				<tr><td id="t01"><input type="radio" name="friend" value="Kevin">Kevin</td><td>
					<ul>
					<li>Working</li>
					<li>Playing with his cat</li>
					<li>Drinking</li>
					</ul></td>
				<td>Pasta</td>
				</tr>
			</table>
			<input type="submit">
			</form>
			<h2>inserting other pages through iframe</h2>
			<iframe src="practice.html" height="450" width="400" name="iframe_a"></iframe>
			<a href="https://www.instagram.com" target="iframe_a">Instagram</a>
			<a href="https://www.facebook.com" target="iframe_a">Facebook</a>
			<a href="https://www.google.com" target="iframe_a">Google</a>
			<p>Currently broken due to <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy"> Content Security Policy</a> reason. </p>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ybfWYpYhTQQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<form action="/practice/form.php" method="POST">
				<fieldset>
					<legend>Submission:</legend>
				<label for="fname">First name:</label><br>
				<input type="text" id="fname" name="fname" placeholder="John" required><br>
				<label for="age">Age:</label><br>
				<input type="text" id="age" name="age" placeholder="26" required><br>
				<label for="food">Favorite food:</label><br>
				<input type="text" id="food" name="food" placeholder="Sushi" required>
				<input type="submit">
				</fieldset>
			</form><br>

			<form action="/practice/courses.php" height="100">
				<select name="courses" multiple size="3">
				<option value="CompSci">Computer Science</option>
				<option value="Math">Math</option>
				<option value="History">History</option>
				<option value="Politic">Political Science</option></select>
				<input type="submit">
			</form>
			<br>
			<br>
			<h3> Click on either of our faces!</h3>
			<img src="/pictures/intro/2.jpg" alt="couple" usemap="#couplePic" height="550" width="500">
			<map name="couplePic">
				<area shape="rect" coords="92,37,189,227" alt="Jimmy" href="https://www.instagram.com/yimmynguyen/">
				<area shape="rect" coords="219,73,294,222" alt="Lena" href="https://www.instagram.com/_lena1596/"> 
			</map>
		<section>
		<h2> we create a description here</h2>
		<dl>
		<dt><a href="https://en.wikipedia.org/wiki/Coffee" id="des1"> Coffee</a></dt>
			<dd>- Coffee is amazing, so good to have every morning!</dd>
		<dt><a href="https://store.steampowered.com/app/493340/Planet_Coaster/" id="des2">Planet Coaster</a></dt>
			<dd>- One of my favorite games of all time! It resembles my childhood game Sim Theme Park!</dd>
		<dt><a href="https://en.wikipedia.org/wiki/Better_Call_Saul" id="des3">Better Call Saul</a></dt>
			<dd>- One of my favorite TV shows. Pre-quel to Breaking Bad</dd>
		</dl>
		<br>
		<button onclick="changeList()">Click Me!</button>
		<br>
		<a href="/practice/javascript.php"> Check out my Javascript page!</a>
		<br>
		<br>
		<h2>Different type of inputs HTML</h2> <br>
		button
		<input type="button"><br>
		checkbox
<input type="checkbox"><br>
color
<input type="color"><br>
date
<input type="date"><br>
datetime-local
<input type="datetime-local"><br>
email
<input type="email"><br>
file
<input type="file"><br>
hidden
<input type="hidden"><br>
image
<input type="image"><br>
month
<input type="month"><br>
number
<input type="number"><br>
password
<input type="password"><br>
radio
<input type="radio"><br>
range
<input type="range"><br>
reset
<input type="reset"><br>
search
<input type="search"><br>
submit
<input type="submit"><br>
tel
<input type="tel"><br>
text
<input type="text"><br>
time
<input type="time"><br>
url
<input type="url"><br>
week
<input type="week"><br>
<br>
<p>A lot of different possibility of handling data submission and endless possibilities of returning them through output html function, or even manipulate and organize the data through the MySQL host server! Data management is key as HTML is one of most used platforms and data must be handled properly in the backend of any systems.</p>

	<p> In this section we will demonstrate HTML & Javascript AJAX! AJAX is not a language, it is a technique and stands for Asynchronous Javascript and XML</p>
	<div id="demo">
	<h2>The XMLHttpRequest Object</h2>
	<button type="button" onclick="loadDoc()">Change Content</button>
	</div>
	<p>
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