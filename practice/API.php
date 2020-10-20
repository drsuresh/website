<?php include '_header.php' ?>
<!DOCTYPE html>
<html lang="en-US">
<title>API</title>
<script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
<link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
<link href="nytimes.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top">Things in between
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
		<h2>API Demonstration</h2>
		<br> 
		<p>API Implementation is important to utilizing multiple kinds of functionality needed in order to secure the design of frontend. With the help of backend done by other organizations we can add necessary objects into the web page.</p>
		<div id="map" style="width:400px;height:400px"></div>
	</article>
	 <h1 class="h1nyt">NY Times article search</h1>

  <div class="wrapper">

    <div class="controls">
      <form class = "formnyt">
        <p>
          <label for="search">Enter a SINGLE search term (required): </label>
          <input type="text" id="search" class="search" required>
        </p>
        <p>
          <label for="start-date">Enter a start date (format YYYYMMDD): </label>
          <input type="date" id="start-date" class="start-date" pattern="[0-9]{8}">
        </p>
        <p>
          <label for="end-date">Enter an end date (format YYYYMMDD): </label>
          <input type="date" id="end-date" class="end-date" pattern="[0-9]{8}">
        </p>
        <p>
          <button class="submit">Submit search</button>
        </p>
      </form>
    </div>

    <div class="results">
      <nav class="navnyt">
        <button class="prev">Previous 10</button>
        <button class="next">Next 10</button>
      </nav>

      <section class="sectionnyt">
      </section>
    </div>

  </div>
	</section>
	<footer>
	<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
	<a href="mailto:mchiu1596@gmail.com">Email her</a>
	<br><a href="#top">Back to Top</a>
	</footer>
</body>
</html>
<script src="API.js"></script>
<?php include '_footer.php' ?>