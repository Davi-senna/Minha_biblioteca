<?php

$image = imagecreatefromjpeg("../img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image,32,0,400,150,$titleColor,"../fonts/bevan/Bevan-Regular.ttf","Certificado");
imagestring($image,5,400,350,"Davi ferreira de sena",$titleColor);
imagestring($image,3,400,370, utf8_decode("Concluído em: ") .date("d/m/y"),$titleColor);

header("Content-type: image/jpeg");

imagejpeg($image,"../img/image-gerada-".date("Y-m-d").".jpg");

imagedestroy($image);