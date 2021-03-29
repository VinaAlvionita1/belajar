<?php

include 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('Desert.jpg');

// resize image instance
$img->resize(320, 240);

// save image in desired format
$img->save('Desert2.jpg');

?>
<img src="Desert.jpg" alt="">
<img src="Desert2.jpg" alt="">