<?php include("_header.php");?>
<!DOCTYPE PHP>
<html lang="en-US">
<title>Work in progress</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<h1>Log in</h1>
			<?php

			// where is the user trying to get back to, after logging in?
			$sendBackTo = isset($_REQUEST["sendBackTo"]) ? $_REQUEST["sendBackTo"] : "registeredArea.php";

			if (isset($_POST["username"]) && isset($_POST["password"])) {
				// user is trying to log in; if valid login, then redirect to where the user is trying to get back to
				$username = $_POST["username"];
				$password = $_POST["password"];
				$hashedPassword = base64_encode(hash('sha256',$password . $username));

				$query = $mysqli->prepare("select uid from users where username = ? and password = ?");
				$query->bind_param("ss",$username, $hashedPassword);
				if ($query->execute()) {
					$query->bind_result($uid);
					while($query->fetch()){ 
						// if any rows come back, then the login is valid
						echo "Redirecting you...";
						$_SESSION["uid"] = $uid;
						echo "<script>location.replace(".json_encode($sendBackTo).");</script>";
						exit();
					} 
					$query->close();
				}
				echo "Please enter a valid username and password.";
			}

			?>

				<form method="post" action='loginSystem.php' class="inform">
				<ul>
				<li><label>Username:</label> <input type="text" name="username" value="guest">
				<li><label>Password:</label> <input type="password" name="password" value="guest">
				<li><input type=submit>
				</ul>
				<input type="hidden" name="sendBackTo" 
					value="<?= htmlspecialchars($sendBackTo) ?>">
				</form>
				<br>
				<br>
				<p>Click <a href="/practice/registeredArea.php">here!</a> to see if you are logged in. If you've been redirected onto this same page that means you haven't logged in yet!</p><br>
		</article>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
		</footer>
</body>
</html>
<?php include("_footer.php");?>