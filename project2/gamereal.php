<?php
session_start();
$gamefail=false;
//remove blasted alien
for($i=7;$i>-1;$i--){
	if($_SESSION["rows"][$i][$_POST["a"]]==1){
		if($_SESSION["superboost"]==1){
			$_SESSION["rows"][$i-1][$_POST["a"]]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i][$_POST["a"]-1]=0;
		}
		if($_SESSION["superboost"]==2){
			$_SESSION["rows"][$i-1][$_POST["a"]]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i+2][$_POST["a"+2]]=0;
			$_SESSION["rows"][$i+2][$_POST["a"-2]]=0;
			$_SESSION["rows"][$i-2][$_POST["a"+2]]=0;
			$_SESSION["rows"][$i-2][$_POST["a"-2]]=0;
		}
		if($_SESSION["superboost"]==3){
			$_SESSION["rows"][$i-1][$_POST["a"]]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i][$_POST["a"]-4]=0;
		}
		if($_SESSION["superboost"]==4){
			$_SESSION["rows"][$i-2][$_POST["a"]]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i-2][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i+2][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]]=0;
			$_SESSION["rows"][$i-1][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i+1][$_POST["a"]-4]=0;
			$_SESSION["rows"][$i][$_POST["a"]+1]=0;
			$_SESSION["rows"][$i][$_POST["a"]-1]=0;
			$_SESSION["rows"][$i][$_POST["a"]+2]=0;
			$_SESSION["rows"][$i][$_POST["a"]-2]=0;
			$_SESSION["rows"][$i][$_POST["a"]+3]=0;
			$_SESSION["rows"][$i][$_POST["a"]-3]=0;
			$_SESSION["rows"][$i][$_POST["a"]+4]=0;
			$_SESSION["rows"][$i][$_POST["a"]-4]=0;
		}
		if($_SESSION["superboost"]>4){
			for($j=0;$j<8;$j++){
				for($k=0;$k<5;$k++){
					$_SESSION["rows"][$j][$k] = 0;
				}
				
			}
		}
		$_SESSION["rows"][$i][$_POST["a"]]=0;
		$_SESSION["superboost"]=0;
		break;
	}
	else if($i==0 && $_SESSION["superboost"]<6){
		$_SESSION["superboost"]++;
	}
}
//see if you died
for($i=0;$i<5;$i++){
	if($_SESSION["rows"][7][$i]==0){
		continue;
	}
	else{
		$gamefail=True;
	}
}
//if you died redirect to game over screen
if($gamefail){
	header("Location: http://codd.cs.gsu.edu/~scaldwell9/Project2/gameover.html");
	die();
}
//aliens move forward
for($i=7;$i>0;$i--){
	$_SESSION["rows"][$i]=$_SESSION["rows"][$i-1];
}
//if score is high, make the game harder
if($_SESSION["score"]>50){
	for($i=0;$i<5;$i++){
	if(rand(1,100)>40){
		$_SESSION["rows"][0][$i]=0;
	}
	else{
		$_SESSION["rows"][0][$i]=1;
	}
}
}
else if($_SESSION["score"]>30){
	for($i=0;$i<5;$i++){
	if(rand(1,100)>25){
		$_SESSION["rows"][0][$i]=0;
	}
	else{
		$_SESSION["rows"][0][$i]=1;
	}
}
//otherwise game is easier
}
else{
	for($i=0;$i<5;$i++){
		if(rand(1,100)>20){
			$_SESSION["rows"][0][$i]=0;
		}
		else{
			$_SESSION["rows"][0][$i]=1;
		}
	}
}
//increase score
$_SESSION["score"]++;
$marker=False;
$markerindex=-1;
$highscores=array(array(100,"GOT"),array(91,"TOO"),array(88,"PLE"),array(75,"RUG"),array(69,"A55"),array(68,"RLY"),array(45,"TRY"),array(32,"BIE"),array(31,"BIE"),array(1,"OAT"));
for($i=0;$i<10;$i++){
	if($_SESSION["score"]>$highscores[$i][0]){
		array_splice($highscores,$i,0,array($_SESSION["score"]));
		$marker=True;
		$markerindex=$i;
		break;
	}
}

