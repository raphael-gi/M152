<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

    //Ordner wird definiert und durchsucht
    $dir = "../media/playlist";
    $scan_dir = scandir($dir);
    $n_scan_dir = array_slice($scan_dir, 2);
    $the_dir = $dir . "/" . $n_scan_dir[$id];
    $scan_the_dir = scandir($the_dir);
    $n_scan_the_dir = array_slice($scan_the_dir, 2);

    //Alle Dateien werden gelöscht
    foreach ($n_scan_the_dir as $file){
        unlink($the_dir . "/" . $file);
    }
    //Der Ordner wird gelöscht
    rmdir($dir . "/" . $n_scan_dir[$id]);
    //Man wird zurück geschickt
    header("location: audio.php?s=0");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}