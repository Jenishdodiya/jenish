<?php
// Set the content type header - in this case image/png
header('Content-Type: image/png');

// Create a 200x100 image
$im = imagecreatetruecolor(200, 100);

// Colors
$background = imagecolorallocate($im, 220, 220, 220); // Light gray
$red = imagecolorallocate($im, 255, 0, 0); // Red
$black = imagecolorallocate($im, 0, 0, 0); // Black

// Fill the background with light gray
imagefilledrectangle($im, 0, 0, 199, 99, $background);

// Draw a red rectangle
imagefilledrectangle($im, 50, 25, 150, 75, $red);

// Path to our ttf font file
$font = './arial.ttf';

// Add the text
imagettftext($im, 12, 0, 60, 50, $black, $font, 'Hello, GD Library!');

// Output the image to browser
imagepng($im);

// Free up memory
imagedestroy($im);
?>

