<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $basic = $_POST['basic'];
  $da = $_POST['da'];
  $hra = $_POST['hra'];
  $_SESSION['basic'] = $basic;
  $_SESSION['da'] = $da;
  $_SESSION['hra'] = $hra;
  header('Location: slip4-2.php');
  exit;
}
?>
<form method="POST">
  <label>Basic:</label>
  <input type="text" name="basic"><br>
  <label>DA:</label>
  <input type="text" name="da"><br>
  <label>HRA:</label>
  <input type="text" name="hra"><br>
  <input type="submit" value="Submit">
</form>
