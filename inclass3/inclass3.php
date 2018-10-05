<?php
function question1() {
  echo "question 1:";
      echo "<p><i>“Good morning, Dave,” said HAL</i></p>";
}

function question2($radius){
  $a= pi() * $radius * $radius;
   echo "Question 2: Area of circle with radius ",$radius," is ",$a;
   echo "<br>";
      
}
function question3($celFahr){
  echo "Question 3: Celsius value is ",round((5/9)*( $celFahr - 32),2), " as Fahrenheit";
   echo "<br>";
}
function question4(){
   $stringVar = "  PHP is fun   ";
  echo "Question 4: String has ",strlen(trim($stringVar))," characters";
   echo "<br>";
}
function question5(){
   $stringVar = "WDWWLWWWLDDWDLL";
  echo "Question 5: value after WWW is ",substr($stringVar,strpos($stringVar,"WWW")+3,1);
   echo "<br>";
}
function question6($stringForward){
  $stringForwar=strtolower($stringForward);
  $stringBackward=strrev($stringForwar);
  if($stringForwar == $stringBackward){
      echo "Question 6: String '",$stringForward,"' is a palindrome!";
      echo "<br>";
  }
  else{
      echo "Question 6: String '",$stringForward,"'  is not a palindrome!";
      echo "<br>";
    }
}
function question7(){
  $num = 7;
  if($num%2==0){
      echo "Question 7: Number is even";
      echo "<br>";
    }
  else{
      echo "Question 7: Number ",$num," is odd";
      echo "<br>";
    }
}
function question8(){
  if(date(L)==1){
      echo "Question 8: It is a leap year";
      echo "<br>";
    }
  else{
      echo "Question 8: It is not a leap year";
      echo "<br>";
    }
      
}
question1();
question2(10);
question3(72);
question4();
question5();
question6(Kayak);
question7();
question8();
?>