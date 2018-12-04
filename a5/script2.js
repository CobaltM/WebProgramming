var correct = Math.floor(Math.random() * 100);
var guesses = 10;
function submit(){
	var low = new sound("high.mp3");
	var high = new sound("low.mp3");
	var nice = new sound("walldog.mp3");
	console.log
	guesses -=1;
	console.log(guesses);
	document.getElementById("num").innerHTML="Number of guesses left is "+guesses;
	if(guesses>-1){
		var ino = parseInt(document.getElementById("in").value);
		if(ino<1 || ino>100){
			document.getElementById("guess").innerHTML="GUESS A VALID NUMBER!!!";
		}
		else if(ino>correct){
			document.getElementById("guess").innerHTML="HIGH";
			high.play();
		}
		else if(ino<correct){
			document.getElementById("guess").innerHTML="LOW";
			low.play();
		}
		else{
			document.getElementById("guess").innerHTML="CORRECT!!!";
			nice.play();
		}
	}
	else{
		document.getElementById("guess").innerHTML="OUT OF GUESSES";
	}
}
//from w3schools
function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }    
}