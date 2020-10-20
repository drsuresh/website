var currentimage = 1;
var pic1 = "These are my parents. They fled from Vietnam War to give me a precious life to live and learn about the world!"
var pic2 = "This is my partner, she is the name of the domain because she forgot to cancel her non-refundable renewal domain subscription and so I am using her domain to learn about coding/programming!"
var pic3 = "This is my family! I have 5 brothers and 4 sisters."
const picLength = 4;

const btnN = document.getElementById("nextPic");
btnN.onclick = function() {
	currentimage++;
	if(currentimage == picLength){
		currentimage = 1;
	}
	document.getElementById("picChange").src=currentimage+".jpg";
	descSwitch();
}

const btnP = document.getElementById("prevPic");
btnP.onclick = function() {
	currentimage--;
	if(currentimage == 0){
		currentimage = picLength - 1;
	}
	document.getElementById("picChange").src=currentimage+".jpg";
	descSwitch();
}

function descSwitch(){
	switch(currentimage){
		case 1:
			descChange(pic1);
			break;
		case 2:
			descChange(pic2);
			break;
		case 3:
			descChange(pic3);
			break;

	}
}

function descChange(desc){
	document.getElementById("description").innerHTML = desc;
}