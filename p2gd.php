<?php
//Bilder werden abgerufen
$bild = imagecreatefromjpeg("./media/landscape.jpg");
$wg = imagecreatefrompng("./media/wgbs.png");
//WG Logo wird skaliert
$wgsize = imagescale($wg, 100);

//WG Logo wird aufs Bild gesetzt
imagecopy($bild, $wgsize, 470, 250, 0, 0, imagesx($wgsize), imagesy($wgsize));

$font = "fonts/theboldfont.ttf";
//Helligkeiten des Textes wird angegeben
$bright = 255;
$colour = imagecolorallocate($bild, $bright, $bright, $bright);

//Text wird aufs Bild gesetzt
imagettftext($bild, 100, 0, 320, 150, $colour, $font, "Kenji");
imagettftext($bild, 100, 0, 140, 470, $colour, $font, "WE GO GYM");

header("Content-Type: image/jpg");

//Speicher wird Freigegeben
imagejpeg($bild);
imagedestroy($bild);