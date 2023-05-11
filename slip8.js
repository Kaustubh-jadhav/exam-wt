alert("Exams are near, have you started preparing for?");

var num1 = prompt("Enter first number:");
var num2 = prompt("Enter second number:");

// Convert the input to numbers
num1 = parseFloat(num1);
num2 = parseFloat(num2);

// Calculate the sum
var sum = num1 + num2;

// Display the sum in a confirm box
var message = "The sum of " + num1 + " and " + num2 + " is " + sum;
confirm(message);
