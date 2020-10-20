var currentimage = 1;
var description document.getElementById("description").innerHTML

const btnN = document.getElementById("nextPic");
btnN.onclick = function() {
	currentimage++;
	if(currentimage == 4){
		currentimage = 1;
	}
	document.getElementById("picChange").src=currentimage+".jpg";
}
const btnP = document.getElementById("prevPic");
btnP.onclick = function() {
	currentimage--;
	if(currentimage == 0){
		currentimage = 3;
	}
	document.getElementById("picChange").src=currentimage+".jpg";
}