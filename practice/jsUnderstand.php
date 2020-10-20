<?php include '_header.php' ?>
<!DOCTYPE PHP>
<html lang="en-US">
<title>Javascript Documentation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<header id="top">Javascript Documentation
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
	<section>
	<h3>Let's manipulate this counter!</h3>
	<p id="count"></p>
	<button type="button" onclick="inc()">Increment</button>
	<button type="button" onclick="dec()">Decrement</button>
	<br>
	<p>This is a demonstration of using:</p>
	<pre>
		var obj = {counter:0};

		Object.defineProperty(obj,"increment"{
		get : function(){this.counter++;}
		});
	</pre>
	<p>We create this instead of traditionally using a variable to manipulate through:</p>
	<pre>
		var counter = 0;

		function increment(){
		counter++;
		}
	</pre>
	<p>The advantage of using Object.defineProperty is to define a property to an object that can be accessed as a method. This allows us to keep accessing the object and its properties without constantly making tons of redundant functions. Variables are just identifier paired with a value, but objects are better due to overall complexity and functionality. We can simply call:</p>
	<pre>
		obj.increment;
		obj.decrement;
	</pre>
	<p> to just access it normally without the "()", further creating simpler UI/coding experience</p>
	<p>In this next part we can look at constructor. Constrctors are very useful when designing objects with preset objects. Here we will create traits of a person:</p>
	<pre> 
		function person(first, last, age, eye){
		this.firstName = first;
		this.lastName = last;
		this.age = age;
		this.eyeColor = eye;
		}
	</pre>
	<p>Then we define a person using our constructor we designed:</p>
	<pre> 
		var dad = new person("Peter", "Nguyen", 69, "Brown");</pre>
	<p> The object contain the traits that was predefined and we can access them easily through property:</p>
	<pre> 
		document.getElementById("demo2").innerHTML = "Dad's full name is " + dad.first + " " + dad.last + " and he is " + dad.age + " years old.";</pre>
		<p id="demo2"></p>
		<p id="demo3" style="font-weight:bold"></p>
		<p>The full name bolded above is using a function within the constructor designed below. Function is declared in order to create a constructor instead of declaring var.</p>
		<pre>
		<b style="font-size:120%">function</b> person(first, last, age, eye){
		this.firstName = first;
		this.lastName = last;
		this.age = age;
		this.eyeColor = eye;
		this.fullname = function(){return this.firstName + " " + this.lastName;};
		}
		var fulltxt = ""
		fulltxt = dad.fullname();
		document.getElementById("demo3").innerHTML = fulltxt;</pre>
		<article>
		<p id="bgCheck">Jimmy Nguyen</p>
		<button onclick="fullCheck()">Background Check</button>
		<p>This "Background Check" button is to demonstrate objects call and creating properties with ease, skipping over the traditional dictionary style.</p>
		<pre>
		var tools = new Object;

		tools.bgName = function(){
			return this.nameF.toUpperCase() + " " + this.nameL.toUpperCase() + " is a legal citizen.";
		}

		var citizen = new Object;
		citizen.nameF = "Jimmy";
		citizen.nameL = "Nguyen";

		var txt = tools.bgName.call(citizen);

		function fullCheck(){
			document.getElementById("bgCheck").innerHTML = txt;
		}
	</pre>
	</article>
	<article>
		<p>Now in a much more realistic application that if we were to create a data retrieval and wanting to return a message without missing any information we would want to use promise! Promise is a javascript object that represents intermediate stte of an operation, resulting of some kind that can be returned at some point in the future. We will demonstrate the promise concept <a href="/pictures/intro/practicing.html" style="font-size:140%">here</a>
			<pre>
	function fetchAndDecode(url, type) {
        return fetch(url).then(response => {
          if(!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          } else {
            if(type === 'blob') {
              return response.blob();
            } else if(type === 'text') {
              return response.text();
            }
          }
        })
        .catch(e => {
          console.log(`There has been a problem with your fetch operation for resource "${url}": ` + e.message);
        });
      }

      let parents = fetchAndDecode('1.jpg', 'blob');
      let cat = fetchAndDecode('/pictures/adventure/1.jpg', 'blob');
      let description = fetchAndDecode('1.txt', 'text');

      Promise.all([parents, cat, description]).then(values => {
        console.log(values);
        let objectURL1 = URL.createObjectURL(values[0]);
        let objectURL2 = URL.createObjectURL(values[1]);
        let descText = values[2];

        let image1 = document.createElement('img');
        let image2 = document.createElement('img');
        image1.src = objectURL1;
        image2.src = objectURL2;
        document.body.appendChild(image1);
        document.body.appendChild(image2);

        let para = document.createElement('p');
        para.textContent = descText;
        document.body.appendChild(para);
      });</pre>
      <br>
      <p>What's happening here is that the pictures are being feteched and the data collected through response then decoding the data with either blob() or text() by chaining with .then and .catch. We use Promise.all to reassure that all the data has been completely fulfilled by the promise functions we set up and accessing through those promises as an array then later appending them on to the webpage. The benefit of this is the concept of asynchronously completeing tasks without having errors in missing files.</p>
	</article>
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