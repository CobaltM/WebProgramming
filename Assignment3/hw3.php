<?php
//QUESTION 1 START
echo "Question 1: <br>";
function isBitten(){
  $bit = rand(0,1);
  if($bit==1)
      return true;
  else
      return false;
}
if(isBitten())
  echo "Charlie ate my lunch!";
else
  echo "Charlie did not eat my lunch!";
//QUESTION 1 END
echo "<br><br><br>";
//QUESTION 2 START
echo "Question 2: (Bottom of page) <br>";
function RED(){
  echo '<th style="width: 35px;height:35px;background-color: red;padding: 1px;display:inline-block;"></th>';
}
function BLACK(){
  echo '<th style="width: 35px;height:35px;background-color: black;padding: 1px;display:inline-block;"></th>';
}
$RoB=0;
echo '<table style="border-spacing:0px;width:300px;">';
for($i=0;$i<8;$i++){
  echo "<tr>";
  for($j=0;$j<8;$j++){
      if($RoB==0){
              $RoB=1;
              RED();
            }
      else{
              $RoB=0;
              BLACK();
            }
    }
  if($RoB==0)
              $RoB=1;
      else
              $RoB=0;
  echo "</tr>";
}
//QUESTION 2 END
echo "<br><br><br>";
//QUESTION 3 START
echo "Question 3: <br>";
$month = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December'); 
for($i=0;$i<count($month);$i++){
  echo "$month[$i] ";
}
echo "<br>";
function SortedMonths($months){
  sort($months);
  return $months;
}
$sM = SortedMonths($month);
for($i=0;$i<count($month);$i++){
  echo "$sM[$i] ";
}
echo "<br>";
foreach ($month as $v){
  echo "$v ";
}
echo "<br>";

foreach($sM as $v){
   echo "$v ";
}
//QUESTION 3 END
echo "<br><br><br>";
//QUESTION 4 START
echo "Question 4: <br>";
$rName = ["Chama Gaucha", "Aviva by Kameel", "Bone's Restaurant", "Umi Sushi Buckhead", "Fandangles", "Capital grille", "Canoe", "One Flew South", "FoxBros. BBQ", "South City Kitchen Midtown"];
$rAC = [40.5,15,65,40.5,30,60.5,35.5,21,15,29];
echo "<pre>";
function printAsTable($names, $prices){
  echo "                          |                 <br>        Restaurant        |     Avg Cost    <br>--------------------------------------------<br>";
  for($i = 0;$i<count($names);$i++){
      echo $names[$i];
      for($j=0;$j<(26-strlen($names[$i]));$j++)
                   echo str_replace(' ', ' '," ");
      echo "|   $",round($prices[$i],2),"<br>";
    }
}
printAsTable($rName, $rAC);
echo "<br> Sorted By Name: <br>";
function printAsTableSortedNames($names, $prices){
  echo "                          |                 <br>        Restaurant        |     Avg Cost    <br>--------------------------------------------<br>";
  asort($names);
  foreach($names as $key => $val){
      echo $val;
      for($j=0;$j<(26-strlen($names[$key]));$j++)
                   echo str_replace(' ', ' '," ");
      echo "|   $",round($prices[$key],2),"<br>";
    }
}
printAsTableSortedNames($rName,$rAC);
echo "<br> Sorted By Price: <br>";
function printAsTableSortedPrice($names, $prices){
  echo "                          |                 <br>        Restaurant        |     Avg Cost    <br>--------------------------------------------<br>";
  asort($prices);
  foreach($prices as $key => $val){
      echo $names[$key];
      for($j=0;$j<(26-strlen($names[$key]));$j++)
                   echo str_replace(' ', ' '," ");
      echo "|   $",round($val,2),"<br>";
    }
}
printAsTableSortedPrice($rName,$rAC);

echo "</pre>";
//QUESTION 4 END
echo "<br>Question 2: <br>"
?>