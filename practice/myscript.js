function changeList(){
	document.getElementById("des1").innerHTML = "ALL CHANGED UP IN THE FIRST";
	document.getElementById("des2").innerHTML = "Testing out javascript for the first time";
	document.getElementById("des3").innerHTML = "javascript function linked to the button";
	var x = document.getElementById("des1");
	x.style.color = "red";
	x.style.fontSize = "25px";
}

var i = 0;

function descriptClick(){
	var descriptArray = ["You've clicked the first time, keep clicking!", 
	"Second time is maybe a charm?", "Nope, third time is the charm!", 
	"Fourth time is unknown", "Fifth is weird."];
	var str = document.getElementById('demo').innerHTML;
	str = descriptArray[i];
	document.getElementById('demo').innerHTML = str;
	i++;
	if (i == 5)
	{
		i= 0;
	}

}

function test(){
	var x = {fName:"John", 
	lName:"Doe",
	age:"54",
	wife:"Jane",
	fullName:function(){
		return this.fName + " " + this.lName;
	}
	};
	var foods = ["Sushi","Pad Thai","Hotdog","Hamburger",
	"Salmon", "Noodles"];
	document.getElementById('output').innerHTML =
	x.fName + " is looking for his favorite " + foods[0] + " while "
	+ x.wife + " is worried about him because he is " + x.age + ", but interestingly his full name is "+ x.fullName();

}

function list(){
	var x = new Object();
	x.food = "sushi";
	x.color = "red";
	x.name = "car";
	var txt = "";
	for(y in x){
		txt += x[y] + " ";
	}
	document.getElementById("demo").innerHTML = txt;

}
/////////////////////////////////////////////////////////////////////////
//Line 35 of javascript.html
var obj = {counter:0};
document.getElementById("count").innerHTML = "0";

Object.defineProperty(obj,"increment",{
	get : function(){this.counter++;}
});

Object.defineProperty(obj,"decrement",{
	get : function(){this.counter--;}
});

function inc(){
	obj.increment;
	document.getElementById("count").innerHTML = obj.counter;
}
function dec(){
	obj.decrement;
	document.getElementById("count").innerHTML = obj.counter;
}

function Person(first, last, age, eye){
		this.firstName = first;
		this.lastName = last;
		this.age = age;
		this.eyeColor = eye;
		this.fullname = function(){return this.firstName + " " + this.lastName;};
}
var dad = new Person("Peter", "Nguyen", 69, "Brown");
document.getElementById("demo2").innerHTML = "Dad's full name is " + 
dad.firstName + " " + dad.lastName + " and he is " + dad.age + " years old.";
var fulltxt = ""
fulltxt = dad.fullname();
document.getElementById("demo3").innerHTML = fulltxt;
/////////////////////////////////////////////////////////////////////////////////////
//line 72 for background check demonstration
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
/////////////////////////////////////////////////////////////////////////////////////
//line 178 AJAX
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}

/*fetch('products.json')
.then(response => response.json())
.then(json => {products = json;initialize();})
.catch(err => {console.log('Fetch problem: ' + err.message);});*/
