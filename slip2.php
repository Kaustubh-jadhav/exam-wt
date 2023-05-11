<?php
if(isset($_POST['submit'])) {
   setcookie('font_style', $_POST['font_style'], time() + (86400 * 30), "/"); // cookie expires in 30 days
   setcookie('font_size', $_POST['font_size'], time() + (86400 * 30), "/");
   setcookie('font_color', $_POST['font_color'], time() + (86400 * 30), "/");
   setcookie('background_color', $_POST['background_color'], time() + (86400 * 30), "/");
   header("Location: slip2-1.php");
   exit;
}
?>
<form method="post">
   <label for="font_style">Font Style:</label>
   <select name="font_style" id="font_style">
      <option value="Arial">Arial</option>
      <option value="Helvetica">Helvetica</option>
      <option value="Times New Roman">Times New Roman</option>
   </select>
   <br>
   <label for="font_size">Font Size:</label>
   <select name="font_size" id="font_size">
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>
   </select>
   <br>
   <label for="font_color">Font Color:</label>
   <input type="color" name="font_color" id="font_color">
   <br>
   <label for="background_color">Background Color:</label>
   <input type="color" name="background_color" id="background_color">
   <br>
   <input type="submit" name="submit" value="Save Preferences">
</form>