if($marker){
	unset($highscores[10]);
	$highscores=array_values($highscores);
	$highscores[$markerindex]=array($_SESSION["score"],$_SESSION["name"]);
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title> PROTECT YOUR WORLD</title>
	<link rel="stylesheet" type="text/css" href="stylegame.css">
	<meta charset="UTF-8">
	</head>
	<body>
		<table style="font-family: 'Lato', sans-serif; position:absolute; color: #e2dedb; border:1px solid #FFF; transform: translate(-300%,0);">
			<tr>
				<th>Highscore  </th>
				<th>Name</th>
			</tr>
			<?php
				for($i=0;$i<10;$i++){
					echo "<tr><td>".$highscores[$i][0]."</td><td>".$highscores[$i][1]."</td></tr>";
				}
			?>
		</table>
		<div class = "score" style="font-family: 'Lato', sans-serif; position:absolute; color: #e2dedb; border:1px solid #FFF; transform: translate(300%,0);">
			CURRENT SCORE:
			<p>
			<?php
			echo $_SESSION["score"];
			?>
		</p>

		</div>
		<form action="http://codd.cs.gsu.edu/~scaldwell9/Project2/gamereal.php" method="post">
		<?php
			function SPACE(){
		      echo '<td style="width: 65px;height:65px;background-color: transparent;padding: 1px;display:inline-block;"></td>';
		    }
		    function INVADER(){
		      echo '<td style="width: 65px;height:65px;background-color: transparent;padding: 1px;display:inline-block;"><img style="display:block;" width="100%" height="100%" src="invader.gif"></img></td>';
		    }
		    function BOOM(){
		    	echo '<td style="width: 65px;height:65px;background-color: transparent;padding: 1px;display:inline-block;"><img style="display:block;" width="100%" height="100%" src="boom.gif"></img></td>';
		    	sleep(1);
		    	INVADER();
		    }
		    echo '<table style="border-spacing:0px;width:350px;">';
		    for($i=0;$i<8;$i++){
		      echo "<tr>";
		      for($j=0;$j<5;$j++){
		          if($_SESSION["rows"][$i][$j]==0){
		                  SPACE();
		                }
		          else{
		                  INVADER();
	               	}
	            }
	            echo "</tr>";
	        }
	        function chooseship(){
	        	if($_SESSION["superboost"]==0){
	        		echo'<img class = "ship" width="100%" height="200%" src="ship.gif">';
	        	}
	        	else if($_SESSION["superboost"]==1){
	        		echo'<img class = "ship" width="100%" height="200%" src="ship1.gif">';
	        	}
	        	else if($_SESSION["superboost"]==2){
	        		echo'<img class = "ship" width="100%" height="200%" src="ship2.gif">';
	        	}
	        	else if($_SESSION["superboost"]==3){
	        		echo'<img class = "ship" width="100%" height="200%" src="ship3.gif">';
	        	}
	        	else if($_SESSION["superboost"]==4){
	        		echo'<img class = "ship" width="100%" height="200%" src="ship4.gif">';
	        	}
	        	else{
	        		echo'<img class = "ship" width="100%" height="200%" src="ship5.gif">';
	        	}
	        }
		?>		
			<tr>
				<td class="attacker">
					<button type="submit" name="a" value="0"><?php chooseship(); ?></button>
				</td>
				<td class="attacker">
					<button type="submit" name="a" value="1"><?php chooseship(); ?></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="2"><?php chooseship(); ?></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="3"><?php chooseship(); ?></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="4"><?php chooseship(); ?></button>
				</td> 
			</tr>
		</form> 
	</body>
</html>