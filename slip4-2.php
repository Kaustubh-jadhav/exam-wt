<?php
session_start();

$eno = $_SESSION['eno'];
$ename = $_SESSION['ename'];
$address = $_SESSION['address'];
$basic = $_SESSION['basic'];
$da = $_SESSION['da'];
$hra = $_SESSION['hra'];

$total = $basic + $da + $hra;

echo "<h1>Employee Information</h1>";
echo "<p>Employee Number: $eno</p>";
echo "<p>Employee Name: $ename</p>";
echo "<p>Address: $address</p>";
echo "<p>Basic: $basic</p>";
echo "<p>DA: $da</p>";
echo "<p>HRA: $hra</p>";
echo "<p>Total Earnings: $total</p>";
?>
