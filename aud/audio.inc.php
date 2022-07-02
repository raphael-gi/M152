<?php
if (!isset($_GET["s"])){
    header("location: audio.php?s=0");
    exit();
}
$id = $_GET["s"];
$dir = "../media/playlist";
$scan_dir = scandir($dir);
$n_scan_dir = array_slice($scan_dir, 2);
if ($id < 0){
    header("location: audio.php?s=" . (count($n_scan_dir)-1));
    exit();
}
if ($id > (count($n_scan_dir)-1)){
    header("location: audio.php?s=0");
    exit();
}
$dir_name = $n_scan_dir[$id];

$my_dir = "../media/playlist/" . $dir_name;
$scan_my_dir = scandir($my_dir);
$n_scan_my_dir = array_slice($scan_my_dir, 2);