<?php
if (isset($_GET["id"])){
    //Id wird abgerufen
    $id = $_GET["id"];

    $dir = '../media/scale/jpeg/';
    $files = scandir($dir);
    //Datei wird gelöscht
    unlink($dir . $files[$id + 1]);

    header("location: resize.php");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}