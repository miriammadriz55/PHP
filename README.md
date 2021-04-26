# PHP
EECS 448 - Lab09
Miriam Madriz

## Exercise 1
Create a PHP program that displays a 100x100 multiplication table. The first row and first
column should be the 1...100 and the inner parts of the table should be the multiples. Below is an
ascii approximation:
 1 2 3 4 5 ... 100
1 1 2 3 4 5
2 2 4 6 8 10
3 3 6 9 12 15
.
.
100
You need to create and populate an HTML table, not just print text values. This means adding
tags.



## Exercise 2
Required files:
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


## Exercise 3
Customer Interaction
Required files overview:
• customerFrontend.html
o The form the user interacts with to make purchase choices, give a username and
password, and choose shipping options
o You will get to decide what your store sells, but you need to sell at least three
items of different prices
o You will need to offer 3 types of shipping (radio buttons are great for this):
▪ Free 7 day
▪ $50.00 over night
▪ $5.00 three day
o Reset button
o Submit button
o HINT: to give JavasSript the ability to stop submission, use the event onsubmit
• style.css
o Styles the store file (including the backend!)
• formChecker.js
o Validates the input from the customer before submitting
o Quantities cannot be blank or negative (zero is fine)
o Username must be in the form of an email address (name@domain.com)
o password field cannot be blank
▪ We do not have a database to check against, so the password can be
anything
o They must pick a shipping option
• customerBackend.php
o Processes the purchase
o Prints a welcome message to the user and displays their password (never do this
in production! This is only practice to get used to transmitting form information)
o Prints a receipt (example)
