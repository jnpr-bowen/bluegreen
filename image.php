<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);

# Creating comment in code to force webscale to init jenkins build
//$deployment = getenv("COLOR");
$deployment = 'fubar';

if ( $deployment == 'blue') {
  $color = imagecolorallocate($im, 0, 0, 255);
} elseif ($deployment == 'green')  {
  $color = imagecolorallocate($im, 0, 255, 0);
} else {
  $color = imagecolorallocate($im, 0, 0, 255);
}

// Draw a filled rectangle
imagefilledrectangle($im, 0, 0, 199, 199, $color);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
