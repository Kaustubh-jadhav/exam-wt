<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $eno = $_POST['eno'];
  $ename = $_POST['ename'];
  $address = $_POST['address'];
  $_SESSION['eno'] = $eno;
  $_SESSION['ename'] = $ename;
  $_SESSION['address'] = $address;
  header('Location: slip4-1.php');
  exit;
}
?>
<form method="POST">
  <label>Employee Number:</label>
  <input type="text" name="eno"><br>
  <label>Employee Name:</label>
  <input type="text" name="ename"><br>
  <label>Address:</label>
  <input type="text" name="address"><br>
  <input type="submit" value="Submit">
</form>
