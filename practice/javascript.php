<?php include '_header.php' ?>
<!DOCTYPE html>
<html lang="en-US">
<title>Javascript Documentation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top">Javascript Documentation
	<link rel="stylesheet" href="/style.css" type="text/css">
	</header>
	<hr>
	<body style="background-color:lightgrey">
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
		<p id="demo">Javascript is a language that is very useful to implementing functionality of user-interactive blocks into HTML websites. It is widely used to bridge between the userinterface with the audience.</p>
		<p id="output"><b>The code sample</b>:</p>
		<br> 
		<pre>
		var x = {
		fName:"John", 
		lName:"Doe",
		age:"54",
		wife:"Jane",
		fullName:function(){
		return this.fName + " " + this.lName;
		}};

		var foods = ["Sushi","Pad Thai","Hotdog","Hamburger",
		"Salmon", "Noodles"];

		document.getElementById('output').innerHTML =
		x.fName + " is looking for his favorite " + foods[0] + " while "
		+ x.wife + " is worried about him because he is " + x.age + ", but interestingly his full name is " x.fullName;</pre>
		<br>
		<p>The demonstration of changing innerHTML through the buttons. The codes can cycle through an array of the first button while others are to demonstrate outputing texts on slightly more complicated variables such as array and dictionaries/lists.</p><br>
		<button type="button" onclick="descriptClick()">Click me!</button>
		<button type="button" onclick="test()">Click me second!</button>
		<button type="button" onclick="list()">Click me third!</button>
		<br>
		<p>For more documentation on my understanding with coding in Javascript, you can find them all right <a href="/practice/jsUnderstand.html">here!</a> The rest of this page will have samples of my projects toying around with complex codes.</p>
	</article>
	<button id = "bgColor">Change color here!</button>
	<div class="block" id="bgChange" style="background-color: yellow"></div><br>
	<div class="canvas-container">
    <canvas class='myCanvas' width='1000px' height='500px'></canvas>
    <button id='btnBall'>Add a Ball!</button> 
    <audio id="ballaudio" src="bat+hit+ball.wav"></audio>
    </div><br>
    <button id='face'>How about a face?</button>
    <p>WORK IN PROGRESS CREEPY FACE BOUNCE</p>
    <audio id="audio" src="hello-4.wav"></audio>
    <canvas id="canvasFace"></canvas>
	</section>
	<footer>
	<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
	<a href="mailto:mchiu1596@gmail.com">Email her</a>
	<br><a href="#top">Back to Top</a>
	</footer>
</body>
</html>
<script src="myscript.js"></script>
<script src="jsfunction.js"></script>
<script>alert("Welcome to the Javascript section of the website!");</script>
<?php include '_footer.php' ?>