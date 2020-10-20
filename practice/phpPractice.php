<?php include '_header.php' ?>
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
					<li><a href="/practice/practice.html">Documentation</a></li>
					<li><a href="/pictures/pictures.html">Pictures</a></li>
					<li class="right"><a href="logout.php?cb=<?= microtime(true) ?>">Logout</a></li>
					<li class="right"><a href="loginSystem.php">Login</a></li>
					<li class="right"><a href="add_user.php">Register</a></li>
				</ul>
			</nav>
			<article>
				<h2>PHP demonstration</h2>
				<pre>
				&lt;?php 
				$odd_numbers = [1,3,5,7,9];
				$even_numbers = [2,4,6,8,10];
				$x = array_merge($odd_numbers,$even_numbers);
				print_r( $x); 
				?></pre>
				<?php 
				$odd_numbers = [1,3,5,7,9];
				$even_numbers = [2,4,6,8,10];
				$x = array_merge($odd_numbers,$even_numbers);
				print_r($x);
				?><br>
				<form method="post">
					<h3 id="dbPlayers">Type in your favorite player to learn more about them!</h3>
					<p>Jimmy, Kevin, Asa, Andy</p>
					<input type="text" name="summonID"><input type="submit">
				</form>
				<p>In this example, we use input to send data and determine the output through conditional operators after checking if existing key within array matches!</p>
				<?php 
					$bestChamps = [
					"Asa" => "Ivern",
					"Jimmy" => "Blitzcrank",
					"Kevin" => "Jhin",
					"Andy" => "Darius"];
					if(array_key_exists("summonID", $_REQUEST)){
						$input = $_REQUEST["summonID"];
						if(array_key_exists($input, $bestChamps)){
							echo "<p  style='color:white'>".$input. " did an amazing job carrying his games with his $bestChamps[$input]!"."</p>";
							if($input == "Jimmy")
							{
								echo "<p style='color:white'>Jimmy loves playing Blitzcrank and his role for support is outstanding. He likes coding a lot so he decided to quit video gaming to code more!</p>";
							}else if($input == "Kevin" ){
								echo "<p style='color:white'>Kevin goes aggro with his playstyle, he synchronizes very well with Jimmy in the bot lane. Him and Jimmy tends to dominate lane and generally win games! He also likes coding and playing with his cat, Cookie. He loves to travel and grow horizontally!</p>";
							}else if($input =="Asa"){
								echo "<p style='color:white'>Asa doesn't stop being funny as he naturally uplifts everyone with a smile on their face through jokes he crack. Asa is also a healthcare worker who deserves a lot of respect and, probably, money. He's a good man.</p>";
							}else if($input == "Andy"){
								echo "<p style='color:white'>Andy is a respectable person as he listens and works together with other people. He's a man with a big heart to help. He's also very interested in economic and financial topics! Talk with him if you need financial advise.</p>";
							}
						}else{
							echo "The person does not exist!";
						}
					}
				?>
				<pre>
				&lt;?php 
				$bestChamps = [
					"Asa" => "Ivern",
					"Jimmy" => "Blitzcrank",
					"Kevin" => "Jhin",
					"Andy" => "Darius"];

				foreach($bestChamps as $key => $values){
					echo "$key plays $values. &lt;br&gt;";
				}
				$search = "Jimmy";
				if(array_key_exists($search,$bestChamps)){
					echo "$search's best champ is $bestChamps[$search]\n";
				} else {
					echo $search . " does not exist!";}
				?></pre>
				<?php 
				$bestChamps = [
					"Asa" => "Ivern",
					"Jimmy" => "Blitzcrank",
					"Kevin" => "Jhin",
					"Andy" => "Darius"];

				foreach($bestChamps as $key => $values){
					echo "$key plays $values. <br>";
				}
				$search = "Jimmy";
				if(array_key_exists($search,$bestChamps)){
					echo "$search's best champ is $bestChamps[$search]<br>";
				} else {
					echo "$search does not exist!";}
				?>
				<br>
				<pre>
				&lt;?php 
				class Person{
					public function __construct($first_name,$last_name){
						$this->first_name = $first_name;
						$this->last_name = $last_name;
					}
					public function greet(){
						echo "My name is " . $this->first_name . " " . $this->last_name . &lt;br&gt;
					}
				}
				class Worker extends Person{
					public function work(){
						echo "Ready to work.";
					}
				}
				$citizen = new Worker("Jimmy","Nguyen");
				$citizen->greet();
				$citizen->work();
				?>
				</pre>
				<?php 
				class Person{
					public function __construct($first_name,$last_name){
						$this->first_name = $first_name;
						$this->last_name = $last_name;
					}
					public function greet(){
						echo "My name is " . $this->first_name . " " . $this->last_name . "<br>";
					}
				}
				class Worker extends Person{
					public function work(){
						echo "Ready to work.";
					}
				}
				$citizen = new Worker("Jimmy","Nguyen");
				$citizen->greet();
				$citizen->work();
				?>
				<pre>
				&lt;?php 
				$myLinks = [
				  array("label" => "Google", "url" => "http://www.google.com"),
				  array("label" => "LenaChiuTW", "url" => "http://www.lenachiutw.com"),
				  array("label" => "New York Times", "url" => "http://www.nytimes.com"),
				  array("label" => "Reddit", "url" => "http://www.reddit.com")
				];

				print("&lt;ul>");
				for ($i = 0; $i < count($myLinks); $i++) {
				  $item = $myLinks[$i];
				  $label = $item["label"];
				  $url = $item["url"];

				  print("&lt;li>&lt;a href='" . htmlspecialchars($url) . "'>" . htmlspecialchars($label) . "&lt;/a>");
				}
				print("&lt;/ul>");
				?>

				</pre>
				<?php 
				$myLinks = [
				  array("label" => "Google", "url" => "http://www.google.com"),
				  array("label" => "LenaChiuTW", "url" => "http://www.lenachiutw.com"),
				  array("label" => "New York Times", "url" => "http://www.nytimes.com"),
				  array("label" => "Reddit", "url" => "http://www.reddit.com")
				];

				print("<ul>");
				for ($i = 0; $i < count($myLinks); $i++) {
				  $item = $myLinks[$i];
				  $label = $item["label"];
				  $url = $item["url"];

				  print("<li><a href='" . htmlspecialchars($url) . "'>" . htmlspecialchars($label) . "</a>");
				}
				print("</ul>");

				?>
			</article>
			<article id="database">
			<p>We will now in this section focus on database! We've successfully setup the databases where we can fetch/retrieve/modify data! We created a database named People with a table People. Using SQL connected to the web host server and accessing the data then throwing them in into PHP, we can display the list of people!</p><br><br>
			<?php include("select.php")?>
			<p>You can right click on the page "View Page Source" to confirm PHP codes! (you won't be able to see it, but just only the output from PHP!) Using PHP as opposed to the popular tradition of using XMLHttpRequest only.</p><p> Submit anything to add names to the database! Currently need to manually refresh the page, but don't worry AJAX is being worked on!</p>
			<form action="resetdb.php" method="post"> 
				<button type="submit" id="resetdb">Reset the Database</button>
			</form>
			<form action="connect.php"method="post">
				<input type="text" name="fname" id="fname" placeholder="First Name" required><br>
				<input type="text" name="lname" id="lname" placeholder="Last Name" required><br>
				<input type="text" name="state" id="state" placeholder="State" required><br>
				<input type="submit" value="Add username"><br><br>
			</form>
			<form action="updateTable.php"method="post">
				<input type="text" name="keys" id="keys" placeholder="Delete ID #" required><br>
				<input type="submit"><br><br>
			</form>
		
			<a href="/database.jpg"><img src="/database.jpg" style="height:55%;wdith:55%"></a>
		</article>
		</section>
		<footer>
			<a href="mailto:jimmywc3@gmail.com" id="email">Email me</a>
			<a href="mailto:mchiu1596@gmail.com">Email her</a>
		</footer>
</body>
</html>

<script>
	$(document).ready(function(){
		$(document).on('click','a[data-role=refresh]',function(){
			var id =$(this).data('id');
			var first_name = $('#'+id).children('td[data-target=first_name]').text();
			var last_name = $('#'+id).children('td[data-target=last_name]').text();
			var state = $('#'+id).children('td[data-target=state]').text();

			$('#first_name').val(first_name);
			$('#last_name').val(last_name);
			$('#state').val(state);
			$('userId').val(id);
		});

		var id = $('#userId').val();
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var state = $('state').val();


		$.ajax({
			url : 'select.php',
			method : 'get',
			data : {first_name: first_name, last_name : last_name, state : state, id : id},
			success : function(response){
				
				
			}

		});
	});

</script>
<?php include '_footer.php' ?>