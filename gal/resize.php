<?php
//Verzeichnisse
$dir = '../media/scale/jpeg';
$dir_thumb = "../media/scale/thumbnails";
$dir_bild = "../media/scale/bilder";
//Verzeichnisse werden durchsucht
$files = scandir($dir);
$files_thumb = scandir($dir_thumb);
$files_bild = scandir($dir_bild);
$thumb_scan_dir = array_slice($files_thumb, 2);
$bild_scan_dir = array_slice($files_bild, 2);

//Inhalt von Thumbnails wird gelöscht
if (count($files_thumb) > 2){
    foreach ($thumb_scan_dir as $file_thumb){
        unlink($dir_thumb . "/" . $file_thumb);
    }
}
//Inhalt von Bilder wird gelöscht
if (count($files_bild) > 2){
    foreach ($bild_scan_dir as $file_bild){
        unlink($dir_bild . "/" . $file_bild);
    }
}

for ($i = 2; count($files) > $i; $i++){
    //Das Originale wird abgerufen
    $base = imagecreatefromjpeg($dir . "/" . $files[$i]);
    //Original wird auf 200px und 500px skaliert
    $thumb = imagescale($base, 200);
    $bild = imagescale($base, 500);

    $font = "../fonts/theboldfont.ttf";
    $hell = 255;
    $color = imagecolorallocate($bild, $hell, $hell, $hell);
    $f_name = basename($dir . "/" . $files[$i], ".jpg");
    imagettftext($bild, 15, 0, 25, 25, $color, $font, $f_name);

    //Bilder werden in Ordner getan
    imagejpeg($thumb, $dir_thumb . "/" . ($i-1) . ".jpg");
    imagejpeg($bild, $dir_bild . "/" . ($i-1) . ".jpg");
}

header("location: gallery.php");
exit();