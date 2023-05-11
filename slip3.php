<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'Admin' && $password == 'Admin') {
    $_SESSION['loggedin'] = true;
    header('Location: slip3-1.php');
    exit;
  } 
  else 
  {
    if (isset($_SESSION['login_attempts'])) {
      $_SESSION['login_attempts']++;
    } else {
      $_SESSION['login_attempts'] = 1;
    }
    if ($_SESSION['login_attempts'] >= 3) {
      echo "Maximum number of login attempts reached.";
      exit;
    } 
    else 
    {
      echo "Invalid username or password. Please try again.";
    }
  }
}
?>
<form method="POST">
  <label>Username:</label>
  <input type="text" name="username"><br>
  <label>Password:</label>
  <input type="password" name="password"><br>
  <input type="submit" value="Log In">
</form>
