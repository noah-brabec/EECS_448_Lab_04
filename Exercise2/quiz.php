<?php
//access the global array called $_POST to get the values from the text fields
$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];

$score = 0;

if($answer1 == "Yes")
{
  $score++;
}
if($answer2 == "notloB")
{
  $score++;
}
if($answer3 == "Would you turn that bloody thing off")
{
  $score++;
}
if($answer4 == "Ilchester")
{
  $score++;
}
if($answer5 == "Monty Python")
{
  $score++;
}

echo "<h1>Answers</h1><br>";
echo "<h2>Is the parrot 'Pining for the fjords'?</h2><br>
You answered:". $answer1 ."<br>
Correct answer: Yes <br>";

echo "<h2>What is the palidrom of 'Bolton'?</h2><br>
You answered:". $answer2 ."<br>
Correct answer: notloB <br>";

echo "<h2>Do you enjoy the Cheese Shop's music?</h2><br>
You answered:". $answer3 ."<br>
Correct answer: Would you turn that bloody thing off <br>";

echo "<h2>Pray tell, What is the most popular cheese around these parts?</h2><br>
You answered: ". $answer4 ."<br>
Correct answer: Ilchester <br>";

echo "<h2>What do these questions reference?</h2><br>
You answered: ". $answer5 ."<br>
Correct answer: Monty Python <br>";

echo "<h3>You got a ". ($score/5)*100 ."%";
?>
