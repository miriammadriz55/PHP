/*
/*Required files:
• Quiz.html
• Quiz.php
Quiz.html
This HTML file will consist of the following:
• At least five questions that are multiple choice
o Each question must have four possible answers. The answers will be in the form
of radio buttons like this picture
• Below the question there will be a single submit button labeled “Submit quiz”
Quiz.php
This file will grade the quiz.
You must display the following to the user:
• All of the questions
• Their answers
• The correct answer in the form:
Question 1: What was the capital of Spain?
 You answered: Lisbon
 Correct answer: Madrid
• The total they answered correctly
• Their score in a percent (if they get all questions write they receive a 100%, if they only
get 1 right that’s a 20%, etc)
*

?>

<?php
	$q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];
  $q4 = $_POST["q4"];
  $q5 = $_POST["q5"];

  echo "Question1: What is the farthest planet from earth?";
  echo "You answered: $q1";
  echo "Correct answer: Saturn";
	echo <br>;
  echo "Question2 What is the furthest planet from the sun?";
  echo "You answered: $q2";
  echo "Correct answer: Pluto";
	echo <br>;
  echo "Question3: How many planets orbit around the sun?";
  echo "You answered: $q3";
  echo "Correct answer: 8";
	echo <br>;
  echo "Question4: Which planet is covered largely by water?";
  echo "You answered: $q4";
  echo "Correct answer: Earth";
  echo <br>;
  echo "Question5: Which is the second largest moon in our solar system?";
  echo "You answered: $q5";
  echo "Correct answer: moon of saturn";

  $percent = 100*($average/5);

	$average = 0;
	if ($q1 =="Saturn")
	{
		$average++;
	}
	if ($q2 =="Pluto")
	{
		$average++;
	}
	if ($q3 =="8")
	{
		$average++;
	}
	if ($q4 =="Earth")
	{
		$average++;
	}
	if ($q5 =="moon of saturn")
	{
		$average++;
	}

  echo <br>;
	echo "You answered $average correctly.";
	echo "Your score is $percent(percent)!";
?>
