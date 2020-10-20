var currentimage = 1;
var currentGal = 1;
var picLength;
var fileName;
var fileCheck;

let direct = {
	1:"intro",
	2:"adventure",
	3:"family",
	4:"friends"
};
var descName = direct[currentGal]+"/"+currentimage+".txt";

async function btn(x){
	if(x == 1){
	currentimage++;
	fileName = direct[currentGal]+"/"+currentimage+".jpg";
	doesFileExist(x);
	await descSwitch();
	document.getElementById("picChange").src= fileName;
	} else {
	currentimage--;
	fileName = direct[currentGal]+"/"+currentimage+".jpg";
	doesFileExist(x);
	await descSwitch();
	document.getElementById("picChange").src= fileName;
	}
}

async function galSelect(x){
	currentGal = x;
	currentimage = 1;
	await lengthCheck();
	document.getElementById("picChange").src= direct[currentGal]+"/"+currentimage+".jpg";
}

function doesFileExist(x){
	if(x==1){
	var xhr = new XMLHttpRequest();
	xhr.open('HEAD',fileName,false);
	xhr.send();
	if(xhr.status == "404"){
		currentimage = 1;
		fileName = direct[currentGal]+"/"+currentimage+".jpg";
		}
	} else {
	var xhr = new XMLHttpRequest();
	xhr.open('HEAD',fileName,false);
	xhr.send();
	if(xhr.status == "404"){
		currentimage = picLength;
		fileName = direct[currentGal]+"/"+currentimage+".jpg";
	}
	}
}


async function descSwitch(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('description').innerHTML = xhr.responseText;
		}
	};
	descName = direct[currentGal]+"/"+currentimage+".txt";
	xhr.open('GET',descName,true);
	xhr.send();
}

async function lengthCheck(){
	descSwitch()
	picLength = 0;
	do{
		picLength++;
		fileCheck = direct[currentGal]+"/"+picLength+".jpg";
		var xhr = new XMLHttpRequest();
		xhr.open('HEAD',fileCheck,false);
		xhr.send();
		if(xhr.status == "404"){
			picLength--;
			fileCheck = direct[currentGal]+"/"+picLength+".jpg";
			break;
		}
	} while (picLength < 1000);
}