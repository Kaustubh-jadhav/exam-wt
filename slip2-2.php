<?php
$font_style = $_COOKIE['font_style'] ; // use default font style if cookie is not set
$font_size = $_COOKIE['font_size'] ; // use default font size if cookie is not set
$font_color = $_COOKIE['font_color'] ; // use default font color if cookie is not set
$background_color = $_COOKIE['background_color'] ; // use default background color if cookie is not set

echo "<style>";
echo "body {";
echo "  font-family: {$font_style};";
echo "  font-size: {$font_size};";
echo "  color: {$font_color};";
echo "  background-color: {$background_color};";
echo "}";
echo "</style>";
?>

<h1>Welcome to my web page!</h1>
<p>This is the third web page where the user's preferences are applied.</p>
<p>Here's some sample text to show the font style, font size, font color, and background color:</p>
<p style="font-style: italic;">This text should be in the selected font style (<?php echo $font_style; ?>).</p>
<p style="font-size: 1.5em;">This text should be in the selected font size (<?php echo $font_size; ?>).</p>
<p style="color: <?php echo $font_color; ?>;">This text should be in the selected font color.</p>
<p style="background-color: <?php echo $background_color; ?>;">This text should have the selected background color.</p>
