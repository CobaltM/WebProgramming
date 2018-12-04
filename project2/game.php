<?php
session_start();
$_SESSION["name"] = $_POST["visitor_name"];
$_SESSION["rows"]=
array(
array(1,0,0,0,1),
array(0,0,1,0,0),
array(0,0,0,0,0),
array(0,0,0,0,0),
array(0,0,0,0,0),
array(0,0,0,0,0),
array(0,0,0,0,0),
array(0,0,0,0,0)
);
$_SESSION["superboost"] = 0;
$highscores=array(array(100,"GOT"),array(91,"TOO"),array(88,"PLE"),array(75,"RUG"),array(69,"A55"),array(68,"RLY"),array(45,"TRY"),array(32,"BIE"),array(31,"BIE"),array(12,"OAT"));

$_SESSION["score"] = 0;
$_SESSION["hit"] = -1;
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
				<th>Highschore</th>
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
		?>		
			<tr>
				<td class="attacker">
					<button type="submit" name="a" value="0"><img class = "ship" width="100%" height="200%" src="ship.gif"></button>
				</td>
				<td class="attacker">
					<button type="submit" name="a" value="1"><img class = "ship" width="100%" height="200%" src="ship.gif"></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="2"><img class = "ship" width="100%" height="200%" src="ship.gif"></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="3"><img class = "ship" width="100%" height="200%" src="ship.gif"></button>
				</td> 
				<td class="attacker">
					<button type="submit" name="a" value="4"><img class = "ship" width="100%" height="200%" src="ship.gif"></button>
				</td> 
			</tr>
		</table>
	</form> 
	
	</body>
</html>