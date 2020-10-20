const btn = document.getElementById("bgColor");

let random = number => {return Math.floor(Math.random() * (number+1));}

btn.onclick = function() {
  const rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
  document.getElementById("bgChange").style.backgroundColor = rndCol;
}

btnBall.onclick = function(){

var img1 = new Image();
img1.src = "face.jpg";
const canvas = document.querySelector('.myCanvas');
const ctx = canvas.getContext('2d');
const width = 1000;
const height = 500;

ctx.fillStyle = 'rgb(0, 0, 0)';
ctx.fillRect(0, 0, width, height);

let random2 = (min, max) => {const num = Math.floor(Math.random() * (max - min + 1)) + min; return num;}
      
function Ball(x, y, velX, velY, color, size) {
  this.x = x;
  this.y = y;
  this.velX = velX;
  this.velY = velY;
  this.color = color;
  this.size = size;
  }

Ball.prototype.draw = function() {
  ctx.beginPath();
  ctx.fillStyle = this.color;
  ctx.arc(this.x, this.y, this.size, 0, 2 * Math.PI);
  ctx.fill();
}
Ball.prototype.update = function() {
  if ((this.x + this.size) >= width) {
    this.velX = -(this.velX);
  }

  if ((this.x - this.size) <= 0) {
    this.velX = -(this.velX);
  }

  if ((this.y + this.size) >= height) {
    this.velY = -(this.velY);
  }

  if ((this.y - this.size) <= 0) {
    this.velY = -(this.velY);
  }

  this.x += this.velX;
  this.y += this.velY;
}

let balls = [];
var num = 1;

while (balls.length < num) {
  let size = random2(10,20);
  let ball = new Ball(
    random2(0 + size,width - size),
    random2(0 + size,height - size),
    random2(-7,7),
    random2(-7,7),
    'rgb(' + random2(0,255) + ',' + random2(0,255) + ',' + random2(0,255) +')',
    size
  );

  balls.push(ball);
}
function loop() {
  ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
  ctx.fillRect(0, 0, width, height);

  for (let i = 0; i < balls.length; i++) {
    balls[i].draw();
    balls[i].update();
  }

  requestAnimationFrame(loop);
}

const btnBall = document.querySelector('#btnBall');
  loop();
  ballaudio.play();
  num++;
}

var imgTag = new Image();
var canvas = document.getElementById('canvasFace');
var context = canvas.getContext('2d');
var x = canvas.width;
var y = 0;
imgTag.src = "face.jpg";



var h = 500;
var w = 600;

canvas.height = h;
canvas.width = w;


//moving image
var mover = {
  x: 0,
  y: 0,
  width: 208,
  height: 246,
  color: '#000',
  down: true,
  right: true
}

function animate() {
  clear();
  render();
  rID = requestAnimationFrame(animate);
}

function clear() {
  context.clearRect(0, 0, canvas.width, canvas.height);
}

function render() {
  //set direction
  if (mover.down && mover.y >= h - mover.height)
    mover.down = false;

  if (!mover.down && mover.y <= 0)
    mover.down = true;

  if (mover.right && mover.x >= w - mover.width)
    mover.right = false;

  if (!mover.right && mover.x <= 0)
    mover.right = true;

  //make move
  if (mover.right)
    mover.x += 2;
  else
    mover.x -= 2;

  if (mover.down)
    mover.y += 2;
  else
    mover.y -= 2;

  //drawRectangle(mover);
  drawImage(mover);

}

function drawImage(mover) {
  context.drawImage(imgTag, mover.x, mover.y); // draw image at current position
}

const btnFace = document.getElementById('face');

btnFace.onclick = function(){
	animate();
	audio.play();
}

function fetchAndDecode(URL, type){
  return fetch(URL).then(response =>{
    if(!response.ok){
      throw new Error(`HTTP error! Status: ${response.status}`);
    } else {
      if (type === 'blob'){
        return response.blob();
      } else if(type === 'text'){
        return response.text();
      }
    }
  })
}