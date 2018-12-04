var diff = parseInt(document.getElementById("diff").innerHTML);
var numImg = parseInt(document.getElementById("num").innerHTML);
var isMatching=0;
var currMatch="";
var score = 0;
function changeImage(id){
	nice.play();
	pid=parseId(id);
	if(isMatching==0){
		document.getElementById(id).src="img/"+pid+".jpg";
		currMatch=id
		isMatching++;
	}
	else if(isMatching==1){
		document.getElementById(id).src="img/"+pid+".jpg";
		if(parseId(currMatch)!=pid){
			setTimeout(changeBack.bind(null,currMatch), 750);
			setTimeout(changeBack.bind(null,id), 750);
		}
		else{
			score++;
			if(score==numImg){
				document.getElementById("victory").innerHTML="GOOD JOB"
				setTimeout(endGame, 2*1000);
			}
		}

		isMatching=0;
	}
}
function endGame(){
	location.reload();
}
function changeBack(id){
	console.log("wrong");
	console.log(id);
	document.getElementById(id).src="img/cover.jpg";
}
function parseId(id){
	var test = id.replace(/a|b/g,"");
	return(test);
}
function scramble(arr,count){
	var i;
    var j;
    var k;
    for (i = count*2-1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        k = arr[i];
        arr[i] = arr[j];
        arr[j] = k;
    }
    return arr;
}
function cover(imarr){
	for(i=0;i<imarr.length;i++){
		if(imarr[i]%13==0){
			console.log(imarr[i]);
			changeBack(imarr[i]/13+"b");
		}
		else{
			console.log(imarr[i]);
			changeBack(imarr[i]+"a");
		}
	}
}
function startGame(){
	document.getElementById("victory").innerHTML="";
	document.getElementById("res").innerHTML="";
	var imarr =[];
	for(i=0;i<numImg;i++){
		imarr.push(i+1);
		imarr.push((i+1)*13);
	}
	imarr = scramble(imarr,numImg);
	for(i=0;i<imarr.length;i++){
		if(imarr[i]%13==0){
			document.getElementById("res").innerHTML+='<li><img class="res-img" id="'+(imarr[i]/13)+'b" src="img/'+(imarr[i]/13)+'.jpg" onclick="changeImage(this.id)" alt="noimage"></li>';
		}
		else{
			document.getElementById("res").innerHTML+='<li><img class="res-img" id="'+imarr[i]+'a" src="img/'+imarr[i]+'.jpg" onclick="changeImage(this.id)" alt="noimage"></li>';
		}
	}
	setTimeout(cover.bind(null,imarr), diff*1000);
	var timeri=120+((numImg-8)*15);
	var timer = timeri;
	var tim = setInterval(function(){ 
		document.getElementById("time").innerHTML=timer;
		if(timer!=0){
			timer-=1;
		}
		else{
			clearInterval(tim);
			timer=timeri;
			startGame();
			}
		
	}, 1000);
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
var nice = new sound("walldog.mp3");
startGame();